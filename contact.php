<?php
/**
 * Created by PhpStorm.
 * User: ABPxDFW
 * Date: 3/16/2017
 * Time: 9:26 PM
 */

require_once('startsession.php');
require_once('header.php');
require_once ('connectVars.php');
require_once('navbar.php');
?>

<!-- Container (Contact Section) -->
        <div class="container white">
            <center><h2>WHERE WE ARE LOCATED</h2>
            <p><em>We would love your feedback!</em></p></center>

            <div>
                <div>
                    <!-- Add Google Maps -->
                    <div id="googleMap" class="" style="width:100%;height:400px;">

                    </div>
                </div><br><br>
                <div class="container">
                    <div class="">
                        <i class="fa fa-map-marker fa-fw"></i> Bangkok, Thailand<br>
                        <i class="fa fa-phone fa-fw"></i> Phone: +66 89 536 5566<br>
                        <i class="fa fa-envelope fa-fw"></i> Email: Chapayom@InfiniteSoaring.com<br>
                    </div><br><br>
                    <p>Swing by for a cup of <i class="fa fa-coffee"></i>, and leave a message!</p>
                    <div class="row">
                        <form action="processForm.php" method="post">
                            <div class="form-group col-sm-4">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" required placeholder="Name" id="form_Name" name="Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" required placeholder="Email" id="form_Email" name="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="message">Message:</label>
                                <input type="text" class="form-control" required placeholder="Message" id="form_Msg" name="Message">
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    <!-- Add Google Maps-->

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
        <!-- Google Map Location -->
        var myCenter = new google.maps.LatLng(13.825494, 100.4713717);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 16,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


    </script>

<?php
    require_once('footer.php');
?>