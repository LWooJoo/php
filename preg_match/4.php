<?php
    // get host name from URL
    preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
    $host = $matches[1];
    # ?: $match안에 값이 들어가지 않는다.
    # ? 수양자, ()전체를 없거나 있거나 있다면 1개 등장.
    # ^ 문자열의 시작점을 의미.
    #[^/] /부정 >> /은 나오지 못한다.
    // get last two segments of host name
    preg_match('/[^.]+\.[^.]+$/', $host, $matches);
    echo "domain name is: {$matches[0]}\n";
?>