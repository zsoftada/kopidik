<div>
    {{-- Do your work, then step back. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <h4>Data Pembelajaran</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-8">
                        {{ $kata_kunci == null ? $pembelajaran->links('livewire::bootstrap') : "" }}
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
                                <th>Nama Mata Pelajaran</th>
                                <th>Tingkat</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Guru Mapel</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembelajaran as $key => $pembelajar)
                                <tr>
                                    <td>{{ $kata_kunci == null ? ((($pembelajaran->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                    <td>{{ $pembelajar->mata_pelajaran_id_str }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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
