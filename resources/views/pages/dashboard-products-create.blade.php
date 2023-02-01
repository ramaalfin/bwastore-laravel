@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Create
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Create Product</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>create your own product</p>
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
                                                <input type="text" class="form-control mb-3" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Harga Produk</label>
                                                <input type="number" class="form-control mb-3" />
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
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Thumbnails</label>
                                                <input type="file" class="form-control mb-3" />
                                                <p class="text-muted">
                                                    kamu dapat mmemilih dari satu file
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                                        <div class="col d-grid d-lg-block mt-3">
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
