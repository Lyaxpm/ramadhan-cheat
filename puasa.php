#!/usr/bin/php
<?php
echo "\033[0;36m
   ___ _             _     ___                    _ _
  / __| |_  ___ __ _| |_  | _ \__ _ _ __  __ _ __| | |_  __ _ _ _
 | (__| ' \/ -_) _` |  _| |   / _` | '  \/ _` / _` | ' \/ _` | ' \
  \___|_||_\___\__,_|\__| |_|_\__,_|_|_|_\__,_\__,_|_||_\__,_|_||_|
 \n\n";

sleep(3);

echo "\033[1;92m
----- Cheat Ramadhan No Root -----

\033[1;97m 1. Anti Lapar
\033[1;97m 2. Auto Terhindar Godaan Teman
\033[1;97m 3. Anti PMS
\033[1;97m 4. Auto Full Puasa 30 Day
\033[1;97m 5. Nonaktifkan Cheat

\033[1;92m----- Cheat By Rud Az -----
\n";

echo "\033[0;36mPilih Cheat : ";
$type = trim(fgets(STDIN));

function showProgressBar($percentage, int $numDecimalPlaces) {
  $percentageStringLength = 4;
  if ($numDecimalPlaces > 0) {
    $percentageStringLength += ($numDecimalPlaces + 1);
  }

  $percentageString = number_format($percentage, $numDecimalPlaces) . '%';
  $percentageString = str_pad($percentageString, $percentageStringLength, " ", STR_PAD_LEFT);

  $percentageStringLength += 3;

  $terminalWidth = `tput cols`;
  $barWidth = $terminalWidth - ($percentageStringLength) - 2;
  $numBars = round(($percentage) / 100 * ($barWidth));
  $numEmptyBars = $barWidth - $numBars;

  $barsString = '[' . str_repeat("\033[0;92m#\e[0;0m", ($numBars)) . str_repeat(" ", ($numEmptyBars)) . ']';

  echo "($percentageString) " . $barsString . "\r";
}

switch ($type) {
  case '1':
    echo "\nMohon Tunggu Sedang Mengaktifkan Cheat Anti Lapar\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Sedang Active\n\n";
    break;
  case '2':
    echo "\nMohon Tunggu Sedang Mengaktifkan Cheat Auto Terhindar\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Sedang Active\n\n";
    break;
  case '3':
    echo "\nMohon Tunggu Sedang Mengaktifkan Cheat Anti PMS\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Sedang Active\n\n";
    break;
  case '4':
    echo "\nMohon Tunggu Sedang Mengaktifkan Cheat Auto Full\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Sedang Active\n\n";
    break;
  case '5':
    echo "\nSedang Nonaktifkan Cheat Yang Sedang Berjalan\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Nonaktif\n\n";
    break;
  default:
    echo "\nMohon Tunggu Sedang Mengaktifkan Semua Cheat\n\n";
    $total = '1000';
    for ($i = 0; $i < $total; $i++) {
      $percentage = $i / $total * 100;
      showProgressBar($percentage, 2);
    }
    echo "\n\n \033[0;36mSukses Cheat Sedang Active\n\n";
    break;
}