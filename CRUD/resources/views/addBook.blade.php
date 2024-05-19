

<div class="header w-100 text-center mt-3">
  <h4>Book</h4>
 </div>
<form action="{{Route('save')}}" method="post"class="w-50" style="margin:0 auto;">
@csrf
  <div class="row">
    
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" id="" class="form-control" value="">
    
  </div>
  <div class="row">
    
      <label for="" class="form-label">Author</label>
      <input type="text" name="author" id="" class="form-control">
    
  </div>
  <div class="row">
    
      <label for="" class="form-label">Price</label>
      <input type="text" name="price" id="" class="form-control">
   
  </div>
  <div class="row mt-2">
   <input type="submit" class="btn btn-primary">
  </div>

</form>
