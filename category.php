<?php
include 'header.php';
include 'connect.php';
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" />
        Category description: <textarea name="cat_description" /></textarea>
        <input type="submit" value="Add category" />
     </form>';
}
else
{
    $sql = "INSERT INTO category(cat_name, cat_des)
       VALUES('" . $_POST['cat_name'] . "',
             '" . $_POST['cat_description'] . "')";
    $result = mysqli_query($db,$sql);

    if(!$result)
    {
        echo 'Error' . mysqli_connect_error();
    }
    else
    {
        echo 'New category successfully added.';
        header('location:create_cat.php');
    }
}
include 'footer.php';
?>