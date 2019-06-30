<?php
  require('config/config.php');
  require('config/db.php');

  // Check for submit
  if(isset($_POST['submit'])) {
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

    if(mysqli_query($conn, $query)) {
      header('Location: ' . ROOT_URL . '');
    } else {
      echo 'ERROR: ' . mysqli_error($conn);
    }
  }
?>

<?php include('inc/header.php'); ?>
  <h1>Add Post</h1>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Title</label>
    <input type="text" name="title">
    <label>Author</label>
    <input type="text" name="author">
    <label>Body</label>
    <textarea name="body"></textarea>
    <input type="submit" value="Submit" name="submit">
  </form>
<?php include('inc/footer.php'); ?>
