<?php
    $dir    = './';
    $file1  = scandir($dir);
    $file2  = scandir($dir, 1);

    print_r($file1);
    print_r($file2);
    #scandir()은 디렉토리를 탐색한다.
    #첫 번째 인자는 탐색 할 디렉토리의 경로이고, 두번째 인자는 정렬 방법이다.
?>