<?php

    $subject = $_POST['subject'];
    $msg = $_POST['elvismail'];
    $from = 'elvisstore@yechiel.me';
    $output_form = false;
    $submitted = isset($_POST['submit']);

    if($submitted) {

        if (!empty($subject) && !empty($msg)) {

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
        } 
        if (empty($subject) && empty($msg)) {
            $output_form = true;
            echo "You forgot to enter a subject and a text";
        } 
        if (empty($subject) && !empty($msg)) {
            $output_form = true;
            echo "You forgot to enter a subject";
        } 
        if (empty($msg && !empty($subject))) {
            $output_form = true;
            echo "You forgot to enter a message body";
        }
    } else {
        $output_form = true;
    }

    if($output_form){
?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="subject">Subject of email:</label><br />
        <input id="subject" name="subject" type="text" size="30" value="<?php echo $subject; ?>" /><br />
        <label for="elvismail">Body of email:</label><br />
        <textarea id="elvismail" name="elvismail" rows="8" cols="40" ><?php echo $msg; ?></textarea><br />
        <input type="submit" name="Submit" value="Submit" />
    </form>

<?php
    }
?>