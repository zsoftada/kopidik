<?php

namespace App\Http\Controllers\Admin\Cetak;

use App\Http\Controllers\Controller;
use App\Models\DataAnggotaRombel;
use App\Models\DataPesertaDidik;
use Illuminate\Http\Request;
use PDF;

class DaftarNamaPesertaDidik extends Controller
{
    public function cetak($rombelId)
    {
        $list_nama = DataAnggotaRombel::where('erp_anggota_rombel.anggota_rombel_id', $rombelId)
        ->join('erp_data_peserta_didik', 'erp_anggota_rombel.peserta_didik_id', '=', 'erp_data_peserta_didik.peserta_didik_id')
        ->select(['nama', 'nipd', 'nisn', 'jenis_kelamin', 'urut', 'erp_data_peserta_didik.rombongan_belajar_id', 'erp_data_peserta_didik.peserta_didik_id'])
        ->orderBy('urut', 'ASC')->get();
        // $list_nama = DataPesertaDidik::where('rombongan_belajar_id', $rombelId)->get();

        // dd($list_nama);
        $pdf = PDF::loadView('admin.cetak.daftar-nama-pd', array('listNama' => $list_nama))->setPaper('folio', 'portrait');
        $pdf->set_base_path(base_path());
        return $pdf->stream('xx.pdf');
        // $pdf->save(storage_path().'/dd.pdf');
        // return view('admin.cetak.daftar-nama-pd', ['listNama' => $list_nama]);
    }
}
