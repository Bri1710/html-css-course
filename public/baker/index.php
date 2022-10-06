<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/FormInfoBaker.php");

$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'sakila';
$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";
$dbConnection = new PDO($dsn, $dbUsername, $dbPassword);

$testimonials = doQuery($dbConnection, "SELECT image, text, name FROM blog_comment LIMIT 0, 2");
$menuList = doQuery($dbConnection,"SELECT name FROM blog_menu_item");
$manyPost = doQuery($dbConnection,"SELECT title, image, likes, views, text FROM blog_post LIMIT 0, 3");
$blogInfo = doQuery($dbConnection,"SELECT adress, pc, country, email, telephone  FROM blog_info LIMIT 0, 1");
$webPortfolio = doQuery($dbConnection,"SELECT * FROM blog_webportfolio LIMIT 0, 6");
$blogCategory = doQuery($dbConnection,"SELECT * FROM blog_category LIMIT 0, 4");
$followMe = doQuery($dbConnection,"SELECT * FROM blog_follow LIMIT 0, 3");
$personInfo1 = new FormInfoBaker("Richard", "crippsy14@googlemail.com", "Collaboration", "I would like to work together. Contact me if you are interested. Have a nice day!");

function doQuery(PDO $dbConnection, string $query)
{
    $dbQuery = $dbConnection->prepare($query);
    $dbQuery->execute();
    return $dbQuery->fetchAll();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baker Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>

<div class="loader"></div>
<div id="myDiv">
    <!--HEADER-->
    <div class="header">
        <div class="bg-color">
            <header id="main-header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <?php foreach ($menuList as $menu): ?>
                                    <li class="active"><a href="#main-header"><?php echo $menu["name"] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>
                </nav>
            </header>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="banner-info text-center wow fadeIn delay-05s">
                            <h2 class="bnr-sub-title">WELCOME TO BAKER</h2>
                            <p class="bnr-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.</p>
                            <div class="brn-btn">
                                <a href="#" class="btn btn-download">Subscribe</a>
                            </div>
                            <div class="overlay-detail">
                                <a href="#feature"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="feature" class="section-padding wow fadeIn delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                    </div>
                </div>
                <?php foreach ($followMe as $follow) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img src="<?php echo $follow["image"] ?>">
                        </div>
                        <h3 class="pad-bt15"><?php echo $follow["socialmedia"] ?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="service" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">What I Do?</h2>
                    <p class="sub-title pad-bt15">ART<br>Graphic design, publicity and esthetic</p>
                    <hr class="bottom-line">
                </div>
                <?php foreach ($blogCategory as $category) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3><span><?php echo substr($category["title"], 0, 1)?></span><?php echo substr ($category["title"],1) ?></h3>
                        <p><?php echo $category["text"] ?></p>
                        <a href="">Learn more...</a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">My portfolio</h2>
                    <p class="sub-title pad-bt15">Some design<br></p>
                    <hr class="bottom-line">
                </div>
                <?php foreach ($webPortfolio as $portfolio) : ?>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                    <figure>
                        <img src="<?php echo $portfolio["image"] ?>" class="img-responsive">
                        <figcaption>
                            <h2><?php echo $portfolio["title"] ?></h2>
                            <p><?php echo $portfolio["text"] ?></p>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
        <div class="bg-testicolor">
            <div class="container section-padding">
                <div class="row">
                    <div class="testimonial-item">
                        <ul class="bxslider">
                            <?php foreach ($testimonials as $testimonial) : ?>
                            <li>
                                <blockquote>
                                    <img src="<?php echo $testimonial["image"]; ?>" class="img-responsive" />
                                    <p>
                                        <?php echo $testimonial["text"]; ?>
                                    </p>
                                </blockquote>
                                <small>
                                    <?php echo $testimonial["name"]; ?>
                                </small>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Latest post</h2>
                    <p class="sub-title pad-bt15">Thoughts and ideas<br></p>
                    <hr class="bottom-line">
                </div>
                <?php foreach ($manyPost as $post) : ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                    <img src="<?php echo $post["image"]; ?>" class="img-responsive">
                                </a>
                        </div>
                        <div class="blog-info">
                            <h2><?php echo $post["title"]; ?></h2>
                            <div class="blog-comment">
                                <p>Posted In: <span>Legal Advice</span></p>
                                <p>
                                    <span><a href="#"><i class="fa fa-comments"></i></a><?php echo $post["likes"]; ?></span>
                                    <span><a href="#"><i class="fa fa-eye"></i></a><?php echo $post["views"]; ?></span></p>
                            </div>
                            <p><?php echo $post["text"]; ?></p>
                            <a href="" class="read-more">Read more →</a>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center white">
                    <h2 class="service-title pad-bt15">Keep in touch with me</h2>
                    <p class="sub-title pad-bt15">Any questions?<br></p>
                    <hr class="bottom-line white-bg">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php foreach ($blogInfo as $info) : ?>
                    <div class="loction-info white">
                        <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i><?php echo $info["adress"]; ?><br><?php echo $info["pc"] . $info["country"]; ?></p>
                        <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><?php echo $info["email"]; ?></p>
                        <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i><?php echo $info["telephone"]; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="col-md-6 padding-right-zero">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder= "<?php echo $personInfo1->getName(); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder= "<?php echo $personInfo1->getEmail(); ?>"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder= "<?php echo $personInfo1->getSubject(); ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=" <?php echo $personInfo1->getMessage(); ?>"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <p>&copy; Baker Theme. All Rights Reserved.</p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>
    <!---->
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>
