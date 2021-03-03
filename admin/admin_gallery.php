<?php
include_once "includes/admin_header.php";

include_once "includes/aside.php";
if (isset($_POST['submit'])){

//    $image = addslashes(file_get_contents($_FILES[["image"]["tmp_name"]]));
//
//    $query = "INSERT INTO gallery (galleryPhotos)";
//    $query .= "VALUES ('$image')";
//    $result = mysqli_query($connection, $query);
//    if (!$result) {
//        die('Query Failed' . mysqli_error());
//    }

}
$text ="";
?>


    <!--navbar-->

    <!-- /.navbar-collapse -->


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Administrator
                    </h1>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <h3>Add photo to gallery:</h3>
                        <form action="admin_gallery.php" method="post">
                            <input type="file" name="image">
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary" value="Enter">
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h3>Current photos at gallery:</h3>
                        <?php
                            show_gallery();
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