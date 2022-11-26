<?php

namespace App\Http\Controllers\Admin\Kesiswaan;

use App\Models\DataPesertaDidik;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SukerPesertaDidik extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $kop;
    public $kata_kunci;
    public $perpage = 10;
    public $preview_mode = false;
    public $status_simpan = false;

    public $listeners = ['previewShow'];

    public function render()
    {
        $pds = DataPesertaDidik::where(function($query){
            $query->where('nama', 'LIKE', "%".$this->kata_kunci."%")
            ->orWhere('nipd', 'LIKE', "%".$this->kata_kunci."%")
            ->orWhere('nisn', 'LIKE', "%".$this->kata_kunci."%");
        })->paginate($this->perpage);
        return view('admin.kesiswaan.suker-peserta-didik', ['pds' => $pds]);
    }

    public function previewShow()
    {
        $this->preview_mode = true;
    }

    public function updatedKop()
    {
        $this->validate([
            'kop' => 'image|max:2048|dimensions:width=716,height=172'
        ]);
    }

    public function saveKop()
    {
        if($this->kop){
            $this->kop->storeAs('public/images/kop-sekolah/', 'kop.'.$this->kop->extension());
            $this->status_simpan = true;
        }
    }
}
