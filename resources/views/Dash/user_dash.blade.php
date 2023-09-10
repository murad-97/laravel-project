@extends('Dash.Master');

 @section('Title')
   Product
 @endsection

 @section('content')



 <div class="content">
    <!-- Navbar Start -->
 
    <!-- Navbar End -->




    <div class="container " style="margin-top: 50px;">
        <div class="table-wrap">
            <div class="d-flex justify-content-end ">
                {{-- <a href="" class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a> --}}
            </div>

            @if(Session::has('success'))
              <div class="alert alert-success "  style="background-color: red; color:white;" role="alert">

              {{Session::get('success')}}
            </div>
           @endif
            <table class="table table-responsive table-borderless">
                <thead>
                  
                    <th>&nbsp;</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password </th>
                    <th>action</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr class="align-middle alert border-bottom" role="alert">
                      
                        <td class="text-center">
                            <img class="pic"
                                src="./images/p1.PNG"
                                alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">{{$item->name}}</p>
                                
                            </div>
                        </td>
                        <td>
                            <div class="fw-600">{{$item->email}}</div>
                        </td>
                        <td class="d-">
                            <div class="fw-600">{{$item->password}}</div>
                            {{-- <input class="input" type="text" placeholder="{{$item->password}}"> --}}
                        </td>
                        <td> <a href="{{route('del',$item->id)}}" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                         </a>
                        </td>
                         {{-- <td> <a href="{{route('edit_job',$item->id)}}" class="btn btn-warning">
                            <i class="bi bi-pencil"></i> Update
                         </a></td> --}}
                    </tr>
                    @endforeach
                    {{-- <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <input type="checkbox" id="check">
                        </td>
                        <td class="text-center">
                            <img class="pic"
                                src="images/b10.PNG"
                                alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Uniquely You Sea Glass Necklace</p>
                                <p class="m-0 text-muted">Embrace the growth inspired by life’s challenging times </p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600">JOD 5.70</div>
                        </td>
                        <td class="d-">
                            <input class="input" type="text" placeholder="2">
                        </td>
                        <td>
                            JOD 11.40
                        </td>
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                    </tr> --}}
                    {{-- <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <input type="checkbox" id="check">
                        </td>
                        <td class="text-center">
                            <img class="pic"
                                src="images/b21.PNG"
                                alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Uniquely You Sea Glass Necklace</p>
                                <p class="m-0 text-muted">Embrace the growth inspired by life’s challenging times </p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600">JOD 5.70</div>
                        </td>
                        <td class="d-">
                            <input class="input" type="text" placeholder="9">
                        </td>
                        <td>
                            JOD 11.40
                        </td>
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                    </tr> --}}
                    {{-- <tr class="align-middle alert border-bottom" role="alert">
                        <td>
                            <input type="checkbox" id="check">
                        </td>
                        <td class="text-center">
                            <img class="pic"
                            src="images/b17.PNG"
                                alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold">Uniquely You Sea Glass Necklace</p>
                                <p class="m-0 text-muted">Embrace the growth inspired by life’s challenging times </p>
                            </div>
                        </td>
                        <td>
                            <div class="fw-600">JOD 5.70</div>
                        </td>
                        <td>
                            <input class="input" type="text" placeholder="4">
                        </td>
                        <td>
                            JOD 11.40
                        </td>
                        <td>
                            <div class="btn" data-bs-dismiss="alert">
                                <span class="fas fa-times"></span>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
           
        </div>
    </div>









  
</div>
<!-- Content End -->


 @endsection