<?php 
    include 'includes/database.php';
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
    
        $email = mysqli_real_escape_string($connection,$email);

        $query = "INSERT INTO subscribers (email)";
        $query .= "VALUES ('$email')";
    
        $selectUser= mysqli_query($connection, $query);
        if(!$selectUser) {
            die("Query Failed" . mysqli_error($connection));
        }else{
            echo 'Subscribed Successfully';
        }
    }else{
        echo 'not set';
    }