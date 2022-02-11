@include('header')
@include('sideheader')
<h1>subCategory</h1>
 
<form action="{{ url('coustomer') }}" method="POST">
            @csrf
<div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 850px;
">
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif
<h2>Add Coustomer</h2>
      <div class="form-si">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted"></small>

    <label for="exampleInputEmail1">email</label>
    <input type="text" class="form-control" name="subcategory" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Add coustomer</button>
</div>
</form>