<?php
include_once "includes/header.php";
include_once "includes/database.php";

    $query  = "SELECT * FROM homepage";
    $result = mysqli_query($connection,$query);
    
?>

    <div class="fwimage1">
        <?php

        while($row = mysqli_fetch_row($result)){
        ?>
            <h2 class="homesub"><?php echo $row[1] ?></h2>
            <h1 class="homedes"><?php echo $row[2] ?></h1>
            <br>
        <?php
        }
        ?>
        <a href="reservations.php"><button class="buttonhome">BOOK NOW</button></a>
    </div>
    <!--  Slider Section  -->

    <div class="carouselContainer">
        <i class="fas fa-arrow-left" id="prevBtn"></i>
        <i class="fas fa-arrow-right " id="nextBtn"></i>
        <div class="carouselSlide">
            <img src="../webie/photosArbnori/sliderFoto5.jpg" id="lastClone" alt="">
            <img src="../webie/photosArbnori/sliderFoto1.jpg" alt="">
            <img src="../webie/photosArbnori/sliderFoto2.jpg" alt="">
            <img src="../webie/photosArbnori/sliderFoto3.jpg" alt="">
            <img src="../webie/photosArbnori/sliderFoto4.jpg" alt="">
            <img src="../webie/photosArbnori/sliderFoto5.jpg" alt="">
            <img src="../webie/photosArbnori/sliderFoto1.jpg" id="firstClone" alt="">
        </div>
    </div>
    <script src="assets/js/index.js"></script>
<?php
include_once "includes/footer.php";
?>