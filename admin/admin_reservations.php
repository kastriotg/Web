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

                    <?php
                    $query  = "SELECT * FROM reservations";
                    $result = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Tel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['time']?></td>
                                <td><?php echo $row['tel']?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

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