@extends('layouts.master')
@section('title' , 'Home')

@section("content")
    <!-- Page Header Start -->
   


    <!-- Service Start -->
    
    <!-- Service End -->


    <!-- Causes Start -->
    <div class="causes " style="margin-top: 30px">
        <div class="m-5" >
            <div class="section-header text-center">
                
                <h2>Let's know about charity causes around the world</h2>
            </div>
            <div class="row ">
                <!-- ================================================ -->
                <div class="col-lg-3 ">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form action="{{ route('pages.causes') }}" method="get">
                                    <input name="title" class="form-control" type="text"
                                        placeholder="Search Keyword" />
                                    <button type="submit" name="submit" class="btn"><small>Search</small> <i
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
                <div class="col-lg-9">
                    <div class="row">

                        @foreach ($products as $product)
                            <div class="col-lg-4  " style="padding: 10px 0px !important">
                                <div class="causes-item" style="margin: 0px 10px !important">
                                    <div class="causes-img">
                                        <img src="{{ asset('images/' . $product->main_picture) }}" alt="Image" />
                                    </div>
                                    <div class="causes-progress" >
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
                                        
                                        <a href="/categories/{{ $product->id }}" class="btn btn-custom btn-play">Donate Now</a>
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