@extends('admin.index')

@section('data')

<div class="container mt-5">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Password</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$u->id}}</td>
                <td>{{$u->nama}}</td>
                <td>{{$u->email}}</td>
                <!-- <td>{{$u->password}}</td> -->
                <td>
                    <div>
                        <a href="/admin/users/delete/{{$u->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endSection