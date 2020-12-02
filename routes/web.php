<?php

use Illuminate\Support\Facades\Route;

// Home 
Route::get('/', 'HomeController@index')->name('home');
Route::prefix('/home')->group(function () {
    Route::get('/data-capil-jk', 'HomeController@data_capiljk');
    Route::get('/data-capil-kk', 'HomeController@data_capilkk');
    Route::get('/data-capil-mp', 'HomeController@data_capilmp');
    Route::get('/data-populasi-ternak', 'HomeController@data_populasiternak')->name('home-data-populasi-ternak');
    Route::get('/data-produksi-perkebunan', 'HomeController@data_produksiperkebunan')->name('home-data-produksi-perkebunan');
    Route::get('/data-fasilitas-kesehatan', 'HomeController@data_fasilitaskesehatan');
    Route::get('/data-pendidikan', 'HomeController@data_pendidikan');
    Route::get('/data-pariwisata', 'HomeController@data_pariwisata')->name('home-data-pariwisata');
    Route::get('/data-idm', 'HomeController@data_idm');
    Route::get('/data-koperasi', 'HomeController@data_koperasi')->name('home-data-koperasi');
    Route::get('/data-perikanan-komodity', 'HomeController@data_perikanan_komodity')->name('home-data-perikanan-komodity');
    Route::get('/data-perikanan-jenis', 'HomeController@data_perikanan_jenis')->name('home-data-perikanan-jenis');
    Route::get('/data-cagar-budaya', 'HomeController@data_cagarbudaya')->name('home-data-cagar-budaya');
    Route::get('/data-luas-tanam-satu', 'HomeController@data_luastanamsatu')->name('home-data-luas-tanam-satu');
    Route::get('/data-luas-tanam-dua', 'HomeController@data_luastanamdua')->name('home-data-luas-tanam-dua');
    Route::get('/data-perdagangan', 'HomeController@data_perdagangan')->name('home-data-perdagangan');
 


    // PRINT ROUTE 
    Route::get('/index-print-capiljk', 'PdfController@index_capiljk')->name('index-print-capiljk');
    Route::get('/print-capilkk', 'PdfController@index_capilkk')->name('index-print-capilkk');
    Route::get('/print-capilmp', 'PdfController@index_capilmp')->name('index-print-capilmp');
    Route::get('/print-pendidikan', 'PdfController@index_pendidikan')->name('index-print-pendidikan');
    Route::get('/print-kesehatan', 'PdfController@index_kesehatan')->name('index-print-kesehatan');
    Route::get('/print-kebudayaan', 'PdfController@index_kebudayaan')->name('index-print-kebudayaan');
    Route::get('/print-luastanam', 'PdfController@index_luastanam')->name('index-print-luastanam');
    Route::get('/print-luaspanen', 'PdfController@index_luaspanen')->name('index-print-luaspanen');
    Route::get('/print-perkebunan', 'PdfController@index_perkebunan')->name('index-print-perkebunan');
    Route::get('/print-ternak', 'PdfController@index_ternak')->name('index-print-ternak');
    Route::get('/print-tangkap', 'PdfController@index_tangkap')->name('index-print-tangkap');
    Route::get('/print-budidaya', 'PdfController@index_budidaya')->name('index-print-budidaya');
    Route::get('/print-pariwisata', 'PdfController@index_pariwisata')->name('index-print-pariwisata');
    Route::get('/print-koperasi', 'PdfController@index_koperasi')->name('index-print-koperasi');
    Route::get('/print-idm', 'PdfController@index_idm')->name('index-print-idm');
    Route::get('/print-perdagangan', 'PdfController@index_perdagangan')->name('index-print-perdagangan');
});



// Dashboard 
Route::get('/administrator', 'AdminController@indexdua')->name('administrator');
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminController@login')->name('login');
    Route::post('/login', 'AdminController@postlogin');
    Route::get('/register', 'AdminController@register')->name('register');
    Route::post('/register', 'AdminController@postregister')->name('post-register');
    Route::post('/logout', 'AdminController@logout');
    Route::prefix('/data')->group(function () {
        Route::get('/show', 'AdminController@showdata');

        // Data Fasilitas Kesehatan 
        Route::get('/input-data-fasilitas-kesehatan', 'AdminController@inputdata')->middleware('cekrole');
        Route::post('/post-data-fasilitas-kesehatan', 'AdminController@postdatafasilitaskesehatan')->middleware('cekrole');
        Route::get('/data-fasilitas-kesehatan/{namakecamatan}', 'DataController@showfasilitaskesehatan')->middleware('cekrole');
        Route::get('/data-fasilitas-kesehatan', 'DataController@fasilitaskesehatan')->middleware('cekrole')->name('data-fasilitaskesehatan');
        Route::get('/data-fasilitas-kesehatan/edit/{idedit}', 'DataController@editfasilitaskesehatan')->middleware('cekrole');
        Route::post('/data-fasilitas-kesehatan/update/{idedit}', 'DataController@postfasilitaskesehatan')->middleware('cekrole');
        Route::post('/data-fasilitas-kesehatan-delete/delete/{fasilitas}', 'DataController@hapusfasilitaskesehatan')->middleware('cekrole');

        // Data Kunjungan 
        Route::get('/input-data-kunjungan', 'AdminController@getdatakunjungan');
        Route::post('/input-data-kunjungan', 'AdminController@postdatakunjungan');
        Route::get('/data-kunjungan', 'DataController@showkunjungan')->middleware('cekrole')->name('data-kunjungan');
        Route::get('/data-kunjungan-edit/{idkunjungan}', 'DataController@editkunjungan')->middleware('cekrole');
        Route::post('/data-kunjungan-update/{idkunjungan}', 'DataController@updatekunjungan')->middleware('cekrole');
        Route::post('/data-kunjungan-delete/{idkunjungan}', 'DataController@deletekunjungan')->middleware('cekrole');

        // Data Pendidikan 
        Route::get('/input-data-pendidikan', 'AdminController@getdatapendidikan')->middleware('cekrole');
        Route::post('/input-data-pendidikan', 'AdminController@postdatapendidikan')->middleware('cekrole');
        Route::get('/data-pendidikan', 'DataController@showpendidikan')->middleware('cekrole')->name('data-pendidikan')->middleware('cekrole');
        Route::get('/data-pendidikan-edit/edit/{idpendidikan}', 'DataController@editpendidikan')->middleware('cekrole');
        Route::post('/data-pendidikan-edit/update/{idpendidikan}', 'DataController@updatependidikan')->middleware('cekrole');
        Route::post('/data-pendidikan-delete/delete/{idpendidikan}', 'DataController@deletependidikan')->middleware('cekrole');
        Route::get('/data-pendidikan/{jenjangpendidikan}', 'DataController@filterpendidikan')->middleware('cekrole');

        // Data Indeks Desa Membangun
        Route::get('/input-data-indeks-desa-membangun', 'AdminController@getdatadesamembangun')->middleware('cekrole');
        Route::post('/input-data-indeks-desa-membangun', 'AdminController@postdatadesamembangun')->middleware('cekrole');
        Route::get('/data-indeks-desa-membangun', 'DataController@showindeksdesamembangun')->middleware('cekrole')->name('data-indeksdesa');
        Route::get('/data-indeks-desa-membangun-filter/{namakecamatan}', 'DataController@filteridm')->middleware('cekrole');
        Route::get('/data-indeks-desa-membangun/edit/{ididm}', 'DataController@editidm')->middleware('cekrole');
        Route::post('/data-indeks-desa-membangun/update/{ididm}', 'DataController@updateidm')->middleware('cekrole');
        Route::post('/data-indeks-desa-membangun-delete/{ididm}', 'DataController@deleteidm')->middleware('cekrole');

        // Data Produksi Perkebunan 
        Route::get('/input-data-produksi-perkebunan', 'AdminController@getdataproduksiperkebunan')->middleware('cekrole');
        Route::post('/input-data-produksi-perkebunan', 'AdminController@postdataproduksiperkebunan')->middleware('cekrole');
        Route::get('/data-produksi-perkebunan', 'DataController@showproduksiperkebunan')->middleware('cekrole')->name('data-produksiperkebunan');
        Route::get('/data-produksi-perkebunan/{produksi_perkebunan}', 'DataController@produksiperkebunan')->middleware('cekrole');
        Route::get('/data-produksi-perkebunan-edit/{idperkebunan}', 'DataController@editproduksiperkebunan')->middleware('cekrole');
        Route::post('/data-produksi-perkebunan-update/{idperkebunan}', 'DataController@updateproduksiperkebunan')->middleware('cekrole');
        Route::post('/data-produksi-perkebunan-delete/{idperkebunan}', 'DataController@deleteproduksiperkebunan')->middleware('cekrole');

        // Data Capil Total Jumlah Penduduk Berdasarkan Jenis Kelamin 
        Route::get('/input-data-capil-jk', 'AdminController@getdatacapiljk')->middleware('cekrole');
        Route::post('/input-data-capil-jk', 'AdminController@postdatacapiljk')->middleware('cekrole');
        Route::get('/data-capil-jk', 'DataController@showdatacapiljk')->middleware('cekrole')->name('data-capiljk');
        Route::get('/data-capil-jk-edit/{idjk}', 'DataController@editcapiljk')->middleware('cekrole');
        Route::post('/data-capil-jk-update/{idjk}', 'DataController@updatecapiljk')->middleware('cekrole');
        Route::post('/data-capil-jk-delete/{idjk}', 'DataController@deletecapiljk')->middleware('cekrole');


        // Data Capil Total Jumlah Penduduk Berdasarkan Kartu Keluarga 
        Route::get('/input-data-capil-kk', 'AdminController@getdatacapilkk')->middleware('cekrole');
        Route::post('/input-data-capil-kk', 'AdminController@postdatacapilkk')->middleware('cekrole');
        Route::get('/data-capil-kk', 'DataController@showdatacapilkk')->middleware('cekrole')->name('data-capilkk');
        Route::get('/data-capil-kk-edit/{idkk}', 'DataController@editcapilkk')->middleware('cekrole')->name('edit-capilkk');
        Route::post('/data-capil-kk-update/{idkk}', 'DataController@updatecapilkk')->middleware('cekrole')->name('update-capilkk');
        Route::post('/data-capil-kk-delete/{idkk}', 'DataController@deletecapilkk')->middleware('cekrole')->name('delete-capilkk');

        // Data Populasi Ternak 
        Route::get('/input-data-populasi-ternak', 'AdminController@getdatapopulasiternak')->middleware('cekrole');
        Route::post('/input-data-populasi-ternak', 'AdminController@postdatapopulasiternak')->middleware('cekrole');
        Route::get('/data-populasi-ternak', 'DataController@showdatapopulasiternak')->middleware('cekrole')->name('data-populasiternak');
        Route::get('/data-populasi-ternak-filter/{kecamatan}', 'DataController@filterpopulasiternak')->middleware('cekrole');
        Route::get('/data-populasi-ternak-edit/{idternak}', 'DataController@editpopulasiternak')->middleware('cekrole');
        Route::post('/data-populasi-ternak-delete/{idternak}', 'DataController@deletepopulasiternak')->middleware('cekrole');
        Route::post('/data-populasi-ternak-update/{idternak}', 'DataController@updatepopulasiternak')->middleware('cekrole');

        // Data Jumlah Total Capil Berdasarkan Mata Pencaharian
        Route::get('/input-data-capil-mp', 'AdminController@getdatacapilmp')->middleware('cekrole');
        Route::post('/input-data-capil-mp', 'AdminController@postdatacapilmp')->middleware('cekrole');
        Route::get('/data-capil-mp', 'DataController@showdatacapilmp')->middleware('cekrole')->name('data-capilmp');
        Route::get('/data-capil-mp-edit/{idmp}', 'DataController@editcapilmp')->middleware('cekrole')->name('edit-capilmp');
        Route::post('/data-capil-mp-update/{idmp}', 'DataController@updatecapilmp')->middleware('cekrole')->name('update-capilmp');
        Route::post('/data-capil-mp-delete/{idmp}', 'DataController@deletecapilmp')->middleware('cekrole')->name('delete-capilmp');


        // Data Perikanan Komodity 
        Route::get('/input-data-perikanan-komodity', 'AdminController@inputperikanankomodity')->middleware('cekrole')->name('input-perikanan-komodity');
        Route::post('/input-data-perikanan-komodity', 'AdminController@postperikanankomodity')->middleware('cekrole')->name('post-perikanan-komodity');
        Route::get('/data-perikanan-komodity', 'DataController@listperikanankomodity')->middleware('cekrole')->name('data-perikanan-komodity');
        Route::get('/data-perikanan-komodity-edit/{idperikanan}', 'DataController@editperikanankomodity')->middleware('cekrole')->name('edit-perikanan-komodity');
        Route::get('/data-perikanan-komodity-filter/{tahunperikanan}', 'DataController@filterperikanankomodity')->middleware('cekrole')->name('filter-perikanan-komodity');
        Route::post('/data-perikanan-komodity-update/{idperikanan}', 'DataController@updateperikanankomodity')->middleware('cekrole')->name('update-perikanan-komodity');
        Route::post('/data-perikanan-komodity-delete/{idperikanan}', 'DataController@deleteperikanankomodity')->middleware('cekrole')->name('delete-perikanan-komodity');


        // DATA PERIKANAN JENIS 
        Route::get('/input-data-perikanan-jenis', 'AdminController@input_perikananjenis')->middleware('cekrole')->name('input-perikanan-jenis');
        Route::post('/post-data-perikanan-jenis', 'AdminController@post_perikananjenis')->middleware('cekrole')->name('post-perikanan-jenis');
        Route::get('/data-perikanan-jenis', 'DataController@dataperikananjenis')->middleware('cekrole')->name('data-perikanan-jenis');
        Route::get('/edit-perikanan-jenis/{idperikananjenis}', 'DataController@edit_perikananjenis')->middleware('cekrole')->name('edit-perikanan-jenis');
        Route::post('/update-perikanan-jenis/{idperikananjenis}', 'DataController@update_perikananjenis')->middleware('cekrole')->name('update-perikanan-jenis');
        Route::post('/delete-perikanan-jenis/{idperikananjenis}', 'DataController@delete_perikananjenis')->middleware('cekrole')->name('delete-perikanan-jenis');


        // DATA SITUS CAGAR BUDAYA 
        Route::get('/input-data-cagar-budaya', 'DataController@input_cagarbudaya')->middleware('cekrole')->name('input-cagar-budaya');
        Route::post('/post-data-cagar-budaya', 'DataController@post_cagarbudaya')->middleware('cekrole')->name('post-cagar-budaya');
        Route::get('/data-cagar-budaya', 'DataController@data_cagarbudaya')->middleware('cekrole')->name('data-cagar-budaya');
        Route::get('/edit-cagar-budaya/{idcagarbudaya}', 'DataController@edit_cagarbudaya')->middleware('cekrole')->name('edit-cagar-budaya');
        Route::post('/update-cagar-budaya/{idcagarbudaya}', 'DataController@update_cagarbudaya')->middleware('cekrole')->name('update-cagar-budaya');
        Route::post('/delete-cagar-budaya/{idcagarbudaya}', 'DataController@delete_cagarbudaya')->middleware('cekrole')->name('delete-cagar-budaya');


        // DATA KOPERASI 
        Route::get('/input-data-koperasi', 'DataController@input_koperasi')->middleware('cekrole')->name('input-data-koperasi');
        Route::post('/post-data-koperasi', 'DataController@post_koperasi')->middleware('cekrole')->name('post-data-koperasi');
        Route::get('/data-koperasi', 'DataController@data_koperasi')->middleware('cekrole')->name('data-koperasi');
        Route::get('/edit-koperasi/{idkoperasi}', 'DataController@edit_koperasi')->middleware('cekrole')->name('edit-koperasi');
        Route::post('/update-koperasi/{idkoperasi}', 'DataController@update_koperasi')->middleware('cekrole')->name('update-koperasi');
        Route::post('/delete-koperasi/{idkoperasi}', 'DataController@delete_koperasi')->middleware('cekrole')->name('delete-koperasi');

        // DATA LUAS TANAM 1 
        Route::get('/input-data-luas-tanam-satu', 'DataController@input_luastanamsatu')->middleware('cekrole')->name('input-luas-tanam-satu');
        Route::post('/post-data-luas-tanam-satu', 'DataController@post_luastanamsatu')->middleware('cekrole')->name('post-luas-tanam-satu');
        Route::get('/data-luas-tanam-satu', 'DataController@index_luastanamsatu')->middleware('cekrole')->name('data-luas-tanam-satu');
        Route::get('/edit-luas-tanam-satu/{idluastanam}', 'DataController@edit_luastanamsatu')->middleware('cekrole')->name('edit-luas-tanam-satu');
        Route::post('/update-luas-tanam-satu/{idluastanam}', 'DataController@update_luastanamsatu')->middleware('cekrole')->name('update-luas-tanam-satu');
        Route::post('/delete-luas-tanam-satu/{idluastanam}', 'DataController@delete_luastanamsatu')->middleware('cekrole')->name('delete-luas-tanam-satu');

        // DATA LUAS TANAM 2
        Route::get('/input-data-luas-tanam-dua', 'DataController@input_luastanamdua')->middleware('cekrole')->name('input-luas-tanam-dua');
        Route::post('/post-data-luas-tanam-dua', 'DataController@post_luastanamdua')->middleware('cekrole')->name('post-luas-tanam-dua');
        Route::get('/data-luas-tanam-dua', 'DataController@index_luastanamdua')->middleware('cekrole')->name('data-luas-tanam-dua');
        Route::get('/edit-luas-tanam-dua/{idluastanam}', 'DataController@edit_luastanamdua')->middleware('cekrole')->name('edit-luas-tanam-dua');
        Route::post('/update-luas-tanam-dua/{idluastanam}', 'DataController@update_luastanamdua')->middleware('cekrole')->name('update-luas-tanam-dua');
        Route::post('/delete-luas-tanam-dua/{idluastanam}', 'DataController@delete_luastanamdua')->middleware('cekrole')->name('delete-luas-tanam-dua');

        // DATA PERDAGANGAN 
        Route::get('/input-data-perdagangan', 'DataController@input_perdagangan')->middleware('cekrole')->name('input-data-perdagangan');
        Route::post('/post-data-perdagangan', 'DataController@post_perdagangan')->middleware('cekrole')->name('post-data-perdagangan');
        Route::get('/data-perdagangan', 'DataController@index_perdagangan')->middleware('cekrole')->name('data-perdagangan');
        Route::get('/edit-data-perdagangan/{idperdagangan}', 'DataController@edit_perdagangan')->middleware('cekrole')->name('edit-data-perdagangan');
        Route::post('/update-data-perdagangan/{idperdagangan}', 'DataController@update_perdagangan')->middleware('cekrole')->name('update-data-perdagangan');
        Route::post('/delete-data-perdagangan/{idperdagangan}', 'DataController@delete_perdagangan')->middleware('cekrole')->name('delete-data-perdagangan');

    });
});

Route::get('/ritual', 'AdminController@ritual');
