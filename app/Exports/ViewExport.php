<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ViewExport implements FromView
{
    public function __construct(
        private string $viewName,
        private array $data
    ) {
    }

    public function view(): View
    {
        return view($this->viewName, $this->data);
    }
}
