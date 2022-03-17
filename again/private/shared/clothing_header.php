<?php
    if(!isset($page_title))  { $page_title = 'Clothing Area'; }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo url_for('/styles/brand.css'); ?>" />
    <title>NHC | <?php echo $page_title; ?></title>
</head>

<body>
<header>
  <h1>New Hundreds</h1>
	<nav>
   <ul>
	<li><a href = "<?php echo url_for('/clothing/index.php'); ?>">Menu</a></li>
	<li><a href = "?p=toc.php">TOC</a></li>
	<li><a href = "?p=contract.php">Contract</a></li>
	<li><a href = "?p=intro.php">Intro</a></li>
	<li><a href = "?p=brand.php">Brand</a></li>
   <li><a href="?p=form.php">Form</a></li>
</ul>
	</nav>

	<br />
</header>
<hr/>