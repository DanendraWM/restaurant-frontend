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
                <p class="font-monospace fs-4">Dessert</p>
                <hr class=" w-25">
            </div>
            <!-- start content -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/turkish dessert.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="turkish dessert">
                        <div class="card-body">
                            <h5 class="card-title">turkish dessert</h5>
                            <p class="card-text font-monospace">Rp. 43.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=turkish dessert&harga=43000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/chocolate delight.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="chocolate delight">

                        <div class="card-body">
                            <h5 class="card-title">chocolate delight</h5>
                            <p class="card-text font-monospace">Rp. 23.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=chocolate delight&harga=23000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/cincau.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="cincau">
                        <div class="card-body">
                            <h5 class="card-title">cincau</h5>
                            <p class="card-text font-monospace">Rp. 21.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=cincau&harga=21000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/klepon dessert.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="klepon dessert">
                        <div class="card-body">
                            <h5 class="card-title">klepon dessert</h5>
                            <p class="card-text font-monospace">Rp. 31.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=klepon dessert&harga=31000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pumpkin dessert.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="pumpkin dessert">
                        <div class="card-body">
                            <h5 class="card-title">pumpkin dessert</h5>
                            <p class="card-text font-monospace">Rp. 25.000</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=pumpkin dessert&harga=25000" class="btn btn-primary col-md-12">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/strawberry cake.jpg" class="bg-placeholder-img card-img-top" width="100%"
                            height="225" alt="strawberry cake">
                        <div class="card-body">
                            <h5 class="card-title">strawberry cake</h5>
                            <p class="card-text font-monospace">Rp. 30.500</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="pesan.php?pesan=strawberry cake&harga=30500" class="btn btn-primary col-md-12">Pesan</a>
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