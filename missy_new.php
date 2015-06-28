<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Thermalgram</title>
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

            .onfire{
                  height:72px;
                  /*padding-top:3em;*/
                  font-size: 42px;
                  font-weight: bold;
                  /*text-align: center;*/
                  color:brown;
                  /*background-size: 50px 72px;*/
                  /*float:left;*/
                  position: relative;
                  top: -52px;
                  /*margin:1px;*/
            }

            #content{ margin-top: 150px; padding:15px; }

            body{ margin:0px; text-align:center;  background-position: top center; background-repeat:no-repeat; }

            .fireball_1,.fireball_2,.fireball_3,.fireball_4,.fireball_5{
                width:50px;
                height:72px;
                background-image: url('fireball-blank.png');
                background-size: 50px 72px;
                float:left;
                margin:1px;
            }

            .fireball_img_1,.fireball_img_2,.fireball_img_3,.fireball_img_4,.fireball_img_5{ display:none; }

            .photo_wrapper{
                boder:2px solid #FFFFFF;
            }

        </style>
        <script>

            function playSmallFireball() {
                var small_fireball = new Audio();
                small_fireball.src = "Small_Fireball.mp3";
                small_fireball.play();
            }

            function playLargeFireball() {
                var large_fireball = new Audio();
                large_fireball.src = "Large_Fireball.mp3";
                large_fireball.play();
            }
        </script>

               <script type="text/javascript">
        var step = 1;
        function nextShadow(){
            $('.onfire span').each(function(){
                y = parseFloat($(this).attr("y_pos"));
                y += step + Math.random()*3;
                $(this).attr("y_pos", y);
                shaking = Math.random();
                shadow1 = "0px 0px "+(y%5)+"px white";
                shadow2 = shaking*24/y*Math.cos(y/5)*15+"px -"+(shaking*4/y+(y%17))+"px "+(shaking+(y%17))+"px red";
                shadow3 = shaking*24/y*Math.cos(y/7)*15+"px -"+(shaking*4/y+(y%31))+"px "+(shaking+(y%31))+"px #993";
                shadow4 = shaking*24/y*Math.cos(y/13)*15+"px -"+(shaking*4/y+(y%41))+"px "+(shaking+(y%41))+"px yellow";
                $(this).css("text-shadow", shadow2+", "+shadow1+", "+shadow4+", "+shadow3);
            });
        }
        $(function(){
            $('.onfire span').each(function(){$(this).attr("y_pos","0");});
           setInterval(nextShadow, 50);
        });
        </script>

        <script>

            function updateFireballs(id, fireball, image) {

                playLargeFireball();
                nextShadow();

                $('#update').attr('src', 'update.php?rate=' + fireball + '&image=' + image);

                if (fireball == 1) {
                    $('#fireball_container_' + id).parent().find(".thermal_photo").animate({opacity: .8})

                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 2) {
                    $('#fireball_container_' + id).parent().find(".thermal_photo").animate({opacity: .6})

                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 3) {
                    $('#fireball_container_' + id).parent().find(".thermal_photo").animate({opacity: .4})

                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeOut(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 4) {
                    $('#fireball_container_' + id).parent().find(".thermal_photo").animate({opacity: .2})

                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeOut(600);
                }
                if (fireball == 5) {
                    $('#fireball_container_' + id).parent().find(".thermal_photo").animate({opacity: 0})

                    $('#fireball_container_' + id).find('.fireball_img_1').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_2').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_3').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_4').fadeIn(600);
                    $('#fireball_container_' + id).find('.fireball_img_5').fadeIn(600);
                }


            }

        </script>

    </head>



    <body>

        <div id='header'>

            <center><img src='logo.png'></center>

        </div>




        <div id='content'>
            <center>


                <?php
//include('http://50.62.57.6/~ibrahimkabil7/thermalgram/post.php');
//echo '<br><br>';
//close connection

                $con = mysql_connect("50.62.57.6", "ibrahimkabil", "Ventolin7");

                mysql_select_db("ibrahimk_thermalgram");

                $query = "SELECT * from photos";

                $result = mysql_query($query, $con);

                $index = 0;

                while ($row = mysql_fetch_assoc($result)) {

                    $index++;

                    echo '<div class="photo_wrapper" style="border:2px solid #FFFFFF; height:350px;width:350px; overflow:hidden; background-size:350px;background-image:url(' . $row['original_photo'] . ')"><img class="thermal_photo" src="' . $row['thermal_photo'] . '" width=350 style="position:relative; z-index:100;opacity:1"><br><br>';
                    echo '<div id="fireball_container_' . $index . '" style="width:260px; position:relative; margin-top:-110px; z-index:300; margin-bottom:70px;">';
                    echo '<div class="onfire"><span><img src="http://thermalgram.com/fireball.png" /></span></div></div><div class="fireball_1" onclick="updateFireballs(' . $index . ',1,\'' . $row['thermal_photo'] . '\');"><img class="fireball_img_1" src="fireball.png" width=50>';
                    echo '<div class="fireball_2" onclick="updateFireballs(' . $index . ',2,\'' . $row['thermal_photo'] . '\');"><img class="fireball_img_2" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_3" onclick="updateFireballs(' . $index . ',3,\'' . $row['thermal_photo'] . '\');"><img class="fireball_img_3" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_4" onclick="updateFireballs(' . $index . ',4,\'' . $row['thermal_photo'] . '\');"><img class="fireball_img_4" src="fireball.png" width=50></div>';
                    echo '<div class="fireball_5" onclick="updateFireballs(' . $index . ',5,\'' . $row['thermal_photo'] . '\');"><img class="fireball_img_5" src="fireball.png" width=50></div>';
                    echo '</div></div><br clear="all"><br clear="all">';
                }
                ?>

            </center>

        </div>
        <iframe id='update' src='' style='width:300px; height:300px;'></iframe>
    </body>
</html>