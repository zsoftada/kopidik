<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <h4>Data Guru</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-8">
                        {{ $kata_kunci == null ? $gurus->links('livewire::bootstrap') : "" }}
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
                                <th class="text-center">Nama PTK</th>
                                <th class="text-center">NIP</th>
                                <th class="text-center">NUPTK</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Jenis PTK</th>
                                <th class="text-center">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($gurus as $index => $guru)
                                    <tr>
                                        <td class="text-center">{{ $kata_kunci == null ? ((($gurus->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                        <td>{{ $guru->nama }}</td>
                                        <td class="text-center">{{ $guru->nip }}</td>
                                        <td class="text-center">{{ $guru->nuptk }}</td>
                                        <td class="text-center">{{ $guru->jenis_kelamin }}</td>
                                        <td>{{ $guru->jenis_ptk_id_str }}</td>
                                        <td class="text-center">Aktif</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
