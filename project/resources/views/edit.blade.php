@extends('layouts.app')
@section('content')
 <div class="container">
     <form action="{{route('home.update',$user)}}" method="post">
    @method('PUT')
        @csrf
       
     <div class="row d-flex justify-content-center align-items-center" style="height:500px">
         <div class="col-3">
        <div class="form-group mb-3">
            <label for="name">NAME</label>
            <input id="name" class="form-control" type="text" name="name" value="{{old('name',$user->name)}}">
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="email">EMAIL</label>
            <input id="email" class="form-control" type="email" name="email" value="{{old('email',$user->email)}}">
            @error('email')
                {{$message}}
            @enderror
        </div>
        <div class="form-group">
        <button class="btn btn-primary" class="form-control" type="submit">UPDATE</button>
    </div>
</div>
     </div>
    </form>
 </div>
@endsection