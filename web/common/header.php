<?php

if (isset($_SESSION['loggedin']) != TRUE){
  echo ' <a href="./../view/login.php"> <figure id="account-img"> 
    <img src= "/acme/images/site/account.gif" alt="Acme account" title= " account for acme site" id="account">
   <figcaption id="account-text">  Login </figcaption>
   </figure>   
</a>';
   
 
} 
 
     
else{
    echo '<a class="logoutBnt" href="./../view/interviewq.php"> Logout</a>';
}
 
    ?>        
