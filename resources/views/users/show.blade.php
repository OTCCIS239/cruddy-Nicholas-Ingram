@extends('layouts.app')

 @section('content')
    <div style="width: 100vw">
        <div style="width: 25%;margin: 100px auto">
            <h3 style="text-align: center;border-bottom: 1px solid rgba(88, 88, 88, 0.61);padding-bottom: 20px;margin-bottom:20px">User Information</h3>
            <h4>User ID</h4>
            <p>{{$user->id}}</p>
            <h4>User Name</h4>
            <p>{{$user->name}}</p>
            <h4>Email</h4>
            <p>{{$user->email}}</p>
            <h4>Address 1</h4>
            <p>{{$user->shipping_address}}</p>
            <form action="/users/{{$user->id}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}

                <button class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
 @endsection
