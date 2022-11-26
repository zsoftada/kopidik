<?php

namespace App\Http\Controllers\Admin\Kesiswaan;

use App\Models\DataPesertaDidik;
use Livewire\Component;

class SukerPreview extends Component
{
    public $pesertadidik_id;
    public $suker_tipe;
    public $nama, $tempat_lahir, $tanggal_lahir, $nipd, $nisn;

    public function mount($pesertadidikId, $sukerTipe)
    {
        $this->pesertadidik_id = $pesertadidikId;
        $this->suker_tipe = $sukerTipe;

        $peserdik = DataPesertaDidik::where('peserta_didik_id', $this->pesertadidik_id)->get()->first();
        $this->nama = $peserdik->nama;
        $this->tempat_lahir = $peserdik->tempat_lahir;
        $this->tanggal_lahir = $peserdik->tanggal_lahir;
        $this->nipd = $peserdik->nipd;
        $this->nisn = $peserdik->nisn;
    }

    public function render()
    {
        $peserdik = DataPesertaDidik::where('peserta_didik_id', $this->pesertadidik_id)->get()->first();
        return view('admin.kesiswaan.suker-preview', ['peserdik' => $peserdik]);
    }
}
