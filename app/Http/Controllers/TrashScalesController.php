<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashScalesController extends Controller
{
    public function index()
    {
        return view('pages.trash_scales');
    }
}
