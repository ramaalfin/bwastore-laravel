@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Transactions</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Big Result start from the small one</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12 mt-2">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    Sell Product
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    Buy Product
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <a href="/dashboard-transactions.html" class="card card-list d-block">
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
                                <a href="/dashboard-transactions.html" class="card card-list d-block">
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
                                <a href="/dashboard-transactions.html" class="card card-list d-block">
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
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <a href="/dashboard-transactions.html" class="card card-list d-block">
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
                                <a href="/dashboard-transactions.html" class="card card-list d-block">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
