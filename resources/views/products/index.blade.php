@extends('layouts.app')

@section('content')
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>View</th>
                <th style="width:20px"><button class="btn btn-success" type="button" onclick="location.href='{{ url("/products/{$category}/create") }}'">Create New</button></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $productInfo['name'] ?></td>
                <td>$<?= $productInfo['price'] ?></td>
                <td><button class="btn btn-primary" type="button" onclick="location.href='{{ url("/products/{$category}/{$productInfo['id']}") }}'">View</button></td>
            </tr>
        </tbody>
    </table>
@endsection
