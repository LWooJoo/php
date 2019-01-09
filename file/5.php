<?php
    $filename = 'writeme.txt';
    if(is_writable($filename)){
        echo 'The file is writeable';
    }
    else {
        # code...
        echo 'The file is not writeable';
    }
    # 특정 파일이 쓰기가 가능한지 확인.
    # 같은 명의 파일이 존재하는지 확인.
?>