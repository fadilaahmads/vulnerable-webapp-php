<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross Site Scripting</title>
  </head>
  <body>
    <h2>Search</h2>
    <form action="xss.php" method="GET">
      <label for="searchQuery">Search Query</label>
      <input type="text" id="searchQuery" name=q required>
      <button type="submit">Search</button>
    </form>
  </body>
  <footer>
  </footer>
</html>
