
<html>
<head>
    <title> Search records</title>
         <link rel="stylesheet" type="text/css" href="style.css">

    </head>
<body>

       <form action="search.php" method="GET">
           
           
            <marquee>GOVERNMENT MIDDLE SCHOOL FRASTHAR BARAMULLA</marquee>
        <div id="header">STUDENT MANAGEMENT SYSTEM
       </div>
       
       <center>SEARCH HERE:<input type="=text" name="search">
                        <input type="submit" name="submit" value="REG"></center>
        
       
     
    
     
       
       
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    
    
    
      
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           

    
    <?php
        
        
       include('connection.php'); 
      if(isset($_GET['submit']))
          
      {
          $search_r=$_GET['search'];
          
          
          $search_q="SELECT * FROM `u_reg` WHERE sname='$search_r' OR sro='$search_r'";
          
         $srun=mysqli_query($con,$search_q);
          $data=mysqli_num_rows($srun);
          if($data >0)
          {
            
              ?>
           
             <table width="50%" align="center"> 
        
          <tr>
        <th align="center" bgcolor="green" colspan="6">
            <h1>CHECK YOUR DETAILS</h1>
              </th>
            </tr>
            
        
        
        <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PARENTAGE</th>
                <th>School Name</th>
                <th>ROLLNO</th>
                <th>CLASS</th>
                
        
        </tr>
           
           
           
           <?php
              
                
          }

          else
          {
              echo"No results found";
          }
          
          
         
          
           
           
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          while($srow=mysqli_fetch_assoc($srun))
          {
                             $search_id      =$srow['id'];
                             $search_sname   =$srow['sname'];
                            $search_fname    =$srow['fname'];
                            $search_skname   =$srow['skname'];
                            $search_roll     =$srow['sro'];
                            $search_class    =$srow['class'];
              
              
              ?>
        
    
         <tr bgcolor="C5710D" align="center">
             <th>      <?php echo $search_id;?>     </th>
           <th>       <?php echo $search_sname;?>     </th> 
            
            <th>      <?php echo $search_fname;?>     </th>
            
            <th>      <?php echo $search_skname;?>    </th>
            
            <th>      <?php echo $search_roll;?>    </th> 
            
            <th>      <?php echo $search_class;?>      </th>
            
            
        </tr>
        
        
        
        
        
        
              
        <?php  }
          
          
          
      }?>
      
            
        </table>
        </form>
      <div id="footer">Copyright © 2019 Student Management System of Kashmir All Rights Reserved<br>Developed and Designed By zeeshan Ahmad</div>  
</body>
</html>