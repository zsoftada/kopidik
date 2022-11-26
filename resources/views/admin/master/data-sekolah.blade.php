<div>
    {{-- The whole world belongs to you. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <h4>Identitas Sekolah</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-responsive" width="500px">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->nama ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenjang</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->bentuk_pendidikan_id_str ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>NSS</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->nss ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>NPSN</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->npsn ?? "-" }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h4>Alamat Sekolah</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-responsive" width="500px">
                                <tbody>
                                    <tr>
                                        <th>Jalan</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->alamat_jalan ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Desa/Kelurahan</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->desa_kelurahan ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->kecamatan ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kabupaten</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->kabupaten_kota ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Provinsi</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->provinsi ?? "-" }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kode POS</th>
                                        <td>:</td>
                                        <td>{{ $data_sekolah->kode_pos ?? "-" }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <h4>Kontak</h4>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Telp/Fax</th>
                                    <td>:</td>
                                    <td>{{ $data_sekolah->nomor_telepon ?? "-" }}/{{ $data_sekolah->nomor_fax ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td>{{ $data_sekolah->email ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>:</td>
                                    <td>{{ $data_sekolah->website ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Kepala Sekolah</th>
                                    <td>:</td>
                                    <td>??</td>
                                </tr>
                                <tr>
                                    <th>NIP Kepala Sekolah</th>
                                    <td>:</td>
                                    <td>??</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
