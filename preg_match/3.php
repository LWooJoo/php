<?php
    $subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
    preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
    # \s 공백문자 
    # \w+\.\w+ >> \w+ w뒤에 나오는 문자까지 검색
    # \.\ 점까지(구분자)
    # \w+@\ w까지 검색

    var_dump($match);
    echo "homepage:".$match[1];
    echo "<br />";
    echo "email:".$match[2];
?>