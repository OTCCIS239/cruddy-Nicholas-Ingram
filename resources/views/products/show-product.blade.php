<?php

    $id = Request::segment(3);

    if ($id == "g_me1") {
        $productName = "Mass Effect";
        $description = "The best Mass Effect game out there. If you dissagree your opinion doesn't matter because it's the wrong one.";
        $price = 10.99;
    } else if ($id == "c_dreamcast") {
        $productName = "Dreamcast";
        $description = "Big swirly orange circle and plays the big fast blue hog.";
        $price = 99.99;
    } else if ($id == "a_eyetoy") {
        $productName = "Playstation Eye Toy";
        $description = "Better then the Kinect.";
        $price = 49.99;
    }

 ?>

@extends('layouts.app')

@section('content')
    <div style="margin: 80px 150px">
        <div style="float:left">
            <h2 class="mb-4 pb-2" style="border-bottom: 1px solid rgba(83, 83, 83, 0.72)"><?= $productName ?>'s Real Description</h2>
            <p><?= $description ?></p>
        </div>
        <div class="pl-3 pt-5 pb-5" style="float:right;border-left:1px solid rgba(83, 83, 83, 0.72)">
            <h3>Price:</h3>
            <p>$<?= $price ?></p>
            <button class="btn btn-success" type="button">Add To Cart</button>
        </div>
    </div>
@endsection
