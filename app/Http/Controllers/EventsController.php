<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class EventsController extends Controller
{
    public function index() {
        return Inertia::render('index', [
            "message" => "Hello laravel-vue",
            "sample" => "Hello"
        ]);
    }
    
    public function show(Request $request) {
        $validate = Validator::make(request()->all(),[
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'address' => ['required', 'max:50'],
        ]);
        return Inertia::render('page2', [
            "errors" => $validate->errors()
        ]);
        // return to_route('page2');
    }
}
