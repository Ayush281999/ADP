@include('header')
@include('sideheader')
<h1>Update Category</h1>
<form action="{{ route('showdata') }}" method="POST">
            @csrf
<div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 850px;
">
      <div class="form-si">
    <label for="exampleInputEmail1">Add Category</label>
    <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Update record</button>
</div>
</form>
