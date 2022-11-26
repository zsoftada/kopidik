<div>
    {{-- Be like water. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <h3>Surat Keterangan Peserta Didik di Sekolah</h3>
                    <a href="{{ route('admin.kesiswaan.suker') }}" type="button" class="btn btn-dark">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                </div>
                <table class="table table-bordered mt-3">
                        <tbody>
                            <tr>
                                <th class="bg-dark">
                                    <label for="nama">Nama</label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" wire:model="nama" aria-describedby="nama" placeholder="Nama">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-dark">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" wire:model="tempat_lahir" aria-describedby="tempat_lahir" placeholder="Tempat Lahir">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-dark">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" wire:model="tanggal_lahir" aria-describedby="tanggal_lahir" placeholder="Tanggal Lahir">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-dark">
                                    <label for="nis">NIS</label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" readonly class="form-control" wire:model="nipd" aria-describedby="nis" placeholder="NIS">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-dark">
                                    <label for="nisn">NISN</label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" readonly class="form-control" wire:model="nisn" aria-describedby="nisn" placeholder="NISN">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                </table>
                <div class="row d-flex justify-content-end mt-3 mr-3">
                    <a href="/admin/kesiswaan-suker-cetak/{{ $pesertadidik_id }}/benar2" target="_blank" type="button" class="btn btn-info">
                        <i class="fa fa-print"></i>&NonBreakingSpace;
                        Cetak
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
