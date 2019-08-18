@extends('layout')

@section('title', 'Add new Customer')

@section('content')

<h1 class="pt-5">Add new customer</h1>

<div class="row">
    <div class="col-12">
        <form action="/customers" method="POST" class="pt-5">
            @include('customers.form')
            <button class="btn btn-success" type="submit">Add Customer</button>
        </form>
    </div>
</div>

<hr>

@endsection



