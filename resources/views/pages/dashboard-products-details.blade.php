@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Details
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
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
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Produk</label>
                                                <input type="text" class="form-control mb-3" value="Shirup" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Harga Produk</label>
                                                <input type="number" class="form-control mb-3" value="$200" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="category" class="form-select mb-3">
                                                    <option value="" selected disabled>
                                                        Select Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
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
                                    <div class="col-md-4 mb-4">
                                        <div class="gallery-container">
                                            <img src="/images/product-card-1.png" alt="" class="w-100" />
                                            <a class="delete-gallery" href="#">
                                                <img src="/images/icon-delete.svg" style="position: absolute; right: -7px"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="gallery-container">
                                            <img src="/images/product-card-1.png" alt="" class="w-100" />
                                            <a class="delete-gallery" href="#">
                                                <img src="/images/icon-delete.svg" style="position: absolute; right: -7px"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="gallery-container">
                                            <img src="/images/product-card-1.png" alt="" class="w-100" />
                                            <a class="delete-gallery" href="#">
                                                <img src="/images/icon-delete.svg" style="position: absolute; right: -7px"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="gallery-container">
                                            <img src="/images/product-card-1.png" alt="" class="w-100" />
                                            <a class="delete-gallery" href="#">
                                                <img src="/images/icon-delete.svg" style="position: absolute; right: -7px"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-grid">
                                    <input type="file" id="file" style="display: none" multiple />
                                    <button class="btn btn-secondary d-grid mt-2" onclick="thisFileUpload()">
                                        Add Photo
                                    </button>
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