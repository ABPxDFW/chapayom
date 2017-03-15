<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 3/13/2017
 * Time: 9:11 PM
 */
?>

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
                        <?php
                            if(isset($_SESSION['username'])) {
                        ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="addDrinks.php">Add Drink</a></li>
                                    <li><a href="addIngred.php">Add Ingredient</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        <?php
                            }
                            else {
                        ?>
                                <li><a href="#">Login</a></li>
                    <?php
                        }
                    ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

<!--
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
  <!--      <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="Images/ChaPayom-logo-green.png" class="img-responsive" width="200px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                   <ul class="nav navbar-nav navbar-right">
                       <li><a href="#">About</a></li>
                       <li><a href="#">Menu</a></li>
                       <li><a href="#">Gallery</a></li>
                       <li><a href="#">Comments</a></li>
                       <li><a href="#">Contact</a></li>
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu">
                               <li><a href="addIngred.php">Add Ingredients</a></li>
                               <li><a href="#">Check Orders</a></li>
                               <li><a href="addDrinks.php">Add New Drinks</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Log Out</a></li>
                           </ul>
                       </li>
                   </ul>
               </div><!-- /.navbar-collapse -->
        <!--         </div><!-- /.container-fluid -->
        <!--         </nav>
        -->