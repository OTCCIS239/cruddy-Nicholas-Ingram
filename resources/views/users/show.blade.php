<?php

    $id = Request::segment(2);

 ?>

 @extends('layouts.app')

 @section('content')
    <div style="width: 100vw">
        <div style="width: 25%;margin: 100px auto">
            <h3 style="text-align: center;border-bottom: 1px solid rgba(88, 88, 88, 0.61);padding-bottom: 20px;margin-bottom:20px">User Information</h3>
            <h4>User ID</h4>
            <p><?= $id ?></p>
            <h4>User Name</h4>
            <p>Nicholas Ingram</p>
            <h4>Email</h4>
            <p>ni0784722@otc.edu</p>
            <h4>Address 1</h4>
            <p>123 Whatever dr.</p>
            <h4>Order Amount</h4>
            <p>1</p>
        </div>
    </div>
 @endsection
