@extends('layout')

@section('title', 'Details for ' . $customer->name)

@section('content')
    
<div class="container pt-5">
    <div class="row">
        <div class="col-12 pb-4">
            <h4>Details for {{$customer->name}}</h4>
            <a class="btn btn-info" href="/customers/{{$customer->id}}/edit">Edit</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
        <p><strong>Name: </strong> {{$customer->name}}</p>
            <p><strong>Email: </strong> {{$customer->email}}</p>
            <p><strong>Phone: </strong> {{$customer->phone}}</p>
            <p><strong>Company: </strong>{{$customer->company->name}}</p>
        </div>
    </div>
</div>
    
<a href="/customers" class="btn btn-secondary">Done</a>

@endsection