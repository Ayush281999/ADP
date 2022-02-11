@extends('layouts.app')

@section('content')
<div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 850px;
">
<h1>View Products</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>category</td>
        <td>subcategory</td>
        <td>Name_of_the_Product</td>
        <td>Product_Price</td>
        <td>Product_Color</td>
        <td>Available_Stock</td>
        <td>Product_img</td>
        <td>Product_Description</td>
        <td>operation</td>

    </tr>
    @php
    $i=1;
    @endphp
    @foreach ($product as $item)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$item['category']}}</td>
        <td>{{$item['subcategory']}}</td>
        <td>{{$item['Name_of_the_Product']}}</td>
        <td>{{$item['Product_Price']}}</td>
        <td>{{$item['Product_Color']}}</td>
        <td>{{$item['Available_Stock']}}</td>
        <td>{{$item['Product_img']}}</td>
        <td>{{$item['Product_Description']}}</td>

        <td><a href={{"delete/".$item['id']}}>Delete</td>
    </tr>
    @endforeach
</table>
</div>
@endsection