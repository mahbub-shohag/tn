<?php
include_once ('../../vendor/autoload.php');
use App\Post;

$obj = new Post();
$data = $obj->index();
print_r($data);
die();
?>