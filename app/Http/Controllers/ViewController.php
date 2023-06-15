<?php

namespace App\Http\Controllers;

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
        $leaderboard = Trash::selectRaw('user_id, SUM(weight) as total_weight')
            ->groupBy('user_id')
            ->orderBy('total_weight', 'desc')
            ->limit(10)
            ->get();

        $userRank = Trash::selectRaw('user_id, SUM(weight) as total_weight')
            ->groupBy('user_id')
            ->orderBy('total_weight', 'desc')
            ->get();

        $userRank = $userRank->search(function ($item, $key) {
            return $item->user_id == auth()->user()->id;
        }) + 1;

        return view('pages.leaderboard', compact('leaderboard', 'userRank'));
    }
}
