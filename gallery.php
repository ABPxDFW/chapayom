<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 3/17/2017
 * Time: 11:39 PM
 */
require_once('startsession.php');
require_once('header.php');
require_once ('connectVars.php');
require_once('navbar.php');
?>
    <div class="container white">
        <center><h2>GALLERY</h2></center>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="./Images/Guest/Img2.jpg" alt="Pen">
                    <p><strong>Pen</strong></p>
                    <p>Sat. 12 November 2016</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="./Images/Guest/Img1.jpg" alt="Friend">
                    <p><strong>Friend</strong></p>
                    <p>Tue. 8 November 2016</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="./Images/Guest/Img3.jpg" alt="New Drink">
                    <p><strong>New Drink</strong></p>
                    <p>Sat. 19 November 2016</p>

                </div>
            </div>
        </div>
    </div>
<?php
require_once('footer.php');
?>