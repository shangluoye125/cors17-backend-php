<?php
session_start();
header("Access-Control-Allow-Origin:http://10.30.29.76:63341");
header("Access-Control-Allow-Credentials:true");


$data=array('message'=>'success');
echo json_encode($message);

?>