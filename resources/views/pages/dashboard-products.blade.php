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
                    @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('dashboard-product-details', $product->id) }}" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="{{ Storage::url($product->galleries->first()->photos ?? '') }}" alt="image product" class="w-100 mb-2" />
                                <div class="product-title">{{ $product->name }}</div>
                                <div class="product-category">{{ $product->category->name }}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
