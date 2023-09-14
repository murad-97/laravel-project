@extends('Dash.Master')

 @section('Title')
    Dashbored
 @endsection

 @section('content')


 <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            @if(Session::has('deleted'))
            <div class="d-flex justify-content-start deleted"  role="alert">
        
                {{Session::get('deleted')}}
            </div>

            @elseif(Session::has('success'))

            <div class="d-flex justify-content-start sucesses"  role="alert">
        
                {{Session::get('success')}}
            </div>
            @endif

            <div class="d-flex justify-content-end ">
                <a href="{{route('services.create')}}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i class="fa fa-plus  ms-2" ></i></a>
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

                    @foreach ($sercvvolnteer as  $sercvvolnteer)
                    <tr>
                        
                        <td><a href="#"><img src="/images/{{$sercvvolnteer->main_picture }}" width="100px" height="100px" alt="Avatar"></a></td>              
                        <td>{{ $sercvvolnteer->volunteer_name}}</td>
                        <td>
                            <div class="description-preview">
                                {{ substr($sercvvolnteer->description, 0, 100) }} <!-- Display first 50 characters -->
                                @if (strlen($sercvvolnteer->description) > 100)
                                <span class="show-more" onclick="showFullDescription(this)"><a href="{{ route('services.show', $sercvvolnteer->id) }}" class="show-more">...Show more</a>
                                </span>
                                <span class="full-description">{{ substr($sercvvolnteer->description, 100) }}</span> <!-- Hidden by default -->
                                @endif
                            </div>
                        </td>
                        <td>{{ $sercvvolnteer->price}}</td>
                        <td>
                            <div style="display: grid; grid-template-columns: auto auto;">
                          <button class="btn me-2" style="width: 51px; height:39px; margin:auto; background-color:rgba(165, 204, 247, 0.786); "><a href="{{ route('services.edit',$sercvvolnteer->id) }}" class="settings" title="Settings" data-toggle="tooltip" ><i class="fa fa-edit " style="color: rgb(9, 9, 77);  font-size: 18px"></i></a> </button>
                            <form  method="POST" action="{{ route('services.destroy', $sercvvolnteer->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
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

<script>
    function showFullDescription(element) {
        // Toggle visibility of full description
        const descriptionPreview = element.parentElement.querySelector('.description-preview');
        const fullDescription = descriptionPreview.querySelector('.full-description');
        fullDescription.style.display = 'block';

        // Hide "Show more" button
        element.style.display = 'none';
    }
</script>

<style>
    .full-description {
        display: none; /* Hide full description by default */
    }

    .show-more {
        color: blue;
        cursor: pointer;
    }
</style>
 @endsection