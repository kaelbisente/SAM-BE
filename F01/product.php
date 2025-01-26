<?php
class Product
{
    public $product_id;
    public $product_name;
    public $product_image;
    public $price;
    public $product_count;
    public $department; 

    public function __construct($id, $name, $image, $price, $count, $department)
    {
        $this->product_id = $id;
        $this->product_name = $name;
        $this->product_image = $image;
        $this->price = $price;
        $this->product_count = $count;
        $this->department = $department; 
    }

    public function generateCard()
    {
        return '
            <div class="col-6 col-md-4 mb-4">
                <div class="card product-card h-100 d-flex flex-column align-items-center justify-content-between text-center p-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="' . $this->product_image. '" 
                             class="card-img-top img-fluid w-100 object-fit-contain" 
                             alt="' . $this->product_name . '">
                    </div>
                    <div class="card-body d-flex flex-column p-0 justify-content-between pb-0">
                        <h6 class="card-title text-center">' . $this->product_name . '</h6>
                        <p class="card-text text-center mb-0">$'. $this->price . '</p>
                        <p class="text-center text-muted mb-0">Stock: ' . $this->product_count . '</p>
                        <p class="text-center text-muted">' . $this->department . '</p> <!-- New department info -->
                    </div>
                    <a href="#?product_id=' . $this->product_id . '" 
                           class="btn btn-primary addBtn d-flex justify-content-center align-items-center text-uppercase">Add to Cart
                    </a>
                </div>
            </div>
        ';
    }
}
?>
