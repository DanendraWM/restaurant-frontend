<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    .carousel .carousel-inner {
        height: 400px;
    }
    @media (max-width: 600px) {
  .carousel .carousel-inner {
        height: 200px;
    }
}
</style>

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
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="img/ayam bakar.jpg" class="d-block w-100" alt="ayam bakar">
            </div>
            <div class="carousel-item">
                <img src="img/mango juice.jpg" class="d-block w-100" alt="mango juice">
            </div>
            <div class="carousel-item">
                <img src="img/turkish dessert.jpg" class="d-block w-100" alt="dessert ">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="p-4">
            <p class="font-monospace fs-4">Categories</p>
            <hr class=" w-25">
        </div>
        <div class="row m-5 text-center">
            <div class="col-lg-4">
                <img src="img/mie ayam.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140"
                    alt="mi ayam">
                <h2 class="fw-normal">Food</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur in corrupti id perferendis nesciunt
                    similique debitis repudiandae consequuntur temporibus explicabo.</p>
                <p><a class="btn btn-secondary" href="detailMakanan.php">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/turkish dessert.jpg" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" alt="makanan">

                <h2 class="fw-normal">Dessert</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nemo consequuntur ratione
                    recusandae nulla similique maxime sint quia doloribus optio!
                </p>
                <p><a class="btn btn-secondary" href="detailDessert.php">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/mango juice.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140"
                    alt="mango juice">

                <h2 class="fw-normal">Drink</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, alias facere nostrum culpa
                    veniam enim.</p>
                <p><a class="btn btn-secondary" href="detailMinuman.php">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <hr class="featurette-divider">
        <footer class=" p-4 ">
            <div>
                <p class="a">Copyright © 2022 - Restoran kami.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>