<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #add {
    position: fixed;
    bottom: 10px;
    right: 20px;
    border-radius: 60%;
  }

#ta1 #ta2{
  position:relative;
margin-left: 13px;
  max-width: 96%;
}
.navbar{
  position: sticky;
}

</style>
</head>
<body>
<?php
  session_start();
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" >The Rising Institute</div>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="padding-left: 20px"><a href="#">Details of Submission</a></li>
      <li><a href="#">Discussion Forum</a>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="padding-right: 10px"><a href="index.html"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2 class="text-center">Submitted Assignments</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Student's Name</th>
        <th class="text-center">Assignment Submitted</th>
        <th class="text-center">Date of submission</th>
        <th class="text-center">Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">232</td>
        <td class="text-center">akshay</td>
          <td class="text-center"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_see">View</button></td>
        </td>
        <td class="text-center">kdsfj</td>
               
      </tr>
    </tbody>
  </table>
</div>



<form id="form1" action="assig.php" method="Post">

  <div id="myModal_add" class="modal fade" role="dialog">
    <div class="modal-dialog">
      
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Assignment</h4>
       </div>
        
        <div class="modal-body">   
          
          <div class="form-group" style="padding-bottom: 10px">
    <label class="control-label col-sm-2" >Class:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cls" placeholder="Enter class for which assignment is intended" name="cls">
    </div>
   </div>
    <div class="form-group" style="padding-bottom: 10px">
    <label class="control-label col-sm-2" >Topic:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="topic" placeholder="Enter topic of assignment" name="topic">
    </div>
   </div>
   <textarea id="ta1" rows="15" cols="75"  wrap="soft" name="desc"></textarea>


      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-default"  >Post Assignment</button>
      </div>
    </div>

  </div>
</div>

</form>


<form id="form2" action="" method="Post">
<div id="myModal_see" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Assignment</h4>
      </div>
      <div class="modal-body">
        
   <div class="form-group" style="padding-bottom: 10px">
    <label class="control-label col-sm-2" >Topic:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="topic" placeholder="Enter topic of assignment">
    </div>
   </div>

   <textarea id="ta1" rows="15" cols="75" readonly wrap="soft"></textarea>


      </div>
      <div class="modal-footer">
<div class="row">
<div class="col-sm-2">
  <label>Grade:</label>
</div>
<div class="col-sm-2">
        <select class="form-control" id="cls">
    <option>A+</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
    <option>E</option>
  </select>
</div>
</div>
        <button type="submit" class="btn btn-default"  id="submit">Assign Grade</button>
        <button type="file" class="btn btn-default"  id="upload">Download Assignment</button>
      
      </div>
    </div>

  </div>
</div>
</form>


<a href="#" id="add" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_add">
    <span class="glyphicon glyphicon-plus"></span> Add Assignment
</a>

</body>
</html>
