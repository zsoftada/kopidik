<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\DataPembelajaran as ModelsDataPembelajaran;
use Livewire\Component;
use Livewire\WithPagination;

class DataPembelajaran extends Component
{
    use WithPagination;

    public $kata_kunci = null;
    public $perpage = 10;

    public function render()
    {
        $kataKunci = "%".$this->kata_kunci."%";
        $pembelajaran = ModelsDataPembelajaran::where('mata_pelajaran_id_str', 'LIKE', $kataKunci);
        // ->orWhere('nipd', 'LIKE', $kataKunci)
        // ->orWhere('nik', 'LIKE', $kataKunci);
        if($this->kata_kunci != null){
            $pembelajaran = $pembelajaran->get();
        }else{
            $pembelajaran = $pembelajaran->paginate($this->perpage);
        }
        return view('admin.master.data-pembelajaran', ['pembelajaran' => $pembelajaran]);
    }
}
