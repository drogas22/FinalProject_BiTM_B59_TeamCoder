<?php
include_once('../../../../vendor/autoload.php');

   if(!isset($_SESSION) )session_start();
use App\BITM\SEIPXXXX\Message\Message;


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signing up as student!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../../../../resource/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../resource/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../resource/assets/css/form-elements.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../../../../resource/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../resource/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../resource/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../resource/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../../../resource/assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../../../Home.php">TeamCoder IT Coaching </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="../../../../Home.php">Home</a></li>
                <li class="active"><a href="../../Admin/Profile/adminlogin.php">Controller</a></li>
                <li><a href="../../Student/Admission/Admission.php">Admission</a></li>
                <li class="active"><a href="../../Student/AboutUs/AboutUs.php">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Branch <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Barishal</a></li>
                        <li><a href="#">Comilla</a></li>
                        <li><a href="#">Chittagong</a></li>
                        <li><a href="#">Dhaka</a></li>
                        <li><a href="#">Noakhali</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>

</nav><br><br>
<!-- Top content -->
<div class="top-content">
        <div class="container" >
            <table>
                <tr>
                    <td width='230' >

                    <td width='600' height="50" >


                        <?php  if(isset($_SESSION['message']) )if($_SESSION['message']!=""){ ?>

                            <div  id="message" class="form button"   style="font-size: smaller  " >
                                      <center>
                                    <?php if((array_key_exists('message',$_SESSION)&& (!empty($_SESSION['message'])))) {
                                        echo "&nbsp;".Message::message();
                                    }
                                    Message::message(NULL);
                                    ?></center>
                            </div>
                        <?php } ?>
                    </td>
                </tr>
            </table>

            <div class="row" >
                <div class="col-sm-5">


                    <div class="form-box" style="margin-top: 0%">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Log In</h3>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="../Authentication/login.php" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                            </form>
                            <a href="forgotten.php">Forgot Password?</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box" style="margin-top: 0%">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Register Here</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="registration.php" method="post" enctype="multipart/form-data" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first_name">Student name</label>
                                    <input type="text" name="student_name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Phone</label>
                                    <input type="text" name="phone" placeholder="Phone..." class="form-phone form-control" id="form-phone">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 control-label">Gender</label>
                                    <div class="col-sm-8">
                                        <div class="radio">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender"  value="MALE" required> MALE &nbsp;&nbsp;
                                            &nbsp; &nbsp;&nbsp;<input type="radio" name="gender"  value="FEMALE" > FEMALE
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select name="course" required class="form-control">
                                        <option value="" disabled selected>Please Select a Course...</option>
                                        <option name="course" value="Web Design">Web Design</option>
                                        <option name="course" value="PHP">PHP</option>
                                        <option name="course" value="Dotnet">Dotnet</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="branch" required class="form-control">
                                        <option value="" disabled selected>Please Select Branch...</option>
                                        <option name="branch" value="Chittagong">Chittagong</option>
                                        <option name="branch" value="Dhaka">Dhaka</option>
                                        <option name="branch" value="Barisal">Barisal</option>
                                        <option name="branch" value="Comilla">Comilla</option>
                                        <option name="branch" value="Comilla">Noakhali</option>

                                    </select>
                                </div>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-8 control-label">UPLOAD YOUR IMAGE</label>
                                            <div class="col-sm-4">
                                                <input type="file" id="exampleInputFile" name="image" title="Select only image file" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="submit" class="btn">Register</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


<!-- Javascript -->
<script src="../../../../resource/assets/js/jquery-1.11.1.min.js"></script>
<script src="../../../../resource/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../../resource/assets/js/jquery.backstretch.min.js"></script>
<script src="../../../../resource/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="../../../../resource/assets/js/placeholder.js"></script>
<![endif]-->

</body>

<script>
    $('.alert').slideDown("slow").delay(5000).slideUp("slow");
</script>

</html>

