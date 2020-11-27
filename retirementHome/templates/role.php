<?php
include '../PHPFiles/roleManagement.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Role Page</title>

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text|Lato:400,400i,700" />
    <link rel="stylesheet" href="{{ url_for('static', filename='styles.css') }}" type="text/css" />

  </head>

  <body>
    <form method="post">
      <p>
        <?php
        if(!empty(mysqli_query($link,$sql))){
          $result = mysqli_query($link,$sql);
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['roleName'] . "</td>";
            echo "<td>" . $row['accessLevel'] . "</td>";
            echo "</tr>";
          }
        }
        ?>
      </p>
      <p>
          <label for="newRole">New Role:</label>
          <input type="text" name="newRole" id="newRole">
      </p>
      <p>
          <label for="accessLevel">Access Level:</label>
          <input type="text" name="accessLevel" id="accessLevel">
      </p>
      <input type="submit" name="roleOk"></input>
      <a class="buttons" href=" ">Cancel</a>

  </form>

  </body>
</html>