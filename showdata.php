<?php
$db = new PDO('mysql:host=localhost;dbname=notespool;charset=utf8mb4', 'root', 'password');



?>
<!DOCTYPE html>


<html lang="en">
<?php
$raw_results      = $db->query("SELECT * FROM Users");
  if ($raw_results->rowCount() > 0) { // if one or more rows are returned do following
      echo "<table class='pure-table pure-table-horizontal'><tr>
                  <td><h3>id</h3></td><td><h3>userName</h3></td><td><h3>password</h3></td>";
      while ($results = $raw_results->fetch(PDO::FETCH_ASSOC)) {
          // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

          

          echo "<tr>";
          echo "<td>" . "</td><td>" . $results'id']. $results['userName'] . "</td><td>" . $results['password'] . "</td>";
          echo "</tr>";
          // posts results gotten from database(title and text) you can also show id ($results['id'])
      }
      echo "</tr></table>";

  } else { // if there is no matching rows do following
      echo "No results";
  }
  ?>
</html>
