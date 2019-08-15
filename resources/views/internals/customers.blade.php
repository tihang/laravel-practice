@extends('layout')

@section('title', 'Customers List')

@section('content')

<h1 class="pt-5">Customers List</h1>

<div class="row">
    <div class="col-12">
        <form action="/customers" method="POST" class="pt-5">

            <div class="container pb-4">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter customer name" value="{{old('name')}}">
                </div>
                <p style="color:red">{{ $errors -> first('name') }}</p>
            </div>
    
    
            <div class="container pb-4">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" placeholder="Email address" value="{{old('email')}}">
                </div>
                <p style="color:red">{{ $errors -> first('email') }}</p>
            </div>
    
    
            <div class="container pb-4">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input maxlength="11" class="form-control" type="text" name="phone" placeholder="Phone number" value="{{old('phone')}}">
                </div>
                <p style="color:red">{{ $errors -> first('phone')}}</p>
            </div>

            <div class="container pb-4">
                <div class="form-group">
                        <label for="company_id">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="container pb-5">
                <div class="form-group">
                        <label for="active">Status</label>
                        <select name="active" id="active" class="form-control">
                                <option value="" disabled>Select customer status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                        </select>
                </div>
            </div>
    
            <button class="btn btn-success" type="submit">Add Customer</button>
            
            @csrf
        </form>
    </div>
</div>

<hr>

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
</div>
<br><br>

<div class="row pb-5">
    <div class="col-12">
        @foreach ($companies as $company)
            <h3> {{ $company->name }}</h3>
               <ul>
                    @foreach ($company->customers as $customer)
                        <li> {{ $customer->name }}</li>
                    @endforeach
               </ul>
        @endforeach
    </div>
</div>

@endsection



