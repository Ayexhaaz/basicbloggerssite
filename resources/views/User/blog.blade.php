@extends('layouts.masterUser')

@section('title','Blog')


@section('content')
        
            

            <!-- dark-light-Buttons -->
            <div class="dark-light-theme-btn" id="toggleBtn">
                <span class="light-icon"><i class="fa-light fa-sun-bright"></i></span>
                <span class="dark-icon"><i class="fa-solid fa-moon"></i></span>
            </div>
            <!-- dark-light-buttons -->
            
            <div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

                <!--breadcrumb Section ======================-->
                <div class="section-breadcrumb ">
                    <div class="breadcrumb-wrapper pb-0">
                        <div class="container">
                            <nav aria-label="breadcrumb-nav">
                                <ol class="breadcrumb breadcrumb-style-2 my-20 ">
                                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                    <li class="breadcrumb-item breadcrumb-item-style-2 active"
                                        aria-current="page">blog</li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <!-- breadcrumb-wrapper -->
                </div>

                <!--blog hero Section ======================-->
                <section class="section-blog-hero pt-70 pb-lg-60 pb-40">
                    <div class="blog-wrapper pb-0">
                        <div class="container">
                            <h2 class="mb-lg-40 mb-20  wow fadeInUp" data-wow-delay="0.4s">Most Popular Article</h2>
                            <div class="row custom-row-gap">
                                <div class="col-xxl-6  wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- single-card -->
                                     @foreach($posts as $posts)
                                     <a href="{{'/article/'.$posts->id}}">
                                    <div class="card card-style-2 card-border mb-lg-40 mb-20">
                                        <div class="card-image-wrapper card-image-wrapper-style-2 ">
                                            <a href="{{'/article/'.$posts->slug}}"><img src="{{asset('images/blogs/'.$posts->image)}}" class="card-img-top" alt="Wonders"></a>
                                        </div>
                                        
                                        <div class="card-body">
                                            <div class="card-header text-uppercase">
                                                <a href="{{'/article/'.$posts->slug}}">{{$posts->category->name ?? ''}}</a>
                                            </div>
                                            <h5 class="fs-4 card-title"><a href="{{'/article/'.$posts->id}}" class="blog-title">{{$posts->title}}</a></h5>
                                            
                                            <ul class="list-unstyled card-meta lead  small">
                                                <li>By <a href="{{'/author/'.$posts->writer_id}}" class="blog-author fw-bold">{{$posts->writer->name ?? ''}}</a></li>
                                                <li>{{ \Carbon\Carbon::parse($posts->created_at)->format('F d, Y') }}</li>
                                            </ul>
            
                                            <p class="card-text small">{!! $posts->description !!}</p>
                                        </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                
                    <!-- breadcrumb-wrapper -->
                </section>
                <!--blog hero Section ======================-->           

         <!-- Blog Section -->
<section class="section-blog py-4 py-sm-5 py-md-60 py-lg-100">
    <div class="container">
        <h2 class="mb-lg-40 mb-20 wow fadeInUp" data-wow-delay="0.4s">Latest Article</h2>

        <!-- Start Blog Posts -->
        <div class="row custom-row-gap">
            @forelse($post as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-style-2 card-border wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card-image-wrapper">
                            <a href="{{'/article/'.$post->slug}}">
                                <img src="{{ asset('images/blogs/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                            </a>
                        </div>
                        
                        <div class="card-body">
                            <div class="card-header text-uppercase">
                                <a href="{{'/category/'.$post->id}}">{{ $post->category->name ?? 'Uncategorized' }}</a>
                            </div>

                            <h5 class="fs-4 card-title">
                                <a href="{{'/article/'.$post->slug}}" class="blog-title">{{ $post->title }}</a>
                            </h5>

                            <ul class="list-unstyled card-meta lead small">
                                <li>By <a href="{{'/author/'.$posts->writer_id}}" class="blog-author fw-bold">{{ $post->writer->name ?? 'Anonymous' }}</a></li>
                                <li>{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                            </ul>

                            <p class="card-text small">{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No blog posts found.</p>
            @endforelse
        </div>
        <!-- End Blog Posts -->
    </div>
</section>

                <!--CTA Section ======================-->

            </div>
            <!-- main -->

            <!--Footer Section ======================-->
           @endsection