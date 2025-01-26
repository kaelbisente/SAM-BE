<?php include("connect.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympic Shop</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <!-- icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <?php include "navbar.php" ?>
    <!-- Banner -->
    <!-- Large Screens -->
    <div class="img-fluid d-none d-md-block">
        <a href="shop.php" target="_blank">
            <img class="w-100" src="assets/banner1-large.avif" alt="Description of the image"
                style="width: 100px; height: auto;">
        </a>
    </div>
    <!-- Small Screens -->
    <div class="img-fluid d-md-none">
        <a href="shop.php" target="_blank">
            <img class="w-100" src="assets/banner1-tablet-small.avif" alt="Description of the image"
                style="width: 100px; height: auto;">
        </a>
    </div>
    <!-- carousel poster  -->
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item carouselPoster active">
                <img src="assets/poster1.avif" class="d-block w-100 object-fit-cover" alt="...">
                <a href="shop.php">
                    <div class="shopNow shadow-lg">Shop Now</div>
                </a>
            </div>
            <div class="carousel-item carouselPoster">
                <img src="assets/poster2.jpg" class="d-block w-100 object-fit-cover" alt="...">
                <a href="shop.php">
                    <div class="shopNow shadow-lg">Shop Now</div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false" style="background-color: black;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false" style="background-color: black;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Feature Collection France to -->
    <div class="featured-collection text-center">
        <h3 class="text-uppercase fw-bolder text-start ms-5">featured collection</h3>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <!-- First Panel -->
                <div class="col-md-8 col-lg-3 firstPanel">
                    <div class="d-flex justify-content-center align-items-center text-white p-4"
                        style="height: 300px; border-radius: 10px;">
                        <div class="text-start">
                            <h1 class="fw-bold">TEAM FRANCE<br>FAN ZONE</h1>
                            <p class="">Support Team France with pride! Allez Les Bleus!</p>
                            <a href="shop.php" class="btn btn-light btn-lg px-4 pt-">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- Second Panel -->
                <div class="col-md-8 col-lg-4 secondPanel">
                    <img src="assets/featuredteamfrance.png" alt="Featured Collection" class="img-fluid rounded-2">
                </div>
                <!-- Third Panel -->
                <div class="col-md-8 col-lg-3 thirdPanel d-none d-md-block">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>