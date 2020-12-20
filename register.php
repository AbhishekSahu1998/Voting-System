<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="3">
<div class="card">
<div class="card-header">
<legend> <h3> Register </h3></legend>
  </div>
 <div class="card-body">
 <form action= "reg_action.php" method= "post" id="myform" >
<label for="firstname">Firstname: <input type="text" name="firstname" value="" placeholder="Enter FirstName"required /></label> 
<br>
<br>
<label for="lastname">Lastname: <input type="text" name="lastname" placeholder="Enter LastName" value="" required /></label>
<br>
<br>
<label for="username">Username: </label>
<input type="text" name="username" value="" placeholder="Enter UserName" required/>
<br>
<br>
<label for="password">Password: </label>
<input type="password" name="password" value=""  placeholder="Enter Password" required/>
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<button type="submit" name="submit" value="Next"> <i class="fas fa-registered">Click Register</i></button>
</form>
 </div>
</div></font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>
<?php include "footer.php" ;?>
