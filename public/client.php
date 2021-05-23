<?php
$url = 'http://localhost/api-test/public/api';

$class = '/user';
$param = '';

$response = file_get_contents($url.$class.$param);

echo $response;