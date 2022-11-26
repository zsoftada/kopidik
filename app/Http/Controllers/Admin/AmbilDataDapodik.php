<?php

namespace App\Http\Controllers\Admin;

use App\Models\DapodikSync;
use App\Models\DataSekolah;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AmbilDataDapodik extends Component
{
    public $dapodikSync;
    public $results_counter = [];
    public $data_holder = [];
    public $current_item_data = null;
    public $semesters = null;
    public $selected_semester = null;

    protected $item_data = [
        'sekolah' => "getSekolah",
        'guru' => "getGtk",
        'siswa' => "getPesertaDidik",
        'kelas' => "getRombonganBelajar",
        'prasarana' => "getPrasarana",
    ];

    public function mount()
    {
        $this->semesters = $this->generateSemester();
        $this->dapodikSync = DapodikSync::get()->first();
    }

    public function render()
    {
        $semesters = $this->generateSemester();
        return view('admin.ambil-data-dapodik', ['semesters' => $semesters]);
    }

    public function cekData($item_data)
    {
        $this->clearState();
        if(count($this->data_holder) == 0){
            $dapo = $this->dapodikSync;
            $this->current_item_data = $item_data;
            $get_data =  Http::acceptJson()->withToken($dapo->key)->get('http://'.$dapo->ip_dapodik.':5774/WebService/'.$this->item_data[$item_data].'?npsn='.$dapo->npsn);
            $collection = json_decode($get_data);

            switch ($item_data) {
                case 'guru':
                    $this->getGuru($collection, $item_data);
                    break;
                case 'siswa':
                    $this->getSiswa($collection, $item_data);
                    break;
                case 'kelas':
                    $this->getKelas($collection, $item_data);
                    break;
                case 'prasarana':
                    $this->getPrasarana($collection, $item_data);
                    break;
                default:
                    $this->results_counter[$item_data] = $collection->results;
                    $this->data_holder = (array)$collection->rows;
                    break;
            }

        }
    }

    public function getGuru($collection, $item_data)
    {
        $this->data_holder = collect($collection->rows);
        $guru = $this->data_holder->filter(function ($item, $key){
            if((strpos($item->jenis_ptk_id_str, "Guru") !== false) || (strpos($item->jenis_ptk_id_str, "Kepala Sekolah") !== false)){
                return true;
            }
        });
        $this->data_holder = collect($guru);
        $this->results_counter[$item_data] = $guru->count();
    }

    public function getSiswa($collection, $item_data)
    {
        $this->data_holder = collect($collection->rows);
        $this->results_counter[$item_data] = $this->data_holder->count();
    }

    public function getKelas($collection, $item_data)
    {
        $this->data_holder = collect($collection->rows);
        // dd($this->data_holder->take(30));
        $this->results_counter[$item_data] = $this->data_holder->count();
    }

    public function getPrasarana($collection, $item_data)
    {
        $this->data_holder = collect($collection->rows);
        dd($this->data_holder);
        $this->results_counter[$item_data] = $this->data_holder->count();
    }

    public function import()
    {
        if(count($this->data_holder) > 0){
            switch ($this->current_item_data) {
                case 'sekolah':
                    $this->importSekolah();
                    break;
                case 'guru':
                    $this->importGuru();
                    break;
                case 'siswa':
                    $this->importSiswa();
                    break;
                case 'kelas':
                    $this->importKelas();
                    break;
                case 'prasarana':
                    $this->importPrasarana();
                    break;
                default:
                    # code...
                    break;
            }
        }
    }

    public function clearState()
    {
        $this->data_holder = [];
        $this->results_counter = [];
        $this->current_item_data = null;
    }

    protected function importSekolah(){
        $data_sekolah = $this->data_holder;
        DataSekolah::updateOrCreate(['sekolah_id' => $data_sekolah['sekolah_id']], $data_sekolah);
        $this->clearState();
    }

    public function importGuru()
    {
        $data_holder = collect($this->data_holder);
        $data_holder->each(function($item, $key){
            // dd($item);
            foreach($item['rwy_pend_formal'] as $index => $rwypend){
                $data = array_merge($item['rwy_pend_formal'][$index], ['ptk_id' => $item['ptk_id']]);
                \App\Models\RwyPendidikanFormal::updateOrCreate([
                    'riwayat_pendidikan_formal_id' => $rwypend['riwayat_pendidikan_formal_id']
                ], $data);
            }

            foreach($item['rwy_kepangkatan'] as $index => $rwypangkat){
                $data = array_merge($item['rwy_kepangkatan'][$index], ['ptk_id' => $item['ptk_id']]);
                \App\Models\RwyKepangkatan::updateOrCreate([
                    'riwayat_kepangkatan_id' => $rwypangkat['riwayat_kepangkatan_id']
                ], $data);
            }

            \App\Models\DataGuru::updateOrCreate([
                'ptk_id' => $item['ptk_id']
            ], $item);
        });

        $this->clearState();
    }

    public function importSiswa()
    {
        $data_holder = collect($this->data_holder);
        $data_holder->each(function($item, $key){
            \App\Models\DataPesertaDidik::updateOrCreate([
                'peserta_didik_id' => $item['peserta_didik_id']
            ], $item);
        });
        $this->clearState();
    }

    public function importKelas()
    {
        $innerHolder = [];
        foreach($this->data_holder as $dataHolder){
            foreach($dataHolder as $key => $inner){
                if($key == 'anggota_rombel'){
                    foreach($inner as $anggotaRombel){
                        $anggotaRombel['anggota_rombel_id'] = $dataHolder['rombongan_belajar_id'];
                        \App\Models\DataAnggotaRombel::create($anggotaRombel);
                    }
                }

                if($key == 'pembelajaran'){
                    foreach($inner as $pembelajaran){
                        \App\Models\DataPembelajaran::updateOrCreate([
                            'pembelajaran_id' => $pembelajaran['pembelajaran_id']
                        ], $pembelajaran);
                    }
                }

                if(($key != 'anggota_rombel') && ($key != 'pembelajaran')){
                    $innerHolder[$key] = $inner;
                }
            }
            \App\Models\DataKelas::updateOrCreate([
                'rombongan_belajar_id' => $innerHolder['rombongan_belajar_id']
            ], $innerHolder);
        }
        $this->clearState();
    }

    public function importPrasarana()
    {
        dd($this->data_holder);
    }

    public function generateSemester($key = null)
    {
        $currentYear = date("Y");
        $semesters = [];

        for ($i=$currentYear+1; $i >= ($currentYear - 2); $i--) {
            $semesters[$i."2"] = $i."/".($i+1)." Semester Genap";
            $semesters[$i."1"] = $i."/".($i+1)." Semester Gasal";
        }
        if($key != null){
            return $semesters[$key];
        }
        return $semesters;
    }
}
