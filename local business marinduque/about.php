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
</head>
<body>

<?php 
echo '
<header>
<h1 class="site-heading text-center text-faded d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">goodchow</span>
    <span class="site-heading-lower">Get in touch</span>
</h1>
</header>

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

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/aboutbg.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">

                            <span class="section-heading-lower">About goodchowfood express</span>
                        </h2>
                        <p>GoodChow Food Express is a popular restaurant located in Boac, Marinduque. It offers a diverse menu of both local and international cuisines, sourced locally, and friendly and attentive service. It has a rating of 3.9 and is appreciated for its tasty food, prompt service, and friendly staff. It is a must-visit for food enthusiasts looking to explore a diverse menu, experience excellent service, and savor the rich flavors of both local and international cuisines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">

    <div class="container"><p class="m-0 small">Copyright 2023<br> &copy; Olive V. Largardo | Suzzane M. Carreon</p></div>
</footer>';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rating = $_POST["rating"];
    $reviewText = $_POST["review"];

    $reviewsFile = 'reviews.xml';

    // Load the existing XML file or create a new one
    if (file_exists($reviewsFile)) {
        $reviews = simplexml_load_file($reviewsFile);
    } else {
        $reviews = new SimpleXMLElement('<reviews></reviews>');
    }

    $review = $reviews->addChild('review');
    $review->addChild('rating', $rating);
    $review->addChild('reviewText', $reviewText);

    $reviews->asXML($reviewsFile);

    echo "Thank you for your review!";
}
?>

</body>
</html>
