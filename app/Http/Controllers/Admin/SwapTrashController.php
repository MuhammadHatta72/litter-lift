<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SwapTrash;
use Illuminate\Http\Request;

class SwapTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.swap-trashs-admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SwapTrash $swapTrash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SwapTrash $swapTrash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SwapTrash $swapTrash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SwapTrash $swapTrash)
    {
        //
    }
}
