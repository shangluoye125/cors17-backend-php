<?php
session_start();
header("Access-Control-Allow-Origin:http://10.30.29.76:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:Content_Type,xfilecategory,xfilename,xfilesize");
header("Content_Type:text/json");

$_SESSION['name']=null;
$message=array('message'=>'success');
echo json_encode($message);
session_destroy();
?>