@extends('partial_layout.layout')
@section('content')
<div class="header w-100 text-center mt-2">
  <h4>Update Book</h4>
 </div>
<form action="{{Route('update')}}" method="post"class="w-50" style="margin:0 auto;">
@csrf
<input type="hidden" name="id"value="{{$id->id}}">
  <div class="row">
    
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" id="" class="form-control" value="{{$id->title}}">
    
  </div>
  <div class="row">
    
      <label for="" class="form-label">Author</label>
      <input type="text" name="author" id="" class="form-control"value="{{$id->author}}">
    
  </div>
  <div class="row">
    
      <label for="" class="form-label">Price</label>
      <input type="text" name="price" id="" class="form-control"value="{{$id->price}}">
   
  </div>
  <div class="row mt-2">
   <input type="submit" value="Update" class="btn btn-primary">
  </div>

</form>
@endsection