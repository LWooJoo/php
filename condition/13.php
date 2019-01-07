<?php
    if ($_POST['id'] === 'leejaejun') {
        if ($_POST['password'] === '111111') {
            echo 'right';
        }
        else {
            echo 'worng password';
        }
    } else {
        echo 'id wrong';
    }
?>