<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use App\Http\Requests\StoreTrashRequest;
use App\Http\Requests\UpdateTrashRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.trash_scales');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrashRequest $request)
    {
        $request->validated();
        // upload image to storage
        Trash::create([
            'user_id' => Auth::user()->id,
            'weight' => $request->weight,
            'proof_of_weight' => $request->file('proof_of_weight')->store('public/images'),
            'message' => $request->message,
            'date' => now(),
        ]);

        toast('Trash weight has been added!', 'success');
        return redirect()->route('trash-scales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trash $trash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trash $trash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrashRequest $request, Trash $trash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trash $trash)
    {
        //
    }
}
