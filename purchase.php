<?php
	include "counter.php";
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>eMos Gaming Studios</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">
                <h4>eMos Gaming Studios</h4>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="purchase.php">Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="bg-secondary" id="services">
        <div class="container">
            <div class="row">
                <p>Enter your details below to be notified when preorder available</p>
            </div>
            <div class="row">
            
                <form action="data.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <label for="inputFName">First Name</label>
                            <input type="text" class="form-control" placeholder="First name" name="fname" id="inputFName">
                        </div>
                        <div class="col">
                            <label for="inputLName">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last name" name="lname" id="inputLName">
                        </div>
                    </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" id="inputEmail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputNumber">Phone Number</label>
                                <input type="text" class="form-control" name="number" placeholder="Password" id="inputNumber">
                            </div>
                        </div>
                    <input type="submit">
                    </div>
                </form>
            
            </div>
                



            </div>
        </div>

    </section>

    <!-- Bootstrap core JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.js"</script> -->

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>


    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="section-heading text-white">About us</h2>
                        <p></p><br>
                        <p class="text-white mb-4">eMos Studios is a young but passionate gaming studio committed to delivering fast-paced, exciting and next generation experience to gamers everywhere.</p>

                </div>
            </div>
        </div>
    </section>

</body>

</html>
