@extends('layouts.admin')

@section('title')
    Transaction
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>Transaction</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Edit Transaction</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('transaction.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Transaction Status</label>
                                                <select name="transaction_status" class="form-control">
                                                    <option value="{{ $item->transaction_status }}">{{ $item->transaction_status }}
                                                    </option>
                                                    <option value="" disabled>-----------------</option>
                                                    <option value="PENDING">PENDING</option>
                                                    <option value="SHIPPING">SHIPPING</option>
                                                    <option value="STATUS">STATUS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Total Price</label>
                                                <input type="number" name="total_price" id="total_price" class="form-control"
                                                    value="{{ $item->total_price }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-end mt-3">
                                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                                        </div>
                                    </div>
                                </form>
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
@endpush
