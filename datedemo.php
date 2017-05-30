<?php
$date_raw = date('Y-m-d');
print('Next Date ' . date('Y-m-d', strtotime('+3 day', strtotime($date_raw))));


$newd =date('Y-m-d', strtotime('+3 day', strtotime($date_raw)));
print($newd);

?>