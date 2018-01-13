<?php
    session_start();
    include 'connect.php';
    
      $username=$_SESSION['username'];
      $topic=$_POST['topic'];
      $cls=$_POST['cls'];
      $des=$_POST['desc'];
      $sql="insert into questions (cls, topic, dsc) values ('$cls','$topic','$des')";
      $result=mysqli_query($db,$sql);
      if($result){
        echo "Your response has been added";
        header('location:teacher_dos.php');
      }
      else{
        echo "Not Successful";
      }

  ?>