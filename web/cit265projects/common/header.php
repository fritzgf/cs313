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

        <?php

// if (isset($_SESSION['loggedin']) != TRUE){
//   echo ' <a href="/acme/accounts/?action=login"> <figure id="account-img"> 
//     <img src= "/acme/images/site/account.gif" alt="Acme account" title= " account for acme site" id="account">
//    <figcaption id="account-text">  My Account </figcaption>
//    </figure>   
// </a>';
   
 
// } 
 
     
// else{
//     echo '<a class="logoutBnt" href="/acme/accounts/?action=log"> Logout</a>';
// }
 
//     ?>  