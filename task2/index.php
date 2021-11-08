<?php

require_once "vendor/autoload.php";

use \Gumlet\ImageResize;

$image = new ImageResize('image.jpg');
$image->resizeToBestFit(200, 100);
$image->save('image2.jpg');

?>