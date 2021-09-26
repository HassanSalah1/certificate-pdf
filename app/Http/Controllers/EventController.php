<?php

namespace App\Http\Controllers;

use App\Event;
use App\Exports\PdfExport;
use App\Imports\EventImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    public function import()
    {
        return view('import');
    }
    public function store(Request $request): string
    {
        Excel::import(new EventImport(), $request->file('file'));

        return 'All good!';
    }

    public function getCertificate(Request $request)
    {
        $request->validate([
           'email' => 'required'
        ]);
        $user = Event::where('email', $request->input('email'))->first();
        if (!$user){
            return redirect()->back()->with('message', 'Email not found');
        }

        $pdf = \PDF::loadView('exports.pdf', compact('user'));
        return $pdf->download('certificate.pdf');

        //return Excel::download(new PdfExport($user), 'certificate.pdf');
        //return (new PdfExport($user))->download('certificate.pdf', \Maatwebsite\Excel\Excel::MPDF);

    }
}
