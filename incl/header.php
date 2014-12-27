<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- will set the page up for a cross-device layout (viewport and zoom) -->
        <meta name="author" content="S&F">
       
        <!-- Bootstrap journal CSS --> 
        <link rel="stylesheet" href="style/journal.css" type="text/css">
         <!--Font--> 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400' rel='stylesheet' type='text/css'>
        <!-- Stylesheet override -->
        <link rel="stylesheet" href="style/stylesheet.css" type="text/css" >
        
        <!-- display image as favicon -->
        <link rel="shortcut icon" href="media/favicon.ico">
        
        <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Workaround to provide support for the new HTML5 elements in IE browsers older than IE 9 and 
        make it compatible with Bootstrap 3 -->
        
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    
    <!-- The body id helps with highlighting current menu choice -->
    <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
        
        
        <!-- The navbar -->
        <nav class="navbar navbar-default navbar-fixed-top center" role="navigation">
        <div class='container-fluid'>
                <div class="navbar-header">
                    <a id="collapsed-logo" class="navbar-brand visible-xs visible-sm visible-md" href="index.php">
                        <img class="img-responsive" src="media/logo/tiedye/tiedye_logo.png">
                    </a> 
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                    </button>
                </div>
                <div  class="collapse navbar-collapse navbar-responsive-collapse"> 
                <ul id="navId" class="nav navbar-nav">
                        <li class="nav-left" id="nav-art"><a id="art-" class="navFont" href="art.php">ART</a></li>
                        <li class="nav-left" id="nav-music"><a id="music-" class="navFont" href="music.php">MUSIC</a></li>
                        <li class="nav-left" id="nav-culture"><a id="culture-" class="navFont" href="culture.php">CULTURE</a></li>
                        <li class="nav-left" id="nav-style"><a id="style-" class="navFont" href="style.php">STYLE</a></li>
                        <li class="active hidden-xs hidden-sm hidden-md" id="nav-index"><a id="index-" class="navbar-brand" href="index.php"><img class="img-responsive" id="nav-logo" src="media/logo/tiedye/tiedye_logo.png"/></a></li>                        
                        <li id="nav-brothersAndSisters"><a id="brothersandsisters-" href="brothers_and_sisters.php">BROTHERS & SISTERS</a></li>
                        <li id="nav-kParty"><a id="kparty-" class="navFont" href="k_party.php">K PARTY</a></li>
                        <li id="nav-creativeServices"><a id="creativeservices-" class="navFont" href="creative_services.php">CREATIVE SERVICES</a></li>
                </ul>
                </div>
        </div>    
        </nav> <!-- end of navbar -->