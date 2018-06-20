<ul class="flexlist">
                <li><a href="home.php" title="Acme">Home</a></li>
                <li><a href="interviewq.php" title="interview questions">Interview Question</a> </li>
                <!-- <li><a href="jobdevelopers.php" title="job developers">Job Developers</a></li> -->
                <li>  <?php

if(isset($_SESSION["userData"]) == TRUE){
    include '../view/logout.php';

} else{
    include '../view/login.php';
}
?>
</li>
           
            </ul>