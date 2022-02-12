<?php
function getCuboidArea($vertical,$horizon, $height,) {
    $volume = $vertical*$horizon*$height;
    echo '直方体の体積は',$volume,'だよ。';
}

getCuboidArea(5,10,8);
?>