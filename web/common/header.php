<?php

if (isset($_SESSION['loggedin']) != TRUE){
  echo ' <a href="./../view/login.php"> <figure id="account-img" id="account-text" > 
     Login  
</a>';
   
 
} 
 
     
else{
    echo '<a class="logoutBnt" href="./../view/interviewq.php"> Logout</a>';
}
 
    ?>        
