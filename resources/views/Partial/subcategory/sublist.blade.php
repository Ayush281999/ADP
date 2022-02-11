@extends('layouts.app')

@section('content')
<div class="form-group, style=" margin-left:270px;="" style="
    margin-left: 270px;
    margin-right: 850px;
">
<h1>View subcategory</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>category</td>
        <td>subcategory</td>
        <td>img</td>
        <td>operation</td>

    </tr>
    @php
    $i=1;
    @endphp
    @foreach ($subcategory as $item)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$item['category']}}</td>
        <td>{{$item['subcategory']}}</td>
        <td><img src="{{$item['img']}}"></td>
        <td><a href={{"delete/".$item['id']}}>Delete</td>
    </tr>
    @endforeach
</table>
</div>
@endsection