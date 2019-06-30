<?php
  #ARRAY - Variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multi-dimensional
  */

  // Indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  echo $people[1];
  echo nl2br("\n");
  $ids = array(23, 55, 12);
  echo $ids[2];
  echo nl2br("\n");
  $cars = ['Honda', 'Toyota', 'Ford'];
  echo $cars[1];
  echo nl2br("\n");
  $cars[3] = 'Chevy';
  echo $cars[3];
  echo nl2br("\n");
  $cars[] = 'BMW';
  echo $cars[4];
  echo nl2br("\n");

  echo count($cars);
  echo nl2br("\n");
  print_r($cars);
  echo nl2br("\n");
  var_dump($cars);
  echo nl2br("\n");
  echo nl2br("\n");

  // Associative
  $people2 = array('Brad' => 21, 'Jose' => 32, 'William' => 37);
  echo $people2['Brad'];
  echo nl2br("\n");
  $people2['Jill'] = 42;
  echo $people2['Jill'];
  echo nl2br("\n");
  print_r($people2);
  echo nl2br("\n");
  var_dump($people2);
  echo nl2br("\n");
  $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  echo $ids2[22];
  echo nl2br("\n");
  echo nl2br("\n");

  // Multi-dimensional
  $cars2 = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
  );
  echo $cars2[1][0];
?>
