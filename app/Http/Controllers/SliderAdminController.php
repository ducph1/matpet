<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderAdminController extends Controller
{
    public function index() {
        return view('admin.slider.index');
    }
}
