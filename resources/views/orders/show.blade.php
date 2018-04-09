<?php
    $id = Request::segment(2);
 ?>

@extends('layouts.app')

@section('content')
    <div style="margin: 80px 500px">
        <div style="float:left;width: 60%">
            <h2 class="mb-4 pb-2" style="border-bottom: 1px solid rgba(83, 83, 83, 0.72);text-align: center">Order Description</h2>
            <h4>Order ID</h4>
            <p><?= $id ?></p>
            <h4>User Name</h4>
            <p>Nicholas Ingram</p>
            <h4>User Address</h4>
            <p>123 Whatever Dr.</p>
            <h4>Status</h4>
            <p>Delivered</p>
            <h4>Order Summary</h4>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mass Effect 1</td>
                        <td>$10.99</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pl-3 pt-5 pb-5" style="float:right;border-left:1px solid rgba(83, 83, 83, 0.72)">
            <h3>Price:</h3>
            <p>Shipping: $4.00</p>
            <p>Tax: $0.00</p>
            <p>Total: $14.99</p>
        </div>
    </div>
@endsection
