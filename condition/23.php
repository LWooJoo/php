<?php
if (1 and 1) {
    echo 1;
    # true , true
}
if (1 and 0) {
    echo 2;
    # true , false
}
if (0 and 1) {
    echo 3;
    # false , true
}
if (0 and 0) {
    echo 4;
    # false , false
}
?>