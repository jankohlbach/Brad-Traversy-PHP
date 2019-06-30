<?php
  # FILTER AND VALIDATION

  // Check for posted data
  if(filter_has_var(INPUT_POST, 'data')) {
    echo 'Data Found';
  } else {
    echo 'No Data';
  }

  echo '<br />';

  if(filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // Remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email;
    echo '<br />';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'E-Mail is valid';
    } else {
      echo 'E-Mail is not valid';
    }
  }

  # FILTER_VALIDATE_BOOLEAN
  # FILTER_VALIDATE_EMAIL
  # FILTER_VALIDATE_FLOAT
  # FILTER_VALIDATE_INT
  # FILTER_VALIDATE_IP
  # FILTER_VALIDATE_REGEXP
  # FILTER_VALIDATE_URL

  # FILTER_SANITIZE_EMAIL
  # FILTER_SANITIZE_ENCODED
  # FILTER_SANITIZE_NUMBER_FLOAT
  # FILTER_SANITIZE_NUMBER_INT
  # FILTER_SANITIZE_SPECIAL_CHARS
  # FILTER_SANITIZE_STRING
  # FILTER_SANITIZE_URL
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>

<?php
  $var = 23;
  if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo $var . ' is a number.';
  } else {
    echo $var . ' is not a number';
  }

  echo '<br />';

  $var2 = '343brih4ur24rbj2i4r';
  var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));
  echo '<br />';

  $var3 = '<script>alert(1)</script>';
  echo filter_var($var3, FILTER_SANITIZE_SPECIAL_CHARS);
  echo '<br />';

  $filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100,
      ),
    ),
  );

  print_r(filter_input_array(INPUT_POST, $filters));
  echo '<br />';

  $arr = array(
    "name" => "brad traversy",
    "age" => "35",
    "email" => "brad@gmail.com",
  );

  $filters2 = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords",
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120,
      ),
    ),
    "email" => FILTER_VALIDATE_EMAIL,
  );

  print_r(filter_var_array($arr, $filters2));
?>
