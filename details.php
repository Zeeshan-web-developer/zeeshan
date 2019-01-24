<html>
    <head>
        <title>Details </title>
    </head>
    
    
    
         <body>

       
    <table align="center" width="1000px" border="5px">
        
        
        <tr>
        <th align="center" bgcolor="green" colspan="6"><h1>CHECK YOUR DETAILS</h1></th>
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



        include('connection.php');
       $record_d=$_GET['details']; //we store id in detsils above 
        
        $query="SELECT *from u_reg where id='$record_d'";
        
        
        $result_details=mysqli_query($con,$query);
        
        while($row_details=mysqli_fetch_array($result_details))
        
        {
            $id_d = $row_details['id'];
           
            $sname_d = $row_details['sname'];
            
            $fname_d = $row_details['fname'];
            
            $skname_d = $row_details['skname'];
            
            $sro_d = $row_details['sro'];
            
            $class_d = $row_details['class'];
    ?>

        
      
        
        
    
        
        <tr bgcolor="C5710D" align="center">
           <th>       <?php echo $id_d;?>     </th> 
            
            <th>      <?php echo $sname_d;?>     </th>
            
            <th>      <?php echo $fname_d;?>    </th>
            
            <th>      <?php echo $skname_d;?>    </th> 
            
            <th>      <?php echo $sro_d;?>      </th>
            
            <th>      <?php echo $class_d;?>     </th>
        </tr>
     <?php  } ?>
        
    
    </table>
</body>
</html>