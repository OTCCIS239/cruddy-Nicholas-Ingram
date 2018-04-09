<?php

    $category = Request::segment(2);

    if ($category == 'games') {
        $productName = 'Mass Effect';
        $productPrice = 10.99;
        $id = "g_me1";
    } else if ($category == 'consoles') {
        $productName = 'Dreamcast';
        $productPrice = 99.99;
        $id = "c_dreamcast";
    } else if ($category == 'accessories') {
        $productName = 'Playstation Eye Toy';
        $productPrice = 49.99;
        $id = "a_eyetoy";
    }

?>

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
                <td><?= $productName ?></td>
                <td>$<?= $productPrice ?></td>
                <td><button class="btn btn-primary" type="button" onclick="location.href='{{ url("/products/{$category}/$id") }}'">View</button></td>
            </tr>
        </tbody>
    </table>
@endsection
