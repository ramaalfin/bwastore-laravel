@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions Details
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" data-aos-delay="100">
        <div class="container-fluid">
            <div class="dashboard-title">
                <h2>#STORE123</h2>
            </div>
            <div class="dashboard-subtitle">
                <p>Transactions details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="/images/product-details-dashboard.png" alt=""
                                            class="w-100 mb-3" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Customer Name</div>
                                                <div class="product-subtitle">Rama</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Product Name</div>
                                                <div class="product-subtitle">Rama</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Date of Transaction
                                                </div>
                                                <div class="product-subtitle">
                                                    9 januari 2023
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Payment Status</div>
                                                <div class="product-subtitle text-danger">Pending</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Total Amount</div>
                                                <div class="product-subtitle">$280, 95</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Mobile</div>
                                                <div class="product-subtitle">
                                                    +628 5246 8733 58
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Shipping Information</h5>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Address 1</div>
                                                    <div class="product-subtitle">
                                                        Ciluar Asri
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Address 2</div>
                                                    <div class="product-subtitle">
                                                        Jalan Parkit II
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Province</div>
                                                    <div class="product-subtitle">West Java</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">City</div>
                                                    <div class="product-subtitle">Bogor</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Postal Code</div>
                                                    <div class="product-subtitle">16156</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Country</div>
                                                    <div class="product-subtitle">Indonesia</div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">shipping Status</div>
                                                    <select name="status" id="status" class="form-control"
                                                        v-model="status">
                                                        <option value="PENDING">Pending</option>
                                                        <option value="SHIPPING">Shipping</option>
                                                        <option value="SUCCESS">Success</option>
                                                    </select>
                                                </div>
                                                <template v-if="status == 'SHIPPING'">
                                                    <div class="col-md-3">
                                                        <div class="product-title">Input Resi</div>
                                                        <input type="text" class="form-control" name="resi"
                                                            v-model="resi" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-success btn-block mt-4">
                                                            Update Resi
                                                        </button>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-success btn-lg mt-4">
                                            Save now
                                        </button>
                                    </div>
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
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var transactionDetails = new Vue({
            el: '#transactionDetails',
            data: {
                status: 'SHIPPING',
                resi: 'BDO12309012023',
            },
        });
    </script>
@endpush
