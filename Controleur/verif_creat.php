
<?php
require_once ("../Model/base_creat.php");
 include("../View/index_creat.php");




if (!empty($_POST['Validate']))
	{
	if (!empty($_POST['title']) AND !empty($_POST['name']) AND !empty($_POST['resume']) AND !empty($_POST['step']))
		{
		$title = htmlspecialchars($_POST['title']);
		$name = htmlspecialchars($_POST['name']);
		$resume = htmlspecialchars($_POST['resume']);
		$step = htmlspecialchars($_POST['step']);
		if ($title >= 30)
			{
			echo 'Votre titre est trop long !';
		}
		if ($name >= 30) {

			echo 'Votre nom est trop long !';
		} else {

			insertbdd($title , $name , $resume , $step);
		}

			}

	}

?>
