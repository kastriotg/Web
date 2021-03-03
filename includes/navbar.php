<?php
    ob_start();
    session_start();
    $firstname = null;
    $lastname = null;
    if(isset($_SESSION['username'])){
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];
    }
    include 'database.php';
?>
<header>
    <nav>
        <?php
            $query  = "SELECT logo FROM homepage";
            $result = mysqli_query($connection,$query);
            $logo = mysqli_fetch_row($result);
            echo '<h1>'.$logo[0].'</h1>';
        ?>
        <ul id="nav">
            <?php
                $query  = "SELECT * FROM pages";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    $pages = $row['pageName'];
                    $url = $row['pageUrl'];

             ?>
            <li>
                <a class="<?php if($url === $activePage){?> homered <?php }?> " href="<?php echo $url ?>"> <?php echo $pages ?>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>

        <?php if($firstname === null){ ?>
        <ul id="users">
            <li><a href="login.php" id="logins">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
        <?php }else{ ?>
            <div class="dropdown"  id='users'>
                <button onclick="myFunction()" class="dropBtn"><?php echo $firstname . ' ' . $lastname ?> <i class="fas fa-arrow-down"></i></button>

                <ul id="myDropdown" class="dropdown-content">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                    <li>
                        <a href="logout.php" id='logout'><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </nav>
</header>
        <div id='orders' class="dropUp">
            <ul class="dropUp-content">
                <li>Burger</li>
            </ul>
            <button class="dropUpbtn"><i class="fas fa-shopping-cart"></i></button>
        </div>

        <div class="divider"></div>