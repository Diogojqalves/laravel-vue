<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        // dd(Listing::all()) //replicate php artisan tinker
        return inertia('Index/Index', [
            'message' => 'hello from laravel'
        ]);
    }
    public function show() {
        return inertia('Index/Show');
    }
}
