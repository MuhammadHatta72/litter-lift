<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use App\Http\Requests\StoreTrashRequest;
use App\Http\Requests\UpdateTrashRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isUser');
        $leaderboard = Trash::selectRaw('user_id, SUM(weight) as total_weight')
            ->groupBy('user_id')
            ->orderBy('total_weight', 'desc')
            ->limit(3)
            ->get();

        $userRank = Trash::selectRaw('user_id, SUM(weight) as total_weight')
            ->groupBy('user_id')
            ->orderBy('total_weight', 'desc')
            ->get();

        $userRank = $userRank->search(function ($item, $key) {
            return $item->user_id == auth()->user()->id;
        }) + 1;
        return view('pages.trash_scales', compact('leaderboard', 'userRank'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('isUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrashRequest $request)
    {
        $this->authorize('isUser');
        $request->validated();
        // upload image to storage
        $proof_trash = "proof_trash_" . time() . "." . $request->proof_of_weight->extension();
        $request->file('proof_of_weight')->move(public_path('assets/proof_trash/'), $proof_trash);
        Trash::create([
            'user_id' => Auth::user()->id,
            'weight' => $request->weight,
            'proof_of_weight' => $proof_trash,
            'status' => 'not_yet_weighed',
            'date' => now(),
        ]);

        toast('Trash weight has been added!', 'success');
        return redirect('cart-trash');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $this->authorize('isUser');
        $data = [
            'trash' => Trash::findOrFail($id)
        ];
        return view('pages.admin.cart-trashs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trash $trash)
    {
        $this->authorize('isUser');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrashRequest $request, Trash $trash)
    {
        $this->authorize('isUser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trash $trash)
    {
        $this->authorize('isUser');
    }
}
