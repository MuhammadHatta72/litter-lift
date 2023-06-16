<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SwapTrash;
use App\Models\SwapTrashItem;
use Illuminate\Http\Request;

class SwapTrashUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isUser');
        $data = [
            'swap_trashs' => SwapTrash::where('user_id', auth()->user()->id)->paginate(10),
        ];
        return view('pages.admin.swap-trashs-users.index', $data);
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
    public function show(string $id)
    {
        $this->authorize('isUser');
        $swap_trash = SwapTrash::findOrFail($id);
        $data = [
            'swap_trash' => $swap_trash,
            'swap_trash_items' => SwapTrashItem::with('trash')
                ->where('swap_trash_id', $swap_trash->id)
                ->paginate(5)
        ];
        return view('pages.admin.swap-trashs-users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('isUser');
        $validate = $request->validate([
            'choose_ticket_money' => 'required',
            'message' => 'required',
        ]);

        if ($request->choose_ticket_money == "money") {
            if ($request->bank_name == null || $request->no_rekening == null) {
                toast()->error('Nama bank atau nomor rekening tidak boleh kosong!', '');
                return redirect()->back();
            }
        }

        $swap_trash = SwapTrash::findOrFail($id);

        if ($request->choose_ticket_money == "money") {
            $swap_trash->choose_ticket_money = "money";
            $swap_trash->bank_name = $request->bank_name;
            $swap_trash->no_rekening = $request->no_rekening;
            $swap_trash->status = "process";
        } else {
            $swap_trash->choose_ticket_money = "ticket";
            $swap_trash->status = "done";
        }
        $swap_trash->message = $request->message;
        $swap_trash->save();

        toast()->success('Permintaan tukar sampah berhasil, silahkan menunggu konfirmasi admin!', '');
        return redirect('swap-trash-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
