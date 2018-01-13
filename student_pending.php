<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pending Assignments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
    .navbar{
      position: sticky;
    }
  </style>
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" >The Rising Institute</div>
    </div>
    <ul class="nav navbar-nav">
      <li style="padding-left: 20px"><a href="student_submission.html">My Submissions</a></li>
      <li class="active"><a href="#">Pending projects</a></li>
      <li><a href="#">Discussion Forum</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="padding-right: 10px"><a href="index.html"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2 class="text-center">Pending Assignment</h2>  

  <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-center">Subject</th>
        <th class="text-center">Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">Physics</td>
        <td class="text-center"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">View</button></td>       
      </tr>
    </tbody>
  </table>

<form action="" method="POST" enctype="multipart/form-data">

  <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="topic">Physics</h4>
          </div>
          <div class="modal-body">
            <p id="dsc">This is your Assignment.</p>
        
          </div>
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-2">
                      <input type="file" class="btn btn-default" name="my_file">

                  </div>
                  
              </div>
              
              <button type="submit" class="btn btn-default" id="sub">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php
   if(isset($_FILES['my_file'])){

      $errors= array();
      $file_name = $_FILES['my_file']['name'];
      $file_size =$_FILES['my_file']['size'];
      $file_tmp =$_FILES['my_file']['tmp_name'];
      $file_type=$_FILES['my_file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['my_file']['name'])));
      
      $expensions= array("txt","pdf","c");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size less be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
      }else{
         print_r($errors);
      }
   }

?>
</body>
</html>
