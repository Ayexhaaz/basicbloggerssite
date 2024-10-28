@extends('layouts.masterUser')

@section('title','Category')


@section('content')

          
            <!-- dark-light-buttons -->	
            
            <div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

        
            
                <!--Banner Section ======================-->
                <section class="section-banner category-1 position-relative" style="--bg-parallax-image:  url('{{ asset('/images/blogs/' . $category->image) }}'); background-image: var(--bg-parallax-image);
                background-size: cover; height: 100vh;">
                    <div class="category-wrapper category-wrapper-4 mx-auto position-relative parallax">
                        <div class="container">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mt-30 ">
                                  <li class="breadcrumb-item breadcrumb-style-5"><a href="/home">Home</a></li>
                                  <li class="breadcrumb-item breadcrumb-style-5 active" aria-current="page">Category</li>
                                </ol>
                            </nav>
                            <!-- breadcrumb -->   
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6">

                                    <div class="category-title-style-1 style-2 mb-lg-100">
                                        <h2 class="text-white">{{$category->name}}</h2>
                                        <p class="text-white">{{$totalPost}} Articles</p>
                                    </div>                                                     
                                </div>
                            </div>
                        </div>  
                        <!-- container -->
                        <!-- <div class="category-title category-title-style-1">                                
                        </div>   -->
                        <!-- category-title -->
                        
                    </div>
                    <!-- category-wrapper -->
                    				
                </section>
                <!--Banner Section ======================-->

                
                <!--Blog Section ======================-->
                <section class="section-blog py-4 py-sm-5 py-md-60 py-lg-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="row custom-row-gap">
                            
                                    <!-- single card -->
                                     @foreach($posts as $post)
                                    <div class="col-lg-6">
                                        <div class="card card-style-2 card-border mb-20 mb-lg-40 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="card-image-wrapper">
                                                <a href="{{'/article/'.$post->slug}}"><img src="{{asset('/images/blogs/'.$post->image)}}" class="card-img-top"></a>
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="card-header text-uppercase">
                                                    <a href="{{ url('/category/'.$category->id) }}">{{$post->category->name ?? ''}}</a>
                                                </div>
                                                <h5 class="fs-4 card-title"><a href="article-1.html" class="blog-title">{{$post->title}}</a></h5>
                                                
                                                 <ul class="list-unstyled card-meta lead  small">
                                                    <li>By <a href="{{'/author/'.$post->writer_id}}" class="blog-author fw-bold">{{$post->writer->name ?? ''}}</a></li>
                                                    <li>{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                                                </ul>
                
                                                <p class="card-text small">{!!$post->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single card -->
                                   
                </section>
                <!--Blog Section ======================-->

                <!--card-slider ======================-->
                 </div>
                </section>
                <!--CTA Section ======================-->

            </div>
            <!-- main -->

          @endsection