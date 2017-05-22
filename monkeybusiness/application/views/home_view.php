<!DOCTYPE html>
<html lang="en">

<head>

    <!-- design: https://startbootstrap.com/template-overviews/landing-page/ -->
    <!-- login: http://www.iluv2code.com/login-with-codeigniter-php.html-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingelogd</title>

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("assets/css/landing-page.css"); ?>  rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>  rel="stylesheet" type="text/css">
    <link href=<?php echo base_url("https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"); ?>  rel="stylesheet" type="text/css">

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>

    


</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="#">Groep B9</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="home/logout">Logout</a>
                </li>


            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="intro-header">
    <div class="container">
        <div class="intro-message">
            <h1>Ingelogd</h1>
            <h3>Welcome <?php echo $username; ?>!</h3>
            <hr class="intro-divider">

        </div>
    </div>
</header>

<!-- Page Content -->
<section class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2><a href="events">Ga naar evenementen</a></h2>






            </div>
            <div class="col-lg-5 offset-lg-2">
                <img class="img-fluid" src=<?php echo base_url("assets/img/dog.png"); ?> alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>


<aside class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Web Project</h2>
            </div>
            <div class="col-lg-6">
                <h2>Groep B9</h2>
            </div>
        </div>

    </div>
    <!-- /.container -->

</aside>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">

        <p class="copyright text-muted small">Copyright &copy; Groep B9 2017. All Rights Reserved</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src=<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?> > </script>
<script src=<?php echo base_url("assets/vendor/tether/tether.min.js"); ?> > </script>
<script src=<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");  ?> > </script>

</body>

</html>
