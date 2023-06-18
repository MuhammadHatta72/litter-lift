<?php

namespace App\Exports;

use App\Models\SwapTrash;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SwapTrashExport implements FromView
{
    private $swaptrashs;
    public function __construct($data)
    {
        $this->swaptrashs = $data['swaptrashs'];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data = [
            'swaptrashs' => $this->swaptrashs
        ];
        return view('pages.admin.reports.excel.view-swaptrashs', $data);
    }
}
