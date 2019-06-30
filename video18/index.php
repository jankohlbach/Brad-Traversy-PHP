<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search User</title>

  <script>
    function showSuggestion(str) {
      if (str.length == 0) {
        document.getElementById('output').innerHTML = '';
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
        xmlhttp.open('GET', 'suggest.php?q=' + str, true);
        xmlhttp.send();
      }
    }
  </script>
</head>
<body>
  <h1>Search Users</h1>

  <form>
    Search User:
    <input type="text" onkeyup="showSuggestion(this.value)">
  </form>
  <p>Suggestions: <span id="output"></span></p>
</body>
</html>
