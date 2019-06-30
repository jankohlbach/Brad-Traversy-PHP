<?php
  require('config/config.php');
  require('config/db.php');

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
<?php include('inc/footer.php'); ?>
