<?php
include_once "includes/header.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    $usernameD = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $firstname = mysqli_real_escape_string($connection,$firstname);
    $lastname = mysqli_real_escape_string($connection,$lastname);
    $email = mysqli_real_escape_string($connection,$email);
    $role = "member";
    $randSalt = 'testing';
    $query = "INSERT INTO users (username, password, firstname, lastname, email, role, randSalt)";
    $query .= "VALUES ('$username','$password','$firstname','$lastname','$email','$role', '$randSalt')";

    $selectUser= mysqli_query($connection, $query);
    if(!$selectUser) {
        die("Query Failed" . mysqli_error($connection));
    }else{
        echo 'Registered Successfully';
        header("Location: login.php");
    }
}
?>

<div class="userForm">
    <form  action="register.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname:</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname:</label>
            <input type="lastname" name="lastname" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" name="submit" value="Register" class="btn btn-outline-danger btn-lg">
        </div>
    </form>
</div>

    <script src="assets/js/register.js"></script>
    
<?php
// footer
include_once "includes/footer.php";
?>