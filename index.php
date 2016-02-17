<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ben & Kathryn</title>

    <!-- Bootstrap Core CSS -->
    <link href="CSS/font-awesome.min.css" rel="stylesheet">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="CSS/blueimp/blueimp-gallery.min.css">

</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">
                <img class="navlogo" src="images/DateLogoFull.png" alt="Ben & Kathryn" /><!--<img class ="navlogo" src="images/KOLogo.png" alt="Ben & Kathryn" onmouseout="this.src='/images/KOLogo.png'" onmouseover="this.src='/images/Drawing.png'"/>-->
            </a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/index.php">Home</a>
                </li>
                <li>
                    <a href="#ourstory">Our Story</a>
                </li>
                <li>
                    <a href="/imagegallery.php">Photos</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Wedding Party <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="bridesmaidsnav" href="/bridesmaids.php">Bridesmaids</a></li>
                        <li><a class="groomsmennav" href="/groomsmen.php">Groomsmen</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/registry.php">Registry</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
    <span id="backtotop"></span>
    <div class="countercontain">
        <div class="countblock" id="dayblock">
            <div class="counter" id="days"></div>
            <div class="countcaption">Days</div>
        </div>
        <div class="countblock" id="hourblock">
            <div class="counter" id="hours"></div>
            <div class="countcaption">Hours</div>
        </div>
        <div class="countblock" id="minuteblock">
            <div class="counter" id="minutes"></div>
            <div class="countcaption">Minutes</div>
        </div>
        <div class="countblock" id="secondblock">
            <div class="counter" id="seconds"></div>
            <div class="countcaption">Seconds</div>
        </div>
    </div>
<!-- Main image and Date logo -->
<div class="mainimgcontain">
    <img class="mainimg"src ="/images/BenKathrynMain.jpg" alt="Ben & Kathryn" />
</div>
<div class="countercontainmobile">
    <div class="counterblockmobile">
        <div class ="countermobile" id="daysmobile"></div>
        <div class="countcaptionmobile">Days</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="hoursmobile"></div>
        <div class="countcaptionmobile">Hours</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="minutesmobile"></div>
        <div class="countcaptionmobile">Minutes</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="secondsmobile"></div>
        <div class="countcaptionmobile">Seconds</div>
    </div>
</div>
<!-- 
<div class="datelogo">
    <img src="/images/DateLogo.png" alt="Wedding date 6/11/2016" />
</div> 
-->

<!-- Including App Links Section -->
<?php include("applinks.php"); ?>

<!-- Including Our Story Section -->
<?php include("ourstory.php"); ?>

<!--Including Footer-->
<?php include("footer.php"); ?>
