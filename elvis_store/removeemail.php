<?php
  $email = $_POST['email'];

  $dbc = mysqli_connect('localhost', 'yechielk', 'testtest', 'elvis_store')
  or die('Error connecting to DB');

  $query = "DELETE FROM email_list WHERE email = '$email'";

  mysqli_query($dbc, $query)
    or die('error deleting from database');

  mysqli_close($dbc);

?>
