<?php
    echo 'leejaejun';
    echo '<br />';
    echo "leejaejun";
    echo '<br />';
    echo 'jae \'jun\''; #'"'
    echo '<br />';
    echo "jae \"jun\""; #"''"

    echo "leejaejun\n"; #줄바꿈 할 때는 쌍따옴표 안에서 \n, \r을 사용한다.
    echo 'leejaejun\n';

    $a = array('jae', 'jun');
    echo '<br />';
    echo "lee {$a[0]} {$a[1]}\n";
    echo 'lee '.$a[0].' '.$a[1].'';

    $b = 'lee';
    $c = 'jaejun';

    echo $b.$c;
?>