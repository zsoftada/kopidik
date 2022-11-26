<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <section class="content">
    <div class="container-fluid mt-4 p-3">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <h3>KOPIDIK</h3>
            <p class="card-text">Salinan Data DAPODIK</p>
          </div>
        </div>
        <div class="card p-2">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="row d-flex justify-content-between p-3">
                            <div>
                                <h3>{{ $jum_serdik }}</h3>
                                <p>Peserta Didik</p>
                            </div>
                            <div>
                                <i class="fa fa-4x fa-users"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="row d-flex justify-content-between p-3">
                            <div>
                                <h3>{{ $jum_guru }}</h3>
                                <p>Guru</p>
                            </div>
                            <div>
                                <i class="fa fa-4x fa-users"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="row d-flex justify-content-between p-3">
                            <div>
                                <h3>{{ $jum_kelas }}</h3>
                                <p>Kelas</p>
                            </div>
                            <div>
                                <i class="fa fa-4x fa-home"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-default">
                        <div class="row d-flex justify-content-between p-3">
                            <div>
                                <h3>0</h3>
                                <p>Underconstruction</p>
                            </div>
                            <div>
                                <i class="fa fa-4x fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-2">
            <div class="row">
                <a class="col-12 col-sm-6 col-md-3" href="{{ route('admin.kesiswaan.daftarnama') }}">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text font-weight-bold">Daftar Nama</span>
                            <span class="info-box-text">Cetak Daftar Nama</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    </section>
</div>
