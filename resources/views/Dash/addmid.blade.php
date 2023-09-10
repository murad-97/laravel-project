@extends('Dash.Master');

 @section('Title')
    edite category
 @endsection

 @section('content')


 <div class="container mt-5">
        
    <h1 class="mb-4">Product Information Form</h1>
    <form action="{{route('medicine.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
       
     

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" class="form-control" required>
        </div>

      
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" id="name" name="volunteer_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name"> Catgory:</label>
            <input type="text" id="name" name="category_id" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




@endsection