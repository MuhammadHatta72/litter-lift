<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    private $users;
    public function __construct($data)
    {
        $this->users = $data['users'];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data = [
            'users' => $this->users
        ];
        return view('pages.admin.reports.excel.view-users', $data);
    }
}
