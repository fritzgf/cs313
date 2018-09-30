<?php
// There are different ways to put the "active" class on the correct
// nav item. One way is to use JavaScript to find the item after the page
// has loaded, and add the class. Another way is to add a class in to the
// HTML that is generated. This will use the second approach.
// From StackOverflow: http://stackoverflow.com/a/12201089/1932766
// The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
// now $file will contain something like "about" and we can check later
// for this variable and use it to include the "active" class on the appropriate
// link item.
?>

<nav class="page-nav">
	<ul class="UlClass">

<?php
// There are more clever ways to do this, but as we are iterating through
// each item in the list, we check to see if the filename is equal to the
// current one, and if so, we echo "active" into the class tag.
// The active class will be used by the CSS to make that link look different.
// Another way to use this same approach, but remove some of the redundancy
// would be to add each page (including the page name, and the text for the
// menu) into an array. Then here, we could loop over that array and check
// the page name from that iteration in the loop vs the php filename.
?>
<ul class="flexlist">
                
		<li class="nav-item <?php if ($file === 'home') echo 'active' ?>">
			<a href="home.php">Home</a>
		</li>

		<li class="nav-item <?php if ($file === 'comingsoon') echo 'active' ?>">
			<a href="comingsoon.php">Project</a>
		</li>
            </ul>

  


	
