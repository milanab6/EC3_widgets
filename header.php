<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php 
 include 'config.php';
 include 'random_rotate.php';
?>
<title><?=$title?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<!--[if IE ]><style type="text/css">
.title {
padding-top:112px;
}
</style>
<![endif]-->
</head>
<body>
<div id="all">
<div id="header">

<img src=<?=$backgroundimage?>></img>

<span style="float:right;margin-right:5px;display:inline;">
<!-- <a href="index.php">Home</a> 
<a href="about.php">About</a> 
<a href="projects.php">Projects</a> 
<a href="guestbook.php">Guestbook</a> 
<a href="imprint.php">Imprint</a> -->
<?=makelinks($pages)?>
<?php
if ($showrandom)
{
 $dogs[] = '<img src="images/Charles.jpg" />';
 $dogs[] = '<img src="images/boris.jpg" />';
 $dogs[] = '<img src="images/denis.jpg" />';
 $dogs[] = '<img src="images/hybrid.jpg" />';
 $dogs[] = '<img src="images/john.jpg" />';
 
 
echo randomize($dogs);
echo rotate($dogs);
}

?>
</span>


</div>

<div id="content">
<!-- end of header -->

