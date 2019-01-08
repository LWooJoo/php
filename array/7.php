<?php
    $li = ['a', 'b', 'c'];
    $li = array_merge($li, ['a','d']);
    var_dump($li);
    #a,b,c,a
?>