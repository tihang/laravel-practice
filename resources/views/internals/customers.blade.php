@extends('layout')

@section('content')

    <h1 class="pt-5">Customers</h1>

    <form action="/customers" method="POST" class="pb-5 pt-5">
        <div class="input-group">
            <input type="text" name="name" placeholder="Enter customer name">
        </div>
        
        <div class="container" style="color:red">
            {{ $errors -> first('name') }}
        </div>

        <div class="input-group">
            <input type="text" name="email" placeholder="Email address">
        </div>

        <div class="container" style="color:red">
            {{ $errors -> first('email') }}
        </div>
        

        <button type="submit">Add Customer</button>
        
        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} {{$customer->email}} </li>
        @endforeach
    </ul>

@endsection



