@extends('Dash.Master');

 @section('Title')
    edite category
 @endsection

 @section('content')

 <div class="content">

    <form  style="padding-top: 50px;" method="post" action="{{route('equipment.update',$data['id'])}}">
        @method('PUT')
        @csrf
        <h3 style="color: black">Add volunteer</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputname4">name</label>
                    <input type="name" name="name" value="{{ $data['volunteer_name'] }}" class="form-control white-input" id="inputname4" placeholder="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputState">description</label>
                    <input type="text" name="description" value="{{ $data['description'] }}" class="form-control white-input" id="inputname4" placeholder="name">

            </div>
        </div>
      
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputCity">Price</label>
                    <input name="price" type="number" value="{{ $data['price'] }}" class="form-control white-input" id="inputPrice">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputPicture">picture</label>
                    <input  name="picture" type="file" class="form-control white-input" id="inputPrice">

                     </div>
            </div>
           
        </div>
        <div style="padding-top: 10px;">
        <button type="submit" class="btn  btn-success" >Update Services</button>
        </div>
    </form>
    
</div>
    
</div>


@endsection