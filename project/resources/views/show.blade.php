@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('home.ShowAdd',$user)}}" method="post">
            @csrf
        <div class="row d-flex justify-content-center align-items-center"style="height:500px">
            <div class="col-3 ">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input id="email" class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                    <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
    </div>
@endsection