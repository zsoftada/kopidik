<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pt-3">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">*</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">IP E-Rapor</th>
                                <th class="text-center">IP Dapodik</th>
                                <th class="text-center">Key/Kunci</th>
                                <th class="text-center">NPSN Sekolah</th>
                                <th class="text-center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daposync as $dps)
                            <tr>
                                <td class="text-center">#</td>
                                <td>{{ $dps->name }}</td>
                                <td class="text-center">{{ $dps->ip_erapor }}</td>
                                <td class="text-center">{{ $dps->ip_dapodik }}</td>
                                <td class="text-center">{{ $dps->key }}</td>
                                <td class="text-center">{{ $dps->npsn }}</td>
                                <td class="text-center">
                                    <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block" data-toggle="modal" data-target="#modal-edit-daposync">Edit</button>
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
    <div class="modal fade" wire:ignore.self id="modal-edit-daposync" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form autocomplete="off" wire:submit.prevent="saveKoneksiDapodik">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Sinkronisasi Dapodik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" wire:model="daposyncid">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="name" id="nama" wire:model.lazy="name">
                    </div>
                    <div class="form-group">
                        <label for="ip_erapor">IP E-Rapor</label>
                        <input type="text" class="form-control" name="ip_erapor" id="ip_erapor" wire:model.lazy="ip_erapor" aria-describedby="ip_erapor" placeholder="IP E-Rapor">
                    </div>
                    <div class="form-group">
                        <label for="ip_dapodik">IP Dapodik</label>
                        <input type="text" class="form-control" name="ip_dapodik" id="ip_dapodik" wire:model.lazy="ip_dapodik" aria-describedby="ip_dapodik" placeholder="IP Dapodik">
                    </div>
                    <div class="form-group">
                        <label for="key">Key/Kunci</label>
                        <input type="text" class="form-control" name="key" id="key" aria-describedby="key" wire:model.lazy="key" placeholder="Key/Kunci">
                    </div>
                    <div class="form-group">
                        <label for="nspn">NPSN Sekolah</label>
                        <input type="text" class="form-control" name="nspn" id="nspn" aria-describedby="nspn" wire:model.lazy="npsn" placeholder="NPSN Sekolah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        window.addEventListener('hide-form', event => {
            $("#modal-edit-daposync").modal('hide');
        });
    </script>
    @endsection
</div>
