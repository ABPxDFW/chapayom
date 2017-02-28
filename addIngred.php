<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/27/2017
 * Time: 9:49 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chapasyom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="Images/ChaPayom-logo-green.png" class="img-responsive" width="200px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Comments</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Add Ingredients</a></li>
                        <li><a href="#">Check Orders</a></li>
                        <li><a href="#">Add New Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">

    <form class="form-horizontal" role="form" action="processFormIngred.php" method="post">
        <div class="form-group">
            <label for="ingredient" class="col-sm-2 control-label">Ingredient Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="ingred_name" placeholder="Ingredient Name" name="Ingred_Name">
            </div>
        </div>
        <div class="form-group">
            <label for="thai_name" class="col-sm-2 control-label">Thai Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="thai_name" placeholder="Thai Name" name="Thai_Name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

</div>





<script src="bower_components/jquery/dist/jquery.slim.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>