<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" required>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                </ul> -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <br><br><br>
        <div class="container">
            <div class="p-4">
                <p class="font-monospace fs-4">Pesan <?php echo $_GET['pesan']; ?></p>
                <hr class="w-25">
            </div>
            <!-- start content -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="img/<?php echo $_GET['pesan']; ?>.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="<?php echo $_GET['pesan']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_GET['pesan']; ?></h5>
                            <p class="card-text font-monospace">Rp. <?php echo number_format($_GET['harga'],0,',','.') ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                        <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Isi Form Pemesanan</p>
                        <hr class="w-25">
                    <form action="hasilpesan.php?pesan=<?php echo $_GET['pesan']; ?>" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nama Pembeli</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Quantity</span>
                            <select class="form-control" id="exampleFormControlSelect1" name="qty" required>
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">nomor meja</span>
                            <input type="number" class="form-control" aria-describedby="basic-addon3" name="meja" required>
                        </div>
                        <div class="input-group mb-3" style="display: none;">
                            <span class="input-group-text" id="basic-addon4">Harga</span>
                            <input type="number" readonly value="<?php echo $_GET['harga'] ?>" class="form-control"
                                aria-describedby="basic-addon4" name="harga" required>
                        </div>
                        <button type="button" class="btn btn-primary col-md-12" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Pesan sekarang</button>
                            <!-- <button type="submit">pesan</button> -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah pesanan anda sudah sesuai ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary">Iya Dong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end content -->
            <hr class="featurette-divider">
            <footer class=" p-4 ">
                <div>
                    <p class="a">Copyright © 2022 - Restoran kami.</p>
                </div>
            </footer>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>