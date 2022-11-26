<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\DataKelas as ModelsDataKelas;
use Livewire\Component;
use Livewire\WithPagination;

class DataKelas extends Component
{
    use WithPagination;

    public $kata_kunci = null;
    public $perpage = 10;

    public function render()
    {
        $kataKunci = "%".$this->kata_kunci."%";
        $kelases = ModelsDataKelas::where(function($query) {
            $query->where('jenis_rombel_str', 'Kelas');
        })->where(function($query) use ($kataKunci){
            $query->where('nama', 'LIKE', $kataKunci)->orWhere('jurusan_id_str', 'LIKE', $kataKunci)
            ->orWhere('ptk_id_str', 'LIKE', $kataKunci);
        })->orderBy('nama', 'ASC');
        if($this->kata_kunci != null){
            $kelases = $kelases->get();
        }else{
            $kelases = $kelases->paginate($this->perpage);
        }
        return view('admin.master.data-kelas', ['kelases' => $kelases]);
    }
}
