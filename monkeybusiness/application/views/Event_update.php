<!DOCTYPE html>
<html lang="en">

<head>

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
        <?php
        echo form_open('events/update');
        echo form_hidden('old_id',$old_id);
        echo form_label('Name');
        echo form_input(array('id'=>'name','name'=>'name', 'value'=>$records[0]->Name));
        echo "<br/>";

        echo form_label('Start Date');
        echo form_input(array('id'=>'startDate','name'=>'startDate', 'value'=>$records[0]->StartDate));
        echo "<br/>";

        echo form_label('End Date');
        echo form_input(array('id'=>'endDate','name'=>'endDate', 'value'=>$records[0]->EndDate));
        echo "<br/>";

        echo form_label('Person Id');
        echo form_input(array('id'=>'personId','name'=>'personId', 'value'=>$records[0]->PersonId));
        echo "<br/>";

        echo form_submit(array('id'=>'submit','value'=>'Edit'));
        echo form_close();
        ?>

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
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/tether/tether.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
