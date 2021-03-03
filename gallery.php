<?php
// header
include_once "includes/header.php";

$query  = "SELECT * FROM gallery";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
?>
    <!--  Gallery Section  -->


    <div id="gallery">

        <p></p>
        <h2 id="galleryTitle">Gallery</h2>
        <div class="listContainer">
            <div class="liContainer">
                <h3>All</h3>
            </div>

            <div class="liContainer">
                <h3>Restaurant</h3>
            </div>

            <div class="liContainer">
                <h3>Events</h3>
            </div>

            <div class="liContainer">
                <h3>Food</h3>
            </div>

            <div class="liContainer">
                <h3>People</h3>
            </div>
        </div>
    </div>
    </div>

    <div class="photosShown">

        <div class="photos1">

            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo '<img class="fototGallery" src="../webie/photosArbnori/'.$row['galleryPhotos'].'" alt="'.$row['photoAlt'].'">';
            }
            ?>
        </div>
    </div>

    <script src="assets/js/gallery.js"></script>
<?php
// footer
include_once "includes/footer.php";
?>