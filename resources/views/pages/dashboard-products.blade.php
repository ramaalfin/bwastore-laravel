@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>My Products</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Manage it well and get way</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('dashboard-product-create') }}" class="btn btn-success">Add new product</a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-detail.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-1.png" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">Shirup</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-detail.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-2.png" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">Shirup</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-detail.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-3.png" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">Shirup</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-detail.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-4.png" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">Shirup</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="/dashboard-products-detail.html" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/product-card-5.png" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">Shirup</div>
                                <div class="product-category">Foods</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
