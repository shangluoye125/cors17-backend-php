<?php
header("Access-Control-Allow-Origin:http://10.30.29.76:63341");
header("Access-Control-Allow-Credentials:true");
header("Content_Type:text/java");

$username=array('username'=>1);
echo json_encode($username);

?>