@extends('layouts.app')

@section('content')
<h1>product</h1>
<form action="{{ route('product') }}" method="POST"enctype="multipart/form-data">
  @csrf
    <div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 500px;
">
        <h2>Add product</h2>
        <div class="form-si">
            <div class="row">
                <div class="col-sm-4">

                    <label for="exampleInputEmail1">Choose category:</label>
                    <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Choose category">
                    <small id="emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Product Price:</label>
                    <input type="text" class="form-control" name="Product_Price" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Product Price">
                    <small id="emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Product img:</label>
                    <input type="file" class="form-control" name="Product_img" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Product img">
                    <small id="emailHelp" class="form-text text-muted"></small>


                </div>
                <div class="col-sm-4">

                    <label for="exampleInputEmail1">Choose subcategory:</label>
                    <input type="text" class="form-control" name="subcategory" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Choose subcategory">
                    <small id="emailHelp" class="form-text text-muted"></small>


                    <label for="exampleInputEmail1">Product Color:</label>
                    <input type="text" class="form-control" name="Product_Color" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Product Color">
                    <small id="emailHelp" class="form-text text-muted"></small>




                </div>
                <div class="col-sm-4">

                    <label for="exampleInputEmail1">Name of the Product:</label>
                    <input type="text" class="form-control" name="Name_of_the_Product" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Name of the Product">
                    <small id="emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Available Stock:</label>
                    <input type="text" class="form-control" name="Available_Stock" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Available Stock">
                    <small id="emailHelp" class="form-text text-muted"></small>



                </div>
            </div>
            <div class="form-group " style="margin-right: 254px;">
                <label for="exampleFormControlTextarea1">Product Description:</label>
                <textarea class="form-control" name="Product_Description" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>


        </div>

    </div>
</form>
@endsection