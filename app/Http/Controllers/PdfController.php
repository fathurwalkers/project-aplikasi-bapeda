<?php

namespace App\Http\Controllers;

use App\Datacapiljk;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function print_capiljk()
    {
        $capiljk = Datacapiljk::all();
        $pdf = PDF::loadview('print.print-capiljk', [
            'capiljk' => $capiljk
        ]);
        // $pdf->setPaper('A4','potrait');
        return $pdf->stream();
        // return $pdf->download('cek.pdf');
    }

    public function index_capiljk()
    {
        $capiljk = Datacapiljk::all();
        return view('print.print-capiljk', [
            'capiljk' => $capiljk
        ]);
    }
}
