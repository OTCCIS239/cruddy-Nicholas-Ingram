@extends('layouts.app')

@section('content')
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>View</th>
                <th>Edit</th>
                <th style="width:20px"><a class="btn btn-success" href="/{{$category}}/create">Create New</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>${{$product->price}}</td>
                    <td><a class="btn btn-primary" href="/{{$category}}/{{$product->id}}">View</a></td>
                    <td><a class="btn btn-primary" href="/{{$category}}/{{$product->id}}/edit">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
