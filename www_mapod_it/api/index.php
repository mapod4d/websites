<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

$value = [
 "test1" => "value1",
 "test2" => "value2",
];

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET') {
  http_response_code(200);
  echo json_encode($value);
} else {
  http_response_code(405);
}
?>
