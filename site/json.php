<?php
header_remove();
http_response_code('200');
header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
header('Content-Type: application/json;charset=utf-8');
header('Status: 200 OK');
return json_encode(array(
  'status' => 200,
  'ip' => $_SERVER['REMOTE_ADDR'],
  'host' => $_SERVER['REMOTE_HOST'],
  'timestamp' => $_SERVER['REQUEST_TIME'],
  'user_agnet' => $_SERVER['HTTP_USER_AGENT']
  ));
?>
