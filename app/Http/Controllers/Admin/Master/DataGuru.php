<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\DataGuru as ModelsDataGuru;
use Livewire\Component;
use Livewire\WithPagination;
use PDO;

class DataGuru extends Component
{
    use WithPagination;

    public $kata_kunci = null;
    public $perpage = 10;

    public function render()
    {
        $kataKunci = "%".$this->kata_kunci."%";
        $gurus = ModelsDataGuru::where('nama', 'LIKE', $kataKunci)
        ->orWhere('nip', 'LIKE', $kataKunci)
        ->orWhere('nik', 'LIKE', $kataKunci);
        if($this->kata_kunci != null){
            $gurus = $gurus->get();
        }else{
            $gurus = $gurus->paginate($this->perpage);
        }
        return view('admin.master.data-guru', ['gurus' => $gurus]);
    }
}
