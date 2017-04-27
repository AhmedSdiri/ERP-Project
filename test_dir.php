<?php
$dir = "downloads";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    echo '<a href="'.$filename.'">'.$filename.'</a><br>';
}

?>