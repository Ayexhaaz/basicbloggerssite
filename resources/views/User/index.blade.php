@extends('layouts.masterUser')

@section('title','index')


@section('content')
	
<div class="main" data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">
    <!-- Hero Section ====================== -->
    <section class="section-hero hero-1 position-relative overlay">
        <div class="hero-wrapper mx-auto position-relative parallax">
            <div class="container">
                <div class="hero-inner-text position-relative text-center mb-5 mb-xxl-70">
                    <h1 id="text-anim" class="display-2 lh-1 font-family-style-1 text-white exp-text-animate-1">
                        Your Adventure
                    </h1>
                    <h2 class="display-1 lh-1 font-family-style-2 text-white exp-text-animate-1">
                        begins here
                    </h2>
                </div>

                <!-- Swiper Wrapper -->
                <div class="card-swiper-wrapper position-relative wow fadeInUp" data-wow-delay="0.3s">
                    <div class="swiper swiper-card">
                        <div class="swiper-wrapper">
                            @foreach($categories as $category)
                            <div class="swiper-slide">
                                <a href="{{ url('/category/'.$category->id) }}">
                                    <div class="card card-style-18">
                                        <div class="card-image-wrapper position-relative">
                                            <img src="{{ asset('images/blogs/'.$category->image) }}" alt="{{ $category->name }}" class="category-img" />
                                            <div class="carousel-caption">
                                                <h4 style="color: aliceblue;">{{ $category->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        <!-- Pagination & Navigation -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper & jQuery Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            const swiper = new Swiper('.swiper-card', {
                loop: true,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    0: { slidesPerView: 1 },
                    576: { slidesPerView: 2 },
                    768: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 }
                }
            });
        });
    </script>
</div>



                <!--Hero Section ======================-->

                
                <!--Blog Section ======================-->
                <section class="section-blog py-4 py-sm-5 py-md-60 py-lg-100">
    <div class="container">
        <div class="row custom-row-gap">
            <!-- Sidebar Section -->
            <div class="col-xl-4 order-xl-1">
                <div class="sticky-elements">
                    <div class="d-flex flex-row flex-xl-column justify-content-center gap-lg-60 gap-30 pb-30 pb-lg-0 ml-lg-0">

                        <div class="widget wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="fs-1 mb-40">Featured Article</h4>
                            <div class="d-flex flex-column gap-3 gap-xl-30">
                                <!-- Loop through posts -->
                                @foreach($posts as $post)
                                <div class="mini-card-style wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="card-image-wrapper">
                                        <a href="{{'/article/'.$post->slug}}">
                                            <img src="{{ asset('images/blogs/' . $post->image) }}" 
                                                 class="card-img-top" 
                                                 alt="{{ $post->title }}">
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title lead fw-extrabold mb-0">
                                            <a href="{{'/article/'.$post->id}}" class="blog-title">
                                                {{ $post->title }}
                                            </a>
                                        </h5>
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By 
                                                <a href="{{'/author/'.$post->writer_id}}" class="fw-bold">
                                                    {{ $post->writer->name ?? 'Unknown Author' }}
                                                </a>
                                            </li>
                                            <li>{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar -->

            <!-- Main Blog Section -->
            <div class="col-xl-8 order-xl-0">
                <div class="d-flex flex-column">
                    <div class="card card-style-1 mb-lg-30 md-mb-20 mb-10 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-image-wrapper">
                        @foreach($posts as $post)
                            <a href="{{'/article/'.$post->slug}}">
                                <img src="{{ asset('images/blogs/' . $post->image) }}" 
                                     data-src="{{ asset('images/blogs/' . $post->image) }}" 
                                     class="card-img-top" 
                                     alt="Sun, Sand, and Serenity">
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card-header text-uppercase">
                                <a href="{{'/article/'.$post->slug}}" class="fs-6 card-header-title">{{$post->category->name ?? ''}}</a>
                            </div>
                            <h5 class="fs-1 card-title">
                                <a href="{{'/article/'.$post->slug}}" class="blog-title">
                                    {{$post->title}}
                                </a>
                            </h5>
                            <ul class="list-unstyled card-meta lead">
                                <li>By 
                                    <a href="{{'/author/'.$post->writer_id}}" class="blog-author fw-bold">
                                        {{$post->writer->name ?? ''}}
                                    </a>
                                </li>
                                <li>{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                            </ul>

                            <p class="card-text">
                                {!!$post->description!!}
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Blog Section -->
        </div>
    </div>
</section>

        
		<!-- page -->
@endsection			
        <!-- js link -->
      

