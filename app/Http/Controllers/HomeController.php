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

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function data_capiljk()
    {
        $data_capiljk = Datacapiljk::all();
        return view('home.data.data-capil-jk', [
            'capiljk' => $data_capiljk
        ]);
    }

    public function data_capilkk()
    {
        $data_kk = Datacapilkk::all();
        return view('home.data.data-capil-kk', [
            'data_kk' => $data_kk
        ]);
    }

    public function data_capilmp()
    {
        $data_mp = Datacapilmp::all();
        return view('home.data.data-capil-mp', [
            'data_mp' => $data_mp
        ]);
    }

    public function data_fasilitaskesehatan()
    {
        $data_fasilitaskesehatan = Datafasilitaskesehatan::all();
        return view('home.data.data-fasilitas-kesehatan', [
            'data_fasilitaskesehatan' => $data_fasilitaskesehatan
        ]);
    }

    public function data_idm()
    {
        $data_idm = Dataindeksdesa::all();
        return view('home.data.data-idm', [
            'data_idm' => $data_idm
        ]);
    }

    public function data_pariwisata()
    {
        $data_wisata = Datakunjungan::all();
        return view('home.data.data-pariwisata', [
            'data_wisata' => $data_wisata
        ]);
    }

    public function data_pendidikan()
    {
        $data_pendidikan = Datapendidikan::all();
        return view('home.data.data-pendidikan', [
            'data_pendidikan' => $data_pendidikan
        ]);
    }

    public function data_populasiternak()
    {
        $data_ternak = Datapopulasiternak::all();
        return view('home.data.data-populasi-ternak', [
            'data_ternak' => $data_ternak
        ]);
    }

    public function data_produksiperkebunan()
    {
        $data_kebun = Dataproduksiperkebunan::all();
        return view('home.data.data-produksi-perkebunan', [
            'data_kebun' => $data_kebun
        ]);
    }

    public function data_koperasi()
    {
        $data_koperasi = Datakoperasi::all();
        return view('home.data.data-koperasi', [
            'data_koperasi' => $data_koperasi
        ]);
    }

    public function data_perikanan_komodity()
    {
        $data_perikanan_komodity = Dataperikanankomodity::all();
        return view('home.data.data-perikanan-komodity', [
            'data_perikanan_komodity' => $data_perikanan_komodity
        ]);
    }

    public function data_perikanan_jenis()
    {
        $data_perikanan_jenis = Dataperikananjenis::all();
        return view('home.data.data-perikanan-jenis', [
            'data_perikanan_jenis' => $data_perikanan_jenis
        ]);
    }

    public function data_cagarbudaya()
    {
        $data_cagarbudaya = Datacagarbudaya::all();
        return view('home.data.data-cagar-budaya', [
            'data_cagarbudaya' => $data_cagarbudaya
        ]);
    }

    public function data_luastanamsatu()
    {
        $data_luastanamsatu = Luastanamsatu::all();
        return view('home.data.data-luas-tanam-satu', [
            'data_luastanamsatu' => $data_luastanamsatu
        ]);
    }

    public function data_luastanamdua()
    {
        $data_luastanamdua = Luastanamdua::all();
        return view('home.data.data-luas-tanam-dua', [
            'data_luastanamdua' => $data_luastanamdua
        ]);
    }

    public function data_perdagangan()
    {
        $data_perdagangan = Dataperdagangan::all();
        return view('home.data.data-perdagangan', [
            'data_perdagangan' => $data_perdagangan
        ]);
    }
}
