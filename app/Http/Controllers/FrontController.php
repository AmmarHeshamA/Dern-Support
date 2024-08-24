<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.service', compact('service'));
    }
}
