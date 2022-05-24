<?php

Route::post('/login', 'LoginController@login');
Route::get('/', 'LoginController@checkAuth');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('/siswa/beranda', 'SiswaController@beranda');
    Route::post('/siswa/raport', 'SiswaController@cetakraport');
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/beranda', 'SuperadminController@beranda');
    Route::get('/m/periode', 'SuperadminController@periode');
    Route::get('/m/periode/create', 'SuperadminController@periodecreate');
    Route::post('/m/periode/create', 'SuperadminController@periodestore');
    Route::get('/m/periode/edit/{id}', 'SuperadminController@periodeedit');
    Route::post('/m/periode/edit/{id}', 'SuperadminController@periodeupdate');
    Route::get('/m/periode/delete/{id}', 'SuperadminController@periodedelete');

    Route::get('/m/kelas', 'SuperadminController@kelas');
    Route::get('/m/kelas/create', 'SuperadminController@kelascreate');
    Route::post('/m/kelas/create', 'SuperadminController@kelasstore');
    Route::get('/m/kelas/edit/{id}', 'SuperadminController@kelasedit');
    Route::post('/m/kelas/edit/{id}', 'SuperadminController@kelasupdate');
    Route::get('/m/kelas/delete/{id}', 'SuperadminController@kelasdelete');

    Route::get('/m/mapel', 'SuperadminController@mapel');
    Route::get('/m/mapel/create', 'SuperadminController@mapelcreate');
    Route::post('/m/mapel/create', 'SuperadminController@mapelstore');
    Route::get('/m/mapel/edit/{id}', 'SuperadminController@mapeledit');
    Route::post('/m/mapel/edit/{id}', 'SuperadminController@mapelupdate');
    Route::get('/m/mapel/delete/{id}', 'SuperadminController@mapeldelete');


    Route::get('/m/guru', 'SuperadminController@guru');
    Route::get('/m/guru/create', 'SuperadminController@gurucreate');
    Route::post('/m/guru/create', 'SuperadminController@gurustore');
    Route::get('/m/guru/edit/{id}', 'SuperadminController@guruedit');
    Route::post('/m/guru/edit/{id}', 'SuperadminController@guruupdate');
    Route::get('/m/guru/delete/{id}', 'SuperadminController@gurudelete');


    Route::get('/m/siswa', 'SuperadminController@siswa');
    Route::get('/m/siswa/create', 'SuperadminController@siswacreate');
    Route::post('/m/siswa/create', 'SuperadminController@siswastore');
    Route::get('/m/siswa/edit/{id}', 'SuperadminController@siswaedit');
    Route::post('/m/siswa/edit/{id}', 'SuperadminController@siswaupdate');
    Route::get('/m/siswa/delete/{id}', 'SuperadminController@siswadelete');
    Route::get('/m/siswa/akun/{id}', 'SuperadminController@siswaakun');
    Route::get('/m/siswa/reset/{id}', 'SuperadminController@siswareset');

    Route::get('/m/predikat', 'SuperadminController@predikat');
    Route::get('/m/predikat/create', 'SuperadminController@predikatcreate');
    Route::post('/m/predikat/create', 'SuperadminController@predikatstore');
    Route::get('/m/predikat/edit/{id}', 'SuperadminController@predikatedit');
    Route::post('/m/predikat/edit/{id}', 'SuperadminController@predikatupdate');
    Route::get('/m/predikat/delete/{id}', 'SuperadminController@predikatdelete');


    Route::get('/t/pkg', 'SuperadminController@pkg');
    Route::get('/t/pkg/create', 'SuperadminController@pkgcreate');
    Route::post('/t/pkg/create', 'SuperadminController@pkgstore');
    Route::get('/t/pkg/edit/{id}', 'SuperadminController@pkgedit');
    Route::post('/t/pkg/edit/{id}', 'SuperadminController@pkgupdate');
    Route::get('/t/pkg/delete/{id}', 'SuperadminController@pkgdelete');
    Route::get('/t/pkg/tambahsiswa/{id}', 'SuperadminController@tambahsiswa');
    Route::get('/t/pkg/tambahsiswa/{id}/delete/{ids}', 'SuperadminController@deletetambahsiswa');
    Route::post('/t/pkg/tambahsiswa/{id}', 'SuperadminController@simpantambahsiswa');
    Route::get('/t/pkg/tambahmapel/{id}', 'SuperadminController@tambahmapel');
    Route::post('/t/pkg/tambahmapel/{id}', 'SuperadminController@simpantambahmapel');
    Route::get('/t/pkg/tambahmapel/{id}/delete/{idm}', 'SuperadminController@deletetambahmapel');

    Route::get('/t/penilaian', 'PenilaianController@index');
    Route::get('/t/penilaian/{id_periode}', 'PenilaianController@kelas');
    Route::get('/t/penilaian/{id_periode}/{id_pkg}', 'PenilaianController@mapel');
    Route::get('/t/penilaian/{id_periode}/{id_pkg}/{id_mapel}', 'PenilaianController@nilai');
    Route::post('/t/penilaian/{id_periode}/{id_pkg}/{id_mapel}', 'PenilaianController@updatenilai');

    Route::get('/laporan/guru', 'LaporanController@guru');
    Route::get('/laporan/siswa', 'LaporanController@siswa');
    Route::get('/laporan/raport', 'LaporanController@raport');

    Route::get('/laporan/guru/cetak', 'LaporanController@cetakguru');
    Route::get('/laporan/siswa/cetak', 'LaporanController@cetaksiswa');
    Route::post('/laporan/raport', 'LaporanController@cetakraport');
});
