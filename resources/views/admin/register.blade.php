<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-2">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Halaman Tambah User</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputnameAddress">Nama</label>
                                                <input name="name" class="form-control py-4" id="inputnameAddress" type="name" aria-describedby="nameHelp" placeholder="Masukkan Nama..." autofocus/>
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputusernameAddress">Username</label>
                                                <input name="username" class="form-control py-4" id="inputusernameAddress" type="username" aria-describedby="usernameHelp" placeholder="Masukkan Username..." />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputpasswordAddress">Password</label>
                                                <input name="password" class="form-control py-4" id="inputpasswordAddress" type="password" aria-describedby="passwordHelp" placeholder="Masukkan Password..." />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Masukkan Email..." />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputRoleAkses">Role Akses</label>
                                                <select name="level" class="form-control" id="inputRoleAkses">
                                                    <option value="dinas_capil">Dinas Catatan Sipil</option>
                                                    <option value="dinas_pendidikan">Dinas Pendidikan</option>
                                                    <option value="dinas_kesehatan">Dinas Kesehatan</option>
                                                    <option value="dinas_perikanan">Dinas Perikanan</option>
                                                    <option value="dinas_pertanian">Dinas Pertanian</option>
                                                    <option value="dinas_kebudayaan">Dinas Kebudayaan</option>
                                                    <option value="dinas_pariwisata">Dinas Pariwisata</option>
                                                    <option value="dinas_perdagangan">Dinas Perdagangan</option>
                                                    <option value="dinas_koperasi">Dinas Koperasi</option>
                                                    <option value="dinas_pemberdayaanmasyarakat">Dinas Pemberdayaan Masyarakat</option>
                                                  </select>
                                            </div>
                                            
                                            <div class="form-group mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block">Tambah Pengguna</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
