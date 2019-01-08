<?php
    function get_member(){
        return array('lee', 'jae', 'jun');
    }
    
    $tmp = get_member();
    echo $tmp[1];
    #jae
?>