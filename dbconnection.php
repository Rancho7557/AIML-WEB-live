<?php
      $con = mysqli_connect('localhost','db_user','password','db_name','3306');
      if(!$con){
          ?>

          <script type="text/javascript">
              alert('Error: Unable to connect to the database');
              </script>
              <?php
      }
      
      if(isset($_POST['submit'])){
         
         $Uname = $_POST['fname'];
         $Umail = $_POST['mail'];
         $Ucontact = $_POST['userno'];
         $Ucity = $_POST['usercity'];
         
		$insertquery = " insert into userdetails(Uname,Umail,Ucontact,Ucity) values ('$Uname','$Umail','$Ucontact','$Ucity') "; 
           
		$iquery = mysqli_query($con, $insertquery);

          if($iquery){
              ?>
              <script type="text/javascript">
                  alert("User Data Inserted Succesfully....  Thank You!!");
                  windows.location.replace("index.php");
                  </script>
              <?php
          }else{
              ?>
              <script type="text/javascript">
                  alert("Please try again!");
              </script>
                  <?php

          }
         }
    ?>