<?php

$tgl_beli = mktime(24, 12, 2021, date("m"), date("d")-60, date("Y"));
echo "tanggal beli = ";
echo date("l, d-M-Y", $tgl_beli);

?>