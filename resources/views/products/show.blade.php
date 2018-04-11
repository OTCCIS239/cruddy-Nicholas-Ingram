@extends('layouts.app')

@section('content')
    <div style="margin: 80px 150px">
        <div style="float:left">
            <h2 class="mb-4 pb-2" style="border-bottom: 1px solid rgba(83, 83, 83, 0.72)">{{$productInfo['name']}}'s Real Description</h2>
            <p>{{$productInfo['description']}}</p>
        </div>
        <div class="pl-3 pt-5 pb-5" style="float:right;border-left:1px solid rgba(83, 83, 83, 0.72)">
            <h3>Price:</h3>
            <p>${{$productInfo['price']}}</p>
            <button class="btn btn-success" type="button">Add To Cart</button>
        </div>
    </div>
@endsection
