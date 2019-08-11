@extends('layout')

@section('content')

    <h1 class="pt-5">Customers</h1>

    <form action="/customers" method="POST" class="pb-5 pt-5">
        
        <p class="pt-4 pb-2">Name:</p>
        
        <div class="container">
            <div class="input-group">
                <input type="text" name="name" placeholder="Enter customer name" value="{{old('name')}}">
            </div>
            <p style="color:red">{{ $errors -> first('name') }}</p>
        </div>


        <p class="pt-4 pb-2">Email:</p>
        <div class="container pb-4">
            <div class="input-group">
                <input type="text" name="email" placeholder="Email address" value="{{old('email')}}">
            </div>
            <p style="color:red">{{ $errors -> first('email') }}</p>
        </div>

        <p>Phone:</p>
        <div class="container pb-5">
            <div class="input-group">
                <input type="text" name="phone" placeholder="Phone number" value="{{old('phone')}}">
            </div>
            <p style="color:red">{{ $errors -> first('phone')}}</p>
        </div>

        <button class="btn btn-success" type="submit">Add Customer</button>
        
        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} {{$customer->email}}   </li>
        @endforeach
    </ul>

@endsection



