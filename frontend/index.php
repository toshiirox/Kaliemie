<!DOCTYPE php>
<html lang="fr">
<?php session_start(); ?>
<?php include("core/head.php"); ?>
<body>
<?php include 'verifconnexion.php' ?>
<?php include("core/navbar.php"); ?>
<!-- Header -->
<?php include("core/header.php"); ?>
<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
            </h1>

            <p>FUS RO DAH!!!!</p>
        </div>


    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->

    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">

    </div>
    <!-- /.row -->

    <hr>

    <?php
    if (isset($_SESSION['id'])) {
        //include 'visites';
        include 'visites.php';
    } else {
        ?>
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum
                        deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <hr>

    <!-- Footer -->
    <?php include("core/footer.php"); ?>


</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->


</body>

</html>
