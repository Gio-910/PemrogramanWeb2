<?php


for($S = 0; $S <= 4; $S++){
    $hari = mktime(17, 3, 2021, date("m"), date("d")+6, date("Y")-1);
    $cetak = date("l, d-M-Y", $hari);
    echo "{$cetak}<br/>";
}
?>