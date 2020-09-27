<?php
$pageName = 'about';
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

            <section class="row justify-content-center my-5">
                <div class="col-md-4">
                    <h3>About Me</h3>
                    <hr />

                    <div class="my-5">
                        <h4>
                            Get in touch
                        </h4>
                        <span>Have a cool project you want me to help with?</span>
                        <p class="">Send me an email at <a class="custom-text-primary" href="mailto:anifowosehabeeb@gmail.com">anifowosehabeeb@gmail.com</a></p>
                        <p>You can also call me on <a class="custom-text-primary" href="tel:+2348133353249">08133353249</a></p>

                        <div class="d-flex align-items-center mt-3" >
                            <a href="https://twitter.com/mthamayor" target="_blank">
                                <img class="img img-fluid social" src="assets/img/twitter.png" />
                            </a>
                            <a href = "https://www.linkedin.com/in/anifowose-habeeb-502153135/" target="_blank" class="mx-5">
                                <img class="img img-fluid social" src="assets/img/linkedin.png" />
                            </a>
                            <a href="https://github.com/mthamayor" target="_blank">
                                <img class="img img-fluid social" src="assets/img/github-sign.png" />
                            </a>
                        </div>
                    </div>

                    <div class="my-5">
                        <h4>Resume</h4>
                        <div class="my-2">
                            <a class="custom-text-primary" href="assets/files/resume.pdf" download>
                                <img class="mr-2 img img-fluid social" src="assets/img/download.png" />
                                Download Resume
                            </a>
                        </div>
                    </div>

                    <div class="my-5">
                        <h4>My Skillset</h4>
                        
                        <div class="my-2">
                            <strong class="mr-2">Programming Languages:</strong>
                            Java, Javascript, PHP, TypeScript, HTML/CSS
                        </div>

                        <div class="my-2">
                            <strong class="mr-2">Frameworks/Stacks:</strong>
                            JavaSpringBoot, ReactJS, Laravel, AngularJS, ReactNative, Expo, NestJs, NextJs, ExpressJs
                        </div>

                        <div class="my-2">
                            <strong class="mr-2">Databases:</strong>
                            MongoDB, PostgreSQL, MariaDB, MySQL, Redis
                        </div>

                        <div class="my-2">
                            <strong class="mr-2">API Specifications:</strong>
                            REST, GraphQL
                        </div>

                        <div class="my-2">
                            <strong class="mr-2">Infrastructures:</strong>
                            Heroku, Git, Cloudinary, Docker, Pusher, WebSockets
                        </div>

                        <div class="my-2">
                            <strong class="mr-2">Continuous Integration:</strong>
                            TravisCI, CircleCI
                        </div>
                    </div>

                    <div class="my-5">
                        <h4>Career</h4>

                        <div class="my-2">
                            <strong>Jekalo Systems Solutions</strong> - Software Engineer
                            <div>
                                <small>
                                    <em class="text-muted">SEP 2019 - Present</em>
                                </small>
                            </div>
                        </div>

                        <div class="my-2">
                            <strong>Cizar Consult Investments</strong> - Software Engineer
                            <div>
                                <small>
                                    <em class="text-muted">MAY 2018 - SEP 2019</em>
                                </small>
                            </div>
                        </div>


                        <div class="my-2">
                            <strong>Freelancing</strong> - Software Developer
                            <div>
                                <small>
                                    <em class="text-muted">MAY 2014 - MAY 2018</em>
                                </small>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <p>
                        I am a versatile Software Engineer and a Tech Evangelist. I hold a bachelor of engineering degree in Electrical and Computer Engineering with 5+ years experience building incredible software products and balancing client urgency in conjunction with technological complexity of developing these products for globally distributed teams designing and developing solutions to solve complex technical problems.
                    </p>
                    <p>I have successfully interacted with diverse programming languages and technologies. At the core is Java, Javascript and PHP with emphasis on frameworks such as React, React Native, Spring Boot, Nodejs, Expressjs, Laravel, NextJs, NestJs, Android Development and AngularJS. I have built Restful and GraphQL APIs alike. I have also worked with databases such as PostgreSQL, MySQL, MongoDB and Redis for Caching/Job Queues. I use technologies such as Docker, Google services and AWS from time to time.</p>
                    <p>I am enthusiastic about developing practical business solutions using my skill sets. I am constantly in pursuit of knowledge, passionate about a fast-paced, challenging opportunity and agile work environment, not just to push the boundaries of my knowledge and positively impact my growth but to improve the quality of the teams I work with and better the lives of people around me.</p>
                    <p>When I am not coding, I love playing video games and watching football</p>
                </div>
            </section>
        </div>

        <!-- Navigation -->
        <?php require_once('components/scripts.html.php') ?>
        <!-- Navigation Ends -->
    </body>

</html>