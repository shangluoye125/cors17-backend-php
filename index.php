<?php
header("Access-Control-Allow-Origin:http://localhost:63341");
header("Access-Control-Allow-Credentials:true");
$username=array('username'=>123);
echo json_encode($username);

?>