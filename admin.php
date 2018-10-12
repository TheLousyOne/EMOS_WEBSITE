 <?php
/*require_once "uq/auth.php";
auth_require();*/
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
            <a class="navbar-brand js-scroll-trigger" href="index.php">
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
                <?php include "adminTable.php" ?>
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