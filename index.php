<?php
$numberOne = 1;
$result = $numberOne / 2;
while (($numberOne + $result) <=10) {
  $result = $numberOne / 2;
  $numberOne = $numberOne + $result;
  echo $numberOne.'<br/>';
}
?>
