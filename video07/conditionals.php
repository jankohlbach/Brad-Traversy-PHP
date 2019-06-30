<?php
  #CONDITIONALS
  /*
    - ==
    - ===
    - <
    - >
    - <=
    - >=
    - !=
    - !==
  */

  # If
  $num = '5';
  $num2 = 7;

  if($num == 5) {
    echo '5 passed';
  }

  echo '<br />';

  if($num === 5) {
    echo '5 passed';
  } else if($num2 == 6) {
    echo '6 passed';
  } else {
    echo 'did not pass';
  }

  echo '<br />';

  # Nesting If
  $num3 = 4;

  if($num3 >= 4) {
    if($num3 < 10) {
      echo $num3 . ' passed';
    }
  }

  echo '<br />';

  # Logical Operators
  /*
    - and &&
    - or ||
    - xor
  */
  if($num3 > 4 && $num3 < 10) {
    echo $num3 . ' passed';
  }

  echo '<br />';

  if($num3 > 4 OR $num3 < 10) {
    echo $num3 . ' passed';
  }

  echo '<br />';

  if($num3 > 4 XOR $num3 < 10) {
    echo $num3 . ' passed';
  }

  echo '<br />';

  # Switch
  $favColor = 'red';

  switch($favColor) {
    case 'red':
      echo 'Your favorite color is red';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    case 'green':
      echo 'Your favorite color is green';
      break;
    default:
      echo 'Your favorite color is something else';
  }
?>
