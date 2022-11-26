<div>
    {{-- The whole world belongs to you. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <h4>Data Siswa</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-8">
                        {{ $kata_kunci == null ? $siswas->links('livewire::bootstrap') : "" }}
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
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Tingkat</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td class="text-center">{{ $kata_kunci == null ? ((($siswas->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td class="text-center">{{ $siswa->nipd }}</td>
                                    <td class="text-center">{{ $siswa->nisn }}</td>
                                    <td class="text-center">{{ $siswa->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $siswa->tingkat_pendidikan_id }}</td>
                                    <td class="text-center">{{ $siswa->nama_rombel }}</td>
                                    <td class="text-center"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
