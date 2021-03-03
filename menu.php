<?php
//header
include_once "includes/header.php";
include_once "includes/database.php";
$query = "SELECT * FROM menues";
$result = mysqli_query($connection, $query);
?>

<section id="foodMenu">
    <div class="introFood">
        <img src="images/salad.png" alt="Salad Image">
        <h2>Food Menu</h2>
        <p>Choose your food:</p>
    </div>
    <div id="menuOptions">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="specialItem1">
                <p hidden class="id">'.$row['id'].' </p>
                <img class="itemPhoto" src="images/menuFoods/'.$row['image'].'" alt="Hamburger Image" class="menuFoodImages">
                <div class="item1Text">
                    <div class="itemTitle">
                        <h2 class="itemName">'.$row['foodName'].'</h2>
                    </div>
                    <p>'.$row['description'].'</p>
                    <div class="priceAndCard">
                        <input class="submit-order btn btn-outline-danger btn-sm" type="submit" value="ADD TO CART">
                        <p class="itemPrice">$'.$row['price'].'</p>
                </div>
                </div>
            </div>
            ';
        };
        ?>

    </div>
</section>
    <script type='module' src="assets/js/selectOrder.js"></script>
<?php
//footer
include_once "includes/footer.php";
?>
