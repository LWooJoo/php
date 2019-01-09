<?php
    $filename = 'readme.txt';
    if (file_exists($filename)) {
        # code...
        echo 'The file $filename exists';
    }
    else {
        # code...
        echo 'The file $filename is not exists';
    }
    # 파일의 존재 여부를 확인
?>