@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <!-- Page Header Start -->



    <!-- Service Start -->

    <!-- Service End -->


    <!-- Causes Start -->
    <div class="causes " style="margin-top: 30px">
        <div class="m-5">
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
                                        <li><a href="/pages.causes/{{ $category->id }}">{{ $category->name }}</a>
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
                                        <img src="{{ asset("images/$product->main_picture") }}" alt="Image" />
                                    </div>
                                    <div class="causes-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                        <div class="progress-text">
                                            <p><strong>Raised:</strong> $0</p>
                                            <p><strong>Goal:</strong> ${{ $product->price }}</p>
                                        </div>
                                    </div>
                                    <div class="causes-text read-more-container">
                                        <h3>{{ $product->shortname }}</h3>
                                        <p>
                                            {{ $product->truncated_description }}<span
                                                class="read-more-text">{{ $product->showmore_description }} </span>
                                        </p>
                                        <span class="read-more-btn">Read More...</span>
                                    </div>
                                    <div class="causes-btn">

                                        <a href="/categories/{{ $product->id }}" class="btn btn-custom btn-play">Donate
                                            Now</a>
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
    <script>
        //         const parentContainer =  document.querySelector('.read-more-container');

        // parentContainer.addEventListener('click', event=>{

        //     const current = event.target;

        //     const isReadMoreBtn = current.className.includes('read-more-btn');

        //     if(!isReadMoreBtn) return;

        //     const currentText = event.target.parentNode.querySelector('.read-more-text');

        //     currentText.classList.toggle('read-more-text--show');

        //     current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

        // })

        const readMoreButtons = document.querySelectorAll('.read-more-btn');

        readMoreButtons.forEach(button => {
            button.addEventListener('click', event => {
                const current = event.target;
                const currentText = current.parentNode.querySelector('.read-more-text');
                currentText.classList.toggle('read-more-text--show');
                current.textContent = current.textContent.includes('Read More') ? "Read Less..." :
                    "Read More...";
            });
        });
    </script>

    <!-- Footer Start -->
@endsection
