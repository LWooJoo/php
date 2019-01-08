<?php
    function get_member(){
        return array('lee', 'jae', 'jun');
    }

    $tmp = get_member();

    for ($i=0; $i < count($tmp); $i++) { # 배열 크기를 세어준다
        # code...
        echo ucfirst($tmp[$i]).'<br />'; # 첫문자를 대문자로 만들어 줌
    }
    #Lee
    #Jae
    #Jun
?>