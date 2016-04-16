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

    <!-- Login Modal -->
    <div class="md-modal md-effect-18" id="modal-1">
        <div class="md-content">
            <h3>Login Credientials</h3>
            <div>
                <p>Login to your account! Don't have an account? <button type="button" class="md-close btn btn-link md-trigger md-setperspective" data-modal="modal-2" style="color: white">Register here.</button>
                </p>
                <form method = "POST" action="<?php echo base_url()?>Login/logMeIn">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr" name = "usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name = "password">
                    </div>
                    <div class = "btn-group inline">
                        <button class="button-green" type="submit">Sign in</button>
                        <button class="md-close button-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register modal -->
    <div class="md-modal md-effect-18" id="modal-2">
        <div class="md-content">
            <h3>Register</h3>
            <div>
                <p>Awesome, thank you for loving our Stock Game. Fill in the details below to sign up.</p>
                <p>{errorMsg}</p>
                <form method = "POST" action="<?php echo base_url()?>Register/runThis">
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" class="form-control" id="usr" name = "usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name ="pwd" placeholder="Make a secure password please" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="confirmPwd">Confirm password:</label>
                        <input type="password" name = "confirmPwd" placeholder="Confirm it!" class="form-control" id="confirmPwd">
                    </div>
                    <button class="btn-info">Upload an Avatar</button>
                    <br><br>
                    <div class = "btn-group inline">
                        <button class="button-green" type="submit">Register</button>
                        <button class="md-close button-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="container" class = "wrapper main-parent">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div class = "profile">
                    <img src="/assets/img/profile.png" class = "img-responsive avatar">
                    <h1 id = "name-header"><?php if(!empty($this->session->userdata['user_id'])) { echo $this->session->userdata['user_id']; } else { echo "Guest"; } ?></h1>
                </div>  
                <li>
                    <h2><a href="/"><i class="fa fa-tachometer"></i> Dashboard</a></h2>
                </li>
                <li>
                    <h2><a href="/player"><i class="fa fa-info-circle"></i> My Stats</a></h2>
                </li>
                <li>
                    <h2><a href="/stockhistory/mostRecent"><i class="fa fa-line-chart"></i> Stock Market</a></h2>
                </li>
                <li>
                    <h2><a href="/players"><i class="fa fa-users"></i> Players</a></h2>
                </li>
                <li>
                    <h2><a href="#" class="md-trigger md-setperspective" data-modal="modal-1"><i class="fa fa-sign-in"></i> Login</a></h2>
                </li>
                <li>
                    <h2><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></h2>
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
