@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
        <!-- CAROUSEL -->
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-aos="zoom-in" data-aos-delay="100">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/banner.jpg" class="d-block w-100" alt="carousel image" />
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner.jpg" class="d-block w-100" alt="carousel image" />
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner.jpg" class="d-block w-100" alt="carousel image" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- TREND CATEGORIES -->
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-lg-4 mt-lg-4" data-aos="fade-up">
                        <h5>Trend Categories</h5>
                    </div>
                </div>
                <div class="row">
                    @forelse ($categories as $category)
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                                <div class="categories-image">
                                    <img src="{{ Storage::url($category->photo) }}" alt="categories image" class="w-100" />
                                </div>
                                <p class="categories-text">{{ $category->name }}</p>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">Tidak ada kategori</div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-lg-4" data-aos="fade-up">
                        <h5>New Products</h5>
                    </div>
                </div>
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3 mb-3 aos-init" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="
                                        @if($product->galleries->count())
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                                        @else
                                            background-color: #eee;
                                        @endif
                                    ">
                                    </div>
                                </div>
                                <div class="product-text">{{ $product->name }}</div>
                                <div class="product-prize">Rp {{ $product->price }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">Tidak ada produk</div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection
