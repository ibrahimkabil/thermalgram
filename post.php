<?php header('Content-Type: application/json'); ?>

"photos":<?php
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://ec2-52-5-124-92.compute-1.amazonaws.com/image/");
    
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_PORT, 8000);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('_auth_token' => 'ASDFQWER1234', 'rate' => '3', 'justimage' => 'http://thermalgram.com/julia.jpg')));
 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $curl_result = curl_exec($ch);

    if ($curl_result === false) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        //echo 'Operation completed without any errors';
        echo json_encode($curl_result);
    }

    //close connection
    curl_close($ch);

?>