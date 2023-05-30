<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Goodchow food express</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/product.css">
    </head>
    <body>
    <?php
    echo'<header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Good Chow</span>
                <span class="site-heading-lower">MENU</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">GOOD CHOW FOOD EXPRESS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="newproducts.php">New Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="reviews.php">Reviews</a></li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    '
        ?> 
    <section class="reviews">
    <div class="container"><br>
        <h2 class="text-center text-white">Customer Reviews</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="review-form">
                    <h3 class="text-center text-white">Leave a Review</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <label for="review" class="text-white">Review:</label>
                            <textarea name="review" id="review" rows="5" class="form-control" required></textarea>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reviewText = $_POST["review"];

    $reviewsFile = 'reviews.xml';

    // Load the existing XML file or create a new one
    if (file_exists($reviewsFile)) {
        $reviews = simplexml_load_file($reviewsFile);
    } else {
        $reviews = new SimpleXMLElement('<reviews></reviews>');
    }

    $review = $reviews->addChild('review');
    $review->addChild('reviewText', $reviewText);

    $reviews->asXML($reviewsFile);

    echo '<div class="text-center"><span class="text-white">Thank you for your review!</span></div>';

}
?>
    </body>

   

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright 2023<br> &copy; Olive V. Largardo | Suzzane M. Carreon</p></div>
        </footer>';
</html>