<?php

namespace App\Http\Controllers;

use App\Models\SwapTrash;
use App\Models\Trash;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $visitor = User::count();
        $weightTotal = Trash::sum('weight');
        $weightTotal = $weightTotal / 1000;
        return view('pages.home', compact('visitor', 'weightTotal'));
    }

    public function leaderboard()
    {
        $leaderboard = SwapTrash::selectRaw('user_id, SUM(total_weight) as total_weight_user')
            ->where('status', 'done')
            ->groupBy('user_id')
            ->orderBy('total_weight_user', 'desc')
            ->limit(3)
            ->get();
        $userRank = SwapTrash::selectRaw('user_id, SUM(total_weight) as total_weight_user')
            ->where('status', 'done')
            ->groupBy('user_id')
            ->orderBy('total_weight_user', 'desc')
            ->limit(3)
            ->get();

        $userRank = $userRank->search(function ($item, $key) {
            return $item->user_id == auth()->user()->id;
        }) + 1;
        // dd($userRank, $leaderboard);
        return view('pages.leaderboard', compact('leaderboard', 'userRank'));
    }
}
