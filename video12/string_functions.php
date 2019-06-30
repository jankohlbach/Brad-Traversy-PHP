<?php
  # STRING FUNCTIONS

  # substr()
  # Returns a portion of a string
  $output = substr('Hello', 1, 3);
  echo $output;
  echo '<br />';
  $output1 = substr('Hello', -2);
  echo $output1;
  echo '<br />';

  # strlen()
  # Returns the length of a string
  $output2 = strlen('Hello World');
  echo $output2;
  echo '<br />';

  # strpos()
  # Finds the position of the first occurence of a substring
  $output3 = strpos('Hello World', 'o');
  echo $output3;
  echo '<br />';

  # strrpos()
  # Finds the position of the last occurence of a substring
  $output4 = strrpos('Hello World', 'o');
  echo $output4;
  echo '<br />';

  # trim()
  # Strips whitespace
  $text = 'Hello World      ';
  var_dump($text);
  $trimmed = trim($text);
  var_dump($trimmed);
  echo '<br />';

  # strtoupper()
  # Makes everything to uppercase
  $output5 = strtoupper('Hello World');
  echo $output5;
  echo '<br />';

  # strtolower()
  # Makes everything to lowercase
  $output6 = strtolower('Hello World');
  echo $output6;
  echo '<br />';

  # ucwords()
  # Capitalize every word
  $output7 = ucwords('hello world');
  echo $output7;
  echo '<br />';

  # str_replace()
  # Replace all occurences of a search string with a replacement
  $string = 'Hello World';
  $output8 = str_replace('World', 'Everyone', $string);
  echo $output8;
  echo '<br />';

  # is_string()
  # Check if string
  $val = 'Hello';
  $output9 = is_string($val);
  echo $output9;
  echo '<br />';
  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
  foreach($values as $value) {
    if(is_string($value)) {
      echo "{$value} is a string<br />";
    }
  }
  echo '<br />';

  # gzcompress()
  # Compress a string
  $longstring = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias possimus eius repellendus placeat impedit perferendis quibusdam, officia, sed unde sit tenetur quisquam quia quaerat sunt dolorem nisi non optio rem.';
  $compressed = gzcompress($longstring);
  echo $compressed;
  echo '<br />';
  $original = gzuncompress($compressed);
  echo $original;
?>
