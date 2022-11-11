<form role="form" method="POST" action="{{ route('admin_Alumni_Association_image_insert') }}" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="image">Select_Img</label>
        <input type="text" class="form-control"  id="name" name="name"  value="">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>