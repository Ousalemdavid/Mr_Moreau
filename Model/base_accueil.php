<?php
include('dbconnect/db_connexion.php');

// my function to read the title //

function read_article()
{
	$req = connect()->query('SELECT * FROM work_project');
	while ($donnees = $req->fetch()) {
?>

<a href="../Controleur/verif_project.php?id=<?php
echo $donnees['id']; ?>"><li><?php
		echo $donnees['title']; ?></li></a><?php
	}
}
