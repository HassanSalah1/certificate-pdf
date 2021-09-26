<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PdfExport implements FromView
{
    private $user;
     public function __construct($user)
     {
     $this->user = $user;
     }

    public function view(): View
    {
        return view('exports.pdf', [
            'user' => $this->user
        ]);
    }
}
