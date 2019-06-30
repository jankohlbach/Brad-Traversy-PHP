<?php
  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';

  // Return filename
  echo basename($path);
  echo '<br />';

  // Return filename without extension
  echo basename($path, '.php');
  echo '<br />';

  // Return the dir name from path
  echo dirname($path);
  echo '<br />';

  // Check if file exists
  echo file_exists($file);
  echo '<br />';

  // Get absolute path
  echo realpath($file);
  echo '<br />';
  echo '<br />';

  // Checks to see if file
  echo is_file($file);
  echo '<br />';
  echo is_file('test');
  echo '<br />';
  echo file_exists('test');
  echo '<br />';

  // Check if writeable
  echo is_writable($file);
  echo '<br />';

  // Check if readable
  echo is_readable($file);
  echo '<br />';

  // Get file size
  echo filesize($file);
  echo '<br />';

  // Create a directory
  mkdir('testing');

  // Remove directory if empty
  rmdir('testing');

  // Copy file
  echo copy('file1.txt', 'file2.txt');
  echo '<br />';

  // Rename file
  rename('file2.txt', 'myfile.txt');

  // Delete file
  unlink('myfile.txt');

  // Write from file to string
  echo file_get_contents($file);
  echo '<br />';

  // Write string to file (replace content)
  // echo file_put_contents($file, 'Goodbye World');

  // Write string to file (append)
  $current = file_get_contents($file);
  $current .= ' Goodbye World';
  file_put_contents($file, $current);

  // Open file for reading
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data;
  fclose($handle);
  echo '<br />';

  // Open file for writing
  $handle = fopen('file2.txt', 'w');
  $txt = "John Doe\n";
  fwrite($handle, $txt);
  $txt = "Steve Smith";
  fwrite($handle, $txt);
  fclose($handle);
?>
