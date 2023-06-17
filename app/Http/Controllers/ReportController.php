<?php

namespace App\Http\Controllers;

use App\Models\SwapTrash;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function users()
    {
        $data = [
            'users' => User::paginate(1)
        ];
        return view('pages.admin.reports.users', $data);
    }

    public function swapTrash()
    {
        $data = [
            'swap_trashs' => SwapTrash::with('user')->where('status', 'done')->paginate(10),
        ];
        return view('pages.admin.reports.swaptrashs', $data);
    }

    public function ticket($id)
    {
        $data = [
            'swap_trash' => SwapTrash::findOrFail($id),
        ];
        // $pdf = PDF::loadview('admin.pages.exports.pdf.users', $data)->setPaper('a4', 'landscape');
        $pdf = PDF::loadview('pages.admin.reports.view-users', $data);
        return $pdf->download('Tiket.pdf');
    }
}
