@extends('layout')

@section('title', 'Customers List')

@section('content')

<h1 class="pt-5">Customers List</h1>
<p><a href="/customers/create">Create customer</a></p>

<hr>

@foreach ($customers as $customer )
    <div class="row">
        <div class="col-2">{{$customer->id}}</div>
        <div class="col-4"><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></div>
        <div class="col-4">{{$customer->email}}</div>
        <div class="col-2">{{$customer->active}}</div>
    </div>
@endforeach

{{-- 
<div class="row">
    <div class="col-6">
        <h3>Active Customers</h3>
        @foreach ($activeCustomers as $activeCustomer )
            <li> {{$activeCustomer->name}} || {{$activeCustomer->company->name}} || {{$activeCustomer->phone}}</li>
        @endforeach
    </div>

    <div class="col-6">
        <h3>Inactive Customers</h3>
        @foreach ($inactiveCustomers as $inactiveCustomer )
            <li> {{$inactiveCustomer->name}} || {{$inactiveCustomer->company->name}} || {{$inactiveCustomer->phone}}</li>
        @endforeach
        </div>
</div> --}}
<br><br>

@endsection



