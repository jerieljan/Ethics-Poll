<?php
require "config.php";
require "functions.php";
$q = simplexml_load_file("data.xml");

?>
<html>
	<head>
	<title><?php echo $q->start->title;?></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>

	<body>
<?php if (isset($_POST["name"])) { ?>
	<h1><?php echo $q->start->title;?></h1>
	<h2><?php echo $q->end->subheading;?></h2>
	<p><?php echo $q ->end->text;?></p>

<?php 
//SQL

//Connect to DB
$s = mysql_connect('<your sql host>', '<your sql user>', '<your sql password>');
$db = mysql_select_db("<your sql db>", $s);

//Register User
$sql = "INSERT INTO `<your sql db>`.`User` (`Username`, `Gender`, `Age`, `Email`) VALUES ('". $_POST["name"] . "', '" . $_POST["gender"] . "', '" . $_POST["age"] . "', '" . $_POST["email"] . "')";
$query = mysql_query($sql);
if (!$query) { die('You already submitted your answers. ');} 

//Register Answers
for ($i = 1; $i <= sizeof($q->scenario); $i++)
{
	foreach ($questions as $j=>$k)
	{
	$val = "q" . $i . "_" . $questions[$j]['type']; 
	$sql = "INSERT INTO `<your sql db>`.`Answer` (`Username`, `QuestionNumber`, `QuestionType`, `Score`) VALUES ('". $_POST["name"] . "', '" . $i . "', '" . $questions[$j]['type'] . "', '" . $_POST[$val] . "')";
	$query = mysql_query($sql);
	}
}

//Close DB
$s = mysql_close();
} 
?>

<h2>Summary of Results</h2>
<?php

for ($i = 1; $i <= sizeof($q->scenario); $i++)
{
	echo "Question " . $i . "<br />";
	foreach ($questions as $j=>$k)
	{
	$val = "q" . $i . "_" . $questions[$j]['type']; 
	echo "#" . ($j+1) . ": " . $questions[$j]['type'] . " - " . $_POST[$val] ."<br />";
	}
}
?>



	</body>
</html>
