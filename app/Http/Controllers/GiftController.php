<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gift;
use App\Models\Gift_type;

class GiftController extends Controller
{
    function index(){
        $gifts=Gift::all();
        return view('gifts', compact('gifts'));
    }

    public function create()
    {
        $gift_type = Gift_type::all();
        return view('gifts_create');
    }

    public function store(Request $request){
        $request->validate
        (
            [
               'gift_name' => 'required|string|max:255', 
               'price' => 'required|integer|min:0', 
               'gift_type' => 'nullable|array',
               'gift_type.*' => 'exists:tags,id',
            ]
        );
        Gift::create($request->all());
        return redirect()->back()->with('success','Gift created');
    }
}

