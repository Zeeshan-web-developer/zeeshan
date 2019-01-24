<?php

include('connection.php');

$delete_record=$_GET['sid'];  //here we store id in another varaible  this sid we get from page


$sql="DELETE FROM `u_reg` WHERE id='$delete_record'";

$res=mysqli_query($con,$sql);


if($res)
{
    echo"<script>
     window.open('output.php?deleted=Record has ben deleted sucessfully','_self')
     </script>";
}
else
{
    echo"not deleted".mysqli_connect_error();
}

?>