@extends('home')
@section('title','edit')
@section('form_name','Edit customer')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-md-6 offset-md-3"  method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$customer->email}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$customer->phone}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{$customer->address}}">
                </div>
                <div class="form-group">
                    <label>Birthday</label>
                    <input type="text" class="form-control" placeholder="Y-m-d" name="birthday" value="{{$customer->birthday}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
