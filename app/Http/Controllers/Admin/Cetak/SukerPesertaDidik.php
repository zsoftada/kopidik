<?php

namespace App\Http\Controllers\Admin\Cetak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class SukerPesertaDidik extends Controller
{
    public function cetak($pesertadidikId, $sukerTipe)
    {
        return view('admin.cetak.suker-benar2');
    }
}
