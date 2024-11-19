@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-5 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Guru <span></span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{$gcount}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-5 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Ekstrakurikuler</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-walking"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{$ecount}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Kerjasama Mitra</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-buildings-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{$mcount}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Grafik Prestasi</h5>
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div><!-- End Reports -->

        </div>
    </section>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}

</main><!-- End #main -->