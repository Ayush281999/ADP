@extends('layouts.app')

@section('content')

 
<form action="{{ url('subcategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
<div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 850px;
">
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif
<h2>Add subcategory</h2>
      <div class="form-si">
    <label for="exampleInputEmail1"> Choose Category</label>
    <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category">
    <small id="emailHelp" class="form-text text-muted"></small>

    <label for="exampleInputEmail1">Add subcategory</label>
    <input type="text" class="form-control" name="subcategory" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter subcategory">
    <small id="emailHelp" class="form-text text-muted"></small>

    <label for="exampleInputEmail1">img</label>
    <input type="file" class="form-control" name="img" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add image">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Add SubCategory</button>
</div>
</form>
@endsection
