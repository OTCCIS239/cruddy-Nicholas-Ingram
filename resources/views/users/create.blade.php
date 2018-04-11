<?php

    $category = Request::segment(1);

 ?>

 @extends('layouts.app')

 @section('content')
     <div style="width:100vw">
         <div style="width:25%; margin:100px auto">
             <form>
                 <h2 style="border-bottom: 1px solid rgba(78, 78, 78, 0.65);margin:20px 0;padding: 0 0 20px 0;text-align: center">User Creation</h2>
                 <h4>Category</h3>
                 <p><?= $category ?></p>
                 <div class="form-group">
                     <label for="user-id">User ID</label>
                     <input type="text" id="user-id" value="" class="form-control">
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
                     <label for="email">Email Address</label>
                     <input type="email" id="email" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="password1">Password</label>
                     <input type="password" id="password1" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="password2">Re-Enter Password</label>
                     <input type="password" id="password2" value="" class="form-control">
                 </div>
                 <button class="btn btn-primary" type="submit">Create Product</button>
             </form>
         </div>
     </div>
 @endsection
