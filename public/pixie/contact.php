<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/Info.php");

$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'pixie';
$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";
$dbConnection = new PDO($dsn, $dbUsername, $dbPassword);

$navigation = doQuery($dbConnection, "SELECT * FROM menu where idmenu in (1, 2, 3, 4)");
$footer = doQuery($dbConnection, "SELECT * FROM menu where idmenu in (1, 4, 5, 6, 7)");
$form = doQuery($dbConnection, "SELECT * FROM form");

$contactText1 = new Info("Where we are", "Subscribe to PIXIE now!", "Get your 10% discount code");

function doQuery(PDO $dbConnection, string $query)
{
    $dbQuery = $dbConnection->prepare($query);
    $dbQuery->execute();
    return $dbQuery->fetchAll();
}

function isItActive(string $link)
{
    $url = $_SERVER["REQUEST_URI"];
    if ($url == $link) {
        return true;
    }

}

function getClasses(array $info): string
{

    if ($info["idform"] == 1 || $info["idform"] == 2) {
        return "col-md-6";
    }

    if ($info["idform"] == 3 || $info["idform"] == 4) {
        return "col-md-12";
    }

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

    <title>Pixie Template - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
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
                <span><?php echo $contactText1->getSecondText(); ?></span>
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
                <?php foreach ($navigation as $name): ?>

                    <li class="nav-item <?php if (isItActive($name["link"])): ?>active<?php endif; ?>">
                        <a class="nav-link" href="<?php echo $name["link"] ?>"><?php echo $name["name"] ?>
                            <?php if (isItActive($name["link"])): ?><span
                                class="sr-only">(current)</span><?php endif; ?>
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<!-- About Page Starts Here -->
<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1><?php echo $contactText1->getTitle(); ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.3720901730567!2d-2.956369184304124!3d43.264579985490464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5039a42081bd%3A0x8443518aabd1667a!2sCmo.%20de%20la%20Ventosa%2C%2050%2C%2048013%20Bilbao%2C%20Vizcaya!5e0!3m2!1ses!2ses!4v1648827156619!5m2!1ses!2ses"
                        width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="container">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <?php foreach ($form as $info) : ?>
                                    <div class="<?php echo getClasses($info) ?>">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control"
                                                   id="<?php echo $info["id"] ?>"
                                                   placeholder="<?php echo $info["placeholder"] ?>" required="">
                                        </fieldset>
                                    </div>
                                <?php endforeach; ?>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="share">
                                        <h6>You can also keep in touch on: <span><a href="#"><i
                                                        class="fa fa-facebook"></i></a><a href="#"><i
                                                        class="fa fa-linkedin"></i></a><a href="#"><i
                                                        class="fa fa-twitter"></i></a></span></h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->
<div class="subscribe-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1><?php echo $contactText1->getFirstText(); ?></h1>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="main-content">
                    <p><?php echo $contactText1->getSecondText(); ?></p>
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
                                        <button type="submit" id="form-submit" class="button">I WANT IT!</button>
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
<script src="assets/js/isotope.js"></script>
<script src="assets/js/flex-slider.js"></script>


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
