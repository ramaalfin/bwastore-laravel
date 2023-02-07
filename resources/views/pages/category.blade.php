@extends('layouts.app')

@section('title')
Store Category Page
@endsection

@section('content')
<div class="page-content page-home">
  <!-- TREND CATEGORIES -->
  <section class="store-trend-categories mt-4">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>All Categories</h5>
        </div>
      </div>
      <div class="row">
        @forelse ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                    <div class="categories-image">
                        <img src="{{ Storage::url($category->photo) }}" alt="categories image" class="w-100" />
                        {{-- @php
                          $image = $category->photo ? $category->photo : '';
                        @endphp
                        <img src="{{ asset($image) }}" alt="image product" class="w-100 mb-2" /> --}}
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
  <section class="store-new-products mt-4">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>All Products</h5>
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
      <div class="row">
        <div class="col-12 mt-4 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection