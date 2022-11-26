<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['role:super']], function(){
    Route::get('dashboard', App\Http\Controllers\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('dapodiksync', App\Http\Controllers\Admin\DapodikSync::class)->name('admin.dapodiksync');
    Route::get('ambildata', App\Http\Controllers\Admin\AmbilDataDapodik::class)->name('admin.ambildata');
    //Master
    Route::get('master-sekolah', App\Http\Controllers\Admin\Master\DataSekolah::class)->name('admin.master.sekolah');
    Route::get('master-prasarana', App\Http\Controllers\Admin\Master\DataPrasarana::class)->name('admin.master.prasarana');
    Route::get('master-guru', App\Http\Controllers\Admin\Master\DataGuru::class)->name('admin.master.guru');
    Route::get('master-peserta-didik', App\Http\Controllers\Admin\Master\DataPesertaDidik::class)->name('admin.master.pesertadidik');
    Route::get('master-kelas', App\Http\Controllers\Admin\Master\DataKelas::class)->name('admin.master.kelas');
    Route::get('master-mapel', App\Http\Controllers\Admin\Master\DataMapel::class)->name('admin.master.mapel');
    Route::get('master-pembelajaran', App\Http\Controllers\Admin\Master\DataPembelajaran::class)->name('admin.master.pembelajaran');
    //Kesiswaan
    Route::get('kesiswaan-daftar-nama', App\Http\Controllers\Admin\Kesiswaan\DaftarNama::class)->name('admin.kesiswaan.daftarnama');
    Route::get('kesiswaan-cetak-daftar-nama/{rombelId}', [App\Http\Controllers\Admin\Cetak\DaftarNamaPesertaDidik::class, 'cetak'])->name('admin.kesiswaan.cetakdaftarnama');
    Route::get('kesiswaan-suker', App\Http\Controllers\Admin\Kesiswaan\SukerPesertaDidik::class)->name('admin.kesiswaan.suker');
    Route::get('kesiswaan-suker-preview/{pesertadidikId}/{sukerTipe}', App\Http\Controllers\Admin\Kesiswaan\SukerPreview::class)->name('admin.kesiswaan.sukerpreview');
    Route::get('kesiswaan-suker-cetak/{pesertadidikId}/{sukerTipe}', [App\Http\Controllers\Admin\Cetak\SukerPesertaDidik::class, 'cetak'])->name('admin.kesiswaan.sukercetak');
    //Setting
    Route::get('backup-restore', App\Http\Controllers\Admin\BackupRestore::class)->name('admin.backup-restore');
});
