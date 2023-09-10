@extends('Dash.Master');

 @section('Title')
 category
 @endsection

 @section('content')


 <div class="container " style="margin-top: 50px;">
    <div class="table-wrap">
        <div class="d-flex justify-content-end ">
            <a href="{{route('category.create')}}" class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
        </div>

        {{-- @if(Session::has('success'))
          <div class="alert alert-success "  style="background-color: red; color:white;" role="alert">
            <a class="btn btn-info" style="color: white" href="{{route('Dash.addservice')}}">+Add new fruit</a>
          {{Session::get('success')}}
        </div> --}}
       

	


        <table class="table table-responsive table-borderless">
            <thead>
              
                <th>&nbsp;</th>
                <th>name</th>
                
                <th>image</th>
                <th>description</th>
                <th>id</th>
                <th>action</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($allcat as  $allcat)
               
                <tr class="align-middle alert border-bottom" role="alert">
                  
                    <td class="text-center">
                        <img class="pic"
                            src="./images/p1.PNG"
                            alt="">
                    </td>
                    <td>
                        <div>
                            <p class="m-0 fw-bold">{{ $allcat->name}}</p>
                            
                        </div>
                    </td>
                   
                    <td class="d-">
                        <div class="fw-600">{{ $allcat->description}}</div>
                        {{-- <input class="input" type="text" placeholder="{{ $allcat->password}}"> --}}
                    </td>
                    
                    <td class="d-">
                        <div class="fw-600">{{ $allcat->image}}</div>
                        {{-- <input class="input" type="text" placeholder="{{ $allcat->password}}"> --}}
                    </td>
                    <td class="d-">
                        <div class="fw-600">{{ $allcat->id}}</div>
                        {{-- <input class="input" type="text" placeholder="{{ $allcat->password}}"> --}}
                    </td>
                    <td> 
                        <form action="{{route('category.destroy',$allcat->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class=" btn fa fa-trash text-danger" onclick="return confirm('Are you sure to delete this product?')"></button>
                      </form> </td>
                    <td><a  href="{{ route('category.edit',$allcat->id) }}"><i class="fa-regular fa-pen-to-square fa-lg" style="color: #ff841f;"></i></a></td>
                   
                </tr>
                @endforeach
                

 @endsection