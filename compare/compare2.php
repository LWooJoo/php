<!DOCTYPE html>
<html>
<body>
    <?php
        echo "1!=2 : ";
        var_dump(1!=2); #bool(true)
        echo '<br />';

        echo "1!=1 : ";
        var_dump(1!=1); #bool(false)
        echo '<br />';

        echo "one!=one : ";
        var_dump("one"!="one"); #bool(false)
        echo '<br />';

        echo "one!=two : ";
        var_dump("one"!="two"); #bool(true)
        echo '<br />';
    ?>
</body>
</html>