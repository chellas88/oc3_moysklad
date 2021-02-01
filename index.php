<?php

$file = 'log.txt';

$arr = $_POST;

$data = json_encode($arr);

file_put_contents($file, $data);

print_r($arr);



?>