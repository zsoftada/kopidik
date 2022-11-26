<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataGuru;
use App\Models\DataKelas;
use App\Models\DataPesertaDidik;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $serdik['jum_serdik'] = $this->counterSerDik();
        $serdik['jum_guru'] = $this->counterGuru();
        $serdik['jum_kelas'] = $this->counterKelas();
        return view('admin.dashboard', $serdik);
    }

    public function counterSerDik()
    {
        return DataPesertaDidik::get()->count();
    }

    public function counterGuru()
    {
        return DataGuru::get()->count();
    }

    public function counterKelas()
    {
        return DataKelas::where('jenis_rombel_str', 'Kelas')->count();
    }
}
