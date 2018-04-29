@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <th>Order ID</th>
            <th>User Name</th>
            <th>User Address</th>
            <th>View</th>
            <th style="width:20px"><button class="btn btn-success" type="button" onclick="location.href='{{ url("/orders/create") }}'">Create New</button></th>
        </thead>
        <tbody>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td>{{$order['id']}}</td>
                    <td>{{$order['name']}}</td>
                    <td>{{$order['address']}}</td>
                    <td><button class="btn btn-primary" type="button" onclick="location.href='/orders/01'">View</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
