<ul class="flexlist">
                <li><a href="home.php" title="Acme">Home</a></li>
                <li><a href="interviewq.php" title="interview questions">Interview Question</a> </li>
                <!-- <li><a href="jobdevelopers.php" title="job developers">Job Developers</a></li> -->
                <?php

if(isset($_SESSION["userData"]) != TRUE){
   echo '<a class="ask-question" href="./../view/login.php">login </a>';

} 
else{
    include '../view/logout.php';
}
?>
           
            </ul>

  