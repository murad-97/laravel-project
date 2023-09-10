@extends('Dash.Master');

 @section('Title')
    edite category
 @endsection

 @section('content')

 <div class="content">

    <form  style="padding-top: 50px;" method="post" action="{{route('edite_category', $data['id'])}}">
        @csrf
        <h3 style="color: black">Add volunteer</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputname4">name</label>
                    <input type="name" name="name" class="form-control white-input" id="inputname4" value="{{ $data['name'] }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputPicture">picture</label>
                    <input value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52qqyY2Mosgxt-Pt00pZy4TqIhCanFTwyLwC-D0z5&s" name="image" type="file" class="form-control white-input" id="inputPrice">

                     </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">description</label>
             <textarea value="{{ $data['description'] }}" name="description"  class="form-control white-input" id="" cols="30" rows="3"></textarea>
            {{-- <input type="text" class="form-control white-input" id="description" placeholder="Description"> --}}
        </div>
        
        
        <div style="padding-top: 10px;">
        <button type="submit" class="btn  btn-success" >Add Category</button>
        </div>
    </form>
    
</div>


@endsection