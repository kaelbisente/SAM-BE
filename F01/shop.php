<?php
include "connect.php";
include "product.php";

$departmentFilter = isset($_GET['department']) ? $_GET['department'] : '';

$query = "SELECT * FROM products";
if ($departmentFilter) {
    $query .= " WHERE department = '$departmentFilter'";
}

$result = executeQuery($query);

$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = new Product(
        $row['product_id'],
        $row['product_name'],
        $row['product_image'],
        $row['price'],
        $row['product_count'],
        $row['department']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympic Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/shop.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include "navbar.php" ?>
    <!-- Shop Section -->
    <section id="shop" class="py-2 bg-light">
        <div class="container-fluid">
            <h2 class="allProd mb-4 d-flex align-items-center w-100 justify-content-between">
                All Products
                <button id="filter-toggle" class="btn btn-primary d-md-none">Filters</button>
            </h2>
            <div class="row">
                <!-- Sidebar -->
                <div id="sidebar" class="col-md-3 mb-4">
                    <div class="bg-white ps-1 rounded shadow-sm">
                        <div id="filter-section" class="collapse d-md-block">
                            <h5 class="mb-3">All Departments</h5>
                            <ul class="list-unstyled">
                                <?php
                                $departments = ['bags', 'accessories', 'headwear', 'jacket', 'pants', 'shorts', 't-shirt'];
                                foreach ($departments as $department) {
                                    $checked = $departmentFilter === $department ? 'checked' : '';
                                    echo "<li class='radio-item'>
                                        <input type='radio' name='department' id='$department' value='$department' $checked>
                                        <label for='$department'>
                                            <span class='radio-label'>
                                                <span class='radio-text'>" . ucfirst(str_replace('_', ' ', $department)) . "</span>
                                            </span>
                                        </label>
                                      </li>";
                                }
                                ?>
                            </ul>
                            <button class="btn btn-secondary" onclick="window.location.href='shop.php';">Clear Filter</button>
                        </div>
                    </div>
                </div>
                <!-- Products -->
                <div class="col-md-9" id="products-container">
                    <div class="row">
                        <?php
                        if (empty($products)) {
                            echo "<p class='text-center'>No products found for the selected department.</p>";
                        } else {
                            foreach ($products as $product) {
                                echo $product->generateCard();
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include "footer.php"?>
    <!-- JS Scripts -->
    <script src="shop.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>