<img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
<img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />

<?php
  $dbc = mysqli_connect('localhost', 'yechielk', 'testtest', 'elvis_store')
    or die('Error connecting to DB');

  if(isset($_POST['submit'])) {
    foreach ($_POST['todelete'] as $id_to_delete) {
      $query = "DELETE FROM email_list WHERE id = $id_to_delete";
      mysqli_query($dbc, $query)
        or die("Error deleting from DB");

    }
    echo "Customers deleted.<br>";
  } 
?>
<p>Enter an email address to remove.</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <?php


      $query = "SELECT * FROM email_list";

      $result = mysqli_query($dbc, $query);

      while($row = mysqli_fetch_array($result)){
        echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />';
        echo $row['first_name'] . " " . $row['last_name'] . " - " . $row['email'] . '<br>';
      }

      mysqli_close($dbc);
  ?>
  <input type="submit" name="submit" value="Remove" />
</form>


