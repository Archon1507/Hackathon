<?php
	  $db=mysqli_connect('localhost','root','','raikiri');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }     
            $name=$_POST['tname'];
      	$uname=$_POST['tuname'];
      	$pword=$_POST['tpword'];
      	$sql="insert into faculty (username,password,name) values('$uname','$pword','$name')";
      	$result=mysqli_query($db,$sql);
      	if($result){
	    			echo "njk";
	    		}
	    		else{
	    			echo 'still errror';
	    		}
      
?>