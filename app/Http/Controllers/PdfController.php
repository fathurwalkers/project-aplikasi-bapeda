<?php

namespace App\Http\Controllers;

use App\Datacagarbudaya;
use App\Datacapiljk;
use App\Datacapilkk;
use App\Datacapilmp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Login;
use Illuminate\Support\Str;
use App\Datafasilitaskesehatan;
use App\Dataindeksdesa;
use App\Datakoperasi;
use App\Datakunjungan;
use App\Datapendidikan;
use App\Dataperdagangan;
use App\Dataperikananjenis;
use App\Dataperikanankomodity;
use App\Datapopulasiternak;
use App\Dataproduksiperkebunan;
use App\Luastanamdua;
use App\Luastanamsatu;
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

    public function index_capilkk()
    {
        $capilkk = Datacapilkk::all();
        return view('print.print-capilkk', [
            'capilkk' => $capilkk
        ]);
    }

    public function index_capilmp()
    {
        $capilmp = Datacapilmp::all();
        return view('print.print-capilmp', [
            'capilmp' => $capilmp
        ]);
    }

    public function index_pendidikan()
    {
        $pendidikan = Datapendidikan::all();
        return view('print.print-pendidikan', [
            'pendidikan' => $pendidikan
        ]);
    }

    public function index_kesehatan()
    {
        $kesehatan = Datafasilitaskesehatan::all();
        return view('print.print-kesehatan', [
            'kesehatan' => $kesehatan
        ]);
    }

    public function index_kebudayaan()
    {
        $kebudayaan = Datacagarbudaya::all();
        return view('print.print-kebudayaan', [
            'kebudayaan' => $kebudayaan
        ]);
    }

    public function index_luastanam()
    {
        $luastanam = Luastanamsatu::all();
        return view('print.print-luastanam', [
            'luastanam' => $luastanam
        ]);
    }

    public function index_luaspanen()
    {
        $luaspanen = Luastanamdua::all();
        return view('print.print-luaspanen', [
            'luaspanen' => $luaspanen
        ]);
    }

    public function index_perkebunan()
    {
        $perkebunan = Dataproduksiperkebunan::all();
        return view('print.print-perkebunan', [
            'perkebunan' => $perkebunan
        ]);
    }

    public function index_ternak()
    {
        $ternak = Datapopulasiternak::all();
        return view('print.print-ternak', [
            'ternak' => $ternak
        ]);
    }

    public function index_tangkap()
    {
        $tangkap = Dataperikanankomodity::all();
        return view('print.print-tangkap', [
            'tangkap' => $tangkap
        ]);
    }
    
    public function index_budidaya()
    {
        $budidaya = Dataperikanankomodity::all();
        return view('print.print-budidaya', [
            'budidaya' => $budidaya
        ]);
    }

    public function index_pariwisata()
    {
        $pariwisata = Datakunjungan::all();
        return view('print.print-pariwisata', [
            'pariwisata' => $pariwisata
        ]);
    }

    public function index_koperasi()
    {
        $koperasi = Datakoperasi::all();
        return view('print.print-koperasi', [
            'koperasi' => $koperasi
        ]);
    }

    public function index_idm()
    {
        $idm = Dataindeksdesa::all();
        return view('print.print-idm', [
            'idm' => $idm
        ]);
    }

    public function index_perdagangan()
    {
        $perdagangan = Dataperdagangan::all();
        return view('print.print-perdagangan', [
            'perdagangan' => $perdagangan
        ]);
    }
   
}
