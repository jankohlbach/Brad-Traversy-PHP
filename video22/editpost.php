<?php
  require('config/config.php');
  require('config/db.php');

  // Check for submit
  if(isset($_POST['submit'])) {
    // Get form data
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "UPDATE posts SET title = '$title', author = '$author', body = '$body' WHERE id = {$update_id}";

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
  <h1>Add Post</h1>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $post['title']; ?>">
    <label>Author</label>
    <input type="text" name="author" value="<?php echo $post['author']; ?>">
    <label>Body</label>
    <textarea name="body"><?php echo $post['body']; ?></textarea>
    <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
    <input type="submit" value="Submit" name="submit">
  </form>
<?php include('inc/footer.php'); ?>
