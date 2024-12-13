<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Models\Gift_type;

class GiftController extends Controller
{
    function index(){
        $gift_type=Gift_type::all();
        return view('gift_types', compact('gift_types'));
    }

    public function create()
    {
        return view('gift_types_create');
    }

    public function store(Request $request){
        $request->validate
        (
            [
               'gift_type' => 'required|string|max:255', 
            ]
        );
        Gift_type::create($request->all());
        return redirect()->back()->with('success','Gift_type created');
    }
}

