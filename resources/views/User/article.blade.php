@extends('layouts.masterUser')

@section('title','Article')


@section('content')
             <!-- off canvas Desktop -->
            
            <!-- of canvas Mobile menu End -->

            <!-- Offcanvas Serch -->
            <div class="offcanvas offcanvas-top offcanvasserch py-lg-100 py-40" data-bs-scroll="false" tabindex="-1" id="offcanvasserch" data-bs-backdrop="false">
                <div class="offcanvas-header py-0 justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                                <h2 class="serch-modal-title mb-lg-60 mb-30">What are you looking for?</h2>
                                <div class="serch-form mb-lg-60 mb-40">
                                    <form action="#">
                                        <div class="d-flex flex-wrap gap-40 justify-content-center">
                                            <input type="search" name="search" class="form-control" placeholder="Search..." required> 
                                            <button type="submit" class="btn btn-primary search-btn">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                        <div class="search-tag mb-lg-60 mb-40">
                            <a href="#">Hike Highs: Elevate Your Spirit with Nature <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Sun, Sand, and Serenity: Beach Bliss <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Secret Lakes: Hidden Gems of Natural Beauty <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Tent Talks: Outdoor Adventures Unleashed <span><i class="fa-light fa-xmark"></i> </span></a>
                            <a href="#">Beyond Shores: Discovering Idyllic Lake Paradises <span><i class="fa-light fa-xmark"></i> </span></a>
                        </div>
                        <h2 class="modal-post-title text-start mb-lg-40 mb-30">Recent Searches</h2>
                        <div class="row custom-row-gap">

                            <div class="col-xxl-4 col-lg-6">
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"><img src="{{asset('assets/images/placeholder.svg')}}" data-src="{{asset('assets/images/feature-images/feature-image-1.jpg')}}" class="card-img-top" alt="Breakfast"> </a>
                                    </div> 
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h5>                
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>
                                            <li>January 27, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>
                                                            
                                </div>
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"> <img src="{{asset('assets/images/placeholder.svg')}}" data-src="{{asset('assets/images/feature-images/feature-image-7.jpg')}}" class="card-img-top" alt="Stories"> </a>
                                    </div>
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Footprints in the Wilderness: Hiking Stories</a></h5>                
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>

                                            <li>January 25, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>

                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offcanvas Serch -->

            <!-- start to top button -->
            <div class="scroll_to_top to_top-2" >
                <i class="fa-regular fa-angle-up"></i>
            </div>
            <!-- eND to top button -->

             <!-- proloder -->
             <!-- <div class="loader_main">
                <div class="loader_area">
                    <div class="loader"></div>
                </div>
            </div> -->
            <!-- proloder -->

             <!-- dark-light-Buttons -->
             <div class="dark-light-theme-btn" id="toggleBtn">
                <span class="light-icon"><i class="fa-light fa-sun-bright"></i></span>
                <span class="dark-icon"><i class="fa-solid fa-moon"></i></span>
            </div>
            <!-- dark-light-buttons -->
            
            <div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">

           
                
                <!--Banner Section ======================-->
                <section class="section-banner article-1 position-relative" style="--bg-parallax-image: url('{{ asset('/images/blogs/'.$post->image) }}');">
                    <div class="article-wrapper article-wrapper-1 mx-auto position-relative parallax">
                        <div class="container">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-100"> 
                              
                                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                                  <li class="breadcrumb-item"> <a href="/blog">Blog</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                                </ol>
                            </nav>
                            @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            <!-- breadcrumb -->   
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                             

                                    <div class="text-center py-30">
                                        <h2 class="section-banner-title text-white pb-30 ">{{$post->title}}</h2>
                                        <div class="d-flex gap-20 flex-wrap justify-content-center" >
                                            <span class="text-white">{{ $totalComments }} Comments</span>
                                            <span class="text-white"> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}.</span>
                                        </div>
                                    </div>                                                     
                                </div>
                            </div>
                            <div>
       <!-- Comment Section ======================-->

</div>
                        </div>  
                        <!-- container -->
                        
                    </div>
                    <!-- category-wrapper -->
                    				
                </section>
                <!--Banner Section ======================-->

                
                <!--Blog Section ======================-->
                <section class="section-blog py-4 py-sm-5 py-md-60 py-lg-100">
                    <div class="container">
                        <div class="row justify-content-end custom-row-gap">
                            <div class="col-1 px-0">
                                <div class="sticky-elements">
                                    <!-- sticky-elements -->
                                    <div class="sidebar-style d-none d-xl-block">
                                        <div class="author-details mb-lg-60 mb-40">
                                            <p class="text-end mb-0 ">Written by</p>
                                            <h6 class="text-end" ><a href="author-1.html" class="author-name">{{$post->writer->name ?? 'Not-Found'}}</a></h6>
                                            <div class="author-image">
                                                <img src="{{asset('assets/images/placeholder.svg')}}" data-src="{{asset('assets/images/about-image-1.png')}}" alt="about-image">
                                            </div>
                                        </div>
                                        <div class="sidebar-social">
                                        <span>SHARE THIS ARTICLE</span>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($postUrl) }}" class="facebook" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" class="instagram" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($postUrl) }}&title={{ urlencode($post->title) }}" class="linkedin" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                        <a href="https://www.pinterest.com/pin/create/button/?url={{ urlencode($postUrl) }}&media={{ urlencode($post->image_url) }}&description={{ urlencode($post->title) }}" class="pinterest" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                        <a href="https://www.youtube.com/" class="youtube" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>

                                    </div>
                                </div>

                            </div>

                           
                            <div class="col-xl-11">
                                <!-- Start article-blog-content -->
                                <div class="article-blog-content">
                                    <p class="mb-30 mb-lg-60">{{$post->title}}</p>
                                    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" data-bs-smooth-scroll="true" tabindex="0">
                                        <h3 id="introduction" class="mb-10 article-post-heading ">Introduction</h3>
                                        <p class="pb-20 pb-lg-30 ">{!!$post->sdescription!!}</p>

                                        <!-- quote -->
                                        <div class="quote mb-10 mb-lg-30 ">
                                            <p>Author Name</p>
                                            <span class="quote-author">{{$post->writer->name ?? ''}} </span>
                                            <span class="quote-icon">
                                                <svg width="70" height="56" viewBox="0 0 70 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_17489)">
                                                    <path d="M69.9997 40.3661C69.9025 48.8919 62.9853 55.8666 54.4855 55.9979C48.1182 56.0954 42.6026 52.4079 40.0241 47.0279C39.6318 46.2103 39.3099 45.3557 39.0618 44.4675C33.1773 25.4374 54.9951 5.98009 61.6944 0.553026C62.7372 -0.291483 64.2628 -0.153535 65.1412 0.862567C65.9325 1.77437 65.9594 3.1202 65.2083 4.06564C57.8519 13.3216 55.317 19.8287 55.3573 24.4079C63.5989 24.9866 70.0936 31.9243 69.9997 40.3661Z" fill="#4C9BB3" fill-opacity="0.4"/>
                                                    <path d="M31.9333 40.3661C31.8395 48.8919 24.9189 55.8666 16.4225 55.9979C10.0552 56.0954 4.53621 52.4079 1.95777 47.0279C1.56883 46.2103 1.24359 45.3557 0.99547 44.4675C-4.88564 25.4374 16.9288 5.98009 23.628 0.553026C24.6742 -0.291483 26.1964 -0.153535 27.0782 0.862567C27.8662 1.77437 27.893 3.1202 27.1453 4.06564C19.7889 13.3216 17.254 19.8287 17.2943 24.4079C25.5359 24.9866 32.0272 31.9243 31.9333 40.3661Z" fill="#4C9BB3" fill-opacity="0.4"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1_17489">
                                                    <rect width="70" height="56" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>

                                        <p class="pb-20 pb-lg-30 ">{{$post->sdescription}}</p>
                                       
                                        
                                        <!-- article blog list -->
                                        
                                       
                                        <p class="mb-20 mb-lg-30">{!! $post->description !!}</p>
                                        <div class="single-blog  pb-20">
                                            <!-- single blog -->
                                            <div class="blog-image border-rarius-14">
                                                <img src="{{asset('images/blogs/'.$post->image)}} " class="border-rarius-14" alt="img-top">
                                            </div>
                                        
                                        </div>
                                      
                                        <!-- single-article-post-style -->
                                        
                                        

                                       
                                        
                                        <!-- Photo and Video Gallery -->

                                        <!-- article post gallery -->
                                   
                                        <!-- article-slider -->
                                        
                                       
                               
                                <!-- END article-blog-content -->
                                <!-- author-card -->
                                <div class="author-card border-bottom py-60">
                                    <div class="author-image-2 border-0">
                                        <img src="{{asset('assets/images/placeholder.svg')}}" data-src="{{asset('assets/images/about-image-1.png')}}" alt="author-image">
                                    </div>

                                    <div class="author-content">
                                        <p>Written by</p>
                                        <h4><a href="#">{{$post->writer->name ?? 'Not-found'}}</a></h4>
                                        <p class="pb-20">Hello, I'm Mike Aiden, a passionate travel blogger with a heart full of wanderlust. Join me as I explore the world one destination at a time, capturing moments and weaving tales that ignite the spirit of exploration. Let's wander together through the pages of my travel chronicles! 🌍✈️</p>
                                        <div class="author-socials-area d-flex justify-content-between align-items-center flex-wrap gap-20 gap-20">

                                  
                                        <div class="author-socials">
                                            @forelse($socials as $social)
                                                <a href="{{ $social->link }}" class="social-link">
                                                    <img src="{{ asset('images/socials/'.$social->image) }}" alt="social icon">
                                                </a>
                                            @empty
                                                <p>No social links available.</p>
                                            @endforelse
                                        </div>

                                           
                                            <a href="#" class="article-count-btn">22 articles</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                            </div>
                        
                                            <div class="row">
                                    <div class="col-xl-8">
                                        <div class="d-flex flex-lg-row flex-column gap-40 py-lg-100 py-md-60 py-30">
                                            <!-- Previous Post Card -->
                                            @if ($previousPost)
                                                <div class="card card-style-10 card-border">
                                                    <div class="d-flex align-items-center gap-lg-20 gap-10">
                                                        <div class="card-image-wrapper-style-2 image-hover-effect-2">
                                                            <a href="{{ route('posts.show', $previousPost->slug) }}">
                                                                <img src="{{ asset('images/blogs/' . $previousPost->image) }}" alt="img-top">
                                                            </a>
                                                        </div>
                                                        <div class="card-body p-0 mt-auto">
                                                            <a href="{{ route('posts.show', $previousPost->slug) }}" class="d-flex gap-2 align-items-center mini-card-button-prev text-body mb-2">
                                                                <i class="fa-solid fa-arrow-left"></i><span>Previous</span>
                                                            </a>
                                                            <h5 class="card-title lead fw-extrabold">
                                                                <a href="{{ route('posts.show', $previousPost->slug) }}" class="blog-title">{{ $previousPost->title }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <!-- Next Post Card -->
                                            @if ($nextPost)
                                                <div class="card card-style-10 card-border">
                                                    <div class="d-flex align-items-center gap-lg-20 gap-10">
                                                        <div class="card-image-wrapper-style-2 image-hover-effect-2">
                                                            <a href="{{ route('posts.show', $nextPost->slug) }}">
                                                                <img src="{{ asset('images/blogs/' . $nextPost->image) }}" alt="img-top">
                                                            </a>
                                                        </div>
                                                        <div class="card-body p-0 mt-auto">
                                                            <a href="{{ route('posts.show', $nextPost->slug) }}" class="d-flex gap-2 align-items-center mini-card-button-next text-body pb-2">
                                                                <span>Next</span> <i class="fa-solid fa-arrow-right"></i>
                                                            </a>
                                                            <h5 class="card-title lead fw-extrabold">
                                                                <a href="{{ route('posts.show', $nextPost->slug) }}" class="blog-title">{{ $nextPost->title }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                
                               <!-- Comments Section -->
                            

                                        <!-- Add Comments Form -->
                                        <h4 class="mb-4">Add a Comment</h4>

<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <div class="form-group">
        <textarea class="form-control border-3" name="body" rows="4" placeholder="Write your comment here..." required></textarea>
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Add Comment</button>
    </div>
</form>

<h3 class="mt-5">{{ $totalComments }} Comments</h3>

@foreach($post->comments as $comment)
    <div class="main-comment mb-30">
        <div class="d-flex gap-20">
            <div class="comment-content">
                <h5><a href="#" class="comment-name">{{ $comment->user->name ?? 'Anonymous' }}</a></h5>
                <span class="timestamp">{{ \Carbon\Carbon::parse($comment->created_at)->format('F d, Y') }}</span>
                <p>{{ $comment->body }}</p>
                <span class="reply-count" style="cursor: pointer; color: blue;">{{ count($comment->replies) }} {{ count($comment->replies) === 1 ? 'Reply' : 'Replies' }}</span>
            </div>
        </div>
        <form action="{{ route('comments.reply', $comment->id) }}" method="POST">
            @csrf
            <input name="body" class="form-control border-3" placeholder="Write a reply..." required />
            <button type="submit" class="btn btn-primary">Reply</button>
        </form>

        <div class="replies" style="margin-left: 20px; display: none;">
            @foreach ($comment->replies as $reply)
                <p><strong>{{ $reply->user->name }}:</strong></p>
                <p class="form-control border-3">{{ $reply->body }}</p>
            @endforeach
        </div>
    </div>
@endforeach

<script>
    // Toggle replies display
    document.querySelectorAll('.reply-count').forEach(function (count) {
        count.addEventListener('click', function () {
            const repliesDiv = count.closest('.main-comment').querySelector('.replies');
            repliesDiv.style.display = repliesDiv.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>

                                       

                <!--Blog Section ======================-->

      
                <!--CTA Section ======================-->
                <section class="section-cta wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="cta-area pt-lg-60 pb-lg-90 pt-30 pb-30">
                            <div class="col-lg-6">
                                <div class="cta-content pl-lg-100">
                                    <p class="fs-6 text-white mb-10">Keep in Touch</p>
                                    <h3 class=" fs-3 text-white  mb-30 ">Explore the world</h3>
                                    <form>
                                        <div class="form-group d-flex gap-30">
                                            <input type="email" class="form-control" name="email" placeholder="Your email address" required>          
                                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--CTA Section ======================-->

            </div>
            <!-- main -->

           @endsection