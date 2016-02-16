<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Stock Game | Super Fun</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
<!--        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>-->
<!--        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>-->
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Fonts -- >
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,400italic,300italic,600italic,700italic,800italic,800' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div class = "profile">
                    <img src="assets/img/profile.png" class = "img-responsive avatar">
                    <h1 id = "name-header">Alvin Man</h1>
                </div>
                <li>
                    <a href="#">My Cash</a>
                </li>
                <li>
                    <a href="#">My Equity</a>
                </li>
                <li>
                    <a href="#">Log Out</a>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="/">Dashboard</a>
                </li>
                <li>
                    <a href="/stockhistory">Stock History</a>
                </li>
                <li>
                    <a href="/player">Player</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="stocks-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        {content}
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu </a> -->
                    </div>
                    <div class="div-friend-list col-md-4" style = "background: #2E3136;">
                        <h2>Online - 3</h2>
                        <div class = "row">
                            <ul class="ul-friend-list list-unstyled">
                                <li class=""><img src = "assets/img/friend1.png">Thomas Yu
                                    <ul class = "ul-friend-info list-unstyled">
                                        <li><img src = "assets/img/icon-cash.png">$12321.33</li>
                                        <li><img src = "assets/img/icon-stock-muney.png">$6969.12</li>
                                    </ul>
                                </li>
                                <li class="">
                                    <img src = "assets/img/friend3.png">Krystle Bulalakaw
                                    <ul class = "ul-friend-info list-unstyled">
                                        <li><img src = "assets/img/icon-cash.png">$431.69</li>
                                        <li><img src = "assets/img/icon-stock-muney.png">$2914.69</li>
                                    </ul>
                                </li>
                                <li class="">
                                    <img src = "assets/img/friend2.png">Oscar Kwan
                                    <ul class = "ul-friend-info list-unstyled">
                                        <li><img src = "assets/img/icon-cash.png">$7615.06</li>
                                        <li><img src = "assets/img/icon-stock-muney.png">$61.41</li>
                                    </ul>
                                </li>
                                <li class="">
                                    <img src = "assets/img/friend3.png">Spenser Lee
                                    <ul class = "ul-friend-info list-unstyled">
                                        <li><img src = "assets/img/icon-cash.png">$431.69</li>
                                        <li><img src = "assets/img/icon-stock-muney.png">$2914.69</li>
                                    </ul>
                                </li>
                            </ul>
                            </row>
                            <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#stocks-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>
