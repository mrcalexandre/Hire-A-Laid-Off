<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hire a talented person">
    <meta name="author" content="Alexandre Mouriec">
    <meta property="og:image" content="assets/img/image.jpg" />
    <meta property="og:image:width" content="980" />
    <meta property="og:image:height" content="600" />
    <title>Hire a Laid Off</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg" href="assets/img/people.svg">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- Argon CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/argon.css?v=1.0.1');?>">

</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
            <div class="container">
                <a class="navbar-brand mr-lg-6" href="<?php echo base_url()?>">
                  Hire A Laid Off
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="">
                                  Hire A Laid off
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span class="nav-link-inner--text">People laid off currently looking for a new job</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/mrcalexandre" target="_blank" class="nav-link">
                                <span class="nav-link-inner--text">Contact</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a class="btn btn-neutral btn-icon" href="https://twitter.com/intent/tweet?url=" target="_blank" data-text="Hire a Buzzfeeder" data-url="https://hireabuzzfeeder.herokuapp.com" data-related="" data-show-count="false">
                                <span class="nav-link-inner--text">Share</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-default">
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="display-3  text-white">
                                </h1>
                                <p class="lead  text-white">Find <?php echo $nbjournalists ?> super talented people who have been laid off and are currently looking for a new job</p>
                                <div class="btn-wrapper">
                                    <a href="" target="_blank" class="btn btn-primary mb-3 mb-sm-0">
                                        <span class="btn-inner--text">Add a person</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="row row-grid">
                            <?php foreach ($journalists as $journalist): ?>
                            <div class="col-lg-4 col-md-5">
                                <div class="card card-lift--hover shadow border-0 text-center">
                                    <div class="card-body py-5">
                                        <img class="img-fluid people-photo rounded shadow-lg " src="<?php echo $journalist['idphoto']; ?>" />

                                        <h6 class="text-primary text-uppercase">
                                            <?php echo $journalist['surname']; ?>   <?php echo $journalist['name']; ?>
                                        </h6>
                                        <p class="heading mb-0">
                                            <?php echo $journalist['bio']; ?>
                                        </p>
                                        <p class="description mb-0">
                                            <?php echo $journalist['expertise']; ?>
                                        </p>
                                        <p class="description mt-3">Location :
                                            <?php echo $journalist['location']; ?>
                                        </p>
                                        <div>
                                        </div>
                                        <div class="text-center button">
                                            <a target="_blank" href="<?php echo $journalist['url']; ?>"> <button type="button" class="btn btn-primary mb-1 mb-sm-0"><span class="btn-inner--text">Contact</span></button></a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2019
                        <a href="" target="_blank">Hire a LaidOff</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="https://twitter.com/mrcalexandre" class="nav-link" target="_blank">Made by Alexandre Mouriec</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/headroom/headroom.min.js');?>"></script>
    <!-- Argon JS -->
    <script src="<?php echo base_url('assets/js/argon.js?v=1.0.1');?>"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>
