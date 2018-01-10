<html>
  <head>
    <title>Aliens Abducted Me - Report an Abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
    <?php
      $name = $_POST['firstname'] . " " . $_POST['lastname'];
      $when_it_happened = $_POST['whenithappened'];
      $how_long = $_POST['howlong'];
      $how_many = $_POST['howmany'];
      $fang_spoted = $_POST['fangspotted'];
      $alien_description = $_POST['aliendescription'];
      $what_they_did = $_POST['whattheydid'];
      $email = $_POST['email'];
      $other = $_POST['other'];
      // $to = "contact@yechiel.me";
      // $subject = "$name's abduction report";
      // $msg = "$name was abducted $when_it_happened and was gone for $how_long .\n" .
      //   "There were $how_many aliens, who looked like $alien_description. They $what_they_did.\n" .
      //   "Was Fang spotted? $fang_spoted.\n" .
      //   "Other comments: $other";
    
      // mail($to, $subject, $msg, 'From:' . $email);

      $dbc = mysqli_connect('localhost', 'yechielk', 'testtest', 'aliendatabase')
        or die('Error connecting to database');
      
      echo 'Thanks for submitting the form.<br>';
      echo 'You were abducted ' . $when_it_happened;
      echo ' and were gone for ' . $how_long . '<br>'; 
      echo "You described them as: " . $alien_description . '<br>';
      echo "Number of aliens: " . $how_many . '<br>';
      echo "The aliens did this: " . $what_they_did . '<br>';
      echo "Was Fang there? " . $fang_spoted . '<br>';
      echo "Other comments: " . $other . '<br>';
      echo "Your email address is " . $email;


    ?>
  </body>
</html>