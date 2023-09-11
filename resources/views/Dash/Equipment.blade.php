@extends('Dash.Master')

 @section('Title')
    Dashbored
 @endsection

 @section('content')


 

 <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="d-flex justify-content-end ">
                <a href="{{route('equipment.create')}}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i class="fa fa-plus  ms-2" ></i></a>
            </div>
            <table class="table">

                <thead>
                    <tr>
                        <th style="color: rgb(9, 9, 66);">Image</th>
                        <th style="color: rgb(9, 9, 66);">Name</th>						
                        <th style="color: rgb(9, 9, 66);">Description</th>
                        <th style="color: rgb(9, 9, 66);">Price</th>
                        <th style="color: rgb(9, 9, 66);">Action</th>
                        {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($equipment as  $equipment)
                    <tr>
                        
                        <td><a href="#"><img src="/images/{{$equipment->main_picture }}" width="100px" height="100px" alt="Avatar"></a></td>              
                        <td>{{ $equipment->volunteer_name}}</td>
                        <td>{{ $equipment->description}}</td>
                        <td>{{ $equipment->price}}</td>
                        <td>
                            <div style="display: grid; grid-template-columns: auto auto;">
                          <button class="btn" style="width: 51px; height:39px; margin:auto; background-color:rgba(165, 204, 247, 0.786); "><a href="{{ route('equipment.edit',$equipment->id) }}" class="settings" title="Settings" data-toggle="tooltip" ><i class="fa fa-edit " style="color: rgb(9, 9, 77);  font-size: 18px"></i></a> </button>
                            <form  method="POST" action="{{ route('equipment.destroy', $equipment->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete this product?')">
                                    <i class="fa fa-trash text-white" style="font-size: 17px"></i>
                                </button> 
                            </form>
                            </div>
                        </td>
                      
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
         
        </div>
    </div>
</div>



 @endsection