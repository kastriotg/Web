<?php
// header
include_once "includes/header.php";

$query  = "SELECT * FROM aboutus";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$paragraphText = $row['paragraph'];
?>

    <section id="aboutUs">
        <!--working soon to get the path from db to show the photo-->
        <div class="aboutUsPhoto">
            <img id="foto" src="images/aboutP.png" alt="no photo at the moment">
        </div>
        <div id="aboutDesc">
            <h2><?php echo $title?></h2>
            <p><?php echo $paragraphText?></p>
        </div>
    </section>
<?php
// footer
include_once "includes/footer.php";
?>