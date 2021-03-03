<?php
include_once "includes/header.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['firstname']='';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $selectUser= mysqli_query($connection, $query);
    if(!$selectUser){
        die("Query Failed". mysqli_error());
    }

    while($row = mysqli_fetch_array($selectUser)){
        $id = $row['id'];
        $user_username = $row['username'];
        $user_password = $row['password'];
        $firstname =$row['firstname'];
        $lastname = $row['lastname'];
        $role = $row['role'];
    }

    if($username !== $user_username && $password !== $user_password){
        header("Location: login.php");
    }elseif ($username == $user_username && $password == $user_password && $role === 'admin'){
        $_SESSION['username'] = $user_username;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['role'] = $role;
        header("Location: admin/admin_index.php");
    }elseif ($username == $user_username && $password == $user_password) {
        $_SESSION['username'] = $user_username;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['role'] = $role;
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }
}
?>
<div class="userForm">
    <form action="login.php" method="post">  

        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>    

        <div class="mb-3">
            <input type="submit" name="submit" value="Log in" class="btn btn-lg btn-outline-danger">
        </div>
    </form>
</div>
