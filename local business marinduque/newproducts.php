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
    </body>

    <main>
    <section id="tours" class="container">
        <h1 class="mt-5" style="color: white;">New Products</h1>

        <form method="GET" class="mt-3">
            <div class="form-group">
                <label for="search" style="color: white;">Search:</label>
                <input type="text" id="search" name="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xmlFile = simplexml_load_file('newproducts.xml');
    $found = false;
    foreach ($xmlFile->tour as $tour) {
        if (stripos($tour->title, $search) !== false) {
            echo '<div class="blog mt-5">';
            echo '<h3 style="color: white;">' . $tour->title . '</h3>';
            echo '<p style="color: white;"><strong>Details:</strong> ' . $tour->details . '</p>'; // Use 'details' instead of 'Details'
            echo '<p style="color: white;"><strong>Date:</strong> ' . $tour->date . '</p>';
            echo '<div class="image-container text-center">';
            echo '<img src="img/' . $tour->image . '" alt="img" class="tour-image img-fluid">';
            echo '</div>';
            echo '</div>';
            $found = true;
        }
    }
    if (!$found) {
        echo '<p class="mt-5" style="color: white;">No products found.</p>';
    }
    // Display the search metadata
    echo '<p class="mt-3" style="color: white;">Showing results for search: ' . $search . '</p>';
} else {
    $xmlFile = simplexml_load_file('newproducts.xml');
    foreach ($xmlFile->tour as $tour) {
        echo '<div class="blog mt-5">';
        echo '<h3 style="color: white;">' . $tour->title . '</h3>';
        echo '<p style="color: white;"><strong>Date:</strong> ' . $tour->date . '</p>';
        echo '<div class="image-container text-center">';
        echo '<img src="img/' . $tour->image . '" alt="img" class="tour-image img-fluid">';
        echo '</div>';
        echo '<p style="color: white;"><strong>Details:</strong> ' . $tour->details . '</p>';
        echo '</div>';
    }
}
?>

    </section>
</main>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright 2023<br> &copy; Olive V. Largardo | Suzzane M. Carreon</p></div>
        </footer>';
</html>
