<?php
include_once "includes/admin_header.php";
include_once "includes/aside.php";

$text = "";
if (isset($_POST['submit'])){
    global $connection;
    $pageName = mysqli_real_escape_string($connection,$_POST['page']);
    $url = mysqli_real_escape_string($connection,$_POST['url']);
    if($pageName == null || $url ==null){
        $text = "These fields should not be null";
    }else {
        $query = "INSERT INTO pages (pageName, pageUrl)";
        $query .= "VALUES ('$pageName','$url')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed' . mysqli_error());
        }
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
                    <div class="col-lg-7">
                        <form action="admin_pages.php" method="post">
                            <p><?php echo $text ?></p>
                            <label for="page">Name of new page:</label>
                            <input type="text" name="page">
                            <label for="url">Url:</label>
                            <input type="text" name="url">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Page Name</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                show_pages();
                            ?>
                            <?php
                                delete_page();
                            ?>

                            </tbody>
                        </table>
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