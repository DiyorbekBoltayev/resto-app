<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    protected function index()
    {
        return view('admin.index');
    }
}
