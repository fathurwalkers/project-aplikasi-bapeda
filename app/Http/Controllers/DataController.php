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

// Data Controller 
class DataController extends Controller
{

    // Data Fasilitas Kesehatan
    public function showfasilitaskesehatan($namakecamatan)
    {
        $namakecamatan = $namakecamatan;
        $data_fasilitas_kesehatan = Datafasilitaskesehatan::where('kecamatan', $namakecamatan)->get();
        return view('admin.listdata.data-fasilitas-kesehatan-filter', [
            'namakecamatan' => $namakecamatan,
            'data_fasilitas_kesehatan' => $data_fasilitas_kesehatan
        ]);
    }

    public function fasilitaskesehatan()
    {
        $fasilitaskesehatan = Datafasilitaskesehatan::all();
        return view('admin.listdata.data-fasilitas-kesehatan', [
            'fasilitaskesehatan' => $fasilitaskesehatan
        ]);
    }

    public function hapusfasilitaskesehatan(Request $request, $fasilitas)
    {
        $delete_fk = Datafasilitaskesehatan::where('id', $fasilitas)->firstOrFail();
        $delete_fk->forceDelete();
        return redirect('/admin/data/data-fasilitas-kesehatan');
    }

    public function editfasilitaskesehatan(Request $request, $idedit)
    {
        $data_fk = Datafasilitaskesehatan::where('id', $idedit)->first();
        return view('admin.listdata.edit.edit-fasilitas-kesehatan', [
            'idedit' => $idedit,
            'data_fk' => $data_fk
        ]);
    }

    public function postfasilitaskesehatan(Request $request, $idedit)
    {
        $updatefk = Datafasilitaskesehatan::where('id', $idedit)->first()->update([
            'fasilitas_kesehatan' => $request->fasilitas_kesehatan,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'jumlah' => $request->jumlah,
            'updated_at' => now()
        ]);

        return redirect('/admin/data/data-fasilitas-kesehatan');
    }


    // Data Pendidikan 
    public function showpendidikan()
    {
        $data_pendidikan = Datapendidikan::all();
        return view('admin.listdata.data-pendidikan', [
            'data_pendidikan' => $data_pendidikan
        ]);
    }

    public function filterpendidikan($jenjangpendidikan)
    {
        $data_pendidikan = Datapendidikan::where('jenjang_pendidikan', $jenjangpendidikan)->get();
        return view('admin.listdata.data-pendidikan-filter', [
            'data_pendidikan' => $data_pendidikan
        ]);
    }

    public function editpendidikan($idpendidikan)
    {
        $data_pendidikan = Datapendidikan::where('id', $idpendidikan)->first();
        return view('admin.listdata.edit.edit-data-pendidikan', [
            'data_pendidikan' => $data_pendidikan,
            'idpendidikan' => $idpendidikan
        ]);
    }

    public function updatependidikan(Request $request, $idpendidikan)
    {
        $updatefk = Datapendidikan::where('id', $idpendidikan)->first()->update([
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
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-pendidikan');
    }

    public function deletependidikan(Request $request, $idpendidikan)
    {
        $delete_pendidikan = Datapendidikan::where('id', $idpendidikan)->firstOrFail();
        $delete_pendidikan->forceDelete();
        return redirect('/admin/data/data-pendidikan');
    }


    // Data Kunjungan 
    public function showkunjungan()
    {
        $data_kunjungan = Datakunjungan::all();
        return view('admin.listdata.data-kunjungan', [
            'data_kunjungan' => $data_kunjungan
        ]);
    }

    public function editkunjungan($idkunjungan)
    {
        $data_kunjungan = Datakunjungan::where('id', $idkunjungan)->first();
        return view('admin.listdata.edit.edit-data-kunjungan', [
            'idkunjungan' => $idkunjungan,
            'data_kunjungan' => $data_kunjungan
        ]);
    }

    public function updatekunjungan(Request $request, $idkunjungan)
    {
        $updatefk = Datakunjungan::where('id', $idkunjungan)->first()->update([
            'tahun' => $request->tahun,
            'mancanegara' => $request->mancanegara,
            'domestik' => $request->domestik,
            'jumlah' => $request->jumlah,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-kunjungan');
    }

    public function deletekunjungan(Request $request, $idkunjungan)
    {
        $delete_kunjungan = Datakunjungan::where('id', $idkunjungan)->firstOrFail();
        $delete_kunjungan->forceDelete();
        return redirect('/admin/data/data-kunjungan');
    }



    // Data Indeks Desa Membangun 
    public function showindeksdesamembangun()
    {
        $data_idm = Dataindeksdesa::all();
        return view('admin.listdata.data-indeks-desa-membangun', [
            'data_idm' => $data_idm
        ]);
    }

    public function filteridm($namakecamatan)
    {
        $data_idm = Dataindeksdesa::where('namakecamatan', $namakecamatan)->get();
        return view('admin.listdata.data-idm-filter', [
            'data_idm' => $data_idm
        ]);
    }

    public function editidm($ididm)
    {
        $data_idm = Dataindeksdesa::where('id', $ididm)->first();
        return view('admin.listdata.edit.edit-idm', [
            'data_idm' => $data_idm,
            'ididm' => $ididm
        ]);
    }

    public function updateidm(Request $request, $ididm)
    {
        $tahun = "2019";
        $updatefk = Dataindeksdesa::where('id', $ididm)->first()->update([
            'namakecamatan' => $request->namakecamatan,
            'namadesa' => $request->namadesa,
            'statusdesa' => $request->statusdesa,
            'indeksdesamembangun' => $request->indeksdesamembangun,
            'tahun' => $tahun,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-indeks-desa-membangun');
    }

    public function deleteidm(Request $request, $ididm)
    {
        $delete_idm = Dataindeksdesa::where('id', $ididm)->firstOrFail();
        $delete_idm->forceDelete();
        return redirect('/admin/data/data-indeks-desa-membangun');
    }


    // Data Produksi Perkebunan
    public function showproduksiperkebunan()
    {
        $produksi_perkebunan = Dataproduksiperkebunan::get();
        return view('admin.listdata.data-produksi-perkebunan', [
            'produksi_perkebunan' => $produksi_perkebunan
        ]);
    }

    public function produksiperkebunan($produksi_tahun)
    {
        $produksi_perkebunan = Dataproduksiperkebunan::where('produksi_tahun', $produksi_tahun)->get();
        return view('admin.listdata.data-produksi-perkebunan-filter', [
            'produksi_perkebunan' => $produksi_perkebunan,
            'tahun' => $produksi_tahun
        ]);
    }

    public function editproduksiperkebunan($idperkebunan)
    {
        $data_perkebunan = Dataproduksiperkebunan::where('id', $idperkebunan)->first();
        return view('admin.listdata.edit.edit-produksi-perkebunan', [
            'data_perkebunan' => $data_perkebunan
        ]);
    }

    public function updateproduksiperkebunan(Request $request, $idperkebunan)
    {
        $updatefk = Dataproduksiperkebunan::where('id', $idperkebunan)->first()->update([
            'produksi_tahun' => $request->produksi_tahun,
            'produksi_kecamatan' => $request->produksi_kecamatan,
            'produksi_jambu' => $request->produksi_jambu,
            'produksi_kakao' => $request->produksi_kakao,
            'produksi_kelapadalam' => $request->produksi_kelapadalam,
            'produksi_kopi' => $request->produksi_kopi,
            'produksi_lada' => $request->produksi_lada,
            'produksi_pala' => $request->produksi_pala,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-produksi-perkebunan');
    }

    public function deleteproduksiperkebunan($idperkebunan)
    {
        $delete_perkebunan = Dataproduksiperkebunan::where('id', $idperkebunan)->firstOrFail();
        $delete_perkebunan->forceDelete();
        return redirect('/admin/data/data-produksi-perkebunan');
    }



    // Data Populasi Ternak 
    public function filterpopulasiternak($kecamatan)
    {
        $data_ternak = Datapopulasiternak::where('kecamatan', $kecamatan)->get();
        return view('admin.listdata.data-populasi-ternak-filter', [
            'data_ternak' => $data_ternak
        ]);
    }

    public function showdatapopulasiternak()
    {
        $data_ternak = Datapopulasiternak::all();
        return view('admin.listdata.data-populasi-ternak', [
            'data_ternak' => $data_ternak
        ]);
    }

    public function editpopulasiternak($idternak)
    {
        $data_ternak = Datapopulasiternak::where('id', $idternak)->first();
        return view('admin.listdata.edit.edit-populasi-ternak', [
            'data_ternak' => $data_ternak,
            'idternak' => $idternak
        ]);
    }

    public function updatepopulasiternak(Request $request, $idternak)
    {
        $updatefk = Datapopulasiternak::where('id', $idternak)->first()->update([
            'kecamatan' => $request->kecamatan,
            'jenisternak' => $request->jenisternak,
            'jenishewan' => $request->jenishewan,
            'jumlahkeseluruhan' => $request->jumlahkeseluruhan,
            'tahun' => $request->tahun,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-populasi-ternak');
    }

    public function deletepopulasiternak($idternak)
    {
        $delete_ternak = Datapopulasiternak::where('id', $idternak)->firstOrFail();
        $delete_ternak->forceDelete();
        return redirect('/admin/data/data-populasi-ternak');
    }




    // Data Capil JK 
    public function showdatacapiljk()
    {
        $data_capil_jk = Datacapiljk::all();
        return view('admin.listdata.data-capil-jk', [
            'data_capil_jk' => $data_capil_jk
        ]);
    }

    public function editcapiljk($idjk)
    {
        $capiljk = Datacapiljk::where('id', $idjk)->first();
        return view('admin.listdata.edit.edit-capil-jk', [
            'capiljk' => $capiljk
        ]);
    }

    public function updatecapiljk(Request $request, $idjk)
    {
        $updatefk = Datacapiljk::where('id', $idjk)->first()->update([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'jenkel' => $request->jenkel,
            'jumlah' => $request->jumlah,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-capil-jk');
    }

    public function deletecapiljk($idjk)
    {
        $delete_jk = Datacapiljk::where('id', $idjk)->firstOrFail();
        $delete_jk->forceDelete();
        return redirect('/admin/data/data-capil-jk');
    }




    // Data Capil JK 
    public function showdatacapilkk()
    {
        $data_capil_kk = Datacapilkk::all();
        return view('admin.listdata.data-capil-kk', [
            'data_capil_kk' => $data_capil_kk
        ]);
    }

    public function editcapilkk($idkk)
    {
        $data_capil_kk = Datacapilkk::where('id', $idkk)->first();
        return view('admin.listdata.edit.edit-capil-kk', [
            'data_capil_kk' => $data_capil_kk
        ]);
    }

    public function updatecapilkk(Request $request, $idkk)
    {
        $updatefk = Datacapilkk::where('id', $idkk)->first()->update([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'jumlahkk' => $request->jumlahkk,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-capil-kk');
    }

    public function deletecapilkk($idkk)
    {
        $delete_kk = Datacapilkk::where('id', $idkk)->firstOrFail();
        $delete_kk->forceDelete();
        return redirect('/admin/data/data-capil-kk');
    }




    // Data Capil MP 
    public function showdatacapilmp()
    {
        $data_capil_mp = Datacapilmp::all();
        return view('admin.listdata.data-capil-mp', [
            'data_capil_mp' => $data_capil_mp
        ]);
    }

    public function editcapilmp($idmp)
    {
        $data_capil_mp = Datacapilmp::where('id', $idmp)->first();
        return view('admin.listdata.edit.edit-capil-mp', [
            'data_capil_mp' => $data_capil_mp
        ]);
    }

    public function updatecapilmp(Request $request, $idmp)
    {
        $updatefk = Datacapilmp::where('id', $idmp)->first()->update([
            'kecamatan' => $request->kecamatan,
            'tahun' => $request->tahun,
            'matapencaharian' => $request->matapencaharian,
            'jumlahkk' => $request->jumlahkk,
            'updated_at' => now()
        ]);
        return redirect('/admin/data/data-capil-mp');
    }

    public function deletecapilmp($idmp)
    {
        $delete_mp = Datacapilmp::where('id', $idmp)->firstOrFail();
        $delete_mp->forceDelete();
        return redirect('/admin/data/data-capil-mp');
    }




    // Data Perikanan Komodity 
    public function listperikanankomodity()
    {
        $data_perikanan_komodity = Dataperikanankomodity::all();
        return view('admin.listdata.data-perikanan-komodity', [
            'data_perikanan_komodity' => $data_perikanan_komodity
        ]);
    }

    public function editperikanankomodity($idperikanan)
    {
        $perikanan_komodity = Dataperikanankomodity::where('id', $idperikanan)->first();
        return view('admin.listdata.edit.edit-perikanan-komodity', [
            'perikanan' => $perikanan_komodity
        ]);
    }

    public function updateperikanankomodity(Request $request, $idperikanan)
    {
        $update_fk = Dataperikanankomodity::where('id', $idperikanan)->first()->update([
            'kecamatan' => $request->kecamatan,
            'komodity' => $request->komodity,
            'jumlah' => $request->jumlah,
            'tahun' => $request->tahun,
            'updated_at' => now()
        ]);
        return redirect()->route('data-perikanan-komodity');
    }

    public function deleteperikanankomodity($idperikanan)
    {
        $delete_perikanan = Dataperikanankomodity::where('id', $idperikanan)->firstOrFail();
        $delete_perikanan->forceDelete();
        return redirect()->route('data-perikanan-komodity');
    }



    // DATA PERIKANAN JENIS 
    public function dataperikananjenis()
    {
        $perikananjenis = Dataperikananjenis::all();
        return view('admin.listdata.data-perikanan-jenis', [
            'perikananjenis' => $perikananjenis
        ]);
    }

    public function edit_perikananjenis($idperikananjenis)
    {
        $perikananjenis = Dataperikananjenis::where('id', $idperikananjenis)->first();
        return view('admin.listdata.edit.edit-perikanan-jenis', [
            'perikananjenis' => $perikananjenis
        ]);
    }

    public function update_perikananjenis(Request $request, $idperikananjenis)
    {
        $update_perikanan = Dataperikananjenis::where('id', $idperikananjenis)->first()->update([
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
            'updated_at' => now()
        ]);
        return redirect()->route('data-perikanan-jenis');
    }

    public function delete_perikananjenis($idperikananjenis)
    {
        $delete_perikanan = Dataperikananjenis::where('id', $idperikananjenis)->firstOrFail();
        $delete_perikanan->forceDelete();
        return redirect()->route('data-perikanan-jenis');
    }



    // DATA SITUS CAGAR BUDAYA 
    public function input_cagarbudaya()
    {
        return view('admin.data.input-data-situs-cagarbudaya');
    }

    public function post_cagarbudaya(Request $request)
    {
        $cagarbudaya = Datacagarbudaya::create([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'situscagarbudaya' => $request->situscagarbudaya,
            'jumlah' => $request->jumlah,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $cagarbudaya->save();
        return redirect()->route('data-cagar-budaya');
    }

    public function data_cagarbudaya()
    {
        $cagarbudaya = Datacagarbudaya::all();
        return view('admin.listdata.data-cagar-budaya', [
            'cagarbudaya' => $cagarbudaya
        ]);
    }

    public function edit_cagarbudaya($idcagarbudaya)
    {
        $cagarbudaya = Datacagarbudaya::where('id', $idcagarbudaya)->first();
        return view('admin.listdata.edit.edit-cagar-budaya', [
            'cagarbudaya' => $cagarbudaya
        ]);
    }

    public function update_cagarbudaya(Request $request, $idcagarbudaya)
    {
        $update_cagarbudaya = Datacagarbudaya::where('id', $idcagarbudaya)->first()->update([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'situscagarbudaya' => $request->situscagarbudaya,
            'jumlah' => $request->jumlah,
            'updated_at' => now()
        ]);
        return redirect()->route('data-cagar-budaya');
    }

    public function delete_cagarbudaya($idcagarbudaya)
    {
        $delete_cagarbudaya = Datacagarbudaya::where('id', $idcagarbudaya)->firstOrFail();
        $delete_cagarbudaya->forceDelete();
        return redirect()->route('data-cagar-budaya');
    }



    // DATA KOPERASI 
    public function input_koperasi()
    {
        return view('admin.data.input-data-koperasi');
    }

    public function post_koperasi(Request $request)
    {
        $datakoperasi = Datakoperasi::create([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'kud' => $request->kud,
            'kpri' => $request->kpri,
            'koptani' => $request->koptani,
            'kopwan' => $request->kopwan,
            'kopnel' => $request->kopnel,
            'kopmu' => $request->kopmu,
            'kop_tkbm' => $request->kop_tkbm,
            'kop_pontren' => $request->kop_pontren,
            'kop_komite' => $request->kop_komite,
            'ksp' => $request->ksp,
            'kopker' => $request->kopker,
            'kopas' => $request->kopas,
            'primkop' => $request->primkop,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $datakoperasi->save();
        return redirect()->route('data-koperasi');
    }

    public function data_koperasi()
    {
        $users = session('data_login');
        $datakoperasi = Datakoperasi::all();
        return view('admin.listdata.data-koperasi', [
            'datakoperasi' => $datakoperasi,
            'users' => $users
        ]);
    }

    public function edit_koperasi($idkoperasi)
    {
        $datakoperasi = Datakoperasi::where('id', $idkoperasi)->first();
        return view('admin.listdata.edit.edit-koperasi', [
            'datakoperasi' => $datakoperasi
        ]);
    }

    public function update_koperasi(Request $request, $idkoperasi)
    {
        $update_koperasi = Datakoperasi::where('id', $idkoperasi)->first()->update([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'kud' => $request->kud,
            'kpri' => $request->kpri,
            'koptani' => $request->koptani,
            'kopwan' => $request->kopwan,
            'kopnel' => $request->kopnel,
            'kopmu' => $request->kopmu,
            'kop_tkbm' => $request->kop_tkbm,
            'kop_pontren' => $request->kop_pontren,
            'kop_komite' => $request->kop_komite,
            'ksp' => $request->ksp,
            'kopker' => $request->kopker,
            'kopas' => $request->kopas,
            'primkop' => $request->primkop,
            'updated_at' => now()
        ]);
        return redirect()->route('data-koperasi');
    }

    public function delete_koperasi($idkoperasi)
    {
        $delete_koperasi = Datakoperasi::where('id', $idkoperasi)->firstOrFail();
        $delete_koperasi->forceDelete();
        return redirect()->route('data-koperasi');
    }

    

    // DATA LUAS TANAM 
    public function input_luastanamsatu()
    {
        $users = session('data_login');
        return view('admin.data.input-data-luastanam', [
            'users' => $users
        ]);
    }

    public function input_luastanamdua()
    {
        $users = session('data_login');
        return view('admin.data.input-data-luastanam2', [
            'users' => $users
        ]);
    }

    public function post_luastanamsatu(Request $request)
    {
        $luas_satu = Luastanamsatu::create([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'padi' => $request->padi,
            'padi_sawah' => $request->padi_sawah,
            'padi_ladang' => $request->padi_ladang,
            'jagung' => $request->jagung,
            'jagung_hibrida' => $request->jagung_hibrida,
            'jagung_lokal' => $request->jagung_lokal,
            'ubi_kayu' => $request->ubi_kayu,
            'ubi_jalar' => $request->ubi_jalar,
            'kacang_tanah' => $request->kacang_tanah,
            'kacang_kedelai' => $request->kacang_kedelai,
            'kacang_hijau' => $request->kacang_hijau,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $luas_satu->save();
        return redirect()->route('input-luas-tanam-satu');
    }

    public function post_luastanamdua(Request $request)
    {
        $luas_dua = Luastanamdua::create([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'padi' => $request->padi,
            'padi_sawah' => $request->padi_sawah,
            'padi_ladang' => $request->padi_ladang,
            'jagung' => $request->jagung,
            'jagung_hibrida' => $request->jagung_hibrida,
            'jagung_lokal' => $request->jagung_lokal,
            'ubi_kayu' => $request->ubi_kayu,
            'ubi_jalar' => $request->ubi_jalar,
            'kacang_tanah' => $request->kacang_tanah,
            'kacang_kedelai' => $request->kacang_kedelai,
            'kacang_hijau' => $request->kacang_hijau,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $luas_dua->save();
        return redirect()->route('input-luas-tanam-dua');
    }

    public function index_luastanamsatu()
    {
        $users = session('data_login');
        $luas_tanamsatu = Luastanamsatu::all();
        return view('admin.listdata.data-luas-tanam-satu', [
            'luas_tanamsatu' => $luas_tanamsatu,
            'users' => $users
        ]);
    }

    public function index_luastanamdua()
    {
        $users = session('data_login');
        $luas_tanamdua = Luastanamdua::all();
        return view('admin.listdata.data-luas-tanam-dua', [
            'luas_tanamdua' => $luas_tanamdua,
            'users' => $users
        ]);
    }

    public function edit_luastanamsatu($idluastanam)
    {
        $users = session('data_login');
        $luastanamsatu = Luastanamsatu::where('id', $idluastanam)->first();
        return view('admin.listdata.edit.edit-luas-tanam-satu', [
            'luastanamsatu' => $luastanamsatu,
            'users' => $users
        ]);
    }

    public function edit_luastanamdua($idluastanam)
    {
        $users = session('data_login');
        $luastanamdua = Luastanamdua::where('id', $idluastanam)->first();
        return view('admin.listdata.edit.edit-luas-tanam-dua', [
            'luastanamdua' => $luastanamdua, 
            'users' => $users
        ]);
    }

    public function update_luastanamsatu(Request $request, $idluastanam)
    {
        $users = session('data_login');
        $update_luastanam = Luastanamsatu::where('id', $idluastanam)->first()->update([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'padi' => $request->padi,
            'padi_sawah' => $request->padi_sawah,
            'padi_ladang' => $request->padi_ladang,
            'jagung' => $request->jagung,
            'jagung_hibrida' => $request->jagung_hibrida,
            'jagung_lokal' => $request->jagung_lokal,
            'ubi_kayu' => $request->ubi_kayu,
            'ubi_jalar' => $request->ubi_jalar,
            'kacang_tanah' => $request->kacang_tanah,
            'kacang_kedelai' => $request->kacang_kedelai,
            'kacang_hijau' => $request->kacang_hijau,
            'updated_at' => now()
        ]);
        return redirect()->route('data-luas-tanam-satu',['users' => $users]);
    }

    public function update_luastanamdua(Request $request, $idluastanam)
    {
        $update_luastanam = Luastanamdua::where('id', $idluastanam)->first()->update([
            'tahun' => $request->tahun,
            'kecamatan' => $request->kecamatan,
            'padi' => $request->padi,
            'padi_sawah' => $request->padi_sawah,
            'padi_ladang' => $request->padi_ladang,
            'jagung' => $request->jagung,
            'jagung_hibrida' => $request->jagung_hibrida,
            'jagung_lokal' => $request->jagung_lokal,
            'ubi_kayu' => $request->ubi_kayu,
            'ubi_jalar' => $request->ubi_jalar,
            'kacang_tanah' => $request->kacang_tanah,
            'kacang_kedelai' => $request->kacang_kedelai,
            'kacang_hijau' => $request->kacang_hijau,
            'updated_at' => now()
        ]);
        return redirect()->route('data-luas-tanam-dua');
    }

    public function delete_luastanamsatu($idluastanam)
    {
        $delete_luastanam = Luastanamsatu::where('id', $idluastanam)->firstOrFail();
        $delete_luastanam->forceDelete();
        return redirect()->route('data-luas-tanam-satu');
    }

    public function delete_luastanamdua($idluastanam)
    {
        $delete_luastanam = Luastanamdua::where('id', $idluastanam)->firstOrFail();
        $delete_luastanam->forceDelete();
        return redirect()->route('data-luas-tanam-dua');
    }




    // DATA PERDAGANGAN 
    public function input_perdagangan()
    {
        return view('admin.data.input-data-perdagangan');
    }

    public function post_perdagangan(Request $request)
    {
        $data_perdagangan = Dataperdagangan::create([
            'kecamatan' => $request->kecamatan,
            'pasar_aktif' => $request->pasar_aktif,
            'pasar_tidakaktif' => $request->pasar_tidakaktif,
            'pasar_belumterpakai' => $request->pasar_belumterpakai,
            'tahun' => $request->tahun,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_perdagangan->save();
        return redirect()->route('data-perdagangan');
    }

    public function index_perdagangan()
    {
        $users = session('data_login');
        $data_perdagangan = Dataperdagangan::all();
        return view('admin.listdata.data-perdagangan', [
            'data_perdagangan' => $data_perdagangan,
            'users' => $users
        ]);
    }

    public function edit_perdagangan($idperdagangan)
    {
        $perdagangan = Dataperdagangan::where('id', $idperdagangan)->first();
        return view('admin.listdata.edit.edit-data-perdagangan', [
            'perdagangan' => $perdagangan
        ]);
    }

    public function update_perdagangan(Request $request, $idperdagangan)
    {
        $perdagangan = Dataperdagangan::where('id', $idperdagangan)->first()->update([
            'kecamatan' => $request->kecamatan,
            'pasar_aktif' => $request->pasar_aktif,
            'pasar_tidakaktif' => $request->pasar_tidakaktif,
            'pasar_belumterpakai' => $request->pasar_belumterpakai,
            'tahun' => $request->tahun,
            'updated_at' => now()
        ]);
        return redirect()->route('data-perdagangan');
    }

    public function delete_perdagangan(Request $request, $idperdagangan)
    {
        $delete_perdagangan = Dataperdagangan::where('id', $idperdagangan)->firstOrFail();
        $delete_perdagangan->forceDelete();
        return redirect()->route('data-perdagangan');
    }



}
