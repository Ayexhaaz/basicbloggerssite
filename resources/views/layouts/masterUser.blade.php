<!doctype html>
<html lang="en" data-bs-theme="light">

	
<!-- Mirrored from themeperch.net/html/exploreist/pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 12:20:20 GMT -->
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Exploreist is your ultimate destination for travel inspiration, tips, and guides. Discover hidden gems, plan your next adventure, and make the most out of your travels with our expertly curated content. Join our community of wanderers and explore the world with Exploreist.">
        <meta name="keywords" content="blog, blogging, blogger, articles, posts, content, writing, writers, blogosphere, online journal, web log, topics, ideas, tips, advice">
        <meta name="author" content="themeperch">
		<title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

        @include('partials.css')

		
	</head>

    <body>
    @include('partials.header')

    <div>
        @yield('content')
    </div>


    @include('partials.footer')
  
    @include('partials.js')
</body>
</html>