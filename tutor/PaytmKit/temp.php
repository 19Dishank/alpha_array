<?php
$date = new DateTime('now');
$date->modify('+3 month'); // or you can use '-90 day' for deduct
$date = $date->format('Y-m-d h:i:s');
echo $date;
?>