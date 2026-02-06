<?php
ini_set('max_execution_time', 3000);

if (isset($_POST['from'], $_POST['code_contry'])) {

  $max = (int) $_POST['from'];
  if ($max < 1) $max = 1;

  $patterns = array_filter(array_map('trim', explode(',', $_POST['code_contry'])));

  function generate($pattern){
    $pattern = str_replace(' ', '', $pattern);
    $parts = explode('x', $pattern);
    $needed = count($parts) - 1;

    if ($needed <= 0) return $pattern;

    $digits = '';
    for ($i = 0; $i < $needed; $i++) {
      $digits .= rand(0,9);
    }

    $result = $parts[0];
    for ($j = 0; $j < $needed; $j++) {
      $result .= $digits[$j] . $parts[$j + 1];
    }

    return $result;
  }

  for ($i = 0; $i < $max; $i++) {
    $p = $patterns[array_rand($patterns)];
    echo generate($p) . "\n";
  }
}
?>
