<?php
    function get_argument($arg1, $arg2){
        return $arg1 + $arg2;
    }
    echo get_argument(10, 20);
    echo ',';
    echo get_argument(20, 30);
    # 30, 50
?>