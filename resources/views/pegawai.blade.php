<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Home
    </title>
    <x-link />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <x-sidenav active='pegawai' />
    <main class="main-content position-relative border-radius-lg ">
        <x-navbar page='Pegawai'/>

        <div class="container-fluid py-4 w-100">
            <div class="col-xl-12">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div class="card px-3">
                            <div class="card-header mx-4 p-3 text-center">
                                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                    <i class="fas fa-landmark opacity-10"></i>
                                </div>
                                <h6 class="text-center mb-0">Form Data Pegawai</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 card-body pt-0 p-3 text-start">
                                    <h5 class="my-2">Nama</h5>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nama...">
                                    </div>
                                </div>
                                <div class="col-md-6 card-body pt-0 p-3 text-start">
                                    <h5 class="my-2">Jabatan</h5>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Jabatan...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-start">
                                <h5 class="my-2">Gaji</h5>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>

                            </div>
                            <div class="card-body pt-0 p-3 text-start">
                                <h5 class="my-2">Pendidikan</h5>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type here...">
                                </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-start">
                                <label for="formFile" class="form-label"><h5>Gambar Profile</h5></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="card-body pt-0 p-3 my-2 text-end">
                                <a class="btn bg-gradient-danger mb-0" href="javascript:;"><i class="fas fa-times"></i>&nbsp;&nbsp;Batalkan</a>
                                <a class="btn bg-gradient-primary mb-0" href="javascript:;"><i class="fas fa-check"></i>&nbsp;&nbsp;Simpan</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-script />
</body>

</html>