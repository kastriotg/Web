<?php
//header
include_once "includes/header.php";
include_once "includes/database.php";
if (isset($_POST['submit'])){
    global $connection;

    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $date = mysqli_real_escape_string($connection,$_POST['date']);
    $tel = mysqli_real_escape_string($connection,$_POST['tel']);
    $time = mysqli_real_escape_string($connection,$_POST['time']);

    $query = "INSERT INTO reservations (name, email, date, tel, time)";
    $query .="VALUES ('$name','$email','$date','$tel','$time')";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed'. mysqli_error());
    }
}
?>

<section id="reservations">
    <form action="" method="POST" name="reservationForm" onsubmit="return validate_form(this);">
        <h3>MAKE A RESERVATION</h3>
        <div class="upper-side">
            <label>
                <h5>Emri:</h5>
                <input type="text" name="name" placeholder="Enter Name:" id="firstName" >
                <div class="error firstName"></div>
            </label>
            <label>
                <h5>Email:</h5>
                <input type="email" name="email" placeholder="Enter Email" id="email" >
                <div class="error email"></div>
            </label>
            <label>
                <h5>Date:</h5>
                <input type="date" name="date" id="date">
                <div class="error date"></div>
            </label>
            <label>
                <h5>Tel:</h5>
                <input type="text" name="tel" id="tel" placeholder="Phone Number">
                <div class="error tel"></div>
            </label>

            <label>
                <h5>Time:</h5>
                <input type="time" name="time" id="time" >
                <div class="error time"></div>
            </label>
        </div>

        <button name="submit" class="btn btn-outline-danger btn-sm">SEND</button>
    </form>
</section>

<script src="assets/js/register.js"></script>
<?php
//footer
include_once "includes/footer.php";
?>
