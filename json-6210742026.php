<?php
    // $myObj = new stdClass();
    // $myObj->name = "Mac";
    // $myObj->age = 30;
    // $myObj->city = "Bangkok";

    // $myJSON = json_encode($myObj);

    // echo $myJSON;

    $myArr = array("Mac", "Doe", "Pong", "Win");
    $myJSON = json_encode($myArr);

    echo $myJSON;

?>