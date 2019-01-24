
  <?php

session_start();

if(!$_SESSION['admin_username'])

{
    
    header('location:adminpage.php?msg=U Must Login First.....!');
}
?>







<html>

<head><title>viewing the data</title>
    </head>

    <body>
        <a href="user_registration.php">INSERT YOUR DETAILS HERE</a>
       
        Welcome:<font color="blacl">
        <?php echo $_SESSION['admin_username'];?>
        </font>
       
        <a href="search.php">search YOUR DETAILS HERE</a>
        <a href="logout.php"><font size="5px" color="darkyellow">LOgout</font></a>
     <font color='blue' size='8'>
    <center><?php  echo $_GET['deleted']  ?></center> 
      <center><?php  echo $_GET['updated']  ?></center>
         <center><?php  echo $_GET['logged'] ?></center>
        
        </font>   
    <table align="center" width="1000px" border="5px">
        
        
        <tr>
        <th align="center" bgcolor="green" colspan="9"><h1>student records</h1></th>
        
        </tr>
        
        <tr bgcolor="C5710D" align="center">
        <th>Student id</th>
            <th>NAme</th>
            <th>Parentage</th>
            <th>School</th>
            <th>Rollno</th>
            <th>Class</th>
            
            <th>Delete</th>
            <th>Edit</th>
            <th>DEtails</th>
        </tr>
       
    
    
    
    
    
    
    
    
    <?php
    
    include('connection.php');             // including database connection file
  $sql="SELECT *FROM u_reg";

            $result=mysqli_query($con,$sql);  // runnning mysql query
        
            $res=mysqli_num_rows($result);   //  checking how many rows are in our table
                if($res<=0)
                {
             echo"<font size='20'color='blue' face='cursive'>No record in database</font>"; 
                    //checking if database has no record
                }
         while($row=mysqli_fetch_array($result))   // fetching data from databaae in array form



                
         {
              
            $id=$row['id'];
            $sname=$row['sname'];
            $fname=$row['fname'];
            $skname=$row['skname'];
            $sro=$row['sro'];
            $class=$row['class'];
           
    ?>
   <tr align="center"> 
    <td><?php echo  $id ?></td>
        <td><?php echo  $sname ?></td>         
        <td><?php echo  $fname ?></td>
         <td><?php echo $skname?></td>
        <td><?php echo  $sro ?></td>
        <td><?php echo  $class ?></td>
        <td>
            <a href='delete.php?sid=<?php echo $id?>'>DElete</a><!--simply storing student  id in sid and send to delete.php...-->
       </td>
       
       
       <td><a href='update.php?edit=<?php echo $id?>'>Edit</a></td>
       
       
       
       
       <td><a href='details.php?details=<?php echo $id?>'>Details</a></td>
    
    
    </tr>
        
    
       <?php   }  ?> 
        
        </table>
        
        
          </body>
</html>