@extends('home')
@section('title','create customer')
@section('form_name','Create new a customer')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-md-6 offset-md-3" action="{{route('customers.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control
                        @if($errors->has('name'))
                        border-danger
                        @endif" name="name">
                    @if($errors->has('name'))
                        <span class="alert-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control
                     @if($errors->has('email'))
                        border-danger
                     @endif
                        " name="email">
                    @if($errors->has('email'))
                        <span class="alert-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control
                      @if($errors->has('phone'))
                        border-danger
                     @endif
                        " name="phone">
                    @if($errors->has('phone'))
                        <span class="alert-danger">{{$errors->first('phone')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control
                      @if($errors->has('address'))
                        border-danger
                      @endif
                        " name="address">
                    @if($errors->has('address'))
                        <span class="alert-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" class="form-control
                    @if($errors->has('birthday'))
                        border-danger
                    @endif
                        " placeholder="Y-m-d" name="birthday">
                </div>
                @if($errors->has('birthday'))
                    <span class="alert-danger">{{$errors->first('birthday')}}</span>
                @endif

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>
@endsection
