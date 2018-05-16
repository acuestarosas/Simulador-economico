<?php
echo $_GET['Periocidad'];
$Periodo = 0;
$Dias = 0;
switch ($_GET['Periocidad']) {
  case 'm':
    $Periodo = 1;
    $Dias = 30;
    break;

  case 't':
    $Periodo = 3;
    $Dias = 90;
    break;

  case 's':
    $Periodo = 6;
    $Dias = 180;
    break;
}

if (isset($_GET['ea'])) {
  $efectivoA=($_GET['ea'])/100;
  echo $efectivoA;
  $ip = (1 + $efectivoA);
  $ip = pow($ip, ($Dias/360));
  $ip = $ip -1;
  $ip = $ip *100;
  echo $ip;
}
