<?php

    $category = Request::segment(1);

 ?>

 @extends('layouts.app')

 @section('content')
     <div style="width:100vw">
         <div style="width:25%; margin:100px auto">
             <form>
                 <h2 style="border-bottom: 1px solid rgba(78, 78, 78, 0.65);margin:20px 0;padding: 0 0 20px 0;text-align: center">Order Creation</h2>
                 <h4>Category</h3>
                 <p><?= $category ?></p>
                 <div class="form-group">
                     <label for="order-id">Order ID</label>
                     <input type="text" id="order-id" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="user-name">User Name</label>
                     <input type="text" id="user-name" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="user-address">Address 1</label>
                     <input type="text" id="user-address" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="product-name">Product Name</label>
                     <input type="text" id="product-name" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="product-price">Product Price</label>
                     <input type="text" id="product-price" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="shipping-price">Shipping Price</label>
                     <input type="text" id="shipping-price" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="tax-price">Tax Price</label>
                     <input type="text" id="tax-price" value="" class="form-control">
                 </div>
                 <button class="btn btn-primary" type="submit">Create Product</button>
             </form>
         </div>
     </div>
 @endsection
