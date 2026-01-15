@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header shadow-sm">
                <h1>Dashboard Overview</h1>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-primary shadow-primary">
                            <i class="fas fa-newspaper text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Berita</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Post::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-danger shadow-danger">
                            <i class="fas fa-calendar-alt text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Agenda</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Event::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-warning shadow-warning">
                            <i class="fas fa-tags text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Tags</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Tag::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-success shadow-success">
                            <i class="fas fa-graduation-cap text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Jurusan</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Major::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-info shadow-info">
                            <i class="fas fa-camera text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Photo</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Photo::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-dark shadow-dark" style="background-color: #34395e !important;">
                            <i class="fas fa-play-circle text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Video</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Video::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-secondary shadow-secondary">
                            <i class="fas fa-images text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Slider</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Slider::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm border-0">
                        <div class="card-icon bg-light shadow-light">
                            <i class="fas fa-user-shield text-primary fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="text-uppercase font-weight-bold">Users</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\User::count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
    </div>
@endsection  