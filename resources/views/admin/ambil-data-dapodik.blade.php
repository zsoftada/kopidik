<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="pt-3">
        <div class="card ml-3 mr-3 mb-3">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-md-5 p-0 m-0">
                        <div class="form-group">
                            <select class="form-control w-75" wire:model="selected_semester">
                                <option>-- Pilih Semester --</option>
                                @foreach ($semesters as $key => $semester)
                                    <option value="{{ $key }}">{{ $semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7 m-0 p-0">
                       {!! $selected_semester != null ? "Unduh Data Dapodik untuk tahun pelajaran <br/><b>".$this->generateSemester($selected_semester)."</b>" : "" !!}
                    </div>
                </div>

            </div>
        </div>
        <div class="card {{ isset($results_counter['sekolah']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Sekolah</h4>
                        <p class="card-text">{{ $results_counter['sekolah'] ?? "0" }}{{ isset($results_counter['sekolah']) ? " data sekolah..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('sekolah')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['guru']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Guru</h4>
                        <p class="card-text">{{ $results_counter['guru'] ?? "0" }}{{ isset($results_counter['guru']) ? " data guru..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('guru')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['siswa']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Siswa</h4>
                        <p class="card-text">{{ $results_counter['siswa'] ?? "0" }}{{ isset($results_counter['siswa']) ? " data siswa..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('siswa')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['kelas']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Rombongan Belajar</h4>
                        <p class="card-text">{{ $results_counter['kelas'] ?? "0" }}{{ isset($results_counter['kelas']) ? " data kelas..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('kelas')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['prasarana']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Prasarana</h4>
                        <p class="card-text">{{ $results_counter['prasarana'] ?? "0" }}{{ isset($results_counter['prasarana']) ? " data prasarana..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('prasarana')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loader" wire:loading wire:target="cekData">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    </div>
    <div class="loader" wire:loading wire:target="import">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    </div>
</div>
