<link rel="stylesheet" href="{{asset('assetAdmin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetAdmin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assetAdmin/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assetAdmin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetAdmin/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetAdmin/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assetAdmin/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assetAdmin/images/favicon.png')}}" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
.dashboard {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  padding: 20px;
  
  border-radius: 5px;
}

.dashboard-link {
  text-decoration: none; /* Remove underline from links */
  color: #ffffff; /* White text color */
  margin: 10px;
  margin-top: 100px;
  padding: 15px;
  border-radius: 5px;
  width: 150px; /* Set a fixed width */
  height: 60px;
  text-align: center; /* Center the text */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  transition: transform 0.3s; /* Transition for hover effects */
}

.dashboard-link:hover {
  transform: translateY(-2px); /* Slight lift effect on hover */
}

/* Background colors for each link */
.posts {
  background-color: #007bff; /* Blue */
}

.users {
  background-color: #28a745; /* Green */
}

.comments {
  background-color: #ffc107; /* Yellow */
}

.categories {
  background-color: #17a2b8; /* Teal */
}

.writers {
  background-color: #dc3545; /* Red */
}

</style>
