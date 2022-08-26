<?php

$client = new MongoDB\Client('mongodb+srv://root:1234@mongo.7tenj.mongodb.net/?retryWrites=true&w=majority');
$db = $client->test;

?>