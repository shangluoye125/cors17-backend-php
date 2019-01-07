<?php
header("Access-Control-Allow-Origin:http://10.30.29.76:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:Content_Type,xfilecategory,xfilename,xfilesize");

$data=file_get_contents("php://input");
$data=json_encode($data);
$message=array('message'=>"success");

if($data->userName==123&&$data->passWord==123){
    echo json_encode($message);
}else{
    $message['message']='error';
    echo json_encode($message);
}

?>