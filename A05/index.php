<?php
include("connect.php");
include("classes.php");

$islandContents = array();

$islandQuery = "
    SELECT 
        ip.name AS island_name, 
        ip.shortDescription AS short_desc, 
        ip.longDescription AS long_desc, 
        ic.content AS content, 
        ic.image AS island_image,
        ip.image AS islandperso_image
    FROM islandsofpersonality ip
    JOIN islandcontents ic ON ip.islandOfPersonalityID = ic.islandOfPersonalityID";
    
    
$islandResult = executeQuery($islandQuery);

$name = '';
$shortDescription = '';
$longDescription = '';
$islandContents = [];

$titles = ['Laiya 2023', 'DevCon 2024', 'Paresan', 'Biking - Pandemic Era', 'Badminton', 'Basketball', 'Valorant', 'Mobile Legends', 'Farlight'];
$titleIndex = 0; 

while ($row = mysqli_fetch_assoc($islandResult)) {
    

    $islandNames[] = $row['island_name'];
    if (empty($name)) {
        $name = $row['island_name'];
        $shortDescription = $row['short_desc'];
        $longDescription = $row['long_desc'];
    }

    $title = $titles[$titleIndex % count($titles)];

    $a = new Island(
        $row['island_name'],
        $row['short_desc'],
        $row['long_desc'],
        $row['content'],
        $row['island_image'],
        $row['islandperso_image'],
        $title
    );

    array_push($islandContents, $a);
    $titleIndex++;
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../A05/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end -->

    <!-- Blog Text -->
    <div class="container white-bg mt-4">
        <div class="row">
            <div class="col">
                <h1 class="text-uppercase text-center mt-4">Vincent Bloglife</h1>
                <h5 class="text-center fw-light mt-4">Welcome to the blog of Vincent's Personality</h5>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- img con -->
    <div class="container imgCon">
        <div class="col">
            <div class="row">
                <img class="img-fluid mx-auto" src="../A05/assets/jett.jpg" alt="jet image">
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- content -->
    <div class="container gray-bg mt-5 ">
        <div class="row">
            <div class="col-lg-8 gray-bg">
                <!-- Friendly Island -->
                <div class="content white-bg">
                    <?php
                    foreach ($islandContents as $content) {
                        echo $content->generateCard();
                    }
                    ?>
                </div>
                <!-- end of friendly island -->
                
                <!-- Sports Island -->
            </div>
                <!-- side content -->
                <div class="col-lg-4 gray-bg ">
                    <div class="sideContent w-100 ">
                        <div class="profile">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="../A05/assets/profimage.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <p class="card-text">Just me, myself and I, exploring the universe of uknownment. I have
                                        a heart of love and a interest. I want to share my world with you.</p>
                                </div>
                            </div>
                            <div class="card w-100 mt-4" style="border: none;">
                                <div class="card-header text-white p-4 fw-bold">
                                    Personality
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">lorem <span class="text-muted"></span></li>
                                    <li class="list-group-item">lorem <span class="text-muted"></span></li>
                                    <li class="list-group-item">lorem <span class="text-muted"></span></li>
                                    <li class="list-group-item">lorem <span class="text-muted"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>