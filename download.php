<?php

$f=$_REQUEST['file'];   

$file = ("admin/notiseimage/$f");

$filetype=filetype($file);

$filename=basename($file);

header ("Content-Type: ".$filetype);

header ("Content-Length: ".filesize($file));

header ("Content-Disposition: attachment; filename=".$filename);

readfile($file);

?>	