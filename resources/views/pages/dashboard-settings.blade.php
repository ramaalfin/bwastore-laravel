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
                        <form action="{{ route('dashboard-settings-redirect', 'dashboard-settings-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Toko</label>
                                                <input type="text" class="form-control mb-3" name="store_name" value="{{ $user->store_name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="categories_id" class="form-control mb-3">
                                                    <option value="{{ $user->categories_id }}">Tidak diganti</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
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
                                                    <input type="radio" name="store_status" id="openStoreTrue"
                                                        class="custom-custom-input" value="1" {{ $user->store_status == 1 ? 'checked' : '' }}/>
                                                    <label for="openStoreTrue" class="custom-control-label">Buka</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="store_status" id="openStoreFalse"
                                                        class="custom-custom-input" value="0" {{ $user->store_status == 0 || $user->store_status == NULL ? 'checked' : '' }}/>
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
