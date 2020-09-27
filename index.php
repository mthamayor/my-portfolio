<?php
$pageName = 'home';
?>
<!DOCTYPE html>

<html>

    <head>
        <!-- Head -->
        <?php require_once('components/head.html.php') ?>
        <!-- Head Ends -->
    <head>

    <body>
        <div class="container-fluid">
            <!-- Navigation -->
            <?php require_once('components/nav.html.php') ?>
            <!-- Navigation Ends -->

            <section class="row justify-content-center my-2">
                <div class="col-md-4 d-flex align-items-center">
                    <img class="img img-fluid" src="assets/img/MyImage.png" />
                </div>
                <div class="col-md-4 d-flex align-items-center py-2">
                    <div>
                        <p>Hello! I am</p>
                        <h2>Anifowose Habeeb Oluwatobi</h2>
                        <p>I am a versatile Software Engineer and a Tech Evangelist. I hold a bachelor of engineering
                            degree
                            in Electrical and Electronics Engineering with 5+ years experience building incredible
                            software
                            products for globally distributed teams.
                        </p>
                        <div class="mt-4">
                            <a href="portfolio" class="btn popup-button">View portfolio</a>
                        </div>
                    </div>
            </section>
        </div>

        <!-- Navigation -->
        <?php require_once('components/scripts.html.php') ?>
        <!-- Navigation Ends -->
    </body>

</html>