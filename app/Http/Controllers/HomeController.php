<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function __invoke(Request $request) {
        return Inertia::render('index', [
            'name' => 'Sabbir'
        ]);
    }
}
