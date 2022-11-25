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
            <!-- start content -->
            <div class="row">
                <div class="alert alert-primary my-2" role="alert">
                    Pemesan anda berhasil, Mohon di tunggu!
                </div>
                <div class="col-md-5">
                    <img src="img/wait.jpg" width="100%" height="100%" alt="wait">
                </div>
                <div class="col-md-7 mt-5">
                    <div class="card" style="max-width: 600px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="img/<?php echo $_GET['pesan'] ?>.jpg" class="my-auto rounded-start p-1"
                                    width="100%" height="100%" alt="<?php echo $_GET['pesan'] ?>">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="card-text">Nama Menu :
                                        <?php echo $_GET['pesan'] ?>
                                    </p>
                                    <p class="card-text">Nama pemesan :
                                        <?php echo $_POST['nama'] ?>
                                    </p>
                                    <p class="card-text">Nomor meja :
                                        <?php echo $_POST['meja'] ?>
                                    </p>
                                    <p class="card-text">Harga :
                                        <?php echo $_POST['harga'] ?>
                                    </p>
                                    <p class="card-text">Total pesanan :
                                        <?php echo $_POST['qty'] ?>
                                    </p>
                                    <p class="card-text">Total Harga :
                                        <?php echo $_POST['qty']*$_POST['harga'] ?>
                                    </p>
                                    <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
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