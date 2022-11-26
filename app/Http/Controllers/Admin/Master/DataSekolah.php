<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\DataSekolah as ModelsDataSekolah;
use Livewire\Component;

class DataSekolah extends Component
{
    public function render()
    {
        $data_sekolah = ModelsDataSekolah::all();
        return view('admin.master.data-sekolah', ['data_sekolah' => $data_sekolah[0]]);
    }
}
