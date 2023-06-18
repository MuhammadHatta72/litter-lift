<?php

namespace App\Http\Controllers;

use App\Exports\SwapTrashExport;
use App\Exports\UserExport;
use App\Models\SwapTrash;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportController extends Controller
{
    public function users()
    {
        $this->authorize('isAdmin');
        $data = [
            'users' => User::paginate(10)
        ];
        return view('pages.admin.reports.users', $data);
    }

    public function usersReport(Request $request)
    {
        $this->authorize('isAdmin');
        $request->validate([
            'month' => 'required',
            'format_print' => 'required',
        ]);

        $year_month = explode('-', $request->month);
        $year = $year_month[0];
        $month = $year_month[1];
        $data = [
            'users' => User::whereYear('created_at', $year)->whereMonth('created_at', $month)->get(),
        ];
        if ($request->format_print == 'pdf') {
            $pdf = PDF::loadview('pages.admin.reports.pdf.view-users', $data)->setPaper('a4', 'landscape');
            return $pdf->download('Daftar Pengguna Litter Lift.pdf');
        } else {
            return Excel::download(new UserExport($data), 'Laporan Daftar User.xlsx');
        }
    }

    public function swapTrash()
    {
        $this->authorize('isAdmin');
        $data = [
            'swap_trashs' => SwapTrash::with('user')->where('status', 'done')->paginate(10),
        ];
        return view('pages.admin.reports.swaptrashs', $data);
    }

    public function swapTrashReport(Request $request)
    {
        $this->authorize('isAdmin');
        $year_month = explode('-', $request->month);
        $year = $year_month[0];
        $month = $year_month[1];
        $data = [
            'swaptrashs' => SwapTrash::whereYear('created_at', $year)->whereMonth('created_at', $month)->get(),
        ];
        if ($request->format_print == 'pdf') {
            $pdf = PDF::loadview('pages.admin.reports.pdf.view-swaptrashs', $data)->setPaper('a4', 'landscape');
            return $pdf->download('Daftar Daftar Tukar Sampah.pdf');
        } else {
            return Excel::download(new SwapTrashExport($data), 'Laporan Daftar Tukar Sampah.xlsx');
        }
    }

    public function ticket($id)
    {
        $this->authorize('isUser');
        $swap_trash = SwapTrash::findOrFail($id);
        $data = [
            'swap_trash' => $swap_trash,
        ];
        // $pdf = PDF::loadview('admin.pages.exports.pdf.users', $data)->setPaper('a4', 'landscape');
        $pdf = PDF::loadview('pages.admin.reports.pdf.view-ticket', $data);
        //set ukuran kertas 8 x 14
        $pdf->setPaper([0, 0, 215, 670], 'landscape');
        return $pdf->download('Tiket ' . $swap_trash->user->name . '-' . $swap_trash->date . '.pdf');
    }
}
