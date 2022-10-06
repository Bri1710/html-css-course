<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/Info.php");
require("classes/Product.php");

$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'pixie';
$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";
$dbConnection = new PDO($dsn, $dbUsername, $dbPassword);

$navigation = doQuery($dbConnection, "SELECT * FROM menu where idmenu in (1, 2, 3, 4)");
$footer= doQuery($dbConnection, "SELECT * FROM menu where idmenu in (1, 4, 5, 6, 7)");


$indexText1 = new Info("Latest fashion that you must have", "Spring collection 20", "Subscribe to the newsletter and get 10% off in your first purchase");
$indexText2 = new Info("Best sellers", "Subscribe to PIXIE now!","Get your 10% discount code", );
$indexProduct1 = new Product("High waist jeans", 29.99);
$indexProduct2 = new Product("Flare jeans", 39.99);
$indexProduct3 = new Product("Quilted vest", 54.99);
$indexProduct4 = new Product("Leather chain backpack", 69.99);
$indexProduct5 = new Product("Faux leather small bag", 29.99);
$indexProduct6 = new Product("Converse limited edition", 69.99);


function doQuery(PDO $dbConnection, string $query)
{
    $dbQuery = $dbConnection->prepare($query);
    $dbQuery->execute();
    return $dbQuery->fetchAll();
}

function isItActive (string $link)
{
    $url = $_SERVER["REQUEST_URI"];
    if ($url == $link){
        return true;
    }

    return false;
}

?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--
    Tooplate 2114 Pixie
    https://www.tooplate.com/view/2114-pixie
    -->
</head>

<body>

<!-- Pre Header -->
<div id="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span><?php echo $indexText2->getSecondText(); ?></span>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <?php foreach ($navigation as $name): ?>

                <li class="nav-item <?php if (isItActive($name["link"])): ?>active<?php endif; ?>">
                    <a class="nav-link" href="<?php echo $name["link"] ?>"><?php echo $name["name"] ?>
                        <?php if (isItActive($name["link"])): ?><span class="sr-only">(current)</span><?php endif; ?>
                    </a>
                </li>

                <?php endforeach; ?>


            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2><?php echo $indexText1->getTitle(); ?></h2>
                    <div class="line-dec"></div>
                    <p><?php echo $indexText1->getFirstText(); ?><strong>22</strong>
                        <br><br><?php echo $indexText1->getSecondText(); ?></p>
                    <div class="main-button">
                        <a href="#">Subscribe now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<!-- Featured Starts Here -->
<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1><?php echo $indexText2->getTitle(); ?></h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-01.jpg" alt="Item 1">
                            <h4><?php echo $indexProduct1->getName(); ?></h4>
                            <h6><?php echo $indexProduct1->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-02.jpg" alt="Item 2">
                            <h4><?php echo $indexProduct2->getName(); ?></h4>
                            <h6><?php echo $indexProduct2->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-03.jpg" alt="Item 3">
                            <h4><?php echo $indexProduct3->getName(); ?></h4>
                            <h6><?php echo $indexProduct3->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-04.jpg" alt="Item 4">
                            <h4><?php echo $indexProduct4->getName(); ?></h4>
                            <h6><?php echo $indexProduct4->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-05.jpg" alt="Item 5">
                            <h4><?php echo $indexProduct5->getName(); ?></h4>
                            <h6><?php echo $indexProduct5->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-06.jpg" alt="Item 6">
                            <h4><?php echo $indexProduct6->getName(); ?></h4>
                            <h6><?php echo $indexProduct6->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-04.jpg" alt="Item 7">
                            <h4><?php echo $indexProduct4->getName(); ?></h4>
                            <h6><?php echo $indexProduct4->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-05.jpg" alt="Item 8">
                            <h4><?php echo $indexProduct5->getName(); ?></h4>
                            <h6><?php echo $indexProduct5->getPrice(); ?></h6>
                        </div>
                    </a>
                    <a href="single-product.html">
                        <div class="featured-item">
                            <img src="assets/images/item-06.jpg" alt="Item 9">
                            <h4><?php echo $indexProduct6->getName(); ?></h4>
                            <h6><?php echo $indexProduct6->getPrice(); ?></h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featred Ends Here -->


<!-- Subscribe Form Starts Here -->
<div class="subscribe-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1><?php echo $indexText2->getFirstText(); ?></h1>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="main-content">
                    <p><?php echo $indexText2->getSecondText(); ?></p>
                    <div class="container">
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <div class="col-md-7">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                               onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                               value="Your Email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-5">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">I want it!</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Form Ends Here -->


<!-- Footer Starts Here -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img src="assets/images/header-logo.png" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-menu">
                    <ul>
                        <?php foreach ($footer as $name) : ?>
                        <li><a href="#"><?php echo $name["name"] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ends Here -->


<!-- Sub Footer Starts Here -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text">
                    <p>Copyright &copy; 2019 Company Name

                        - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Footer Ends Here -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>


</body>

</html>
