<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SwapTrash;
use App\Models\SwapTrashItem;
use App\Models\Trash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SwapTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isAdmin');
        $data = [
            'swap_trashs' => SwapTrash::with('user')->paginate(10),
        ];
        return view('pages.admin.swap-trashs-admin.index', $data);
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
        $this->authorize('isUser');
        $trashs_request = $request->trash_id;
        $total_weight = 0;

        if (empty($trashs_request)) {
            toast()->error('Timbangan sampah belum ditambahkan!', 'Error');
            return redirect('cart-trash');
        }

        foreach ($trashs_request as $cart_id) {
            $trash = Trash::find($cart_id);
            $total_weight += $trash->weight;
        }

        $total_money = ($total_weight / 1000) * 3000;
        $status_swap = "";

        if ($total_money == 12000) {
            $status_swap = "only_ticket";
        } elseif ($total_money > 12000) {
            $status_swap = "money_and_ticket";
        } else {
            $status_swap = "only_money";
        }

        $swaptrash = new SwapTrash();
        $swaptrash->user_id = auth()->user()->id;
        $swaptrash->token = Str::random(20);
        $swaptrash->date = date('Y-m-d');
        $swaptrash->total_weight = $total_weight;
        $swaptrash->total_money = $total_money;
        $swaptrash->status_swap = $status_swap;
        $swaptrash->status = "choose";
        $swaptrash->choose_ticket_money  = "-";
        $swaptrash->no_rekening = "-";
        $swaptrash->bank_name = "-";
        $swaptrash->message = "-";
        $swaptrash->save();

        foreach ($trashs_request as $trash_id) {
            $trash = Trash::find($trash_id);
            $swapTrashItem = new SwapTrashItem();
            $swapTrashItem->swap_trash_id = $swaptrash->id;
            $swapTrashItem->trash_id = $trash->id;
            $swapTrashItem->save();

            $trash->status = "swap";
            $trash->save();
        }

        toast()->success('Timbangan sampah diproses, silahkan pilih tiket atau uang!', '');
        return redirect('swap-trash-user/' . $swaptrash->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $this->authorize('isAdmin');
        $swap_trash = SwapTrash::findOrFail($id);
        $data = [
            'swap_trash' => $swap_trash,
            'swap_trash_items' => SwapTrashItem::with('trash')
                ->where('swap_trash_id', $swap_trash->id)
                ->paginate(5)
        ];
        return view('pages.admin.swap-trashs-admin.show', $data);
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
        $this->authorize('isAdmin');
        $swapTrash->status = "done";
        $swapTrash->save();

        toast()->success('Tukar sampah berhasil!', '');
        return redirect('swap-trash');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SwapTrash $swapTrash)
    {
        //
    }
}
