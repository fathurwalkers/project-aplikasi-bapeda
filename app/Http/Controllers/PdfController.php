<?php

namespace App\Http\Controllers;

use App\Datacapiljk;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function print_capiljk()
    {
        // $capiljk = Datacapiljk::all();
        // $pdf = PDF::loadview('home.data.data-capil-jk', [
        //     'capiljk' => $capiljk
        // ])->setPaper('A4','potrait');
        // set_time_limit(300);
        // return $pdf->download('datadownload.pdf');

        $capiljk = Datacapiljk::all();

        $pdf = PDF::loadView('home.print.data-capil-jk', [
            'capiljk' => $capiljk
            ]);

        //Aktifkan Local File Access supaya bisa pakai file external ( cth File .CSS )
        $pdf->setOption('enable-local-file-access', true);

        // Stream untuk menampilkan tampilan PDF pada browser
        return $pdf->stream('table.pdf');
    }
}
