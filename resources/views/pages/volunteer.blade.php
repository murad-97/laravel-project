<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset("css/volunteer.css") }}" rel="stylesheet">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    </head>


    <body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+123 456 7890</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
<div class="about p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="about-img align-items-center"  ><img class=" col-12 " src="{{ asset("img/People holding charity medicine box flat vector illustration.jpg") }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                          
                            <h2>{{ $volnteer->volunteer_name }}</h2>
                        </div>
                        <hr>
                        <div class="about-tab">
                            

                            <div class="tab-content">
                                <div class="p-list">
                                    <span> DONATIONS: <i class="fa fa-inr"></i> </span>
                                 
                                </div>
                                <div class="causes p-0">
                                    <div class="causes-progress m-0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ intval(($price / $volnteer->price) * 100) }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <span>{{ intval(($price / $volnteer->price) * 100) }}%</span>
                                            </div>
                                        </div>
                                        <div class="progress-text" style="display: flex;justify-content:space-between">
                                            <p ><strong>Raised:</strong> JOD{{ $price }}</p>
                                            <p><strong>Goal:</strong> JOD{{ $volnteer->price }}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="tab-content-1" class="container tab-pane active">
                                    {{ $volnteer->description }} 
                                </div>
                                
                               <hr>
                        </div>
                    </div>
                    <div class="_p-add-cart m-3">
                        <button class="btn btn-custom" tabindex="0" style="color: black">
                            <i class="far fa-grin-wink"></i> In-Kind Donations
                        </button>
                        <button class=" causes-btn btn btn-custom" tabindex="0" style="color: black">
                            <i class="fas fa-money-bill"></i> Cash Donations
                        </button>
                        <input type="hidden" name="pid" value="18" />
                        <input type="hidden" name="price" value="850" />
                        <input type="hidden" name="url" value="" />
                    </div>   
                </div>
            </div>
        </div>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Helpz</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="causes.html" class="nav-item nav-link">Causes</a>
                    <a href="event.html" class="nav-item nav-link">Events</a>
                    <a href="blog.html" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="single.html" class="dropdown-item">Detail Page</a>
                            <a href="service.html" class="dropdown-item">What We Do</a>
                            <a href="team.html" class="dropdown-item">Meet The Team</a>
                            <a href="donate.html" class="dropdown-item">Donate Now</a>
                            <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
   
    
    <!-- Volunteer End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <h2>Our Head Office</h2>
                        <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope"></i>info@example.com</p>
                        <div class="footer-social">
                            <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Popular Links</h2>
                        <a href="">About Us</a>
                        <a href="">Contact Us</a>
                        <a href="">Popular Causes</a>
                        <a href="">Upcoming Events</a>
                        <a href="">Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Useful Links</h2>
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-newsletter">
                        <h2>Newsletter</h2>
                        <form>
                            <input class="form-control" placeholder="Email goes here">
                            <button class="btn btn-custom">Submit</button>
                            <label>Don't worry, we don't spam!</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
 
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{ asset("lib/counterup/counterup.min.js") }}"></script>
    <script src="{{ asset("lib/parallax/parallax.min.js") }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset("mail/jqBootstrapValidation.min.js") }}"></script>
    <script src="{{ asset("mail/contact.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
