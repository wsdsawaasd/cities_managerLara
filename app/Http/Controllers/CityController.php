<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function viewEdit($id)
    {
        $city=City::findorFail($id);
        return view('cities.edit',compact('city'));
    }

    public function edit($id, Request $request)
    {
        $city = City::findOrFail($id);
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }
    public function delete($id)
    {
        $city=City::findorFail($id);
        $city->delete();
        return redirect()->route('cities.index');
    }
    public function createCus(){
        return view('cities.createCus');
    }
    public function createCustomer(Request $request){
        $customer= new Customer();
        $customer->name = $request->name;
        $customer->dob= $request->dob;
        $customer->email = $request->email;
        $customer->city_id= $request->city_id;
        $customer->save();
        return redirect()->route('cities.index');
    }
    public function show($id){
        $customers=Customer::all()->where('city_id',$id);
        return view('cities.show',compact('customers'));
    }
    public function showDelete($id){
        $customers=Customer::findorFail($id);
        $customers->delete();
        return redirect()->route('cities.index');
    }
}
