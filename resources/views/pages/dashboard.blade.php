@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Dashboard</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Look what you have today!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">15,209</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">1,209</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transactions</div>
                                <div class="dashboard-card-subtitle">22.209</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transactions</h5>
                        <a href="{{ route('dashboard-transactions') }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Shirup</div>
                                    <div class="col-md-3">Rama</div>
                                    <div class="col-md-3">12 Januari 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('dashboard-transactions') }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Somay</div>
                                    <div class="col-md-3">Alfin</div>
                                    <div class="col-md-3">16 Januari 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('dashboard-transactions') }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Bakso</div>
                                    <div class="col-md-3">Baehaqi</div>
                                    <div class="col-md-3">13 Januari 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
