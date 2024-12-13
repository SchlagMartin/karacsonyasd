<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\People;

class UserController extends Controller
{
    function index(){
        $users=People::all();
        return view('user', compact('user'));
    }

    public function create()
    {
        return view('user_create');
    }

    public function store(Request $request){
        $request->validate
        (
            [
               'people_name' => 'required|string|max:255', 
            ]
        );
        People::create($request->all());
        return redirect()->back()->with('success','User created');
    }
}

