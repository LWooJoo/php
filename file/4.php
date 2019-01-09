<?php
    $filename = 'readme.txt';
    if (is_readable($filename)) {
        # code...
        echo 'The file is readable';
    }
    else {
        # code...
        echo 'The file is not readable';
    }
    # 특정파일이 읽을 수 있는 상태인지 확인.
    # 특정파일이 존재 하는지 확인.
?>