<?php
    include ("conn/connection.php");
    
    if (isset($_POST['sendmsg'])) {
        $namemsg = $_POST['namemsg'];
        $emailmsg = $_POST['emailmsg'];
        $message = $_POST['message'];
        $date = date('Y-m-d');

        $query = mysqli_query ($koneksi, "INSERT INTO tb_inbox values ('','$namemsg','$emailmsg','$message','$date','N') ");
        if ($query) {
            echo '<div class="alert alert-dismissable alert-success"><strong>Well done!</strong> Your message has been sent.</div>';
        }
    }
?>