<?php
include_once "includes/admin_header.php";
include_once "includes/aside.php";
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connection,$_POST['foodName']);
    $description = mysqli_real_escape_string($connection,$_POST['description']);
    $price = mysqli_real_escape_string($connection,$_POST['price']);
    $image = "image.png";

    $query = "INSERT INTO menues (foodName, image, description, price)";
    $query .= "VALUES ('$name','$image','$description','$price')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Failed' . mysqli_error());
    }
}
?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Administrator
                    </h1>
                    <div class="col-lg-6">
                        <form action="admin_menu.php" method="post">
                            <label for="name">Food Name:</label>
                            <input type="text" name="foodName" id="name">
                            <br>
                            <label for="description">Food Description</label>
                            <input type="text" name="description" id="description">
                            <br>
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price">
                            <br>
                            <label for="image">Image:</label>
                            <p>Comming soon! We apologise</p>
                            <br>

                            <input type="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $query = "SELECT * FROM menues";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                                 <div class="menuItems">
                                     <img src="../images/menuFoods/' . $row['image'] . '" alt="Hamburger Image" class="menuFoodImages" width="150px">
                                     <div class="menuFoodDescrioption">
                                         <h4>' . $row['foodName'] . '</h4>
                                         <p>' . $row['description'] . '</p>
                                         <div class="buyItem">
                                             <div>' . $row['price'] . ' &euro;</div>
                                         </div>
                                     </div>
                                 </div>
                                 <hr><hr>
                                 ';
                        };
                        ?>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
include_once "includes/footer.php";
?>