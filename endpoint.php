<?php

echo 'Thermalgram received the following information:<br><pre>'.print_r($_GET, TRUE).print_r($_POST, TRUE).'</pre>';
// record all server queries to a log file
file_put_contents('log.txt', time().' '.print_r($_FILES, TRUE) . '  '.print_r($_POST, TRUE) ." uploaded file: ".$_POST['uploaded_file']."\r\n", FILE_APPEND);

$file_path = "uploads/";
     
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
        echo "success";
    } else{
        echo "fail";
    }

    
    $con = mysql_connect("50.62.57.6", "ibrahimkabil", "Ventolin7");

mysql_select_db("ibrahimk_thermalgram");

$query = "INSERT INTO photos (id, thermal_photo,original_photo) VALUES('','http://50.62.57.6/~ibrahimkabil7/thermalgram/".$_FILES['uploaded_file']['name']."','http://50.62.57.6/~ibrahimkabil7/thermalgram/".$_FILES['uploaded_file']['name']."')" . $rate_photo['result']['thermal_rate'] . ', user_rating = ' . $rate_photo['result']['how_other_user_say'];

$result = mysql_query($query, $con);


?>