@extends('partial_layout.layout')
@section('content')
 
    @if(session()->has('status'))
    
    <p class="text-success text-center fw-bold">  {{session('status')}}</p>
    @endif
  
 <div class="header w-100 text-center">
  <h2>Book Crud</h2>
 </div>
 <form action="{{Route('search')}}" method="post">
  @csrf
<div class="row justify-content-end">
<div class="col-4">
    <input type="text" class="form-control" id="inputPassword2" name="id"placeholder="search id here...">
  </div>
  <div class="col-4">
    <button type="submit" class="btn btn-primary mb-3">search</button>
  </div>
</form>
</div>
 
 </form>
 <div class="table-wrapper m-auto w-50"style="height:300px;overflow:auto">
 <table class="table border" style="margin:0 auto;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Price</th>
      <th scope="col"class="text-center">Status</th>
    </tr>
  </thead>
  <tbody>
@if(session()->has('sdata'))
    <tr>
      <th scope="row">{{session('sdata')->id}}</th>
      <td>{{session('sdata')->title}}</td>
      <td>{{session('sdata')->author}}</td>
      <td>{{session('sdata')->price}}</td>
      <td class="d-flex justify-content-evenly"><form action="{{url('edit/')}}" method="post">@csrf<button type="submit" class="btn btn-warning"name="id"value="{{session('sdata')->id}}">edit</button></form><form action="{{Route('delete')}}" method="post">@csrf<button type="submit" class="btn btn-danger"name="id"value="{{session('sdata')->id}}">delete</button></form><form action="{{Route('view')}}" method="post">@csrf<button type="submit" class="btn btn-info"name="id"value="{{session('sdata')->id}}">view</button></form></td>
    </tr>
@else
@foreach($datas as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->author}}</td>
      <td>{{$data->price}}</td>
      <td class="d-flex justify-content-evenly"><form action="{{url('edit/')}}" method="post">@csrf<button type="submit" class="btn btn-warning"name="id"value="{{$data->id}}">edit</button></form><form action="{{Route('delete')}}" method="post">@csrf<button type="submit" class="btn btn-danger"name="id"value="{{$data->id}}">delete</button></form><form action="{{Route('view')}}" method="post">@csrf<button type="submit" class="btn btn-info"name="id"value="{{$data->id}}">view</button></form></td>
    </tr>
    @endforeach
@endif


    

  </tbody>
</table>
 </div>
@include('addBook');



@endsection


  