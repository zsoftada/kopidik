<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">

                    <h4>Surat Keterangan</h4>
                    <hr>
                    <div class="form-group">
                        <label for="">Jenis Surat Keterangan</label>
                        <select class="form-control" name="" id="">
                            <option>Surat Keterangan Benar-benar Siswa</option>
                        </select>
                    </div>
                    <div class="image-responsive">
                        <form wire:submit.prevent="saveKop">
                            <button type="submit" name="" id="" class="btn btn-success btn-sm">Simpan KOP</button>
                            <input type="file" wire:model="kop">

                            @if ($status_simpan == true)
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                KOP Tersimpan
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @error('kop')
                                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @else
                                @if ($kop)
                                    <hr>
                                    Kop Preview:
                                    <img src="{{ $kop->temporaryUrl() }}"><hr>
                                @endif
                            @enderror
                            @if (glob(public_path('storage/images/kop-sekolah/kop.*')))
                                <img src="/storage/images/kop-sekolah/kop.png">
                            @endif
                        </form>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-between">
                        <div class="form-group mr-3 ml-3">
                        <label for="">Pencarian</label>
                        <input type="text" class="form-control" wire:model="kata_kunci" aria-describedby="helpId" placeholder="Nama/NIS/NISN">
                        </div>
                        <div class="form-group mt-4 pt-1 mr-3">
                            {{ $kata_kunci == null ? $pds->links('livewire::bootstrap') : "" }}
                        </div>
                    </div>
                    <table class="table table-striped table-condensed table-bordered">
                            <thead class="thead-default">
                                <tr class="bg-dark">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">NISN</th>
                                    <th class="text-center">JK</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Pratinjau</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pds as $key => $pd)
                                <tr>
                                    <td class="text-center">{{ $kata_kunci == null ? ((($pds->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                    <td>{{ $pd->nama }}</td>
                                    <td class="text-center">{{ $pd->nipd }}</td>
                                    <td class="text-center">{{ $pd->nisn }}</td>
                                    <td class="text-center">{{ $pd->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $pd->nama_rombel }}</td>
                                    <td class="text-center">
                                        <a type="button" href="{{ route('admin.kesiswaan.sukerpreview', [
                                            'pesertadidikId' => $pd->peserta_didik_id,
                                            'sukerTipe' => "sukerBenar2"
                                        ]) }}" class="btn btn-info btn-sm btn-block">Preview</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
