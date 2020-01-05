<?php
require "vendor/autoload.php";

use App\Classes\ProxyImage;

$image = new ProxyImage("test_image.jpg");

//image will be loaded from disk
$image->display();
echo '<br>';

//image will not be loaded from disk
$image->display();

