<?php
    echo "<h2>Demo Latihan File</h2>";
    $myfile = fopen("text_dummy.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("text_dummy.txt"));
    fclose($myfile);
?>
