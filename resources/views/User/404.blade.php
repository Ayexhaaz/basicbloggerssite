@extends('layouts.masterUser')

@section('title','404')


@section('content')
            <section class="hero-404 position-relative">
                <div class="hero-404-image position-relative parallax">
                    <div class="container">
                        <div class="hero-404-inner-txt text-center">
                            <h1 class="hero-404-title text-white">404</h1>
                            <p class="text-white mb-30">Oops! Your appear to be lost.</p>
                            <a href="index.html" class="btn-secondary-3">Take Me Home</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
		<!-- page -->

        <!-- start to top button -->
        <div class="scroll_to_top to_top-2" >
            <i class="fa-regular fa-angle-up"></i>
        </div>
        <!-- eND to top button -->

        <!-- dark-light-Buttons -->
        <div class="dark-light-theme-btn" id="toggleBtn">
            <span class="light-icon"><i class="fa-light fa-sun-bright"></i></span>
            <span class="dark-icon"><i class="fa-solid fa-moon"></i></span>
        </div>
        <!-- dark-light-buttons -->
			
 @endsection