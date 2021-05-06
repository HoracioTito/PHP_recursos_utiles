<?php
echo("Como dar formato a una fecha <br> ");
$originalDate = "2010-03-21";
echo('Original Y-m-d : 2010-03-21');
$newDate = date("d-m-Y", strtotime($originalDate));
echo('<br>Modificado a formato d-m-Y: '.$newDate);
$originalDate = $newDate ;

echo('<br><br>Original d-m-Y :'.$originalDate);
$newDate = date("Y-m-d", strtotime($originalDate));
echo('<br>Modificado Y-m-d : '.$newDate);
 ?>