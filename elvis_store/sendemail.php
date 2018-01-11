<?php

    $subject = $_POST['subject'];
    $msg = $_POST['elvismail'];
    $from = 'elvisstore@yechiel.me';

    $dbc = mysqli_connect('localhost', 'yechielk', 'testtest', 'elvis_store')
        or die('Error connecting to DB');

    $query = "SELECT * FROM email_list";
    
    $result = mysqli_query($dbc, $query)
        or die('error inserting into database');

    while($row = mysqli_fetch_array($result)){

        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $to = $row['email'];

        if(mail($to, $subject, $msg, 'From:' . $from)){
            echo "Emailed " . $first_name . " " . $last_name . "<br>";

        } else {
            echo "failed to email " . $first_name . " " . $last_name . "<br>";
        }

    };

    mysqli_close($dbc);

?>