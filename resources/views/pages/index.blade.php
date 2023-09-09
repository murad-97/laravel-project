@extends('layouts.master')
@section('title' , 'Home')

@section('content')
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
                                "Through medical equipment donations, we're dedicated to 'Bringing Smiles to Millions,' improving lives, and enhancing healthcare worldwide."
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="carousel-item" >
                        <div class="carousel-img">
                            <img src="img/slider1.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text" >
                            <h1>HealthCare Heroes</h1>
                            <p>"Healthcare heroes consistently make a positive impact, bringing smiles to millions through their dedication and compassion in delivering quality healthcare."</p>
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
                            <h2>Helpz non-profit charity website</h2>
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
                                    Helpz is more than just a website; it's a compassionate community dedicated to creating positive change in healthcare. If you have gently used medical equipment that could make a difference in someone's life, we provide a seamless platform for you to donate and help those in need. For those who wish to contribute financially to healthcare initiatives, Helpz offers a range of trusted organizations and projects where your donations can have a direct impact. And if you or someone you know is seeking assistance, whether it's medical support, information, or resources, Helpz is here to connect you with the caring individuals and organizations ready to provide the support you deserve.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
At Helpz, our mission is to bridge the gap in healthcare accessibility through the power of generosity and community.
 We are driven by the belief that everyone, regardless of their circumstances, deserves access to quality medical equipment
  and services. Our platform serves as a conduit for goodwill, enabling individuals, institutions, and organizations to donate surplus medical resources, financial support, or services to those in need. By empowering underserved communities and fostering collaboration, we work towards reducing waste, promoting health equity, and ultimately, making healthcare a universal right.
                               </div>
                                <div id="tab-content-3" class="container tab-pane fade">
At Helpz, we envision a world where healthcare disparities are a thing of the past, and every individual, regardless
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
                                <p>Helpz provides a platform for individuals to donate gently used medical equipment.</p>
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
                                <p> Helpz connects people seeking assistance with healthcare resources and information </p>
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
                        <a href="pages.causes/{{ $item->id }}" class="btn btn-custom">Get Donations
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
                            <h3>Helpz Healthcare Consultation Day</h3>
                            <p>
                                Join us at Irbid Mall for a day dedicated to healthcare and community support! 
                                At Helpz Healthcare Consultation Day, we're here to provide guidance, answer your questions, and introduce
                                 you to the transformative world of Helpz, where healthcare assistance is just.
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
                            <h3>Helpz Community Health Awareness Day</h3>
                            <p>
                                Join us at Carfour Mall for a day of healthcare information and community support. At Helpz Community Health Awareness Day, we're here to share valuable insights about healthcare access and introduce you to Helpz's mission of making healthcare accessible to all.
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
                                    <a href="https://github.com/Husam-Odat" target="_blank" ><i class="fab fa-github"></i></a>
                                    <a href="https://www.facebook.com/husam0dat/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/husam-odat-b6312127a/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                                    <a href="https://www.facebook.com/mohammd.alghzawi"target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/mohammad-ghzawi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                            @if(Session::get('message_sent'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message_sent') }}
                                </div>
                            @endif
                            <form method="POST" action='{{ route('contact.send') }}'>
                                @csrf
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="msg" placeholder="Message" required="required"></textarea>
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
        
 
        
        
    

@endsection
