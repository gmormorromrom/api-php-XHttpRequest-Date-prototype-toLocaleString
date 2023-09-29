<?php
header('Content-type: application/json');
header("HTTP/1.1 200 OK");
if(isset($_GET)){
    $data=[];
    for($i=1;$i<101;$i++){
    $data[]=[["firstname"=>"firstname".$i],["lastname"=>"lastname".$i]];
    }
    $date = new DateTime("now");
    echo json_encode(["message"=>"All names", "date"=>$date,"names"=>$data]);
}