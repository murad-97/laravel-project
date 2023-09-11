@extends('Dash.Master')

 @section('Title')
   Product
 @endsection

 @section('content')


<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="d-flex justify-content-end ">
                <a href="{{route('services.create')}}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i class="fa fa-plus  ms-2" ></i></a>
            </div>
            <table class="table">

                <thead>
                    <tr>
                        <th style="color: rgb(9, 9, 66);">Id</th>
                        <th style="color: rgb(9, 9, 66);">Name</th>						
                        <th style="color: rgb(9, 9, 66);">Email</th>
                       
                        <th style="color: rgb(9, 9, 66);">Action</th>
                        {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $item)
                    <tr>
                        
                        <td>{{$item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email}}</td>
                        <td>
                           
                            <form  method="POST" action="{{ route('services.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete this product?')">
                                    <i class="fa fa-trash text-white" style="font-size: 17px"></i>
                                </button> 
                            </form>
                          
                        </td>
                      
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
         
        </div>
    </div>
</div>

 @endsection