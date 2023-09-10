@extends('layouts.master')
@section('title' , 'Home')

@section("content")
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Popular Causes</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Causes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                            <i class="flaticon-diet"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthy Food</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Pure Water</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Health Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Primary Education</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Residence Facilities</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Causes Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Popular Causes</p>
                <h2>Let's know about charity causes around the world</h2>
            </div>
            <div class="row">
                <!-- ================================================ -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form action="{{ route('pages.causes') }}" method="get">
                                    <input name="title" class="form-control" type="text"
                                        placeholder="Search Keyword" />
                                    <button type="submit" name="submit" class="btn">Search<i
                                            class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Categories</h2>

                            <div class="category-widget">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="/pages.causes/{{ $category->id }}">{{ $category->name }}</a>
                                        </li>

                                        
                                    @endforeach




                                </ul>
                            </div>
                            </form>
                        </div>

                        
                    </div>
                </div>

                <!-- ======================================= -->
                <div class="col-lg-8">
                    <div class="row">

                        @foreach ($products as $product)
                            <div class="col-lg-6">
                                <div class="causes-item">
                                    <div class="causes-img">
                                        <img src="img/causes-1.jpg" alt="Image" />
                                    </div>
                                    <div class="causes-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <span>85%</span>
                                            </div>
                                        </div>
                                        <div class="progress-text">
                                            <p><strong>Raised:</strong> $100000</p>
                                            <p><strong>Goal:</strong> {{ $product->price }}</p>
                                        </div>
                                    </div>
                                    <div class="causes-text">
                                        <h3>{{ $product->volunteer_name }}</h3>
                                        <p>
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                    <div class="causes-btn">
                                        <a href="/categories/{{ $product->id }}" class="btn btn-custom">Learn More</a>
                                        <a href="/categories/{{ $product->id }}" class="btn btn-custom">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- //=================================================================== -->
            
        </div>
    </div>
    <!-- Causes End -->
    <div style="margin-left:50% ;">
        <div class="row ">{{ $products->links() }} </div>
    </div>

    <!-- Footer Start -->
   @endsection