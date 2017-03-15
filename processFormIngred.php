<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/27/2017
 * Time: 10:39 PM
 */
    require_once('startsession.php');
    require_once('header.php');
    require_once ('connectVars.php');
    require_once('navbar.php');

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die ('Error connecting to MySQL server: '.mysqli_error());

$ingredname = $_POST['Ingred_Name'];
$thainame = $_POST['Thai_Name'];


$query = "INSERT INTO ingredient (item, thai) VALUES ('$ingredname','$thainame')";

$result1 = mysqli_query($dbc, $query) or die('Error querying database.'.mysqli_error());

mysqli_close($dbc);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chapayom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://use.fontawesome.com/f614e0a1a6.js"></script>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .navbar {

            padding-bottom:1%;
            background-color: #008000;
            margin-bottom: 0px;
            border-color: transparent;
            padding-left:0px;
            padding-right:0px;
        }

        #clear {
            content: "";
            display: block;
            clear: both;
            padding-top: 11%;
        }

        #home {
            padding-top:11%;
            padding-bottom:20px;
        }

        #about {
            padding-top:40px;
            padding-bottom:20px;
        }

        #contact {
            padding-top:90px;
            padding-bottom:20px;
        }

        #home {
            padding-top:40px;
            padding-bottom:20px;
        }


        .red {
            background-color: darkgreen; !important;
            color:lightgreen;

        }

        /*  .nav-pills > li > a { margin-left:10px;margin-right:10px;}

          }  */
    </style>
</head>
<body>



<div class="container" >

    <!-- Beginning Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-inverse" data-spy="affix" data-offset-top="50">
        <div class ="container">
            <button class="navbar-toggler navbar-toggler-right navbar-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand navbar-left"  href="index.php"><img src ="Images/ChaPayom-logo-green.png" width="40%" class="img-responsive"></a>


        </div>
</div>
</nav>

</div>

<!-- End of Nav Bar -->
<h1 style="color:#ffffff; text-align:center"><br><br>
    <?php echo "Thank you for leaving a message." ?></h1>

<br><br><h1 style="text-align:center; color:#ffffff;"><a href="addIngred.php">Return</a></h1>


</body>
</html>