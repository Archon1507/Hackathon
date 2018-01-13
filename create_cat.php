<?php
include 'connect.php';
include 'header.php';
         
$sql = "SELECT
            cat_id,
            cat_name,
            cat_des
        FROM
            category";
 
$result = mysqli_query($db,$sql);
 

    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>View Posts</th>
              </tr>'; 
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<h3><a href="posts.php?cat_id=' .$row['cat_id'].'">' . $row['cat_name'] . '</a></h3>' . $row['cat_des'];
                echo '</td>';
                echo '<td class="rightpart">';
                            echo '<a href="posts.php?cat_id='.$row['cat_id'].'">Posts</a>';
                echo '</td>';
            echo '</tr>';
        }
     }
 
include 'footer.php';
?>