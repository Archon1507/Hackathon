<?php	
	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		echo '<form method="post" action="" >
					<textarea rows="10" cols="100" name="content"></textarea>
					<input type="submit" value="Add Reply">
				</form>
				';
	}

	else{
		$sql="INSERT INTO 
		posts(post_content,post_date,)
		VALUES('".$_POST['content']."',NOW())";
        $result = mysqli_query($db,$sql);

        if(!$result)
        {
            echo 'Something went wrong while adding reply. Please try again later.';
        }
        else
        {
            echo 'Your reply has been added';
        }
	}
	?>