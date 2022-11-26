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
                        <tr>
                            <th>No</th>
                            <th>Kurikulum</th>
                            <th>Nama Kelas</th>
                            <th>Tingkat</th>
                            <th>Jurusan</th>
                            <th>Wali Kelas</th>
                            <th>Jml Siswa</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelases as $index => $kelas)
                            <tr>
                                <td>{{ $kata_kunci == null ? ((($kelases->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                <td>{{ $kelas->kurikulum_id_str }}</td>
                                <td>{{ $kelas->nama }}</td>
                                <td>{{ $kelas->tingkat_pendidikan_id_str }}</td>
                                <td>{{ $kelas->jurusan_id_str }}</td>
                                <td>{{ $kelas->ptk_id_str }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
