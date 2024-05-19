@extends('partial_layout.layout')
@section('content')
<div class="header w-100 text-center mt-2">
  <h4>Book Information</h4>
 </div>

<div class="view-wrappper w-50 m-auto text-capitalize">
<label for="" class="form-label">id </label>
<input class="form-control" type="text" value="{{$data->id}}" aria-label="Disabled input example" disabled readonly>
<label for="" class="form-label">Title </label>
<input class="form-control" type="text" value="{{$data->title}}" aria-label="Disabled input example" disabled readonly>
<label for="" class="form-label">Author </label>
<input class="form-control" type="text" value="{{$data->author}}" aria-label="Disabled input example" disabled readonly>
<label for="" class="form-label">price</label>
<input class="form-control" type="text" value="{{$data->price}}" aria-label="Disabled input example" disabled readonly>
<a href="{{Route('read')}}"><button class="btn btn-primary w-100 mt-2">back</button></a>

</div>
 </div>




 
@endsection