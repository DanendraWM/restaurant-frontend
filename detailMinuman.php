<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <p class="font-monospace fs-4">Drink</p>
                <hr class=" w-25">
            </div>
            <!-- start content -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/just a water.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="just a water">
                        <div class="card-body">
                            <h5 class="card-title">just a water</h5>
                            <p class="card-text font-monospace">Rp. 121.500</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=just a water&harga=121500" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/arnold palmer.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="arnold palmer">

                        <div class="card-body">
                            <h5 class="card-title">arnold palmer</h5>
                            <p class="card-text font-monospace">Rp. 32.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=arnold palmer&harga=32000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/mango juice.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="mango juice">
                        <div class="card-body">
                            <h5 class="card-title">mango juice</h5>
                            <p class="card-text font-monospace">Rp. 19.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=mango juice&harga=19000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/milk and orange juice.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="milk and orange juice">
                        <div class="card-body">
                            <h5 class="card-title">milk and orange juice</h5>
                            <p class="card-text font-monospace">Rp. 20.500</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=milk and orange juice&harga=20500" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/soju.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="soju">
                        <div class="card-body">
                            <h5 class="card-title">soju</h5>
                            <p class="card-text font-monospace">Rp. 32.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=soju&harga=32000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/tequila sunrise.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="tequila sunrise">
                        <div class="card-body">
                            <h5 class="card-title">tequila sunrise</h5>
                            <p class="card-text font-monospace">Rp. 26.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=tequila sunrise&harga=26000" class="btn btn-primary col-md-12">Pesan</a>
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