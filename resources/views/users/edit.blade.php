<?php

    $category = Request::segment(1);

 ?>

 @extends('layouts.app')

 @section('content')
     <div style="width:100vw">
         <div style="width:25%; margin:100px auto">
             <form method="post" action="/users/{{$user->id}}">
                 <input type="hidden" name="_method" value="PATCH">
                 {{csrf_field()}}

                <h2 style="border-bottom: 1px solid rgba(78, 78, 78, 0.65);margin:20px 0;padding: 0 0 20px 0;text-align: center">Edit User</h2>

                 @include('/users/form')

                 <button class="btn btn-primary" type="submit">Update User</button>
             </form>
         </div>
     </div>
 @endsection
