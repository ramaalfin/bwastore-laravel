@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Details
@endsection

@section('content')
    <div class="section-content section-dashboard-home col-lg-12" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Shirup</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Product Details</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('dashboard-product-update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Produk</label>
                                                <input type="text" class="form-control mb-3" value="{{ $product->name }}" name="name"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Harga Produk</label>
                                                <input type="number" class="form-control mb-3" name="price" value="{{ $product->price }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="categories_id" class="form-control mb-3">
                                                    <option value="{{ $product->categories_id }}">{{ $product->category->name }}</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="description" id="editor" cols="30" rows="10">{!! $product->description !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                                        <div class="col mt-3 d-grid">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($product->galleries as $gallery)                                    
                                    <div class="col-md-4 mb-4">
                                        <div class="gallery-container">
                                            <img src="{{ Storage::url($gallery->photos ?? '') }}" alt="" class="w-100" />
                                            <a class="delete-gallery" href="{{ route('dashboard-product-gallery-delete', $gallery->id) }}">
                                                <img src="/images/icon-delete.svg" style="position: absolute; right: -7px"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-12 d-grid">
                                    <form action="{{ route('dashboard-product-gallery-upload') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="products_id" value="{{ $product->id }}">
                                        <input type="file" id="file" name="photos" style="display: none" onchange="form.submit()"/>
                                        <button type="button" class="btn btn-secondary col-12 mt-2" onclick="thisFileUpload()">
                                            Add Photo
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector('#editor'))
        .then((editor) => {
          console.log(editor);
        })
        .catch((error) => {
          console.error(error);
        });
    </script>
    <script>
      function thisFileUpload() {
        document.getElementById('file').click();
      }
    </script>
@endpush