<?php

include('connection.php');

$update_record=$_GET['edit'];
    
   $sql="SELECT * FROM `u_reg` WHERE id='$update_record'";
$run=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($run))
{
    
             $id=$row['id'];
            $sname=$row['sname'];
            $fname=$row['fname'];
            $skname=$row['skname'];
            $sro=$row['sro'];
            $class=$row['class'];
    
    
           
}














?>


           <html>
          <head>
             <title>
       update student record
       </title>
    </head>

    
    
               <body>
    
            <form method="POST" action='update.php?edit_r=<?php echo $id;?>'>
                
        <table width="50%" align="center" border="2">
               
            
            
            
            <tr>
            <td bgcolor="pink" align="center" colspan="2">
                Update student details
                </td>
            </tr> 
                
            
           
            <tr>
            
                <td>student's name</td>
                <td><input type="text" name="sname1" value='<?php echo  $sname;?>'>
                  
                </td>
            </tr>
            
              
            
            <tr>
            <td>father's name</td>
                   <td><input type="text" name="fname1" value='<?php echo  $fname;?>'>
                       
                
                </td>
        </tr>
             
            
            
           <tr>
            <td>school's name</td>
                   <td><input type="text" name="skname1" value='<?php echo  $skname;?>'>
                       
                
                </td>
        </tr>
            
            
            
             <tr>
            <td>Roll no</td>
                   <td><input type="number" name="sro1" value='<?php echo  $sro;?>'>
                       
                
                </td>
        </tr>
            
            
        <tr>  <td>class</td>
                <td>
                
                    
                    <select name='class1'>
                  <option value='<?php echo  $class;?>'>
                    <?php echo  $class;?></option>  
                    <option value='10th'>10th</option>
                    <option value='9th'>9th</option>
                    
                    
                    
                    </select>
                </td>
            
            </tr>            
            
            
            <tr>
            <td colspan="2" align="center" bgcolor="black"><input type="submit" value="update" name="update">
                </td>
            </tr>
            
                </table>
        
        
        
        </form>
    
    
    
    
    </body>
    
</html>





<?php

if(isset($_POST['update']))
{
    
$edit_id=$_GET['edit_r']; //create a get varable in form tag
$ssname=$_POST['sname1']; //receiving values  from output page and store in varaibles of different  name
$ffname=$_POST['fname1'];
$sskname=$_POST['skname1'];
$ssro=$_POST['sro1'];
$cclass=$_POST['class1'];
    
echo $edit_id;
    $sql="UPDATE u_reg SET sname='$ssname',fname='$ffname',
    skname='$sskname',sro='$ssro',class='$cclass'WHERE id='$edit_id'";
      
               echo $edit_id;
    $run=mysqli_query($con,$sql);
    
    if($run)
    
    {
        echo"<script>
     window.open('output.php?updated=Record has ben updated sucessfully','_self')
     </script>";
        
        echo"updated";
    }
}

?>













