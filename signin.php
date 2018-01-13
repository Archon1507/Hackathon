<?php
include 'connect.php';
 session_start();
 

    $errors = array(); 
        $uname= $_POST['uname'];
        $table= $_POST['check'];
        if(!isset($_POST['uname'])){
            $errors[] = 'The username field must not be empty.';
        }
         
        if(!isset($_POST['pword'])){
            $errors[] = 'The password field must not be empty.';
        }
         
        if(!empty($errors)){
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
            echo '<ul>';
            foreach($errors as $key => $value){
                echo '<li>' . $value . '</li>'; 
            }
            echo '</ul>';
        }
        else{
            if($_POST['check']=="student"){
                        $sql="select username from student where username='".$_POST['uname']."' and password='" .$_POST['pword']. "'";
            }
            if($_POST['check']=="faculty"){
                $sql="select username from faculty where username='".$_POST['uname']."' and password='" .$_POST['pword']. "'";

            }
                $result = mysqli_query(
                    $db,$sql);
                if(!$result){
                    echo "Incorrect username or password";
                }

                 if(mysqli_num_rows($result) == 0)
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                else
                {
                    $_SESSION['signed_in'] = true;
                     
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION['userid']  = $row['id'];
                        $_SESSION['username']  = $row['username'];
                    }
                    if($_POST['check']=="student"){
                        header('location:student_pen.php');
                    }
                    
                    if($_POST['check']=="faculty"){
                        header('location:teacher_dos.php');
                    }
                }
            }

?>