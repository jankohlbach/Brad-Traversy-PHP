<?php
  require('config/config.php');
  require('config/db.php');

  // Check for submit
  if(isset($_POST['delete'])) {
    // Get form data
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

    if(mysqli_query($conn, $query)) {
      header('Location: ' . ROOT_URL . '');
    } else {
      echo 'ERROR: ' . mysqli_error($conn);
    }
  }

  // Get ID
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // Create query
  $query = 'SELECT * FROM posts WHERE id = ' . $id;

  // Get result
  $result = mysqli_query($conn, $query);

  // Fetch data
  $post = mysqli_fetch_assoc($result);

  // Free result
  mysqli_free_result($result);

  // Close connection
  mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
  <a href="<?php echo ROOT_URL; ?>">Back</a>
  <h1><?php echo $post['title']; ?></h1>
  <p>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></p>
  <p><?php echo $post['body']; ?></p>
  <hr>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
    <input type="submit" name="delete" value="Delete">
  </form>
  <a href="<?php echo ROOT_URL . 'editpost.php?id=' . $post['id']; ?>">Edit</a>
<?php include('inc/footer.php'); ?>
