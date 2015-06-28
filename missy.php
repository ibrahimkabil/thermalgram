<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Thermalgram - Missy</title>
        <meta name="description" content="Thermalgram">
        <meta name="author" content="Dave Martinez Ventures">
        <meta name="viewport" content="width=device-width, initial-scale=.8">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <style>

            #header{
                background-image:url('header-bg.png');
                background-repeat: repeat-x;
                height:100px;
                padding-top:15px;
                width:100%;
                text-align:center;
                z-index:1000;
                top:0px;
                position:fixed !important;
            }

            #content{ margin-top: 150px; padding:15px; }

            body{ margin:0px; text-align:center; }

            .fireball_1,.fireball_2,.fireball_3,.fireball_4,.fireball_5{
                width:50px;
                height:72px;
                background-image: url('fireball-blank.png');
                background-size: 50px 72px;
                float:left;
                margin:1px;


            }

            .fireball_img_1,.fireball_img_2,.fireball_img_3,.fireball_img_4,.fireball_img_5{ display:none; }

        </style>

        <script>

         function playSmallFireball(){
             var small_fireball = new Audio();
                  small_fireball.src = "Small_Fireball.mp3";
                  small_fireball.play();
                                    }

         function playLargeFireball(){
             var large_fireball = new Audio();
                  large_fireball.src = "Large_Fireball.mp3";
                  large_fireball.play();
                                    }
        </script>


<script>
            function updateFireballs(id, fireball) {

                playLargeFireball();

                if (fireball == 1) {
                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 2) {
                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 3) {
                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 4) {
                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 5) {
                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeIn(600);
                }

    </head>



    <body>
        <div id='header'><center><img src='logo.png'></center></div>

        <div id='content'>
            <center>

                <?php

                $con = mysql_connect("50.62.57.6", "ibrahimkabil", "Ventolin7");

                mysql_select_db("ibrahimk_thermalgram");

                $query = "SELECT * from photos";

                $result = mysql_query($query, $con);

                $index = 0;

                while ($row = mysql_fetch_assoc($result)) {

                    $index++;

                    echo '<img src="' . $row['thermal_photo'] . '" width=350 style="position:relative; z-index:100;"><br><br>';
                    echo '<div id="fireball_container_' . $index . '" style="width:270px; position:relative; margin-top:-110px; z-index:300; margin-bottom:70px;">';
                    echo '<div class="fireball_1" onclick="updateFireballs(' . $index . ',1); playSoumd()"><img class="fireball_img_1" src="fireball.png" width=50 onmousedown=""></div>';
                    echo '<div class="fireball_2" onclick="updateFireballs(' . $index . ',2);"><img class="fireball_img_2" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_3" onclick="updateFireballs(' . $index . ',3);"><img class="fireball_img_3" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_4" onclick="updateFireballs(' . $index . ',4);"><img class="fireball_img_4" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_5" onclick="updateFireballs(' . $index . ',5);"><img class="fireball_img_5" src="fireball.png" width=50></div>';
                    echo '<br clear="all"></div>';
                }
                ?>

            </center>

        </div>

    </body>
</html>