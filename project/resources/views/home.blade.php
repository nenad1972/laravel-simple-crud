@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td> <a href="{{route('home.edit',$item)}}" class="btn btn-link">Edit/Update</a></td>
                <form action="{{route('home.delete',$item)}}" method="post">
                    @method('DELETE')   
                    @csrf
                <td> <button type="submit" class="btn btn-link">Delete</button></td>
                </form>
                <td> <a href="{{route('home.ShowAdd',$item)}}" class="btn btn-link">Show/create</a></td>
              </tr>
            @endforeach
       
       
        </tbody>
      </table>
</div>
@endsection