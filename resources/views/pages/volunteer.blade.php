@extends('layouts.master')
@section('title' , 'volunteer')
  @section("content")  <!-- Top Bar End -->
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
                    <div class="causes-btn">
                        <a href="/volunteering item/{{ $volnteer->id }}" class="btn btn-custom btn-play" tabindex="0" >
                            <i class="far fa-grin-wink"></i> In-Kind Donations
                        </a>
                        <a href="/volunteering/{{ $volnteer->id }}" class="btn btn-custom btn-play" tabindex="0" >
                            <i class="fas fa-money-bill"></i> Cash Donations
                        </a>
                        
                    </div>   
                </div>
            </div>
        </div>
    @endsection


    <!-- Page Header Start -->
   
    
    <!-- Volunteer End -->


   