<?php
$pageName = 'portfolio';

$jobsDone = [
    [
        "name" => "Ladda",
        "description" => "Ladda is an investment platform where users can invest in savings, mutual fund and stocks",
        "url" => "https://getladda.com/",
        "banner" => "assets/img/ladda-bg.png",
        "android"=> null,
        "ios"=>null,
        "technologies" => "Javascript/ExpressJs/KnexJs/BookwormJs, Docker, Redis, MySQL, MonnifySDK, Jest",
        "repository" => null
    ],
    [
        "name" => "Click Pay",
        "description" => "A utility payment platform where users can pay their bills and also purchase mobile airtime and data. A task which was manually done is automated is SME data subscription. It has been automated by the platform for customers so they get their subscription under a minute",
        "url" => "https://clickpay.com.ng/",
        "banner" => "assets/img/clickpay-bg.png",
        "android"=> null,
        "ios"=>null,
        "technologies" => "Javascript/ReactJs/Redux/ReduxSaga, PHP/Laravel, Java/Android, MySQL",
        "repository" => null
    ],
    [
        "name" => "Jekalo",
        "description" => "Jekalo is a ride sharing application where users can either offer to share their rides with one or more passengers going in their direction. It serves as a way of making extra income for vehicle owners",
        "url" => null,
        "banner" => "assets/img/jekalo-bg.png",
        "android"=> "https://play.google.com/store/apps/details?id=com.jekalo&hl=en",
        "ios"=>"https://apps.apple.com/us/app/jekalo/id1459103640",
        "technologies" => "Javascript/React Native/NodeJS/GraphQL, GoogleAPIs/Maps/Firebase, Trello",
        "repository" => null
    ],
    [
        "name" => "Automart",
        "description" => "A simple web app where users can post cars for sale.",
        "url" => "https://mthamayor.github.io/auto-mart/",
        "banner" => "assets/img/automart-bg.png",
        "android"=> null,
        "ios"=> null,
        "technologies" => "Javascript/ExpressJs, PostgreSQL, TravisCI, Pivotal Tracker, HTML/CSS",
        "repository" => "https://github.com/mthamayor/auto-mart"
    ],
    [
        "name" => "Learnify",
        "description" => "Simple mobile application where students can study and prepare for examinations. The users can time themselves on assessments",
        "url" => "https://expo.io/@mthamayor/learning-app",
        "banner" => "assets/img/learnify-bg.png",
        "android"=> null,
        "ios"=> null,
        "technologies" => "ReactNative, Typescript, Expo",
        "repository" => "https://github.com/mthamayor/learning-app"
    ],
    
];
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

            <section class="row justify-content-center my-2 p-2">
                <?php foreach($jobsDone as $jobDone): ?>
                <div class="col-12 col-md-8 my-4">
                    <div class="custom-card shadow-sm d-flex flex-column flex-md-row">
                        <div class="flex-2 custom-card-image-container d-flex align-items-center">
                            <img class="img img-fluid" src="<?php echo $jobDone['banner'] ?>" />
                        </div>
                        <div class="d-flex flex-column custom-card-image-details">
                            <div class="flex-1 p-2">
                                <h4><?php echo $jobDone["name"] ?></h4>
                                <div class="description my-2">
                                    <small>
                                    <p>
                                        <?php echo $jobDone["description"] ?>
                                    </p>
                                    <p class="text-muted">
                                      <strong class="pr-2">Technologies Used: </strong> 
                                    <?php echo $jobDone["technologies"] ?>
                                    </p>
                                    </small>
                                </div>
                            </div>
                            <div class="links-container p-2">
                                <?php if($jobDone["url"]): ?>
                                    <a href="<?php echo $jobDone['url'] ?>" target="_blank" class="btn btn-info btn-sm btn-rounded">Visit Site</a>
                                <?php endif; ?>
                                <?php if($jobDone["android"]): ?>
                                    <!-- <a href="<?php ?>"></a> -->
                                    <a href="<?php echo $jobDone["android"] ?>" target="_blank" class=""><img class="img img-fluid custom-store-btn" src="assets/img/gplay.png" /></a>
                                <?php endif; ?>
                                <?php if($jobDone["ios"]): ?>
                                    <a href="<?php echo $jobDone["ios"] ?>" target="_blank" class="custom-store-btn"><img class="img img-fluid custom-store-btn" src="assets/img/appstore.png" /></a>
                                <?php endif; ?>
                                <?php if($jobDone["repository"]): ?>
                                    <a href="<?php echo $jobDone["repository"] ?>" target="_blank" class="btn btn-sm btn-outline-info btn-rounded">Visit Repo</a>
                                    <?php elseif(!$jobDone["repository"]): ?>
                                        <a class="btn btn-sm btn-outline-danger btn-rounded">Repo Undisclosed</a>
                                    <?php endif; ?>
                               </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </div>

        <!-- Script -->
        <?php require_once('components/scripts.html.php') ?>
        <!-- Script Ends -->

        <script>
            const btnsm = document.querySelector('.btn-sm')
            console.log(btnsm.offsetHeight)
        </script>
    </body>

</html>