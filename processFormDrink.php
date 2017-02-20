<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/20/2017
 * Time: 1:28 PM
 */

require_once ('connectVars.php');

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die ('Error connecting to MySQL server: '.mysqli_error());

$drinkname = $_POST['Drink_Name'];
$thainame = $_POST['Thai_Name'];
$price = $_POST['Price'];


$query = "INSERT INTO chapayom (drinkName, thai, price) VALUES ('$drinkname','$thainame','$price')";

$result = mysqli_query($dbc, $query)
or die('Error querying database.');

mysqli_close($dbc);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chapasyom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://use.fontawesome.com/f614e0a1a6.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout.css">
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
            <a class="navbar-brand navbar-left"  href="index.php"><img src ="/Images/ChaPayom-logo-green.png" width="40%" class="img-responsive"></a>


        </div>
</div>
</nav>

</div>

<!-- End of Nav Bar -->
<h1 style="color:#ffffff; text-align:center"><br><br>
    <?php echo "Thank you " . $name . " for leaving a message." ?></h1>

<br><br><h1 style="text-align:center; color:#ffffff;"><a href="index.php">Return</a></h1>


</body>
</html>