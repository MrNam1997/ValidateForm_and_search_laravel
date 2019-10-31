@extends('home')
@section('title','search')
@section('content')
    <div class="container">
        <div class="col-md-4 offset-md-4">
            @if(session('status'))
                <h3 align="center" class="alert alert-success">{{session('status')}}</h3>
            @endif
        </div>
        <div class="row text-center col-md-12">
            <a href="{{route('customers.create')}}" class="btn btn-primary">Create</a>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Option</th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers)== 0)
                    <tr class="text-center">
                        <td colspan="7">No data</td>
                    </tr>
                @else
                    @foreach($customers as $key=>$customer)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->birthday}}</td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning">Edit</a>
                                &nbsp;
                                &nbsp;
                                <a onclick="confirm('Do you want to delete')"
                                   href="{{route('customers.delete',$customer->id)}}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                @endforeach
                @endif
            </table>
            <p>{{$customers->links()}}</p>
        </div>

    </div>

@endsection
