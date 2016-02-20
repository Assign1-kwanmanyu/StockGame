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
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/assets/css/style.css" rel="stylesheet">

        <link href="/assets/css/modal.css" rel="stylesheet">

        <script src="/assets/js/modernizr.custom.js"></script>

        <!-- Morris Charts CSS -->
        <link href="/assets/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    <!-- All modals added here for the demo. You would of course just have one, dynamically created -->
    <div class="md-modal md-effect-18" id="modal-1">
        <div class="md-content">
            <h3>Login Credientials</h3>
            <div>
                <p>Login to your account! Don't have an account? Register here.</p>
                <form method = "POST" action="<?php echo base_url()?>Login/sexme">
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input type="text" class="form-control" id="usr" name = "usr">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class = "btn-group inline">
                        <button type="submit">Sign in</button>
                        <button class="md-close">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="container" class = "wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div class = "profile">
                    <img src="/assets/img/profile.png" class = "img-responsive avatar">
                    <h1 id = "name-header"><?php echo $this->session->userdata['user_id']; ?></h1>
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
                    <a href="/stockhistory/mostRecent">Stock History</a>
                </li>
                <li>
                    <a href="/player">Player</a>
                </li>
            </ul>
            <ul class = "sidebar-login">
                <li>
                    <button class="md-trigger md-setperspective" data-modal="modal-1">Login</button>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        {content}

        <!-- jQuery -->
        <script src="/assets/js/jquery-1.11.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/assets/js/bootstrap.min.js"></script>

        <script src="/assets/js/classie.js"></script>
        <script src="/assets/js/modalEffects.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="/assets/js/plugins/morris/raphael.min.js"></script>
        <script src="/assets/js/plugins/morris/morris.min.js"></script>
        <script src="/assets/js/plugins/morris/morris-data.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>
