<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\DataPesertaDidik as ModelsDataPesertaDidik;
use Livewire\Component;
use Livewire\WithPagination;

class DataPesertaDidik extends Component
{
    use WithPagination;

    public $kata_kunci = null;
    public $perpage = 10;

    public function render()
    {
        $kataKunci = "%".$this->kata_kunci."%";
        $siswas = ModelsDataPesertaDidik::where('nama', 'LIKE', $kataKunci)
        ->orWhere('nipd', 'LIKE', $kataKunci)
        ->orWhere('nik', 'LIKE', $kataKunci);
        if($this->kata_kunci != null){
            $siswas = $siswas->get();
        }else{
            $siswas = $siswas->paginate($this->perpage);
        }
        return view('admin.master.data-peserta-didik', ['siswas' => $siswas]);
    }
}
