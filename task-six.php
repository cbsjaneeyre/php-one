<style>
  table {
    border: 0;
  }

  td {
    padding: 5px;
    text-align: center;
  }
</style>

<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$rows = 10;
$columns = 10;

echo '<table>';

for ($tr = 1; $tr <= $rows; $tr++) {
  echo '<tr>';

  for ($td = 1; $td <= $columns; $td++) {
    $result = $tr * $td;

    echo '<td>';

    if (($tr % 2) === 0 && ($td % 2) === 0) {
      echo '(', $result, ')';
    } elseif (($tr % 2) !== 0 && ($td % 2) !== 0) {
      echo '[', $result, ']';
    } else {
      echo $result;
    }

    echo '</td>';
  }

  echo '</tr>';
}

echo '</table>';

?>