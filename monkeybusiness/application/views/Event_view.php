<!DOCTYPE html>
<html lang="en">

<head>

    <!-- design: https://startbootstrap.com/template-overviews/landing-page/ -->
    <!-- login: http://www.iluv2code.com/login-with-codeigniter-php.html-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Events</title>

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
<<<<<<< HEAD

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
    
    <div class="container">
        <a class="navbar-brand" href="#">Groep B9</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">


            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="intro-header">
    <div class="container">
        <div class="intro-message">
            <h1>Evenementen</h1>
            <h3>Voeg evenementen toe of pas ze aan.</h3>
            <hr class="intro-divider">

        </div>
    </div>
</header>

<!-- Page Content -->
<section class="content-section-a">

    <div class="container">
        <h1>Events Monkey Business</h1>
        <table class = "table table-bordered" border = "1">

            <?php

            echo "<tr>";
            echo "<td>Id</td>";
            echo "<td>Name</td>";
            echo "<td>Start Date</td>";
            echo "<td>End Date</td>";
            echo "<td>Person Id</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<tr>";


            foreach($records as $r) {
                echo "<tr>";
                echo "<td><a href = '".base_url()."index.php/events/"
                    .$r->Id."'>$r->Id</a></td>";
                echo "<td>".$r->Name."</td>";
                echo "<td>".$r->StartDate."</td>";
                echo "<td>".$r->EndDate."</td>";
                echo "<td>".$r->PersonId."</td>";
                echo "<td><a href = '".base_url()."index.php/events/update_event_view/"
                    .$r->Id."'>Edit</a></td>";
                echo "<td><a href = '".base_url()."index.php/events/delete/"
                    .$r->Id."'>Delete</a></td>";
                echo "<tr>";
            }
            echo "<a href = ".base_url()."index.php/events/create_event_view>Add"."</a>";
            ?>
        </table>

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

=======
<body class="container">
<h1>Events Monkey Business</h1>
<table class = "table table-bordered" border = "1">
    <?php
    echo "<tr>";
    echo "<td>Id</td>";
    echo "<td>Name</td>";
    echo "<td>Start Date</td>";
    echo "<td>End Date</td>";
    echo "<td>Person Id</td>";
    echo "<td>Edit</td>";
    echo "<td>Delete</td>";
    echo "<tr>";


    foreach($records as $r) {
        echo "<tr>";
        echo "<td><a href = '".base_url()."index.php/events/"
            .$r->Id."'>$r->Id</a></td>";
        echo "<td>".$r->Name."</td>";
        echo "<td>".$r->StartDate."</td>";
        echo "<td>".$r->EndDate."</td>";
        echo "<td>".$r->PersonId."</td>";
        echo "<td><a href = '".base_url()."index.php/events/update_event_view/"
            .$r->Id."'>Edit</a></td>";
        echo "<td><a href = '".base_url()."index.php/events/delete/"
            .$r->Id."'>Delete</a></td>";
        echo "<tr>";
    }
    echo "<a href = ".base_url()."index.php/events/create_event_view>Add"."</a>";
    ?>
</table>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";}
    }

    function showPosition(position) {
        x.innerHTML="Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
</script>


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
>>>>>>> origin/master
</body>

</html>
