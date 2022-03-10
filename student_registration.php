
<!DOCTYPE HTML>
<html>
<head>
<center><div id="frmRegistration">
<form class="form-horizontal" action="student_connect.php" method="POST" enctype="multipart/form-data">
	<h1>Student Registration</h1>
	<div class="form-group">
    <label>Full Name:</label>
    <div class="col-sm-4">
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Fullname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="studentID">StudentID:</label>
    <div class="col-sm-6">
      <input type="text" name="studentID" class="form-control" id="studentID" placeholder="Enter Your ID">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobile">Mobile:</label>
    <div class="col-sm-6">
      <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile No">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="course">Course:</label>
    <div class="col-sm-6">
    <input type="text" name="course" class="form-control" id="course" placeholder="Enter Your Course">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
    </div>
   </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password"> Confirm Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Enter  Confirm password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="image"> Image:</label>
    <div class="col-sm-6"> 
      <input type="file" name="image" class="form-control" id="image" placeholder="Upload Image">
      <input type="submit" name="upload" value="Upload">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div><br><br></center>
</form>
</div>
</body>
</html>