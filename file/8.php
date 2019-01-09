<?php
    echo getcwd().'<br />';
    chdir('../');
    echo getcwd().'<br />';
    #getcwd()를 통해서 현재 디렉토리를 알 수 있다.
    #chdir()을 통해서 디렉토리를 변경 할 수 있다.
?>