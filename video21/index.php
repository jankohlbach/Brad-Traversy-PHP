<?php
  require('config/config.php');
  require('config/db.php');

  // Create query
  $query = 'SELECT * FROM posts';

  // Get result
  $result = mysqli_query($conn, $query);

  // Fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result
  mysqli_free_result($result);

  // Close connection
  mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
  <h1>Posts</h1>
  <?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <p>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></p>
    <p><?php echo $post['body']; ?></p>
    <a href="<?php echo ROOT_URL . 'post.php?id=' . $post['id']; ?>">Read More</a>
  <?php endforeach; ?>
<?php include('inc/footer.php'); ?>
