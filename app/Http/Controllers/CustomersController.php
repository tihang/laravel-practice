<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){

        $customers = Customer::all();

        return view('internals.customers', [
            'customers' => $customers
        ]);
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required | min:5'
        ]);


        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();

        return back();
    }

}
