<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 3/17/2017
 * Time: 11:40 PM
 */
require_once('startsession.php');
require_once('header.php');
require_once ('connectVars.php');
require_once('navbar.php');


    // Add php code to get mysql data

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die ('cannot connect to db');

$query = "SELECT * FROM contactDB ORDER BY date DESC LIMIT 3";
$data = mysqli_query($dbc, $query) or die ('cannot run query');

$i = 0;

while ($row = mysqli_fetch_array($data)) {
    // Display the score data

    $name[] = $row['full_name'];
    $email[] = $row['email'];
    $message[] = $row['message'];
    $i++;

}

mysqli_close($dbc);
?>
    <!-- End of php db connect -->

    <section id="comments">
    <div class="container white">
        <center><h2>WHAT OUR CUSTOMERS SAY</h2></center>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"<?php echo $message[0]; ?>"<br><span style="font-style:normal;">-<?php
                            echo $name[0]; ?></span></h4>
                </div>
                <div class="item">
                    <h4>"<?php echo $message[1]; ?>"<br><span style="font-style:normal;">-<?php
                            echo $name[1]; ?></span></h4>
                </div>
                <div class="item">
                    <h4>"<?php echo $message[2]; ?>"<br><span style="font-style:normal;">-<?php
                            echo $name[2]; ?></span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </section>
<?php
require_once('footer.php');
?>