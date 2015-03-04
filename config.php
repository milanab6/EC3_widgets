<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$pages = array(
   "index.php" => array (
      "title" => "Home",
	  "image" => "monday.jpg",
	  "showrandom" => true	  
	  ),
   "projects.php" => array (
      "title" => "Projects",
	  "image" => "tuesday.jpg",
	  "showrandom" => true	
	  ),
   "about.php" => array (
      "title" => "About",
	  "image" => "thursday.jpg",
	  "showrandom" => false	
	  ),
   "guestbook.php" => array (
      "title" => "Guestbook",
	  "image" => "saturday.jpg",
	  "showrandom" => false	
	  ),
   "imprint.php" => array (
      "title" => "Imprint",
	  "image" => "sunday.jpg",
	  "showrandom" => false	
	  )
   );

$title = $pages[THIS_PAGE]["title"];
$backgroundimage = $pages[THIS_PAGE]["image"];
$showrandom = $pages[THIS_PAGE]["showrandom"];

function makeLinks($array)
{
	$myreturn = "";
	foreach($array AS $url => $page)
	{
		$pagetitle = $page["title"];
		if ($url == THIS_PAGE)
		{
			$myreturn = $myreturn . "<a href=\"$url\" style=\"color:white\">$pagetitle</a>";
		}
		else
		{
			$myreturn = $myreturn . "<a href=\"$url\">$pagetitle</a>";
		}
	}
	return $myreturn;
}

#<a href="index.php">Home</a> 
#<a href="about.php">About</a> 
#<a href="projects.php">Projects</a> 
#<a href="guestbook.php">Guestbook</a> 
#<a href="imprint.php">Imprint</a>
?>