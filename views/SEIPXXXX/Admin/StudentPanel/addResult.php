<?php
if(!isset($_SESSION) )session_start();
include_once('../../../../vendor/autoload.php');
use App\BITM\SEIPXXXX\Admin\Auth;
use App\BITM\SEIPXXXX\Admin\Admin;
use App\BITM\SEIPXXXX\Student\Student;

use App\BITM\SEIPXXXX\Message\Message;
use App\BITM\SEIPXXXX\Utility\Utility;

$objResult = new Student();
$objResult->setData($_GET);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../../resource/assets/bootstrap/css/bootstrap.min.css">

    <script src="../../../../resource/assets/js/jquery-3.2.1.min.js"></script>
    <title>City Select</title>
    <script>


        jQuery(

            function($) {
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
            }
        )
    </script>
</head>
<body>

<div class="container width" style="padding-top: 2%">


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

                    <li class="active"><a href="index.php">Index</a></li>
                    <li class="active"><a href="trashed.php">Trash</a></li>
                    <li> <a href= "../Authentication/logout.php" > Log Out </a></li>

                </ul>

            </div>
        </div>

    </nav><br><br>


    <div class="content panel panel-default form-horizontal createbg">
        <h3 class="panel-heading text-center">INPUT Result</h3>
        <form action="storeResult.php" method="post" class="panel-body">
            <div>
                <label>ID</label>
                <input type="text" name="id" value="<?php echo $_GET['id'] ?>">
            </div>
            <div class="">
                <select name="result" required class="form-control">
                    <option value="" disabled selected>Please Select Grade...</option>
                    <option name="result" value="A+">A+</option>
                    <option name="result" value="A">A</option>
                    <option name="result" value="A-">A-</option>
                    <option name="result" value="B+">B+</option>
                    <option name="result" value="B">B</option>
                    <option name="result" value="C">C</option>
                    <option name="result" value="D">D</option>
                    <option name="result" value="F">F</option>

                </select>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Submit">
            </div>
            <div class="msg">
                <?php
                require_once ("../../../../vendor/autoload.php");

                if(!isset($_SESSION)){
                    session_start();
                }
                $msg = Message::getMessage();

                echo "<div id='message'>".$msg."</div>";
                ?>
            </div>
        </form>
    </div>
</div>

</body>
</html>
