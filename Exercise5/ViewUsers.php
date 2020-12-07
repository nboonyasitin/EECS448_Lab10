<?php 
header('content-type: image/png'); 
$img = "ex4.png";//the real image url. 
echo file_get_contents($img); 
?> 