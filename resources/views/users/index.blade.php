@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>View</th>
            <th style="width:20px"><button class="btn btn-success" type="button" onclick="location.href='{{ url("/users/create") }}'">Create New</button></th>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Nicholas Ingram</td>
                <td>ni0784722@otc.edu</td>
                <td><button class="btn btn-primary" type="button" onclick="location.href='{{ url("/users/01") }}'">View</button></td>
            </tr>
        </tbody>
    </table>
@endsection
