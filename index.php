<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>


<div class="container" style="margin-buttom:280px;">
    <h3 style="text-align:center; margin-top:20px;">This system allows all registered users to vote for their favorite POLITICAL PARTY 
     In order to make a vote you have to register first and then login.</h3>
   
</div><center>
<div class="spinner-grow text-muted"></div>
<div class="spinner-grow text-primary"></div>
<div class="spinner-grow text-success"></div>
<div class="spinner-grow text-info"></div>
<div class="spinner-grow text-warning"></div>
<div class="spinner-grow text-danger"></div>
<div class="spinner-grow text-secondary"></div>
<div class="spinner-grow text-dark"></div>
<div class="spinner-grow text-light"></div></center>
<br><center>
<canvas id="canvas" width="200" height="200"
style="background-color:white;">
</canvas>
</center>
<br>
<?php include "footer.php";?> 
