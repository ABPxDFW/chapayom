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
                        <li><a href="about.php">About</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="comment.php">Comments</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php
                            if(isset($_SESSION['username'])) {
                        ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="addDrinks.php">Add New Drinks</a></li>
                                    <li><a href="addIngred.php">Add Ingredients</a></li>
                                    <li><a href="#">Check Orders</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        <?php
                            }
                            else {
                        ?>
                                <li><a href="login.php">Login</a></li>
                    <?php
                        }
                    ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>