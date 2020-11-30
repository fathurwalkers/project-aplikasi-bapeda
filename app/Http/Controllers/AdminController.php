<?php

namespace App\Http\Controllers;

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
use App\Dataperikananjenis;
use App\Dataperikanankomodity;
use App\Datapopulasiternak;
use App\Dataproduksiperkebunan;
use App\Luastanamdua;
use App\Luastanamsatu;
use App\Datacagarbudaya;
use App\Dataperdagangan;

class AdminController extends Controller
{
    public function index()
    {
        if (!session('data_login')) {
            return redirect('/admin/login');
        }
        $data_capiljk = Datacapiljk::all()->count();
        $data_capilmp = Datacapilmp::all()->count();
        $data_capilkk = Datacapilkk::all()->count();
        $data_fasilitaskesehatan = Datafasilitaskesehatan::all()->count();
        $data_indeksdesa = Dataindeksdesa::all()->count();
        $data_kunjungan = Datakunjungan::all()->count();
        $data_pendidikan = Datapendidikan::all()->count();
        $data_populasiternak = Datapopulasiternak::all()->count();
        $data_produksiperkebunan = Dataproduksiperkebunan::all()->count();
        $data_perikanan_komodity = Dataperikanankomodity::all()->count();
        $data_perikanan_jenis = Dataperikananjenis::all()->count();
        $data_koperasi = Datakoperasi::all()->count();
        $data_luastanamsatu = Luastanamsatu::all()->count();
        $data_luastanamdua = Luastanamdua::all()->count();
        $data_cagarbudaya = Datacagarbudaya::all()->count();
        $data_perdagangan = Dataperdagangan::all()->count();

        $users = session('data_login');
        return view('admin.index', [
            'users' => $users,
            'data_capiljk' => $data_capiljk,
            'data_capilmp' => $data_capilmp,
            'data_capilkk' => $data_capilkk,
            'data_fasilitaskesehatan' => $data_fasilitaskesehatan,
            'data_indeksdesa' => $data_indeksdesa,
            'data_kunjungan' => $data_kunjungan,
            'data_pendidikan' => $data_pendidikan,
            'data_populasiternak' => $data_populasiternak,
            'data_produksiperkebunan' => $data_produksiperkebunan,
            'data_perikanan_komodity' => $data_perikanan_komodity,
            'data_perikanan_jenis' => $data_perikanan_jenis,
            'data_koperasi' => $data_koperasi,
            'data_luastanamsatu' => $data_luastanamsatu,
            'data_luastanamdua' => $data_luastanamdua,
            'data_cagarbudaya' => $data_cagarbudaya,
            'data_perdagangan' => $data_perdagangan
        ]);
    }

    public function indexdua()
    {
        if (!session('data_login_admin')) {
            return redirect('/admin/login');
        }
        $data_capiljk = Datacapiljk::all()->count();
        $data_capilmp = Datacapilmp::all()->count();
        $data_capilkk = Datacapilkk::all()->count();
        $data_fasilitaskesehatan = Datafasilitaskesehatan::all()->count();
        $data_indeksdesa = Dataindeksdesa::all()->count();
        $data_kunjungan = Datakunjungan::all()->count();
        $data_pendidikan = Datapendidikan::all()->count();
        $data_populasiternak = Datapopulasiternak::all()->count();
        $data_produksiperkebunan = Dataproduksiperkebunan::all()->count();
        $data_perikanan_komodity = Dataperikanankomodity::all()->count();
        $data_perikanan_jenis = Dataperikananjenis::all()->count();
        $data_koperasi = Datakoperasi::all()->count();
        $data_luastanamsatu = Luastanamsatu::all()->count();
        $data_luastanamdua = Luastanamdua::all()->count();
        $data_cagarbudaya = Datacagarbudaya::all()->count();
        $data_perdagangan = Dataperdagangan::all()->count();

        $users = session('data_login_admin');
        // $user = session('data_login_admin');
        // dump($users);
        // dd($user);
        return view('admin.admin', [
            'users' => $users,
            // 'user' => $user,
            'data_capiljk' => $data_capiljk,
            'data_capilmp' => $data_capilmp,
            'data_capilkk' => $data_capilkk,
            'data_fasilitaskesehatan' => $data_fasilitaskesehatan,
            'data_indeksdesa' => $data_indeksdesa,
            'data_kunjungan' => $data_kunjungan,
            'data_pendidikan' => $data_pendidikan,
            'data_populasiternak' => $data_populasiternak,
            'data_produksiperkebunan' => $data_produksiperkebunan,
            'data_perikanan_komodity' => $data_perikanan_komodity,
            'data_perikanan_jenis' => $data_perikanan_jenis,
            'data_koperasi' => $data_koperasi,
            'data_luastanamsatu' => $data_luastanamsatu,
            'data_luastanamdua' => $data_luastanamdua,
            'data_cagarbudaya' => $data_cagarbudaya,
            'data_perdagangan' => $data_perdagangan
        ]);
    }

    public function login()
    {
        if (session('data_login')) {
            return redirect('/admin');
        } elseif (session('data_login_admin')){
            return redirect('/administrator');
        }
        return view('admin.admin-login');
    }
    public function postdatafasilitaskesehatan(Request $request)
    {
        $data_kesehatan = new Datafasilitaskesehatan;
        $data_kesehatan = Datafasilitaskesehatan::create([
            'fasilitas_kesehatan' => $request->fasilitas_kesehatan,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'jumlah' => $request->jumlah,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_kesehatan->save();
        return redirect('/admin/data/input-data-fasilitas-kesehatan');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
    public function postlogin(Request $request)
    {
        $data_login = Login::where('username', $request->username)->firstOrFail();
        $cek_password = Hash::check($request->password, $data_login->password);
        $cek_level = $data_login->level;
        if ($data_login) {
            if ($cek_password) {
                switch ($cek_level) {
                    case "admin":
                        $users = session(['data_login' => $data_login]);
                        $user = session(['data_login_admin' => $data_login]);
                        // dd($users);
                        return redirect('/administrator');
                        break;
                    case "user":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_capil":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_kesehatan":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_pendidikan":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_perdagangan":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_kebudayaan":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_pariwisata":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_pertanian":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_perikanan":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_pemberdayaanmasyarakat":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                    case "dinas_koperasi":
                        $users = session(['data_login' => $data_login]);
                        return redirect('/admin');
                        // dd($users);
                        break;
                }
            }
        }
        // dd($data_login);
        return redirect('/admin/login')->with('status_fail', 'Login gagal, username atau password salah')->withInput();
        // echo 'salah';
    }
    public function register()
    {
        return view('admin.register');
    }

    public function postregister(Request $request)
    {
        $login_data = new Login;

        $validatedLogin = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $hashPassword = Hash::make($request->password, [
            'rounds' => 12,
        ]);

        $token = Str::random(16);

        $login_data = Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $hashPassword,
            'token' => $token,
            'level' => $request->level,
            'created_at' => now(),
            'updated-at' => now()
        ]);

        $login_data->save();

        return redirect('/admin/login')->with('berhasil_register', 'Berhasil melakukan registrasi');
    }

    public function show()
    {
        $users = session('data_login');
        return view('admin.data.index', [
            'users' => $users
        ]);
    }

    public function inputdata()
    {
        $users = session('data_login');
        return view('admin.data.input', [
            'users' => $users
        ]);
    }


    // Data Kunjungan 
    public function getdatakunjungan()
    {
        $users = session('data_login');
        return view('admin.data.input-data-kunjungan', [
            'users' => $users
        ]);
    }

    public function postdatakunjungan(Request $request)
    {
        $data_kunjungan = new Datakunjungan;

        $data_kunjungan = Datakunjungan::create([
            'tahun' => $request->tahun,
            'mancanegara' => $request->mancanegara,
            'domestik' => $request->domestik,
            'jumlah' => $request->jumlah,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $data_kunjungan->save();

        return redirect('/admin/data/input-data-kunjungan');
    }


    // Data Pendidikan 
    public function getdatapendidikan()
    {
        $users = session('data_login');
        return view('admin.data.input-data-pendidikan', [
            'users' => $users 
        ]);
    }

    public function postdatapendidikan(Request $request)
    {
        $data_pendidikan = new Datapendidikan;

        $data_pendidikan = Datapendidikan::create([
            'namakecamatan' => $request->namakecamatan,
            'jumlahsekolah' => $request->jumlahsekolah,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'statussekolahnegeri' => $request->statussekolahnegeri,
            'statussekolahswasta' => $request->statussekolahswasta,
            'jumlahmuridperempuan' => $request->jumlahmuridperempuan,
            'jumlahmuridlaki' => $request->jumlahmuridlaki,
            'gurupns' => $request->gurupns,
            'gurunonpns' => $request->gurunonpns,
            'jumlahgurulaki' => $request->jumlahgurulaki,
            'jumlahguruperempuan' => $request->jumlahguruperempuan,
            'gurudtiga' => $request->gurudtiga,
            'gurussatu' => $request->gurussatu,
            'gurusdua' => $request->gurusdua,
            'kondisisekolahbaik' => $request->kondisisekolahbaik,
            'kondisisekolahrusak' => $request->kondisisekolahrusak,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $data_pendidikan->save();

        return redirect('/admin/data/input-data-pendidikan');
    }


    // Data Indeks Desa Membangun 
    public function getdatadesamembangun()
    {
        $users = session('data_login');
        return view('admin.data.input-data-indeks-desa-membangun', [
            'users' => $users
        ]);
    }

    public function postdatadesamembangun(Request $request)
    {
        $data_indeksdesa = new Dataindeksdesa;

        $tahunidm = "2019";

        $data_indeksdesa = Dataindeksdesa::create([
            'namakecamatan' => $request->namakecamatan,
            'namadesa' => $request->namadesa,
            'statusdesa' => $request->statusdesa,
            'indeksdesamembangun' => $request->indeksdesamembangun,
            'tahun' => $tahunidm,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $data_indeksdesa->save();

        return redirect('/admin/data/input-data-indeks-desa-membangun');
    }


    // Data Produksi Perkebunan 
    public function getdataproduksiperkebunan()
    {
        $users = session('data_login');
        return view('/admin/data/input-data-produksi-perkebunan', [
            'users' => $users
        ]);
    }

    public function postdataproduksiperkebunan(Request $request)
    {
        $data_produk_perkebunan = new Dataproduksiperkebunan;

        $data_produk_perkebunan = Dataproduksiperkebunan::create([
            'produksi_tahun' => $request->produksi_tahun,
            'produksi_kecamatan' => $request->produksi_kecamatan,
            'produksi_jambu' => number_format($request->produksi_jambu, 2),
            'produksi_kakao' => number_format($request->produksi_kakao, 2),
            'produksi_kelapadalam' => number_format($request->produksi_kelapadalam, 2),
            'produksi_kopi' => number_format($request->produksi_kopi, 2),
            'produksi_lada' => number_format($request->produksi_lada, 2),
            'produksi_pala' => number_format($request->produksi_pala, 2),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // dd($data_produk_perkebunan);
        $data_produk_perkebunan->save();

        return redirect('/admin/data/input-data-produksi-perkebunan');
    }



    // Data Capil Total Jumlah Penduduk Berdasarkan Jenis Kelamin 
    public function getdatacapiljk()
    {
        $users = session('data_login');
        return view('admin.data.input-data-capil-jk', [
            'users' => $users
        ]);
    }

    public function postdatacapiljk(Request $request)
    {
        $data_capil_jk = new Datacapiljk;
        $data_capil_jk = Datacapiljk::create([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'jenkel' => $request->jenkel,
            'jumlah' => number_format($request->jumlah),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_capil_jk->save();
        return redirect('/admin/data/input-data-capil-jk');
    }



    // Data Capil Total Jumlah Penduduk Berdasarkan Kartu Keluarga
    public function getdatacapilkk()
    {
        $users = session('data_login');
        return view('admin.data.input-data-capil-kk', [
            'users' => $users
        ]);
    }

    public function postdatacapilkk(Request $request)
    {
        $data_capil_kk = new Datacapilkk;
        $data_capil_kk = Datacapilkk::create([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'jumlahkk' => number_format($request->jumlahkk),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_capil_kk->save();
        return redirect('/admin/data/input-data-capil-kk');
    }



    // Data Populasi Ternak
    public function getdatapopulasiternak()
    {
        $users = session('data_login');
        return view('admin.data.input-data-populasi-ternak', [
            'users' => $users
        ]);
    }

    public function postdatapopulasiternak(Request $request)
    {
        $data_populasi_ternak = new Datapopulasiternak;
        $data_populasi_ternak = Datapopulasiternak::create([
            'kecamatan' => $request->kecamatan,
            'jenisternak' => $request->jenisternak,
            'jenishewan' => $request->jenishewan,
            'jumlahkeseluruhan' => $request->jumlahkeseluruhan,
            'tahun' => $request->tahun,
            'created_at' => now(),
            'update_at' => now()
        ]);
        $data_populasi_ternak->save();
        return redirect('/admin/data/input-data-populasi-ternak');
    }




    // Data Jumlah Total Capil Berdasarkan Mata Pencaharian 
    public function getdatacapilmp()
    {
        $users = session('data_login');
        return view('admin.data.input-data-capil-mp', [
            'users' => $users
        ]);
    }

    public function postdatacapilmp(Request $request)
    {
        $data_capil_mp = new Datacapilmp;
        $data_capil_mp = Datacapilmp::create([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'matapencaharian' => $request->matapencaharian,
            'jumlahkk' => number_format($request->jumlahkk),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_capil_mp->save();
        return view('admin.data.input-data-capil-mp');
    }



    // DATA PERIKANAN KOMODITY 
    public function inputperikanankomodity()
    {
        $users = session('data_login');
        return view('admin.data.input-data-perikanan-komodity', [
            'users' => $users
        ]);
    }

    public function postperikanankomodity(Request $request)
    {
        $data_perikanan_komodity = Dataperikanankomodity::create([
            'kecamatan' => $request->kecamatan,
            'komodity' => $request->komodity,
            'jumlah' => $request->jumlah,
            'tahun' => $request->tahun,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_perikanan_komodity->save();
        return redirect()->route('input-perikanan-komodity');
    }




    // DATA PERIKANAN JENIS 
    public function input_perikananjenis()
    {
        $users = session('data_login');
        return view('admin.data.input-data-perikanan-jenis', [
            'users' => $users 
        ]);
    }

    public function post_perikananjenis(Request $request)
    {
        $perikananjenis = Dataperikananjenis::create([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'rumput_laut' => $request->rumput_laut,
            'mabe' => $request->mabe,
            'kerapu' => $request->kerapu,
            'kuwe' => $request->kuwe,
            'lobster' => $request->lobster,
            'bandeng' => $request->bandeng,
            'nila' => $request->nila,
            'lele' => $request->lele,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $perikananjenis->save();
        return redirect()->route('data-perikanan-jenis');
    }




    // Tempat untuk melakukan Ritual 
    public function ritual()
    {
        return view('ritual');
    }
}
