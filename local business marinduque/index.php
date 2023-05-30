
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

    <body class="bg">

        <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Goodchow</span>
        <span class="site-heading-lower">Feeling hungry?</span>
        </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">GOOD CHOW FOOD EXPRESS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">';
        <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Products</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">New Products</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="reviews.php">Reviews</a></li>
                   
        </div>
        </ul>
        </div>
        </div>
        </nav>

        <!-- 1st POST IN HOME PAGE-->

        <section class="page-section clearfix">
        <div class="container">
        <div class="intro">


        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/pizza.jpg" alt="..." />
                    
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Order a box of our Goodchow affordable </span>
        <span class="section-heading-lower">PIZZA!</span>
        </h2>
        <p>
            <li>Ham & cheese</li>
            <li>ALoha</li>
            <li>Meaty meat</li>
            <li>Vegetarian</li>
            <li>Supreme Special</li>
            <li>Pepperoni</li>
            <li>Good Chow Special</li>
            <li>Premium Super thin</li>
            <li>White Pizza</li>
            <br>
            <p>Available sizes: double, family and XL</p>
            <p>For orders and deliveries please call us at PLDT landline 754-0064 or 0905-440-6299 </p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="store.php">Visit Us Today!</a></div>
            </div>
            </div>
            </div>
            </section>
            
        <!-- 2ND POST IN HOME PAGE-->
        
        <section class="page-section clearfix">
        <div class="container">
        <div class="intro">


        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/banana con hielo.jpg" alt="..." />
                    
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Try our new</span>
        <span class="section-heading-lower">Banana Con Hielo</span>
        </h2>
        <p class="mb-3">Beat the heat with our Special Banana Con Hielo.
                        Perfect merienda for any hot day.</p>
                        <span class="section-heading-upper">Try our new</span>
                        <p>#beattheheat #summercoolers #goodchow</p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="store.php">Visit Us Today!</a></div>
            </div>
            </div>
            </div>
            </section>

            <!-- 3rd POST IN HOME PAGE-->
        
        <section class="page-section clearfix">
        <div class="container">
        <div class="intro">


        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/halohalo.jpg" alt="..." />
                    
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Make yourself refreshed with your favorite summer treat. Try now our Halo-halo with leche flan.</span>
        <span class="section-heading-lower">Halo Halo</span>
        </h2>
        <p>
            <li>Halo-halo Regular-80.00</li>
            <li>Halo-halo with Leche Flan-100.00</li>
            <li>Halo-halo Special- 120.00</li>
            <br>
            <p>#summercoolers #goodchow #refreshing</p>
        </p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="store.php">Visit Us Today!</a></div>
            </div>
            </div>
            </div>
            </section>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $date = $_POST["date"];

    // Move the uploaded image to a directory on your server
    $uploadDirectory = __DIR__ . "/img/";
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }
    $image = $_FILES["image"];
    $filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
    $destination = $uploadDirectory . $filename;
    move_uploaded_file($image["tmp_name"], $destination);

    $xmlFile = 'newproducts.xml';

    // Load the existing XML file or create a new one
    if (file_exists($xmlFile)) {
        $tours = simplexml_load_file($xmlFile);
    } else {
        $tours = new SimpleXMLElement('<tours></tours>');
    }

    $tour = $tours->addChild('tour');
    $tour->addChild('title', $title);
    $tour->addChild('details', $description);
    $tour->addChild('date', $date);
    $tour->addChild('image', $filename);

    $tours->asXML($xmlFile);

    echo '<p style="color: white;">New product saved successfully.</p>';
}
?>
        <!-- ABOUT SA WEBSITE-->
        <section class="page-section cta">
            <div class="container">
            <div class="row">
            <div class="col-xl-9 mx-auto">
            <div class="cta-inner bg-faded text-center rounded">
            <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Why</span>
            <span class="section-heading-lower">Good Chow?</span>
            </h2>
            <p class="mb-0">There are many reasons to visit Marinduque, a heart-shaped island province in the Philippines found in the country’s Southwestern Tagalog Region or MIMAROPA. 
            Marinduque is best known for its annual Moriones Festival during the Holy Week. 
            It’s one of the oldest festivals in the Philippines, where locals don colorful masks and costumes to reenact the story of the Roman soldier Longinus.
            Other than during the Moriones Festival, travelers can visit Marinduque all year round for its uncrowded white-sand beaches, gorgeous landscapes, scenic tours, 
            historical landmarks, and cuisine. Marinduque’s unique cuisine and its native delicacies are one of the reasons why you should visit the province. 
            And as part of that GOODD CHOW is one of the leading restaurant here in Marinduque </p>
            </div>
            </div>
            </div>
            </div>
            </section>
            <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright 2023<br>&copy; Olive V. Largardo | Suzzane M. Carreon</p></div>
            </footer>
    </body>
</html>
