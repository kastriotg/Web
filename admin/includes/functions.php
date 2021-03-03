<?php

function show_gallery()
{
    global $connection;
    $query = "SELECT * FROM gallery";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<img class="fototGallery" src="../photosArbnori/' . $row['galleryPhotos'] . '" alt="' . $row['photoAlt'] . '" width="200px">';

    }
}

function show_pages()
{
    global $connection;
    $query = "SELECT * FROM pages";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $pageId = $row['id'];
        $pages = $row['pageName'];
        echo '<tr>
                 <td>' . $pages . '</td>
                 <td><a href="admin_pages.php?delete=' . $pageId . '">Delete</a></td>
              </tr>';
    }
}

function delete_page()
{
    global $connection;
    if (isset($_GET[delete])) {
        $deleteId = $_GET[delete];
        $query = "DELETE FROM pages WHERE id = {$deleteId}";
        $delete = mysqli_query($connection, $query);
        header("Location: admin_pages.php");
    }
}
