<?php
include_once "includes/admin_header.php";
include_once "includes/aside.php";
?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Administrator
                    </h1>
                </div>

                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <?php
                    $query  = "SELECT * FROM aboutus";
                    $result = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($result);
                    echo '<h2>Title</h2>';
                    echo '<h4>'.$row['title'].'</h4>';
                    echo '<h2>Content</h2>';
                    echo '<p>'.$row['paragraph'].'</p>';
                    ?>

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