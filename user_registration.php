<html>
   <head>
    <title>
       student registration form
       </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    
    <body>
    
            <form method="POST" action="user_registration.php">
                
              <marquee>GOVERNMENT MIDDLE SCHOOL FRASTHAR BARAMULLA</marquee>
        <div id="header">STUDENT MANAGEMENT SYSTEM
       </div>
       
   
        
       
     
    
     
       
       
       <div id="navigation">
       
      <font size="4.5px"> <nav>
							    <a href="index.php">Home</a>
							     <a href="user_registration.php">Student Register Zone</a>
							    <a href="#">Examinations</a>
							    <a href="#">Courses</a>
                                 <a href="syllbus_and_datesheetes.php">Syllbus</a>
           
							 <a href="Books">Study Material</a>
    
                              <a href="aboutus.php">About US</a>
                             <a href="adminpage.php">Teacher Login</a>
          
							 </nav>
          </font>
    
    
       </div>
       
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
        <table width="50%" align="center" border="2">
               
            
            
            
            <tr>
            <td bgcolor="pink" align="center" colspan="2">
                student registration form
                </td>
            </tr> 
                
            
           
            <tr>
            
                <td>student's name</td>
                <td><input type="text" name="sname">
                  <?php echo $_GET[sname];?>  
                </td>
                
            </tr>
            
              
            
            <tr>
            <td>father's name</td>
                   <td><input type="text" name="fname">
                    <?php echo $_GET[fname];?>    
                
                </td>
        </tr>
             
            
            
           <tr>
            <td>school's name</td>
                   <td><input type="text" name="skname">
                    <?php echo $_GET[skname];?>    
                
                </td>
        </tr>
            
            
            
             <tr>
            <td>Roll no</td>
                   <td><input type="number" name="sro">
                    <?php echo $_GET[sro];?>    
                
                </td>
        </tr>
            
            
            
    
           
            
            
            
            
            
            
            
            
            
            
            
            
            <tr>
            
            <td>class</td>
                <td>
                <select name='class'>
                  <option value='null'>select class</option>  
                    <option value='10th'>NURSARY</option>
                    <option value='9th'>LKG</option>
                    <option value='10th'>UKG</option>
                    <option value='9th'>IST</option>
                    <option value='10th'>2ND</option>
                    <option value='9th'>3RD</option>
                    <option value='10th'>4TH</option>
                    <option value='9th'>5TH</option>
                    <option value='10th'>6th</option>
                    <option value='9th'>7th</option>
                    <option value='9th'>8th</option>
                     <option value='9th'>9th</option>
                    <option value='10th'>10th</option>
                   
                    
                    
                    
                    </select>
                    
                    <?php echo $_GET['class'];?>
                </td>
            
            </tr>   
            
            
            <tr>
            <td colspan="2" align="center" bgcolor="black">
                <input type="submit" value="submit" name="submit">
                </td>
            </tr>
            
                </table>
        
        
        
        </form>
    
    
                                                                                    
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


</html>







<?php

include('connection.php');    //for connection

$sname=$_POST['sname']; //receiving values and store in varaibles
$fname=$_POST['fname'];
$skname=$_POST['skname'];
$sro=$_POST['sro'];
$class=$_POST['class'];




if(isset($_POST['submit']))
{

    
    if($sname=='' )
    
{
    
 echo
     "<script>
     window.open('user_registration.php?sname=Name is required','_self')
     </script>";
   
   exit();
    
    }
    
    
    
    if($fname=='' )
    
{
    
 echo
     "<script>
     window.open('user_registration.php?fname=father is required','_self')
     </script>";
   
   exit();
    
    }
    
    
      if($skname=='' )
    
{
    
 echo
     "<script>
     window.open('user_registration.php?skname=school name is required','_self')
     </script>";
   
   exit();
    
    }



     if($sro=='' )
    
{
    
 echo
     "<script>
     window.open('user_registration.php?sro=roll no. is required','_self')
     </script>";
   
   exit();
    
    }
    
    
    if($class=='null' )
    
{
    
 echo
     "<script>
     window.open('user_registration.php?class=class is required','_self')
     </script>";
   
   exit();
    
    }
    
     
   
    
   $sql="insert into u_reg(sname,fname,skname,sro,class)values('$sname','$fname','$skname','$sro','$class')"; 
    
    
    $run=mysqli_query($con,$sql);
    
    if($run)
    {
        echo"<font size='20'color='blue' face='cursive'>Data inserted Sucessfully";
        
    
    }
    else
    {
        echo"Insert query not running";
    }
    
}

?>

























