<html>
<?php
require "config.php";
require "functions.php";
$q = simplexml_load_file("data.xml");


?>

<head>
<title><?php echo $q->start->title;?></title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<body>
	<!-- Intro -->
	<h1><?php echo $q->start->title;?></h1>
	<p><?php echo $q->start->subtext;?></p>
	<hr>
	<form method="POST" action="results.php">
	<p><?php if ($getPersonalInfo == true) askPersonalInfo(); echo "<hr>"?>
	
	<!-- Present Questions -->
	<?php for ($i = 0; $i < sizeof($q->scenario); $i++) { ?>
		<div id="<?php echo "item" . $i; ?>" class="question">
			<h2>Question # <?php echo ($i+1) . " : " . $q->scenario[$i]->title;?></h2>
			<p><?php echo $q->scenario[$i]->text;?></p>		
			
			<?php for ($j = 0; $j < count($questions); $j++) { 
			echo "<p>"; ask($q->scenario[$i]->action, $i, $questions[$j]); 
			} ?>

		</div>
	<?php } ?>
	<input type="submit"/>
	</form>

</body>

</html>

