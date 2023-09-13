@extends('Dash.Master')

 @section('Title')
 category
 @endsection

 @section('content')



                


                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="d-flex justify-content-end ">
                                <a href="{{route('category.create')}}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i class="fa fa-plus  ms-2" ></i></a>
                            </div>
                            <table class="table">
    
                                <thead>
                                    <tr >
                                        <th style="color: rgb(9, 9, 66);">id</th>
                                        <th style="color: rgb(9, 9, 66);">Image</th>
                                        <th style="color: rgb(9, 9, 66);">Name</th>						
                                        <th style="color: rgb(9, 9, 66);">Description</th>
                                        <th style="color: rgb(9, 9, 66);">Action</th>
                                        <th style="color: rgb(9, 9, 66);">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($allcat as  $allcat)
                                    <tr>
                                        <td>{{ $allcat->id}}</td>
                                        <td><a href="#"><img src="/images/{{ $allcat->image }}" width="100px" height="100px" alt="Avatar"></a></td>              
                                        <td>{{ $allcat->name}}</td>
                                        <td>{{ $allcat->description}}</td>
                                        <td>
                                            <div style="display: grid; grid-template-columns: auto auto;">
                                          <button class="btn" style="width: 51px; height:39px; margin:auto; background-color:rgba(165, 204, 247, 0.786); "><a href="{{ route('category.edit',$allcat->id) }}" class="settings" title="Settings" data-toggle="tooltip" ><i class="fa fa-edit " style="color: rgb(9, 9, 77);  font-size: 18px"></i></a> </button>
                                            <form  method="POST" action="{{ route('category.destroy', $allcat->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete this product?')">
                                                    <i class="fa fa-trash text-white" style="font-size: 17px"></i>
                                                </button> 
                                            </form>
                                            </div>
                                        </td>
                                      
    
                                            <!-- <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fas fa-cog"></i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>   -->
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>


                
 @endsection