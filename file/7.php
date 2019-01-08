<?php
    $file = 'readme.txt';
    $newfile = 'example.txt.bak';
 
    if (!copy($file, $newfile)) {
        echo "failed to copy $file...\n";
    }
    #파일복사
?>