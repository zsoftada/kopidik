<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <h4>Data Kelas</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-8">
                        {{ $kata_kunci == null ? $kelases->links('livewire::bootstrap') : "" }}
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" wire:model="kata_kunci" aria-describedby="helpId" placeholder="Pencarian">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-bordered">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Kurikulum</th>
                            <th class="text-center">Wali Kelas</th>
                            <th class="text-center">Jml Siswa</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelases as $index => $kelas)
                            <tr>
                                <td class="text-center">{{ $kata_kunci == null ? ((($kelases->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                <td class="text-center">{{ $kelas->nama }}</td>
                                <td class="text-center">{{ $kelas->tingkat_pendidikan_id_str }}</td>
                                <td class="text-center">{{ $kelas->jurusan_id_str }}</td>
                                <td>{{ $kelas->kurikulum_id_str }}</td>
                                <td>{{ $kelas->ptk_id_str }}</td>
                                <td class="text-center font-weight-bold" style="cursor: pointer;" wire:click="openListSiswa('{{ $kelas->rombongan_belajar_id }}', '{{ $kelas->nama }}')">
                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="fa fa-print"></i>&nbsp;
                                        {{ $kelas->anggota_rombel->count() }}
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modal-list-siswa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Nama Siswa Kelas {{ $kelas_selected }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end mb-2">
                            <a href="kesiswaan-cetak-daftar-nama/{{ $rombel_id_selected }}" target="print_frame" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i>
                                Unduh
                            </a>
                        </div>
                    </div>
                    <table class="table table-striped table-condensed table-bordered">
                        <thead>
                            <tr class="bg-dark">
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Urut</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php ($urut_kosong = true)
                                @forelse ($list_nama as $key => $listNama)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $listNama['nama'] }}</td>
                                        <td class="text-center">{{ $listNama['nipd'] }}</td>
                                        <td class="text-center">{{ $listNama['nisn'] }}</td>
                                        <td class="text-center">{{ $listNama['jenis_kelamin'] }}</td>
                                        <td>
                                            @if ($listNama['urut'] == null)
                                                @php ($error_message = "Nomor urut belum tersimpan !")
                                                <input type="number" style="direction: rtl;width:5em;background-color:pink;" wire:model="urut.{{ $key }}" size="1" class="form-control input-sm" name="" id="" aria-describedby="helpId" placeholder="">
                                            @else
                                                @php ($urut_kosong = false)
                                                <input type="number" style="direction: rtl;width:5em;" wire:model="urut.{{ $listNama['urut'] - 1 }}" size="1" class="form-control input-sm" name="" id="" aria-describedby="helpId" placeholder="">
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                    </table>
                    @if ($error_message)
                    <div class="alert alert-danger" role="alert">
                        {{$error_message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if ($success_message)
                    <div class="alert alert-success" role="alert">
                        {{$success_message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="modal-footer row">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="loader-static" wire:loading wire:target="simpanUrut" >
                            <div class="inner one"></div>
                            <div class="inner two"></div>
                            <div class="inner three"></div>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex justify-content-end">
                        {{-- <div class="justify-item"></div> --}}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-primary" wire:click="simpanUrut">Simpan Urut</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @section('scripts')
    <script>
        window.addEventListener('openModalListSiswa', data => {
            $("#modal-list-siswa").modal({show:true});
        });
    </script>
    @endsection
</div>
