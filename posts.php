<?php
include 'connect.php';
include 'header.php';
    session_start();

	$sql="SELECT post,pdate FROM discussion WHERE cat_id =".$_GET['cat_id'];

	$result=mysqli_query($db,$sql);
           $startTime = date("Y-m-d H:i:s");

	  if(!mysqli_num_rows($result) )
    {
        echo '';
    }

	else{ 
		   while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">';
                            echo '<p>' . $row['post'] . '</p>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                        echo date('d-m-Y', strtotime($row['pdate']));
                         echo '</td>';
                    echo '</tr>';
                }
	}
    	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		echo '<form method="post" action="" >
					<textarea rows="10" cols="100" name="content"></textarea>
					<input type="submit" value="Add Comment">
				</form>
				';
	}

	else{
		$sql="INSERT INTO 
		discussion(post,pdate,cat_id)
		VALUES('".$_POST['content']."','".$startTime."','" . $_GET['cat_id'] . "')";
        $result = mysqli_query($db,$sql);

        if(!$result)
        {
            echo 'Something went wrong while adding your response. Please try again later.';
        }
        else
        {
            header("location:posts.php?cat_id=".$_GET['cat_id']."");
        }
	}
?>