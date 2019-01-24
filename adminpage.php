<?php

session_start();
?>




<html>
    <head><title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
    
         <body>
             
             
               <form action="adminpage.php" method="post">
        
        <table align="center" border="1px">
            
            
            
            
            <tr>
            
            <td colspan="2" align="center"><h2>Admin Dashboard</h2></td>
            </tr>
            
            <div>
            <tr>
                <td>Username</td>
               <td> <input type="text" name="username" placeholder="enter Email or phone"></td>
            </tr>
            
            <tr><td>password</td>         
                <td><input type="password" name="password" placeholder="enter Email or phone"></td>
          </tr>
            </div>
        <tr>
            
            <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            
            </tr>
            
        
        </table>
        
        <center><?php echo $_GET['msg'] ?></center>  <!--session msg-->
        
        <?php
                 
                   include('connection.php');
                   if(isset($_POST['login']))
                   {

                   $admin_username=$_SESSION['admin_username']=$_POST['username'];
                  $admin_password=$_POST['password'];
                       
                       
                          //session varaible
                       
                       
                    $sql="SELECT * FROM admin_table WHERE username='$admin_username' AND password='$admin_password'";
                        
                   $run=mysqli_query($con,$sql);
                       $resu=mysqli_num_rows($run);
                           
                        
                      if($resu>0)
                           
                       {
                          
                          
                       echo"<script>
                       window.open('output.php?logged=LOgin sucessfully','_self')
                       </script>";
                       
                       
                       }
                       
                       else
                       {
                       echo"<script>
                        alert('password or Username Not match')
                        </script>";
                           
                       }
                       
                   }
                   
                   
                   
                   
                   
                   ?>
        
        
        
        
        
        
        </form>
    
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>