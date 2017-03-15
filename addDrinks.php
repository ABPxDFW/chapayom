<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/20/2017
 * Time: 12:24 PM
 */

    require_once('startsession.php');
    require_once('header.php');
    require_once ('connectVars.php');
    require_once('navbar.php');
?>

        <div class="container-fluid">

            <form class="form-horizontal" role="form" action="processFormDrink.php" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Drink Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="drinkname" placeholder="Drink Name" name="Drink_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="thai_name" class="col-sm-2 control-label">Thai Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="thai_name" placeholder="Thai Name" name="Thai_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="price" placeholder="Price" name="Price">
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

<?php
    require_once('footer.php');
?>
