<?php
    include_once 'includes/database.php';

    $query  = "SELECT * FROM footer";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $mainText = $row['mainTitleText'];
    $subtTitle = $row['subTitleText'];
    $paragraphText = $row['paragraphText'];

?>
<footer id="footer">
            <h3><?php echo $mainText?></h3>
            <h5><?php echo $subtTitle?></h5>
            <p><?php echo $paragraphText?></p>

            <form method="post" action="subscribe.php" class="input-group mb-3 gridShow">
                <!--Need to work here for Subscription-->
                <input type="email" name='email' class="form-control" placeholder="Email" aria-label="Recipient's email" aria-describedby="basic-addon2" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="submit" name='submit'>Subsribe</button>
                </div>
            </form>

            <ul>
                <?php
                $query  = "SELECT * FROM pages";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    $pages = $row['pageName'];
                    $url = $row['pageUrl'];
                    echo '<li><a href="'.$url.'">'.$pages.'</a></li>';
                }
                ?>
            </ul>
        </footer>
        <script type='module' src='assets/js/script.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>
</html>