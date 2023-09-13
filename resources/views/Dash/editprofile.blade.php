@extends('Dash.Master')

 @section('Title')
    edit admin
 @endsection

 @section('content')


    



 {{-- @if (session('success'))
 <div class="sweetalert-success" style="display: none;">
     {{ session('success') }}
 </div>
@endif

@if (session('error'))
 <div class="sweetalert-error" style="display: none;">
     {{ session('error') }}
 </div>
@endif --}}

<div class="content">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin:auto">
                <div class="signup-content">
                    <form method="post" action="{{route('profile.update',$data->id)}}" enctype="multipart/form-data"  id="signup-form"  class="signup-form">
                        @method('PUT')
                       @csrf
                        <h2 class="form-title mb-4" style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Update data</h2>
                        <div class="form-group">	
                            <input type="number" class="form-input" name="id" value="{{ $data->id}}" placeholder="Number of admin"/>
                          
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" value="{{ $data->name }}" id="name" placeholder="Name"/>
                            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}
                        </div>
                       
                      
                        <div class="form-group">	
                            <input type="email" class="form-input" name="email" value="{{ $data->email}}" placeholder="Email"/>
                          
                        </div>
                     
                     
                        
                           
                         
                     
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Add" style="color: rgb(10, 10, 105);"/>
                        </div>
                        
                          
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>






  
    
@endsection