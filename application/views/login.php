<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login Pemetaan</title>

    <meta charset="UTF-8">
    <meta name="description" content="Clean and responsive administration panel">
    <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
    <meta name="author" content="Erik Campobadal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('public/') ?>images/logo.png">
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('public/js/sweetalert.min.js') ?>"></script>

    <script src="<?= base_url('public/') ?>js/uikit.min.js"></script>
    <script src="<?= base_url('public/') ?>js/uikit-icons.min.js"></script>
    <script>
        var base_url = "<?= base_url() ?>";
    </script>
</head>

<body>
    <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active" style="position: fixed; top: 0px; width: 1903px;">
        <div class="uk-container uk-container-expand">
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a href="#" class="uk-navbar-item uk-logo">
                        Halaman Login
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="content-background">
        <div class="uk-section-large">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
                    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                    <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <center>
                                    <h2>Silakan lakukan Login</h2><br />
                                </center>
                                <form method="POST">
                                    <fieldset class="uk-fieldset">

                                        <div class="uk-margin">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon ion-android-person"></span>
                                                <input name="username" class="uk-input" required placeholder="Username" id="username" type="text">
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon ion-locked"></span>
                                                <input name="password" class="uk-input" type="password" required id="password" placeholder="Password">
                                            </div>
                                        </div>



                                        <div class="uk-margin">
                                            <button type="button" id="login" class="uk-button uk-button-primary">
                                                <span class="ion-forward"></span>&nbsp; Login
                                            </button>
                                            <button type="button" id="cancel">
                                            <a class="ion-forward" href="/gis/utama" id="logout">Cancel</a>
                                            </button>
                                        </div>
                                        

                                        <hr />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/') ?>js/login.js"></script>
</body>

</html>