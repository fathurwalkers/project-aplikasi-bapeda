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
    Route::get('/data-pariwisata', 'HomeController@data_pariwisata');
    Route::get('/data-idm', 'HomeController@data_idm');
    Route::get('/data-koperasi', 'HomeController@data_koperasi')->name('home-data-koperasi');
    Route::get('/data-perikanan-komodity', 'HomeController@data_perikanan_komodity')->name('home-data-perikanan-komodity');
    Route::get('/data-perikanan-jenis', 'HomeController@data_perikanan_jenis')->name('home-data-perikanan-jenis');
    Route::get('/data-cagar-budaya', 'HomeController@data_cagarbudaya')->name('home-data-cagar-budaya');
    Route::get('/data-luas-tanam-satu', 'HomeController@data_luastanamsatu')->name('home-data-luas-tanam-satu');
    Route::get('/data-luas-tanam-dua', 'HomeController@data_luastanamdua')->name('home-data-luas-tanam-dua');
    Route::get('/data-perdagangan', 'HomeController@data_perdagangan')->name('home-data-perdagangan');


    // PRINT ROUTE 
    Route::get('/data-capil-jk-print', 'PdfController@print_capiljk')->name('print-capiljk');
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
        Route::get('/input-data-fasilitas-kesehatan', 'AdminController@inputdata');
        Route::post('/post-data-fasilitas-kesehatan', 'AdminController@postdatafasilitaskesehatan');
        Route::get('/data-fasilitas-kesehatan/{namakecamatan}', 'DataController@showfasilitaskesehatan');
        Route::get('/data-fasilitas-kesehatan', 'DataController@fasilitaskesehatan')->name('data-fasilitaskesehatan');
        Route::get('/data-fasilitas-kesehatan/edit/{idedit}', 'DataController@editfasilitaskesehatan');
        Route::post('/data-fasilitas-kesehatan/update/{idedit}', 'DataController@postfasilitaskesehatan');
        Route::post('/data-fasilitas-kesehatan-delete/delete/{fasilitas}', 'DataController@hapusfasilitaskesehatan');

        // Data Kunjungan 
        Route::get('/input-data-kunjungan', 'AdminController@getdatakunjungan');
        Route::post('/input-data-kunjungan', 'AdminController@postdatakunjungan');
        Route::get('/data-kunjungan', 'DataController@showkunjungan')->name('data-kunjungan');
        Route::get('/data-kunjungan-edit/{idkunjungan}', 'DataController@editkunjungan');
        Route::post('/data-kunjungan-update/{idkunjungan}', 'DataController@updatekunjungan');
        Route::post('/data-kunjungan-delete/{idkunjungan}', 'DataController@deletekunjungan');

        // Data Pendidikan 
        Route::get('/input-data-pendidikan', 'AdminController@getdatapendidikan');
        Route::post('/input-data-pendidikan', 'AdminController@postdatapendidikan');
        Route::get('/data-pendidikan', 'DataController@showpendidikan')->name('data-pendidikan');
        Route::get('/data-pendidikan-edit/edit/{idpendidikan}', 'DataController@editpendidikan');
        Route::post('/data-pendidikan-edit/update/{idpendidikan}', 'DataController@updatependidikan');
        Route::post('/data-pendidikan-delete/delete/{idpendidikan}', 'DataController@deletependidikan');
        Route::get('/data-pendidikan/{jenjangpendidikan}', 'DataController@filterpendidikan');

        // Data Indeks Desa Membangun
        Route::get('/input-data-indeks-desa-membangun', 'AdminController@getdatadesamembangun');
        Route::post('/input-data-indeks-desa-membangun', 'AdminController@postdatadesamembangun');
        Route::get('/data-indeks-desa-membangun', 'DataController@showindeksdesamembangun')->name('data-indeksdesa');
        Route::get('/data-indeks-desa-membangun-filter/{namakecamatan}', 'DataController@filteridm');
        Route::get('/data-indeks-desa-membangun/edit/{ididm}', 'DataController@editidm');
        Route::post('/data-indeks-desa-membangun/update/{ididm}', 'DataController@updateidm');
        Route::post('/data-indeks-desa-membangun-delete/{ididm}', 'DataController@deleteidm');

        // Data Produksi Perkebunan 
        Route::get('/input-data-produksi-perkebunan', 'AdminController@getdataproduksiperkebunan');
        Route::post('/input-data-produksi-perkebunan', 'AdminController@postdataproduksiperkebunan');
        Route::get('/data-produksi-perkebunan', 'DataController@showproduksiperkebunan')->name('data-produksiperkebunan');
        Route::get('/data-produksi-perkebunan/{produksi_perkebunan}', 'DataController@produksiperkebunan');
        Route::get('/data-produksi-perkebunan-edit/{idperkebunan}', 'DataController@editproduksiperkebunan');
        Route::post('/data-produksi-perkebunan-update/{idperkebunan}', 'DataController@updateproduksiperkebunan');
        Route::post('/data-produksi-perkebunan-delete/{idperkebunan}', 'DataController@deleteproduksiperkebunan');

        // Data Capil Total Jumlah Penduduk Berdasarkan Jenis Kelamin 
        Route::get('/input-data-capil-jk', 'AdminController@getdatacapiljk');
        Route::post('/input-data-capil-jk', 'AdminController@postdatacapiljk');
        Route::get('/data-capil-jk', 'DataController@showdatacapiljk')->name('data-capiljk');
        Route::get('/data-capil-jk-edit/{idjk}', 'DataController@editcapiljk');
        Route::post('/data-capil-jk-update/{idjk}', 'DataController@updatecapiljk');
        Route::post('/data-capil-jk-delete/{idjk}', 'DataController@deletecapiljk');


        // Data Capil Total Jumlah Penduduk Berdasarkan Kartu Keluarga 
        Route::get('/input-data-capil-kk', 'AdminController@getdatacapilkk');
        Route::post('/input-data-capil-kk', 'AdminController@postdatacapilkk');
        Route::get('/data-capil-kk', 'DataController@showdatacapilkk')->name('data-capilkk');
        Route::get('/data-capil-kk-edit/{idkk}', 'DataController@editcapilkk')->name('edit-capilkk');
        Route::post('/data-capil-kk-update/{idkk}', 'DataController@updatecapilkk')->name('update-capilkk');
        Route::post('/data-capil-kk-delete/{idkk}', 'DataController@deletecapilkk')->name('delete-capilkk');

        // Data Populasi Ternak 
        Route::get('/input-data-populasi-ternak', 'AdminController@getdatapopulasiternak');
        Route::post('/input-data-populasi-ternak', 'AdminController@postdatapopulasiternak');
        Route::get('/data-populasi-ternak', 'DataController@showdatapopulasiternak')->name('data-populasiternak');
        Route::get('/data-populasi-ternak-filter/{kecamatan}', 'DataController@filterpopulasiternak');
        Route::get('/data-populasi-ternak-edit/{idternak}', 'DataController@editpopulasiternak');
        Route::post('/data-populasi-ternak-delete/{idternak}', 'DataController@deletepopulasiternak');
        Route::post('/data-populasi-ternak-update/{idternak}', 'DataController@updatepopulasiternak');

        // Data Jumlah Total Capil Berdasarkan Mata Pencaharian
        Route::get('/input-data-capil-mp', 'AdminController@getdatacapilmp');
        Route::post('/input-data-capil-mp', 'AdminController@postdatacapilmp');
        Route::get('/data-capil-mp', 'DataController@showdatacapilmp')->name('data-capilmp');
        Route::get('/data-capil-mp-edit/{idmp}', 'DataController@editcapilmp')->name('edit-capilmp');
        Route::post('/data-capil-mp-update/{idmp}', 'DataController@updatecapilmp')->name('update-capilmp');
        Route::post('/data-capil-mp-delete/{idmp}', 'DataController@deletecapilmp')->name('delete-capilmp');


        // Data Perikanan Komodity 
        Route::get('/input-data-perikanan-komodity', 'AdminController@inputperikanankomodity')->name('input-perikanan-komodity');
        Route::post('/input-data-perikanan-komodity', 'AdminController@postperikanankomodity')->name('post-perikanan-komodity');
        Route::get('/data-perikanan-komodity', 'DataController@listperikanankomodity')->name('data-perikanan-komodity');
        Route::get('/data-perikanan-komodity-edit/{idperikanan}', 'DataController@editperikanankomodity')->name('edit-perikanan-komodity');
        Route::get('/data-perikanan-komodity-filter/{tahunperikanan}', 'DataController@filterperikanankomodity')->name('filter-perikanan-komodity');
        Route::post('/data-perikanan-komodity-update/{idperikanan}', 'DataController@updateperikanankomodity')->name('update-perikanan-komodity');
        Route::post('/data-perikanan-komodity-delete/{idperikanan}', 'DataController@deleteperikanankomodity')->name('delete-perikanan-komodity');


        // DATA PERIKANAN JENIS 
        Route::get('/input-data-perikanan-jenis', 'AdminController@input_perikananjenis')->name('input-perikanan-jenis');
        Route::post('/post-data-perikanan-jenis', 'AdminController@post_perikananjenis')->name('post-perikanan-jenis');
        Route::get('/data-perikanan-jenis', 'DataController@dataperikananjenis')->name('data-perikanan-jenis');
        Route::get('/edit-perikanan-jenis/{idperikananjenis}', 'DataController@edit_perikananjenis')->name('edit-perikanan-jenis');
        Route::post('/update-perikanan-jenis/{idperikananjenis}', 'DataController@update_perikananjenis')->name('update-perikanan-jenis');
        Route::post('/delete-perikanan-jenis/{idperikananjenis}', 'DataController@delete_perikananjenis')->name('delete-perikanan-jenis');


        // DATA SITUS CAGAR BUDAYA 
        Route::get('/input-data-cagar-budaya', 'DataController@input_cagarbudaya')->name('input-cagar-budaya');
        Route::post('/post-data-cagar-budaya', 'DataController@post_cagarbudaya')->name('post-cagar-budaya');
        Route::get('/data-cagar-budaya', 'DataController@data_cagarbudaya')->name('data-cagar-budaya');
        Route::get('/edit-cagar-budaya/{idcagarbudaya}', 'DataController@edit_cagarbudaya')->name('edit-cagar-budaya');
        Route::post('/update-cagar-budaya/{idcagarbudaya}', 'DataController@update_cagarbudaya')->name('update-cagar-budaya');
        Route::post('/delete-cagar-budaya/{idcagarbudaya}', 'DataController@delete_cagarbudaya')->name('delete-cagar-budaya');


        // DATA KOPERASI 
        Route::get('/input-data-koperasi', 'DataController@input_koperasi')->name('input-data-koperasi');
        Route::post('/post-data-koperasi', 'DataController@post_koperasi')->name('post-data-koperasi');
        Route::get('/data-koperasi', 'DataController@data_koperasi')->name('data-koperasi');
        Route::get('/edit-koperasi/{idkoperasi}', 'DataController@edit_koperasi')->name('edit-koperasi');
        Route::post('/update-koperasi/{idkoperasi}', 'DataController@update_koperasi')->name('update-koperasi');
        Route::post('/delete-koperasi/{idkoperasi}', 'DataController@delete_koperasi')->name('delete-koperasi');

        // DATA LUAS TANAM 1 
        Route::get('/input-data-luas-tanam-satu', 'DataController@input_luastanamsatu')->name('input-luas-tanam-satu');
        Route::post('/post-data-luas-tanam-satu', 'DataController@post_luastanamsatu')->name('post-luas-tanam-satu');
        Route::get('/data-luas-tanam-satu', 'DataController@index_luastanamsatu')->name('data-luas-tanam-satu');
        Route::get('/edit-luas-tanam-satu/{idluastanam}', 'DataController@edit_luastanamsatu')->name('edit-luas-tanam-satu');
        Route::post('/update-luas-tanam-satu/{idluastanam}', 'DataController@update_luastanamsatu')->name('update-luas-tanam-satu');
        Route::post('/delete-luas-tanam-satu/{idluastanam}', 'DataController@delete_luastanamsatu')->name('delete-luas-tanam-satu');

        // DATA LUAS TANAM 2
        Route::get('/input-data-luas-tanam-dua', 'DataController@input_luastanamdua')->name('input-luas-tanam-dua');
        Route::post('/post-data-luas-tanam-dua', 'DataController@post_luastanamdua')->name('post-luas-tanam-dua');
        Route::get('/data-luas-tanam-dua', 'DataController@index_luastanamdua')->name('data-luas-tanam-dua');
        Route::get('/edit-luas-tanam-dua/{idluastanam}', 'DataController@edit_luastanamdua')->name('edit-luas-tanam-dua');
        Route::post('/update-luas-tanam-dua/{idluastanam}', 'DataController@update_luastanamdua')->name('update-luas-tanam-dua');
        Route::post('/delete-luas-tanam-dua/{idluastanam}', 'DataController@delete_luastanamdua')->name('delete-luas-tanam-dua');

        // DATA PERDAGANGAN 
        Route::get('/input-data-perdagangan', 'DataController@input_perdagangan')->name('input-data-perdagangan');
        Route::post('/post-data-perdagangan', 'DataController@post_perdagangan')->name('post-data-perdagangan');
        Route::get('/data-perdagangan', 'DataController@index_perdagangan')->name('data-perdagangan');
        Route::get('/edit-data-perdagangan/{idperdagangan}', 'DataController@edit_perdagangan')->name('edit-data-perdagangan');
        Route::post('/update-data-perdagangan/{idperdagangan}', 'DataController@update_perdagangan')->name('update-data-perdagangan');
        Route::post('/delete-data-perdagangan/{idperdagangan}', 'DataController@delete_perdagangan')->name('delete-data-perdagangan');

    });
});

Route::get('/ritual', 'AdminController@ritual');
