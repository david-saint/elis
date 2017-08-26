<!DOCTYPE html>
<html>
<head>
    <title>Elis</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#e3f2fd">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>
<div id="app">
    <init></init>
    <header>
        @include('partials._top-nav')
    </header>
    <main>
        <div class="container no-padding-bottom hundred">
            <div class="row hundred no-margin-bottom">

                <a class="explore-btn btn btn-floating red lighten-2 pulse hide-on-med-and-up"><i class="material-icons">wifi_tethering</i></a>

                <chat></chat>

                <div class="explore-section col m7 hide-on-small-only">
                    <div class="row">

                        <div class="col s12">
                            <div class="col s2">
                                <img src="img/team-1.jpg" class="responsive-img circle">
                            </div>
                            <div class="col s10">
                                <div class="row">
                                    Product name and is
                                </div>
                                <div class="row">
                                    <img src="img/2.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>

                        <div class="col s11 offset-s2 divider"></div>

                        <div class="col s12">
                            <div class="col s2">
                                <img src="img/team-1.jpg" class="responsive-img circle">
                            </div>
                            <div class="col s10">
                                <p class="flow-text">
                                    <b>Ada</b> Rated  <b>Google sandals</b> 5 stars
                                </p>
                            </div>
                        </div>

                        <div class="col s11 offset-s2 divider"></div>

                        <div class="col s12">
                            <div class="col s2">
                                <img src="img/team-1.jpg" class="responsive-img circle">
                            </div>
                            <div class="col s10">
                                <div class="row">
                                    Product name and is
                                </div>
                                <div class="row">
                                    <img src="img/2.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>

                        <div class="col s11 offset-s2 divider"></div>
                    </div>
                </div>

                <div class="mobile-explore-section">
                    <div class="row">
                        <div class="col s11 offset-s1">
                            <a class="fix-i cancel-explore"><i class="material-icons">keyboard_backspace</i></a>
                        </div>
                    </div>
                    <br>
                    <h5 class="center">Explore</h5>
                    <br>
                    <div class="container-90">
                        <div class="row">
                            <div class="col s12">
                                <div class="col s2">
                                    <img src="img/team-1.jpg" class="responsive-img circle">
                                </div>
                                <div class="col s10">
                                    <div class="row">
                                        Product name and is
                                    </div>
                                    <div class="row">
                                        <img src="img/2.jpg" class="responsive-img">
                                    </div>
                                </div>
                            </div>

                            <div class="col s11 offset-s2 divider"></div>

                            <div class="col s12">
                                <div class="col s2">
                                    <img src="img/team-1.jpg" class="responsive-img circle">
                                </div>
                                <div class="col s10">
                                    <p class="flow-text">
                                        <b>Ada</b> Rated  <b>Google sandals</b> 5 stars
                                    </p>
                                </div>
                            </div>

                            <div class="col s11 offset-s2 divider"></div>

                            <div class="col s12">
                                <div class="col s2">
                                    <img src="img/team-1.jpg" class="responsive-img circle">
                                </div>
                                <div class="col s10">
                                    <div class="row">
                                        Product name and is
                                    </div>
                                    <div class="row">
                                        <img src="img/2.jpg" class="responsive-img">
                                    </div>
                                </div>
                            </div>

                            <div class="col s11 offset-s2 divider"></div>
                        </div>
                    </div>
                </div>

                <div class="product-view">

                </div>
            </div>
        </div>
    </main>
</div>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>