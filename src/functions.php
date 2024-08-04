<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

function task1($array, bool $return = true)
{
  if ($return) {
    foreach ($array as &$got_char) {
      echo $got_char, '<p>';
    }
  }
}

$got_chars = [1 => 'daenerys I targaryen', 2 => 'jon snow', 3 => 'arya stark', 4 => 'sansa stark'];

function task2($str, ...$args)
{
  switch ($str) {
    case '+':
      echo array_sum($args);
      break;
    default:
      echo 'error';
  }
}

function task3($rows, $columns)
{
  echo '<table>';

  for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';

    for ($td = 1; $td <= $columns; $td++) {
      $result = $tr * $td;

      echo '<td>';
      if (func_num_args() === 2) {
        echo "$tr x $td = $result;";
      } else {
        echo 'ERROR! must be 2 arguments!';
      }

      echo '</td>';
    }

    echo '</tr>';
  }

  echo '</table>';
}

function task4()
{
  $current_date = date('d.m.Y H:i');
  $unixtime = strtotime('24.02.2016 00:00:00');

  $unixtime_converted = date('d.m.Y H:i', $unixtime);

  echo $current_date;
  echo '<br>';
  echo $unixtime_converted;

}

function task5()
{
  $string_one = str_split('Карл у Клары украл Кораллы');
  $string_two = 'Две бутылки лимонада';

  echo '<br>';

  foreach ($string_one as $index => $character) {
    if (preg_match("/[а-я]/", $character)) {
      echo $character;
    }
  }

  echo '<br>';

  $result = str_replace('Две', 'Три', $string_two);

  echo $result;
}

function task6()
{
  $data = file_get_contents('test.txt');

  echo '<br>';

  echo $data;
}