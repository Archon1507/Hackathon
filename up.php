<?php
	  $db=mysqli_connect('localhost','root','','raikiri');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }
      
      	$uname=$_POST['uname'];
      	$pword=$_POST['pword'];
      	$class=$_POST['cls'];
      	$name=$_POST['name'];
      	$rollno=$_POST['rnumber'];
      	$sql="insert into student (username,password,name,class,rollno) values('$uname','$pword','$name','$class','$rollno')";
      	$result=mysqli_query($db,$sql);
      	if($result){
	    			header("location: student.php");
	    		}
	    		else{
	    			echo 'still errror';
	    		}
      
?>