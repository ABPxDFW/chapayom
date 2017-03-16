<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/27/2017
 * Time: 9:49 PM
 */


    require_once('startsession.php');
    require_once('header.php');
    require_once ('connectVars.php');
    require_once('navbar.php');
?>



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


<?php
    require_once('footer.php');
?>