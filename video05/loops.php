<?php
  #LOOPS - Execute code set number of times
  /*
    - For
    - While
    - Do...While
    - Foreach
  */

  # For Loop
  # @params - init, condition, inc
  for($i = 5; $i <= 10; $i++) {
    echo 'Number ' . $i;
    echo '<br />';
  }

  # While Loop
  # @params - condition
  $i = 0;
  while($i < 5) {
    echo $i;
    echo '<br />';
    $i++;
  }

  # Do...While Loop
  # @params - condition
  $i = 0;
  do {
    echo $i;
    echo '<br />';
    $i++;
  } while($i < 5);

  # Foreach Loop
  # for arrays
  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
  foreach($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br />';
  }
?>
