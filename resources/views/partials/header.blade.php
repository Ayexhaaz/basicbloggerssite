
			<!-- Header ======================-->	
            <header class="section-header header-1 sticky-navbar" data-bs-theme="light">
                <div class="container">
                    <nav class="navbar navbar-expand-xl hover-menu ">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <a class="navbar-brand" href="/" aria-label="nav-brands">
                                <img src="{{asset('assets/images/logo-white.png')}}" class="logo-light img-fluid" alt="logo">
                                <!-- <img src="assets/images/global/logo-dark.png" class="logo-dark" alt="logo"> -->
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmobile-menu" aria-controls="offcanvasmobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <!-- <span class="navbar-toggler-icon"></span>		 -->
                                <span class="menu-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <!-- <span class="menu-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12H21M3 6H21M3 18H21" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>                                 -->
                            </button>

                            <div class="d-none d-xl-block">
                                <div class="d-flex gap-70 align-items-center">
                                    <ul class="gap-20 navbar-nav mb-2 me-2 mb-lg-0 ">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active d-flex gap-2 align-items-center" aria-current="page" href="index.html" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="/" aria-label="single-pages">Home</a>
                                                </li>										
                                                <li>
                                                    <a class="dropdown-item" href="/blog" aria-label="single-pages">blog</a>
                                                </li>	
                                                <li>
                                                    <a class="dropdown-item" href="/category" aria-label="single-pages">Category</a>
                                                </li>	
                                                <li>
                                                    <a class="dropdown-item" href="/contact" aria-label="single-pages">Contact</a>
                                                </li>

                                            </ul>									

                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="/blog" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                                <span class="dropdown-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="/category" aria-label="single-pages">Category</a>
                                                </li>										
                                                <li>
                                                    <a class="dropdown-item" href="/author" aria-label="single-pages">Author</a>
                                                </li>	
                                                <li>
                                                    <a class="dropdown-item" href="/article" aria-label="single-pages">Article</a>
                                                </li>	
                                                <li>
                                                    <a class="dropdown-item" href="/about" aria-label="single-pages">About</a>
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
                                                    <a class="dropdown-item" href="/about" aria-label="single-pages">About</a>
                                                </li>										
                                                <li>
                                                    <a class="dropdown-item" href="/contact" aria-label="single-pages">Contact</a>
                                                </li>	
                                                <li>
                                                    <a class="dropdown-item" href="/404" aria-label="single-pages">404</a>
                                                </li>	
                                               			
                                            </ul>									
                                        </li>
                                        </li>
                                        <li class="nav-item dropdown">
                                            
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                                                </li>										
                                               

                                            </ul>									
                                        </li>
                                        </span>
                                        </a>
                                    </div>
                                </div>							
                            </div>
                        </div>
                    </nav>
                </div>
            </header>                                 
                                 
                                


                                 