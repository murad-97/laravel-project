<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ</title>
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
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark nav-sticky ">
            <div class="container-fluid ">
                <a href="index.html" class="navbar-brand nav-sticky">Helpz</a>
                <button type="button" class="navbar-toggler nav-sticky" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon nav-sticky"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between nav-sticky" id="navbarCollapse">
                    <div class="navbar-nav ml-auto nav-sticky">
                        <a href="index.html" class="nav-item nav-link active nav-sticky">Home</a>
                        <a href="causes.html" class="nav-item nav-link nav-sticky">Our Services</a>
                        {{-- <a href="event.html" class="nav-item nav-link">Events</a> --}}
                        {{-- <a href="blog.html" class="nav-item nav-link">Blog</a> --}}
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="single.html" class="dropdown-item">Detail Page</a>
                                <a href="service.html" class="dropdown-item">What We Do</a>
                                <a href="team.html" class="dropdown-item">Meet The Team</a>
                                <a href="donate.html" class="dropdown-item">Donate Now</a>
                                <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                            </div>
                        </div> --}}
                        <a href="about.html" class="nav-item nav-link nav-sticky">About</a>
                        <a href="contact.html" class="nav-item nav-link nav-sticky">Contact</a>
                        <a href="#" class="nav-item nav-link nav-sticky">Login</a>
                        <a href="#" class="nav-item nav-link nav-sticky">Regester</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel ">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slider2.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Bringing smiles to millions</h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Get Involved with helping hand</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="carousel-item" >
                        <div class="carousel-img">
                            <img src="img/slider1.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text" >
                            <h1>HealthCare Heroes</h1>
                        
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/People holding charity medicine box flat vector illustration.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Helbz non-profit charity website</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    Helbz is more than just a website; it's a compassionate community dedicated to creating positive change in healthcare. If you have gently used medical equipment that could make a difference in someone's life, we provide a seamless platform for you to donate and help those in need. For those who wish to contribute financially to healthcare initiatives, Helbz offers a range of trusted organizations and projects where your donations can have a direct impact. And if you or someone you know is seeking assistance, whether it's medical support, information, or resources, Helbz is here to connect you with the caring individuals and organizations ready to provide the support you deserve.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
At Helbz, our mission is to bridge the gap in healthcare accessibility through the power of generosity and community.
 We are driven by the belief that everyone, regardless of their circumstances, deserves access to quality medical equipment
  and services. Our platform serves as a conduit for goodwill, enabling individuals, institutions, and organizations to donate surplus medical resources, financial support, or services to those in need. By empowering underserved communities and fostering collaboration, we work towards reducing waste, promoting health equity, and ultimately, making healthcare a universal right.
                               </div>
                                <div id="tab-content-3" class="container tab-pane fade">
At Helbz, we envision a world where healthcare disparities are a thing of the past, and every individual, regardless
 of their background,
 enjoys equal access to quality medical equipment and services. Our vision is to transform healthcare, foster innovation, 
 create sustainable impact, empower communities, and be a global force for good. Together, with unwavering dedication and the support of our community, we aim to turn this vision into a reality, creating a healthier, more equitable, and compassionate world for generations to come.                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/wheel-chair.png" width="50px" class="mt-4">
                            </div>
                            <div class="service-text">
                                <h3>Medical Equipment </h3>
                                <p>Helbez provides a platform for individuals to donate gently used medical equipment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/social-care.png" width="50px" class="mt-4">
                            </div>
                            <div class="service-text">
                                <h3>Community Support</h3>
                                <p> Helbez connects people seeking assistance with healthcare resources and information </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/campaign.png" width="55px" class="mt-4 ">
                            </div>
                            <div class="service-text">
                                <h3>Awareness</h3>
                                <p>We promote healthcare advocacy about important healthcare issues.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/give-money.png" width="55px" class="mt-4 ">
                            </div>
                            <div class="service-text">
                                <h3>Financial Donations</h3>
                                <p>We facilitate financial contributions to healthcare initiatives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/party.png" width="55px" class="mt-4 ">
                            </div>
                            <div class="service-text">
                                <h3>Event Coordination</h3>
                                <p> We organize and support events aimed at addressing healthcare challenges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="./img/community.png" width="55px" class="mt-4 ">
                            </div>
                            <div class="service-text">
                                <h3>Community Building</h3>
                                <p>A common goal of making a difference in healthcare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
 
        
        
    <!-- Facts Start -->
<div class="facts" data-parallax="scroll" data-image-src="img/istockphoto-1016780008-1024x1024-transformed.jpeg">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Achievements </p>
            {{-- <h2>Let's know how we can get the offerings and services</h2> --}}
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fas fa-cube"></i>
                  
                    <div class="facts-text">
                        <h3 class="facts-plus" data-toggle="counter-up">4000</h3>
                        <p>Items Donatedd</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-charity"></i>
                    <div class="facts-text">
                        <h3 class="facts-plus" data-toggle="counter-up">1000</h3>
                        <p>Healthcare Partners</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-kindness"></i>
                    <div class="facts-text">
                        <h3 class="facts-plus" data-toggle="counter-up">7000</h3>
                        <p>Lives Impacted</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-donation"></i>
                    <div class="facts-text">
                        <h3 class="facts-dollar" data-toggle="counter-up">30,000</h3>
                        <p>Total Donations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

        
        
        
        
        <!-- Causes Start -->
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>Let's know how we can get the offerings and services</h2>
        </div>
        <div class="row">
            @foreach ($category as $item )
            
                
            

            <div class="col-lg-4 col-md-6">
                <div class="causes-item d-flex flex-column h-100 w-100" class="img-cause img-fluid">
                    <div class="causes-img">
                        <img src="img/istockphoto-1343294992-1024x1024-transformed-removebg-preview (1).png" alt="Image" height="300px">
                    
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong>JOD15000</p>
                            <p><strong>Goal:</strong> JOD12000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}
                        </p>
                    </div>
                    <div class="causes-btn">
                        <a href="{{ $item->id }}" class="btn btn-custom">Get Donations
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Causes End -->

        <!-- Donate Start -->
        {{-- <div class="donate" data-parallax="scroll" data-image-src="img/imp2.PNG">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="options" checked> JOD10
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> JOD20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> JOD30
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                         
                        </div>
                    </div>
                   
                </div>
            </div>
        </div> --}}
        <!-- Donate End -->
        


        <!-- Event Start -->
{{-- <div class="event">
    <div class="container">
        <div class="section-header text-center">
            <p>Upcoming Events</p>
            <h2>Be ready for our upcoming charity events</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="event-item">
                    <div class="event-img">
                        <img src="img/event22-transformed.jpeg" alt="Image"  class="img-fluid">
                       
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <p><i class="fa fa-calendar-alt"></i>27-Sep-23</p>
                            <p><i class="far fa-clock"></i>6:00 - 10:00</p>
                            <p><i class="fa fa-map-marker-alt"></i>Irbid-Jordan</p>
                        </div>
                        <div class="event-text">
                            <h3>Helbz Healthcare Consultation Day</h3>
                            <p>
                                Join us at Irbid Mall for a day dedicated to healthcare and community support! 
                                At Helbz Healthcare Consultation Day, we're here to provide guidance, answer your questions, and introduce
                                 you to the transformative world of Helbz, where healthcare assistance is just.
                            </p>
                            <a class="btn btn-custom" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <div class="event-img">
                        <img src="img/l1.jfif" alt="Image" class="img-fluid">
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <p><i class="fa fa-calendar-alt"></i>10-Oct-23</p>
                            <p><i class="far fa-clock"></i>7:00 - 10:00</p>
                            <p><i class="fa fa-map-marker-alt"></i>Carfour-Irbid</p>
                        </div>
                        <div class="event-text">
                            <h3>Helbz Community Health Awareness Day</h3>
                            <p>
                                Join us at Carfour Mall for a day of healthcare information and community support. At Helbz Community Health Awareness Day, we're here to share valuable insights about healthcare access and introduce you to Helbz's mission of making healthcare accessible to all.
                            </p>
                            <a class="btn btn-custom" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Event End -->
<!-- Volunteer Start -->
        <div class="container">
            <div class="section-header text-center">
            <p>Become a Valounteer</p>
            <h2>Let’s make a difference in the lives of others</h2>
        </div>
            
            <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Partners</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/murad.jpg" alt="Team Image" class="img-fluid">
                            </div>
                            <div class="team-text">
                                <h2>Murad Alzeroo</h2>
                                <p>Full stuck developer</p>
                                <div class="team-social">
                                    <a href="https://github.com/murad-97" target="_blank"><i class="fab fa-github"></i></a>
                                    <a href="https://www.facebook.com/muradalshorman136" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/murad-ashorman-38a608228/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/qasem (2).jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Qasem AL-Zou'bi</h2>
                                <p>Full stuck developer</p>
                                <div class="team-social">
                                    <a href="https://github.com/qasemzoubii" target="_blank"><i class="fab fa-github"></i></a>
                                    <a href="https://www.facebook.com/qasemzo3bii" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/qasem-zo3bi/" target="_blank" ><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/shatha.jpg" class="img-fluid" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Shatha Rababah</h2>
                                <p>Telecom Engineering</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-github"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/husam.jfif" alt="Team Image" class="img-fluid">
                            </div>
                            <div class="team-text">
                                <h2>Husam Al-odat</h2>
                                <p>Full stuck developer</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-github"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/mohammed.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Mohammed Ghzawi</h2>
                                <p>Full stuck developer</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-github"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/shatha.jpg" class="img-fluid" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Shatha Rababah</h2>
                                <p>Telecom Engineering</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-github"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
        <!-- Team End -->
    
        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="./img/woww2.PNG">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Get In Touch</p>
                                <h2>Contact for any query</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    "For any questions or additional information, please do not hesitate to contact us. We're here to assist you and ensure you have all the information you need!"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Contact</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
 
        
        
       


        <!-- Blog Start -->
        {{-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Achievements</p>
                    <h2>Latest news & articles directly from our achevmient</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>30th Street, Irbid, Jordan</p>
                            <p><i class="fa fa-phone-alt"></i>+962 78 7656330</p>
                            <p><i class="fa fa-envelope"></i>info@helpz.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                {{-- <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a> --}}
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
                            <a href="">Our Services</a>
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
                        <p>&copy; <a href="#">HELEPZ</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        {{-- <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        {{-- <div id="loader" class="show">
            <div class="loader"></div>
        </div> --}}

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
