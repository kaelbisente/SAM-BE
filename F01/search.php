<?php
include "connect.php";  // Include your DB connection

// Get the search query from the URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Basic validation (optional)
if (empty($query)) {
    echo "<p>No search query provided.</p>";
    exit;
}

// Query the database for products matching the search term
$sql = "SELECT * FROM products WHERE product_name LIKE '%$query%' OR department LIKE '%$query%'";
$result = executeQuery($sql);

// If results are found, generate the product cards
if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">'; // Start the row for the grid layout
    // Loop through the results and echo each product's HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-6 col-md-4 mb-4"> <!-- Bootstrap grid column classes for responsive layout -->
            <div class="card product-card h-100 d-flex flex-column align-items-center justify-content-between text-center p-2">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="' . $row['product_image'] . '" 
                         class="card-img-top img-fluid w-100 object-fit-contain" 
                         alt="' . $row['product_name'] . '">
                </div>
                <div class="card-body d-flex flex-column p-0 justify-content-between pb-0">
                    <h6 class="card-title text-center">' . $row['product_name'] . '</h6>
                    <p class="card-text text-center mb-0">$' . $row['price'] . '</p>
                    <p class="text-center text-muted mb-0">Stock: ' . $row['product_count'] . '</p>
                    <p class="text-center text-muted">' . $row['department'] . '</p> <!-- New department info -->
                </div>
                <a href="cart.php?product_id=' . $row['product_id'] . '" 
                   class="btn btn-primary addBtn d-flex justify-content-center align-items-center text-uppercase">Add to Cart
                </a>
            </div>
        </div>';
    }
    echo '</div>'; // End the row
} else {
    echo "<p>No products found for your search.</p>";
}
?>
