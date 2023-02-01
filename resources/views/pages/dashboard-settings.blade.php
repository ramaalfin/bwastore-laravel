@extends('layouts.dashboard')

@section('title')
    Store Settings
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Store Settings</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Make Store that profitable</p>
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
                                                <label for="">Nama Toko</label>
                                                <input type="text" class="form-control mb-3" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="category" class="form-select">
                                                    <option value="" selected disabled>
                                                        Select Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Store Status</label>
                                                <p class="text-muted mt-2">
                                                    Apakah anda juga ingin membuka toko?
                                                </p>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="is_store_open" id="openStoreTrue"
                                                        class="custom-custom-input" value="true" />
                                                    <label for="openStoreTrue" class="custom-control-label">Buka</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="is_store_open" id="openStoreFalse"
                                                        class="custom-custom-input" value="false" />
                                                    <label for="openStoreFalse" class="custom-control-label">Sementara
                                                        Tutup</label>
                                                </div>
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
@endsection
