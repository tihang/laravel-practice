<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index(){

        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function create(){

        $companies = Company::all();

        return view('customers.create', compact('companies'));
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);

        return redirect('/customers');
    }
    
}
