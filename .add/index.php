<?php

$data = [
    "name" => "purencool",
    "age" => "old",
    "nellypot" => "no"
];

$dataObj = (object)$data;

echo $dataObj->age . PHP_EOL;

print_r(array_values((array)$dataObj));
