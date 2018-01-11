<?php
    $dbc = mysqli_connect('localhost', 'yechielk', 'testtest', 'elvis_store')
        or die('Error connecting to DB');

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "INSERT INTO email_list (first_name, last_name, email) " .
        "VALUES ('$first_name', '$last_name', '$email')";
    
    mysqli_query($dbc, $query)
        or die('error inserting into database');

    echo "Customer Added";

    mysqli_close($dbc);

?>