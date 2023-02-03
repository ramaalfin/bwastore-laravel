@extends('layouts.dashboard')

@section('title')
    Account Settings
@endsection

@section('content')
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    data-aos-delay="100"
  >
    <div class="container-fluid">
      <div class="dashboard-title">
        <h2>My Account</h2>
      </div>
      <div class="dashboard-subtitle">
        <p>Update your current profile</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="{{ route('dashboard-settings-redirect', 'dashboard-settings-account') }}" method="post" enctype="multipart/form-data" id="locations">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div
                    class="row"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input
                          type="text"
                          name="name"
                          id="name"
                          class="form-control"
                          value="{{ $user->name }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          class="form-control"
                          value="{{ $user->email }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="addressOne">Address 1</label>
                        <input
                          type="text"
                          name="addressOne"
                          id="addressOne"
                          class="form-control"
                          value="{{ $user->address_one }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="addressTwo">Address 2</label>
                        <input
                          type="text"
                          name="addressTwo"
                          id="addressTwo"
                          class="form-control"
                          value="{{ $user->address_two }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group">
                          <label for="province_id">Province</label>
                          <select name="province_id" id="province_id" class="form-control" v-if="provinces" v-model="province_id">
                              <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                          </select>
                          <select v-else class="form-control"></select>
                      </div>
                  </div>
                  <div class="col-md-4 mb-4">
                      <div class="form-group">
                          <label for="regencies_id">City</label>
                          <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id">
                              <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                          </select>
                      </div>
                  </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                          type="text"
                          name="postalCode"
                          id="postalCode"
                          class="form-control"
                          value="{{ $user->zip_code }}"
                        />
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input
                          type="text"
                          name="country"
                          id="country"
                          class="form-control"
                          value="{{ $user->country }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input
                          type="text"
                          name="phone_number"
                          id="phone_number"
                          class="form-control"
                          value="{{ $user->phone_number }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-end d-grid d-lg-block">
                      <button
                        type="submit"
                        class="btn btn-success px-5"
                      >
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

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var locations = new Vue({
            el: '#locations',
            mounted() {
                AOS.init();
                this.getProvincesData();
                
            },
            data: {
                provinces: null,
                regencies: null,     
                province_id: null,
                regencies_id: null        
            },
            methods: {
                getProvincesData(){
                    var self = this;
                    axios.get('{{ route('api-provinces') }}')
                        .then(function(response){
                            self.provinces = response.data;   
                        })
                },
                getRegenciesData(){
                  var self = this;
                  axios.get('{{ url('api/regencies') }}/' + self.province_id)  
                    .then(function(response){
                        self.regencies = response.data;
                    })
                }
            },
            watch: {
                province_id: function(val, oldVal){
                    this.regencies_id = null;
                    this.getRegenciesData();
                }
            }
        });
    </script>
@endpush