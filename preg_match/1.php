<?php
    #정규 표현식(正規表現式,Regular Expression)은 
    #문자열을 처리하는 방법 중의 하나로 특정한 조건의 문자를 
    #'검색'하거나 '치환'하는 과정을 매우 간편하게 처리 할 수 있도록 하는 수단이다.

    if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
        echo "A match was found.";
        } else {
        echo "A match was not found.";
    }
    #검색을 수행하고 일치하는 내용을 반환한다. "/php/i"
    # // << 구분자
    #i는 패턴 매칭을 할 때 대소문자를 구분하지 않도록 한다.
    # /foo bar/ pattern modifier
?>