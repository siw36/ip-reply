<?php
header_remove();
http_response_code('200');
header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
header('Content-Type: text/xml;charset=utf-8');
header('Status: 200 OK');
$response = '<?xml version="1.0" encoding="utf-8"?>';
$response .= '<response><status>200</status>';
$response .= '<ip>'.$_SERVER['REMOTE_ADDR'].'</ip>';
$response .= '<host>'.$_SERVER['REMOTE_HOST'].'</host>';
$response .= '<timestamp>'.$_SERVER['REQUEST_TIME'].'</timestamp>';
$response .= '<user_agnet>'.$_SERVER['HTTP_USER_AGENT'].'</user_agnet>';
$response .= 'response>';
return $response;
?>
