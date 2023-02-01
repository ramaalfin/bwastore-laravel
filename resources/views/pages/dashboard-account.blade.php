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
                    <form action="">
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
                                  value="Setra Duta cemara"
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
                                  value="Setra Duta cemara"
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
                                  value="Setra Duta cemara"
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
                                  value="Setra Duta cemara"
                                />
                              </div>
                            </div>
                            <div class="col-md-4 mb-4">
                              <div class="form-group">
                                <label for="province">Province</label>
                                <select
                                  name="province"
                                  id="province"
                                  class="form-control"
                                >
                                  <option value="Jawa Barat">Jawa Barat</option>
                                  <option value="Jawa Tengah">
                                    Jawa Tengah
                                  </option>
                                  <option value="Jawa Timur">Jawa Timur</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4 mb-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <select
                                  name="city"
                                  id="city"
                                  class="form-control"
                                >
                                  <option value="Bandung">Bandung</option>
                                  <option value="Solo">Solo</option>
                                  <option value="Surabaya">Surabaya</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4 mb-4">
                              <div class="form-group">
                                <label for="postalCode">Nomer POS</label>
                                <input
                                  type="text"
                                  name="postalCode"
                                  id="postalCode"
                                  class="form-control"
                                  value="16156"
                                />
                              </div>
                            </div>

                            <div class="col-md-6 mb-4">
                              <div class="form-group">
                                <label for="country">Negara</label>
                                <input
                                  type="text"
                                  name="country"
                                  id="country"
                                  class="form-control"
                                  value="Indonesia"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-group">
                                <label for="mobilePhone">Nomer telepon</label>
                                <input
                                  type="text"
                                  name="mobilePhone"
                                  id="mobilePhone"
                                  class="form-control"
                                  value="+628 5246 8733 58"
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
