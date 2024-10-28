<link rel="shortcut icon" type="images/png" href="{{asset('assets/images/fav-icon/favicon.png')}}">
		<!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,700;1,900&amp;family=Lovers+Quarrel&amp;family=Meddon&amp;display=swap" rel="stylesheet">
		
        <!-- css -->
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/venobox.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <style>
  

.hero-inner-text h1, 
.hero-inner-text h2 {
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

.swiper-slide {
    display: flex;
    justify-content: center;
}

.card {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

.category-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.carousel-caption {
   

    border-radius: 5px;
    text-align: center;
}

.swiper-button-next, .swiper-button-prev {
    color: white;
}

.card-image-wrapper:hover .category-img {
    transform: scale(1.05);
}
.author-socials {
    display: flex;               /* Use flexbox for alignment */
    flex-wrap: wrap;            /* Allow items to wrap onto the next line */
    justify-content: center;     /* Center items horizontally */
    margin: 20px 0;             /* Add some vertical margin */
}

.social-link {
    margin: 5px;                /* Space between social icons */
    display: inline-block;       /* Ensures the link behaves like a block element */
    transition: transform 0.2s;  /* Smooth hover effect */
    background-color: transparent; /* Remove background color */
    border: none;                /* Remove border */
    padding: 0;                 /* Remove any padding */
    outline: none;              /* Remove focus outline */
}

/* Circle without a border */
.social-link img {
    width: 50px;                /* Set fixed width for icons */
    height: 50px;               /* Set fixed height for icons */
    object-fit: cover;          /* Maintain aspect ratio and fill the container */
    border-radius: 50%;         /* Makes the image round */
    display: block;  
    margin-top: -10px;      
    margin-left: -10px;     /* Ensures no extra space below the image */
}

/* Hover effects */
.social-link:hover {
    transform: scale(1.1);      /* Slightly enlarge icon on hover */
}

/* Remove the blue outline and background on focus */
.social-link:focus,
.social-link:hover {
    outline: none;              /* Prevent outline on focus */
    background-color: transparent; /* Ensure background remains transparent */
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .social-link img {
        width: 30px;            /* Smaller icons on small screens */
        height: 30px;           /* Smaller height on small screens */
    }
}



        </style>