@extends('layout')

@section('title', 'Edit customer ' . $customer->name)

@section('content')

    <div class="row">
            <div class="col-12">
                <form action="/customers/{{$customer->id}}" method="POST" class="pt-5">
                    @method('PATCH')
                    @include('customers.form')
                    <button class="btn btn-primary" type="submit">Update Customer</button>
                </form>
            </div>
    </div>
@endsection