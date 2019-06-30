<?php
  # GET AND POST

  if(isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);
    echo $name;
    echo '<br />';
    print_r($_GET);
    echo '<br />';
  }

  if(isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name;
    echo '<br />';
    print_r($_POST);
    echo '<br />';
  }

  # Works for GET and POST
  if(isset($_REQUEST['name'])) {
    $name = htmlentities($_REQUEST['name']);
    echo $name;
    echo '<br />';
    print_r($_REQUEST);
    echo '<br />';
  }

  echo '<br />';
  echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>

  <form action="get_post.php" method="GET">
    <div>
      <label for="">Name</label><br />
      <input type="text" name="name">
    </div>
    <div>
      <label>E-Mail</label><br />
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>

  <ul>
    <li>
      <a href="get_post.php?name=Brad">Brad</a>
    </li>
    <li>
      <a href="get_post.php?name=Steve">Steve</a>
    </li>
  </ul>

  <h1><?php echo "{$name}'s Profile"; ?></h1>

</body>
</html>
