<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<center style="color:blue;">
<h3> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h3>
<h3>Make a Vote </h3></center>
<center>
     <div class="card bg-danger text-white " style="width:30rem;>
         <div class="card-header">
        <h4>What is your favorite political party??</h4>
         </div>
         
         <div class="card-body bg-light" style="width:20rem; "> 
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<table class="table">
    <tbody>
        <tr>
            <td><input type="radio" name="lan" value="BJP"> BJP </td>
        </tr>
        <tr> <td><input type="radio" name="lan" value="CONGRESS"> CONGRESS </td>
        </tr>
        <tr><td><input type="radio" name="lan" value="AAP"> AAP </td></tr>
        <tr><td><input type="radio" name="lan" value="NOTA"> NOTA </td></tr>
        <tr><td><input type="radio" name="lan" value="NIRDLIY"> NIRDLIY </td></tr>
        <tr><td>
            <?php global $msg; echo $msg; ?>
            <?php global $error; echo $error; ?>
           <input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></td>
         </tr>
        </table>
        </form>
    </tbody>
     </div>
     </div>
     </center>