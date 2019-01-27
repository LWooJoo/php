<?php
#preg_replace'
#검색한 다음 치환명령을 수행한다.
#preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] ) : mixed
    $string = 'April 15, 2003';
    $pattern = '/(\w+) (\d+), (\d+)/i';
    $replacement = '${1}1,$3';
    echo preg_replace($pattern, $replacement, $string);
?>