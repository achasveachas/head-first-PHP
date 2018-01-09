<html>
  <head>
    <title>Aliens Abducted Me - Report an Abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
    <?php
      $when_it_happened = $_POST['whenithappened'];
      $how_long = $_POST['howlong'];
      $fang_spoted = $_POST['fangspotted'];
      $alien_description = $_POST['aliendescription'];
      $email = $_POST['email'];

      echo 'Thanks for submitting the form.<br>';
      echo 'You were abducted ' . $when_it_happened;
      echo ' and were gone for ' . $how_long . '<br>'; 
      echo "You described them as: " . $alien_description . '<br>';
      echo "Was Fang there? " . $fang_spoted . '<br>';
      echo "Your email address is " . $email;
    ?>
  </body>
</html>