<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>


<div class="container" style="margin-buttom:280px;">
    <legend style="text-align:center; margin-top:10px;"><pre>This system allows all registered users to vote for their favorite POLITICAL PARTY 
     In order to make a vote you have to register first and then login.</pre></legend>
   
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include "footer.php";?> 
