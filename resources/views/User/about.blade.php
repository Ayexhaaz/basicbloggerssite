@extends('layouts.masterUser')

@section('title','About')


@section('content')

            <!-- off canvas Desktop -->
            <div class="offcanvas d-none d-lg-block offcanvas-end" data-bs-scroll="false" tabindex="-1" id="offcanvasDesktop">

                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    
                    <div class="author-about mb-40 ">
                        <div class="text-center">
                            <div class="author-iamge">
                                <a href="author-1.html"><img src="assets/images/placeholder.svg" data-src="assets/images/about-image-1.png" alt="author-iamge"></a>
                            </div>
                            <h5><a  class="author-name" href="author-1.html">Mike Aiden</a></h5>
                            <p class=" text-center">I’m a intrepid travel blogger, weaves tales of exploration and discovery. Let's traverse the globe together and share in the beauty of our world.</p>
                        </div>
                    </div>

                    <div class="socials-wrapper">
                        <h4 class="offcanvas-title mb-30">Follow Me</h4>
                        <!-- author-socials -->
                        <div class="author-socials mb-30">
                            <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/" class="youtube"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                           <a href="https://twitter.com/" class="twitter"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z"></path>
                                </svg> 
                            </a>
                        </div>
                    </div>

                    <!-- sidebar-gallery -->
                    <div class="sidebar-gallery mb-40">
                        <div class="div1 image-hover"><img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-1.png" alt="instagram">
                            <span class="d-flex justify-content-center mb-10"> 
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z" fill="white"/>
                                    <path d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z" fill="white"/>
                                    <path d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z" fill="white"/>
                                </svg>
                                    
                            </span>
                        </div>
                        <div class="div2 image-hover"><img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-4.png" alt="instagram"> 
                            <span class="d-flex justify-content-center mb-10"> 
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z" fill="white"/>
                                    <path d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z" fill="white"/>
                                    <path d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z" fill="white"/>
                                    </svg>
                                    
                            </span>
                        </div>
                        <div class="div3 image-hover"><img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-7.png" alt="instagram"> 
                            <span class="d-flex justify-content-center mb-10"> 
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z" fill="white"/>
                                    <path d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z" fill="white"/>
                                    <path d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z" fill="white"/>
                                    </svg>
                                    
                            </span>
                        </div>
                        <div class="div4 image-hover"><img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-3.png" alt="instagram"> 
                            <span class="d-flex justify-content-center mb-10"> 
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z" fill="white"/>
                                    <path d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z" fill="white"/>
                                    <path d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z" fill="white"/>
                                    </svg>
                                    
                            </span>
                        </div>
                        <div class="div5 image-hover"><img src="assets/images/placeholder.svg" data-src="assets/images/instagram/instagram-8.png" alt="instagram"> 
                            <span class="d-flex justify-content-center mb-10"> 
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4396 18H5.56042C2.49391 18 0 15.5061 0 12.4396V5.56042C0 2.49391 2.49391 0 5.56042 0H12.4396C15.5061 0 18 2.49391 18 5.56042V12.4396C18.0016 15.5061 15.5061 18 12.4396 18ZM5.56042 2.00648C3.60126 2.00648 2.00648 3.60126 2.00648 5.56042V12.4396C2.00648 14.3987 3.60126 15.9935 5.56042 15.9935H12.4396C14.3987 15.9935 15.9935 14.3987 15.9935 12.4396V5.56042C15.9935 3.60126 14.3987 2.00648 12.4396 2.00648H5.56042Z" fill="white"/>
                                    <path d="M9.0021 13.5979C6.4656 13.5979 4.40234 11.5347 4.40234 8.99819C4.40234 6.46169 6.4656 4.39844 9.0021 4.39844C11.5386 4.39844 13.6019 6.46169 13.6019 8.99819C13.6019 11.5347 11.5386 13.5979 9.0021 13.5979ZM9.0021 6.203C7.46095 6.203 6.20691 7.45705 6.20691 8.99819C6.20691 10.5393 7.46095 11.7934 9.0021 11.7934C10.5432 11.7934 11.7973 10.5393 11.7973 8.99819C11.7973 7.45705 10.5432 6.203 9.0021 6.203Z" fill="white"/>
                                    <path d="M14.6139 4.13508C14.6139 4.56414 14.2653 4.91278 13.8363 4.91278C13.4072 4.91278 13.0586 4.56414 13.0586 4.13508C13.0586 3.70602 13.4072 3.35742 13.8363 3.35742C14.2653 3.35742 14.6139 3.70444 14.6139 4.13508Z" fill="white"/>
                                    </svg>
                                    
                            </span>
                        </div>
                    </div>

                    <div class="catagory mb-30">
                        <h3 class="offcanvas-title  mb-40">Category</h3>
                        <div class="catagory-tag">
                            <a href="category-1.html">Hiking <span class="catagory-count">10</span></a>
                            <a href="category-1.html">Camping <span class="catagory-count">08</span></a>
                            <a href="category-1.html">Desert <span class="catagory-count">12</span></a>
                            <a href="category-1.html">Beach <span class="catagory-count">22</span></a>
                            <a href="category-1.html">Forest <span class="catagory-count">15</span></a>
                            <a href="category-1.html">Ancient <span class="catagory-count">07</span></a>
                            <a href="category-1.html">City <span class="catagory-count">18</span></a>
                            <a href="category-1.html">Lake <span class="catagory-count">09</span></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- of canvas Mobile menu start -->
            <div class="offcanvas offcanvas-end offcanvasmobile-menu" id="offcanvasmobile-menu" data-bs-backdrop="static" tabindex="-1">
                <div class="offcanvas-header pb-30">
                    <a class="navbar-brand dark-light-logo" href="index.html" aria-label="nav-brands">
                        <img src="assets/images/placeholder.svg" data-src="assets/images/logo-dark.png" class="logo-dark img-fluid" alt="logo">
                        <img src="assets/images/placeholder.svg" data-src="assets/images/logo-white.png" class="logo-light img-fluid" alt="logo">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex justify-content-start"> 
                    <ul class="navbar-nav custom-navbar-nav mb-2  mb-lg-0 hover-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link active d-flex gap-2 align-items-center" aria-current="page" href="index.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="index.html" aria-label="single-pages">Home 1</a>
                                </li>										
                                <li>
                                    <a class="dropdown-item" href="home-2.html" aria-label="single-pages">Home 2</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="home-3.html" aria-label="single-pages">Home 3</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="home-4.html" aria-label="single-pages">Home 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="home-5.html" aria-label="single-pages">Home 5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="home-6.html" aria-label="single-pages">Home 6</a>
                                </li>					
                            </ul>									
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center"  href="blog-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="true">
                                Blog
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="blog-1.html" aria-label="single-pages">Blog 1</a>
                                </li>										
                                <li>
                                    <a class="dropdown-item" href="blog-2.html" aria-label="single-pages">Blog 2</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="blog-3.html" aria-label="single-pages">Blog 3</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="blog-4.html" aria-label="single-pages">Blog 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-5.html" aria-label="single-pages">Blog 5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-6.html" aria-label="single-pages">Blog 6</a>
                                </li>					
                                <li>
                                    <a class="dropdown-item" href="blog-7.html" aria-label="single-pages">Blog 7</a>
                                </li>					
                                <li>
                                    <a class="dropdown-item" href="blog-8.html" aria-label="single-pages">Blog 8</a>
                                </li>					
                            </ul>									
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="about-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="about-1.html" aria-label="single-pages">About 1</a>
                                </li>										
                                <li>
                                    <a class="dropdown-item" href="about-2.html" aria-label="single-pages">About 2</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="about-3.html" aria-label="single-pages">About 3</a>
                                </li>	
                                <li>
                                    <a class="dropdown-item" href="about-4.html" aria-label="single-pages">About 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="about-5.html" aria-label="single-pages">About 5</a>
                                </li>			
                            </ul>									
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="contact-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="contact-1.html" aria-label="single-pages">Contact 1</a>
                                </li>										
                                <li>
                                    <a class="dropdown-item" href="contact-2.html" aria-label="single-pages">Contact 2</a>
                                </li>										
                                                    
                            </ul>									
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="article-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Article
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="article-1.html" aria-label="single-pages">Article 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-2.html" aria-label="single-pages">Article 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-3.html" aria-label="single-pages">Article 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-4.html" aria-label="single-pages">Article 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-5.html" aria-label="single-pages">Article 5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-6.html" aria-label="single-pages">Article 6</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-7.html" aria-label="single-pages">Article 7</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="article-8.html" aria-label="single-pages">Article 8</a>
                                </li>
                            </ul>                                                    
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="author-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Author
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                <a class="dropdown-item" href="author-1.html" aria-label="single-pages">Author 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="author-2.html" aria-label="single-pages">Author 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="author-3.html" aria-label="single-pages">Author 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="author-4.html" aria-label="single-pages">Author 4</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="category-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Catagory
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="category-1.html" aria-label="single-pages">Catagory 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="category-2.html" aria-label="single-pages">Catagory 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="category-3.html" aria-label="single-pages">Catagory 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="category-4.html" aria-label="single-pages">Catagory 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="category-5.html" aria-label="single-pages">Catagory 5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="category-6.html" aria-label="single-pages">Catagory 6</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown submenu">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="404-1.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                404 page
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="404-1.html" aria-label="single-pages">
                                    <span class="link-hover-animation-1">404 1</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="404-2.html" aria-label="single-pages">
                                    <span class="link-hover-animation-1">404 2</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="404-3.html" aria-label="single-pages">
                                    <span class="link-hover-animation-1">404 3</span></a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>

                    
                </div>
                
                <div class="text-center d-flex justify-content-center px-30">

                    <!-- author-socials -->
                    <div class="author-socials">
                        <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/" class="youtube"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                       <a href="https://twitter.com/" class="twitter"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8092 15.98H11.1569L6.89801 9.78339L1.56807 15.98H0.19043L6.28619 8.89157L0.19043 0.0195312H4.84276L8.87486 5.88989L13.9234 0.0195312H15.301L9.48808 6.77751L15.8092 15.98ZM11.8079 14.9929H13.9234L4.18054 1.05696H2.06508L11.8079 14.9929Z"></path>
                                </svg> 
                            </a>
                    </div>
                </div>
            </div>	
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
                                        <a href="article-1.html"><img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-1.jpg" class="card-img-top" alt="Breakfast"> </a>
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
                                        <a href="article-1.html"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-7.jpg" class="card-img-top" alt="Stories"> </a>
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

                            <div class="col-xxl-4 col-lg-6">
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-3.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>          
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>

                                            <li>January 07, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>                                
                                </div>
                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-4.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Beyond Shores: Discovering Idyllic Lake Paradises</a></h5>   
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>

                                            <li>January 18, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>

                            <div class="col-xxl-4 col-lg-6">
                                    <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-5.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Seaside Serenity: Beachside Beauty Uncovered</a></h5>
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>

                                            <li>January 15, <span class="dynamic-year"> </span>.</li>
                                        </ul>
                                    </div>                                
                                </div>

                                <!-- mini-card-style -->
                                <div class="mini-card-style mb-lg-40 mb-30">
                                    <div class="card-image-wrapper">
                                        <a href="article-1.html"> <img src="assets/images/placeholder.svg" data-src="assets/images/feature-images/feature-image-3.jpg" class="card-img-top" alt="Stories"> </a>
                                    </div>
                                
                                    <div class="card-body">                                                
                                        <h5 class="card-title lead fw-extrabold mb-0"><a href="article-1.html" class="blog-title">Lost Treasures: Top 10 Ancient City Sites</a></h5>          
                                        <ul class="list-unstyled card-meta-style-2 mb-0 extra-small">
                                            <li>By <a href="author-1.html" class="fw-bold">Mike Aiden</a></li>

                                            <li>February 07, <span class="dynamic-year"> </span>.</li>
                                        </ul>
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
                <!--breadcrumb Section ======================-->
                <div class="section-breadcrumb pb-20">
                    <div class="container">
                        <nav aria-label="breadcrumb-nav">
                            <ol class="breadcrumb breadcrumb-style-2 mt-20 mb-0 ">
                            <li class="breadcrumb-item breadcrumb-item-style-2"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item breadcrumb-item-style-2 active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- breadcrumb-wrapper -->			
                </div>
                <!--breadcrumb Section ======================-->

                <!--Blog Section ======================-->
                <section class="section-blog pb-sm-5 pb-md-60 pb-lg-90">
                    <div class="container">
                        <div class="row custom-row-gap">
                            <div class="col-lg-4">
                                <!-- author-card -->
                                <div class="sticky-elements">

                                    <div class="author-card author-card-sidebar  flex-column align-items-center mb-30">
                                        <h4 class="author-name pb-0 mb-0">Who I am</h4>
                                        <div class="author-image m-auto">
                                            <img src="assets/images/about-image-1.png" alt="author-image">
                                        </div>
    
                                        <div class="author-content">
                                            <p class="text-center mb-lg-40 mb-10">Hello, I'm Mike Aiden, the intrepid travel blogger, weaves tales of exploration and discovery. With a passion for uncovering hidden gems and embracing diverse cultures, I invite you to join me on a journey of wanderlust and adventure. Let's traverse the globe together and share in the beauty of our world.</p>
    
                                            <p class="text-center">Let's wander together through the pages of my travel chronicles! 🌍✈️</p>
                                        </div>
                                        <div class="author-socials">
                                            <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <a href="https://www.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="https://www.youtube.com/" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- author-card -->
                            </div>
                            <div class="col-lg-8 ">
                                <div class="about-page-content">
                                    <h5 class="mb-20 title-style-2 fix-width-post-content">Welcome to Exploreist: Unveiling the through My Lens!</h5>
                                    <p class="mb-30 fix-width-post-content">Hello, fellow wanderers! I'm Mike Aiden, the creator and explorer behind this personal travel blog. Embarking on a journey of self-discovery, I discovered a profound passion for unravelling the world's mysteries, one destination at a time.</p>

                                    <p class="mb-60 fix-width-post-content">At Exploreist, we believe that travel is not just about visiting new places; it's a transformative experience that leaves an indelible mark on the soul. Our mission is to inspire and guide you on your own odyssey of discovery, providing insights into hidden gems, cultural nuances, and the beauty that lies off the beaten path.</p>

                                    <div class="position-relative pb-70 mb-lg-60 mb-30">

                                        <div class="about-post-image">
                                            <img src="assets/images/placeholder.svg" data-src="assets/images/blog/explore-image-24.jpg" alt="blog-image" class="border-rarius-14">
                                        </div>
                                        <div class="counter-wrapper">
    
                                            <div class="counter-number">
                                                <h6 class="odometer" data-count="129">0</h6><h5>+</h5>
                                                <p>Blogs Published</p>
                                            </div>
                                            <div class="counter-number">
                                                <h6 class="odometer" data-count="18">0</h6><h5>k+</h5>
                                                <p>Views on Finsweet</p>
                                            </div>
                                            <div class="counter-number">
                                                <h6 class="odometer" data-count="30">0</h6><h5>k+</h5>
                                                <p>Total Subscriber</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="mb-20 title-style-2 fix-width-post-content">Why Exploreist?</h5>
                                    <p class="fix-width-post-content">Exploreist is not just a collection of travel tales; it's a curated space where each story is a brushstroke in the vibrant painting of our global adventures. We dive into the heart of destinations, capturing the essence of diverse landscapes, local flavours, and the magic that happens when cultures collide.</p>

                                    <h5 class="mb-20 title-style-2 fix-width-post-content">What to Expect:</h5>
                                    <ul class="mb-lg-60 mb-30 fix-width-post-content">
                                        <li>
                                            <p> <span class="fw-bold">Authentic Narratives:</span>
                                             Our stories are genuine and unfiltered, sharing both the highs and lows of our travel escapades.</p>
                                        </li>
                                        <li>
                                            <p> <span class="fw-bold">Local Insights:</span>
                                             Beyond the tourist hotspots, we delve into the heart of communities, forging connections and celebrating the rich tapestry of global cultures.</p>
                                        </li>
                                        <li>
                                            <p> <span class="fw-bold">Practical Tips:</span>
                                           From travel hacks to must-visit spots, we offer practical advice to enhance your journeys and make them as seamless as possible.</p>
                                        </li>
                                        <li>
                                            <p> <span class="fw-bold">Photography Showcase:</span>
                                            Immerse yourself in the visual feast of our travels. Every image is a testament to the breathtaking beauty that awaits you around the world.</p>
                                        </li>
                                    </ul>
                                    <h5 class="mb-20 title-style-2 fix-width-post-content">Join Our Community:</h5>
                                    <p class="mb-20 fix-width-post-content">Beyond the blog, we invite you to be a part of our travel tribe. Share your own stories, ask questions, and connect with like-minded explorers. Let's build a community that celebrates the diverse tapestry of our global adventures.</p>
                                    <p class="mb-20 fix-width-post-content">Thank you for joining us on this incredible journey. Whether you're an avid traveler or an armchair explorer, there's a place for you at [Your Blog Name]. Here's to countless more miles, experiences, and stories waiting to unfold.</p>

                                    <p class="mb-20 fix-width-post-content">Adventure awaits!</p>

                                    <p class="fix-width-post-content">Exploreist Creator & Explorer 🌍✈️</p>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <!-- container -->
                </section>
                <!--Blog Section ======================-->

                <!--add banner ======================-->
                <div class="section-banner d-none d-lg-block pb-40 pb-lg-100 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="add-banner">
                                    <a href="#"><img src="assets/images/add-02.png" alt="add-image" class="border-rarius-14"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add banner ======================-->

                <!--CTA Section ======================-->
               <section class="section-cta wow fadeInUp" data-bs-theme="light" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="cta-area pt-lg-60 pb-lg-90 pt-30 pb-30">
                            <div class="col-xl-6">
                                <div class="cta-content pl-lg-100">
                                    <p class="fs-6 text-white mb-10">Keep in Touch</p>
                                    <h3 class=" fs-3 text-white  mb-30 ">Explore the world</h3>
                                    <form>
                                        <div class="form-group d-flex gap-30">
                                            <input type="email" class="form-control" name="email" placeholder="Your email address" required>          
                                            <button type="submit" class="btn">Subscribe</button>
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