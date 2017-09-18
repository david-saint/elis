<!DOCTYPE html>
<html>
<head>
    <title>Elis</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#e57373">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>
<div id="app">
    <init></init>
    <div v-if="showMainLoader" class="main-loader valign-wrapper red lighten-2">
        <div class="row">
            <div class="col s6 m4 offset-s3 offset-m4">
                <img src="img/e-single-white.svg" class="responsive-img center">
            </div>
            <div class="col s12 center">
                <br><br>
                <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-white-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <header>
        @include('partials._top-nav')
    </header>
    <main>
        <div class="container no-padding-bottom hundred">
            <div class="row hundred no-margin-bottom">
                <explore-button></explore-button>
                <chat></chat>

                <div class="explore-section col m6 offset-m1 hide-on-small-only">
                    <div class="container-90">
                        <explore></explore>
                    </div>
                </div>

                <div class="mobile-explore-section">
                    <navigate-back></navigate-back>
                    <br>
                    <explore></explore>
                </div>
            </div>
        </div>
    </main>
</div>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>