<?php
// header
include_once "includes/header.php";
include_once "includes/database.php";
$query = "SELECT * FROM offers";
$result = mysqli_query($connection, $query);
?>

<div class='space'></div>
<div class="SpecialMenu">
    <div id="specialCenter">
        <img id="SpecialItem" src="../webie/photosArbnori/SpecialPhoto1.png" alt="">
        <div id="SpecialText">
            <h2 id="menuText">Special Menu</h2>
            <p id="itemText">Chose your best item</p>
        </div>
    </div>
</div>
<div class="flexContainer">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="specialItem1">
        <img class="itemPhoto" src="../webie/photosArbnori/'.$row['foodPhoto'].'" alt="">
        <div class="item1Text">
            <div class="itemTitle">
                <h2 class="itemName">'.$row['foodName'].'</h2>
            </div>
            <p>'.$row['foodDescription'].'</p>
            <div class="priceAndCard">
                <input class="submit-order btn btn-outline-danger btn-sm" type="submit" value="ADD TO CART">
                <div class="itemPrice">$'.$row['price'].'</div>
            </div>
        </div>
        </div>
        ';

    }
    ?>

</div>
    <script type='module' src="assets/js/selectOrder.js"></script>
<?php
// footer
include_once "includes/footer.php";
?>
