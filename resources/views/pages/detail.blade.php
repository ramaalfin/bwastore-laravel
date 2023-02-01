@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
    <div class="page-content page-details">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Product Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-gallery mb-3" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="200">
                        <Transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="image detail"
                                class="w-100 main-image" />
                        </Transition>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos"
                                :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                                <a href="javascript:void(0)" @click="changeActive(index)">
                                    <img :src="photo.url" class="w-100 thumbnail-image"
                                        :class="{ active: index == activePhoto }" alt="image thumbnail" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="store-details-container" data-aos="fade-up" data-aos-delay="100">
            <section class="store-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>{{ $product->name }}</h1>
                            <div class="owner">By {{ $product->user->store_name }}</div>
                            <div class="price">Rp {{ number_format($product->price) }}</div>
                        </div>
                        <div class="col-lg-2">
                            @auth
                                <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">Add To Cart</button>
                                </form>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-secondary px-4 text-white btn-block mb-3">Sign in to add</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </section>

            <section class="store-description" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="store-review">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mt-3 mb-3">
                            <h5 data-aos="fade-up" data-aos-delay="300">
                                Customer Review (3)
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="400">
                                <li class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/images/icon-testimonial-1.png" alt=""
                                            class="me-3 rounded-circle" />
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <h5 class="mt-2 mb-1">Rama</h5>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Cumque voluptas fugit, numquam maxime expedita hic
                                            at ratione vitae consequatur sequi reiciendis maiores
                                            doloribus quisquam natus possimus! Sapiente tenetur at
                                            consectetur.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/images/icon-testimonial-1.png" alt=""
                                            class="me-3 rounded-circle" />
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <h5 class="mt-2 mb-1">Rama</h5>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Cumque voluptas fugit, numquam maxime expedita hic
                                            at ratione vitae consequatur sequi reiciendis maiores
                                            doloribus quisquam natus possimus! Sapiente tenetur at
                                            consectetur.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/images/icon-testimonial-1.png" alt=""
                                            class="me-3 rounded-circle" />
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <h5 class="mt-2 mb-1">Rama</h5>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Cumque voluptas fugit, numquam maxime expedita hic
                                            at ratione vitae consequatur sequi reiciendis maiores
                                            doloribus quisquam natus possimus! Sapiente tenetur at
                                            consectetur.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: '#gallery',
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [
                    @foreach ($product->galleries as $gallery )   
                    {
                        id: {{ $gallery->id }},
                        url: "{{ Storage::url($gallery->photos) }}",
                    },
                    @endforeach
                ],
            },

            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
