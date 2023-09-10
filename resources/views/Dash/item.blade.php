@extends('Dash.Master');

 @section('Title')
    Dashbored
 @endsection

 @section('content')


 <div class="container " style="margin-top: 50px;">
    <div class="table-wrap">


       
        <table class="table table-responsive table-borderless">
            <thead>
              
                <th>&nbsp;</th>
                <th>name</th>
                <th>email</th>
                <th>volunteer_name</th>
                <th>price</th>
                
       
                <th>&nbsp;</th>
            </thead>

            <tbody>
                @foreach ($users as  $user)
               
                <tr class="align-middle alert border-bottom" role="alert">
                  
                    <td class="text-center">
                        <img class="pic"
                            src="./images/p1.PNG"
                            alt="">
                    </td>
                    <td>
                        <div>
                            <p class="m-0 fw-bold">{{ $user->name}}</p>
                            
                        </div>
                    </td>
                   
                    <td class="d-">
                        <div class="fw-600">{{ $user->email}}</div>
                    </td>
                    <td class="d-">
                        <div class="fw-600">{{ $user->volunteer_name}}</div>
                        
                    </td>
                    <td class="d-">
                     <div class="fw-600">{{ $user->price}}</div>
                     
                 </td>
             
                
                </tr>
                @endforeach

 @endsection


