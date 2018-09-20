<?php
session_start();
require_once('../db/dbconn.php');
if(!$_SESSION['username'])
{

    header("Location: ../account_page.php");//redirect to login page to secure the welcome page without login access.
}
else{
   $session_id=$_SESSION['username'];
   $data=$connect->query("SELECT * FROM tblusers WHERE username='$session_id'");
   $row=mysqli_fetch_assoc($data);
   $fullname=$row['fullname'];

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Customer Support Administration Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard">Customer Support</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <ul class="nav navbar-right navbar-top-links">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $fullname; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

            <?php require_once('includes/sidebar.php'); ?>
            </nav>

                      <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa  fa-desktop fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php
                                          $coun=$connect->query("SELECT COUNT(category_id) AS Total FROM products WHERE category_id=1");
                                          $fix=mysqli_fetch_assoc($coun);
                                          echo $fix['Total'];
                                        ?></div>
                                        <div>Infinix Category!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php
                                          $coun=$connect->query("SELECT COUNT(category_id) AS Total FROM products WHERE category_id=2");
                                          $tec=mysqli_fetch_assoc($coun);
                                          echo $tec['Total'];
                                        ?></div>
                                        <div>Tecno Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cube fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php
                                          $coun=$connect->query("SELECT COUNT(category_id) AS Total FROM products WHERE category_id=3");
                                          $sums=mysqli_fetch_assoc($coun);
                                          echo $sums['Total'];
                                        ?></div>
                                        <div>Samsung Brand</div>
                                    </div>
                                </div>
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">

                                        <?php
                                          $coun=$connect->query("SELECT COUNT(category_id) AS Total FROM products WHERE category_id=4");
                                          $sony=mysqli_fetch_assoc($coun);
                                          echo $sony['Total'];
                                        ?>
                                        </div>
                                        <div>Sony Brand</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>




                <div class="row">
                       <div class="col-md-6">
                            <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" style="min-height: 250px;">

                            </div>
                            <!-- /.panel-body -->
                        </div>
                         </div>
                 <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Notifications Panel
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" style="min-height: 250px;">

                            </div>
                            <!-- /.panel-body -->
                        </div>
                 </div>
                </div>

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
