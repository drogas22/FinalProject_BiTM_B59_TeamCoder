<?php
if(!isset($_SESSION) )session_start();
include_once('../../../../vendor/autoload.php');
use App\BITM\SEIPXXXX\Student\Student;
use App\BITM\SEIPXXXX\Message\Message;
use App\BITM\SEIPXXXX\Utility\Utility;
echo "<center>";
$obj= new Student();
$obj->setData($_GET);
$singleUser = $obj->view();



echo "</center>";
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../resource/assets/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../../../resource/assets/css/style.css">
    <link rel="stylesheet" href="../../../../resource/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../../resource/assets/css/owl.theme.default.min.css">
    <script type="text/javascript" src="../../../../resource/assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../../../resource/assets/js/bootstrap.js"></script>
    <script src="../../../../resource/assets/js/owl.carousel.min.js"></script>

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
                <li class="active"><a href="view.php">View</a></li>
                <li class="active"><a href="index.php">Index</a></li>
                <li> <a href= "../Authentication/logout.php" > Log Out </a></li>

            </ul>

        </div>
    </div>

</nav><br><br>



<div class="col-md-3" style="margin-top: 56px;height: 130px;width: 220px;margin-left: 100px">
    <div class="thumbnail ">

        <img src="../../Student/Profile/uploads/<?php echo $singleUser->image ?>"
             class="img-circle img-responsive " >
        <div class="caption">
            <p class="text-center"><?php echo "Profile Picture" ?></p>
        </div>

    </div>
</div>




<div class="col-md-6 container">
    <h1 class="text-center" style="font-size: 23px;color:darkred ">Student Imformation</h1>
    <table class="table col-md-6" >

        <tr>
            <td>Your Name</td>
            <td><?php echo $singleUser->student_name ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $singleUser->email ?></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><?php echo $singleUser->phone ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo $singleUser->gender ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $singleUser->course ?></td>
        </tr>

        <tr>
            <td>Branch</td>
            <td><?php echo $singleUser->branch ?></td>
        </tr>

        <tr>
            <td>Result</td>
            <td><?php
                if(isset($singleUser->result))
                 echo $singleUser->result;
                else
                    echo "Not Published";
                    ?>
            </td>
        </tr>
        <tr>
            <td>Payment</td>
            <td><?php
                if(isset($singleUser->payment))
                echo $singleUser->payment . " out of 8000 taka.";
                else
                echo "Not Given\n";
                ?>
            </td>
        </tr>

    </table>
</div>

</body>


</html>