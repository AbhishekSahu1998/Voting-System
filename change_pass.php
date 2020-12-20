<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br><center>
<div class="card ">
    <div class="card-header">
    <h3>Change Password</h3>
    </div>
    <div class="card-body">
    
             <?php global $nam; echo $nam;?>
             <?php global $error; echo $error;?> 
             <form action="change_pass_action.php" method="post" id="myform"> 
             <table class="table-dark" style="margin:2px;">
             <tr><td><label for="cpassword">Current Password:</label></td><td><input type="password" name="cpassword" value="" ></td></tr>
             <tr><td><label for="npassword">New Password:</label></td><td><input type="password" name="npassword" value="" ></td></tr>
             <tr><td><label for="cnpassword">Confirm New Password:</label></td><td><input type="password" name="cnpassword" value="" ></td></tr>
             <tr><td></td><td><input type="submit" name="cpass" value="UPDATE" ></td></tr>
             </div>

             </table> 
             </form>            
            
    
           
    </div>
</div>











<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<?php include "footer.php";?>
