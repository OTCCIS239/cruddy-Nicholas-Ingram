@extends('layouts.app')

@section('content')
    <div style="margin: 80px 150px">
        <div style="float:left;width:60%">
            <h2 class="mb-4 pb-2" style="border-bottom: 1px solid rgba(83, 83, 83, 0.72)">{{$product->name}}'s Description</h2>
            <p>{{$product->description}}</p>
        </div>
        <div class="pl-3 pt-5 pb-5" style="float:right;border-left:1px solid rgba(83, 83, 83, 0.72);width:20%">
            <h3>Condition:</h3>
            <p>{{$product->condition}}</p>
            <?php if($category != 'consoles'): ?>
                <h3>Console:</h3>
                <p>{{$product->console_for}}</p>
            <?php endif; ?>
            <h3>Price:</h3>
            <p>${{$product->price}}</p>
            <button class="btn btn-success" type="button">Add To Cart</button>
        </div>
    </div>
@endsection
