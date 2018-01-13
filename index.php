<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Rising Institute</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding-top: 15px">
  <div class="jumbotron">
    <h1 style="font-family: Acens">THE RISING INSTITUTE</h1>
  </div>
  <div  style="background-color: white">
    <div class="row">
      <div class="col-sm-6">
        <img class="img-responsive img-rounded" src="im.jpg" alt="logo" width="460" height="345" style="margin-left:0;padding-left:0"> 
       </div>

       <article> </article>
       <div id="form">
	<div class="col-sm-6 text-center">
        <div class="radio-inline">
                    <form class="form-horizontal" style="height:200%;" method="post" action="signin.php">
          <label><input type="radio" name="check" id="stu_radio" value="student">Student</label>
        </div>
        <div class="radio-inline">
          <label><input type="radio" name="check" id="fac_radio" value="faculty">Faculty</label>
        </div>
        <div class="radio-inline">
          <label><input type="radio" name="check" id="adm_radio" value="faculty">Adminisrator</label>
        </div>
  <div class="form-group" style="padding-top:10px">
    <label class="control-label col-sm-2" for="email">User ID:</label>
    <div class="col-sm-10">
      <input type="user_id" class="form-control" id="user_id" placeholder="Enter user id" name="uname">
    </div>
  </div>
  <div class="form-group"><br><br>
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control col-sm-10" id="pwd" placeholder="Enter password" name="pword">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10"><br>
      <button type="submit" class="btn btn-default" id="login">Login</button>
      
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
    	<br>
    	<label>OR</label>
    	<br>
    	<a href="signup.html">
      <button type="button" class="btn btn-default" id="signup" href="signup.html">Sign Up</button>
      </a>
    </div>
  </div>
       </div>






       </div>

     </div>
   </div>
  
</div>

</body>
</html>
