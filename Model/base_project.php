<?php
 include('dbconnect/db_connexion.php');


function read_all() {
 $req = connect()->prepare("SELECT * FROM work_project WHERE id = ?");
 $req->execute(array($_GET['id']));

  while ($donnees = $req->fetch()){

?>
<div style='text-align:center;color:black;'>
<h1 style="border-bottom:1px dashed black;">
  <?php echo $donnees['title'];?></h1>
<h2><?php echo $donnees['name'];?></h2>
<?php echo $donnees['resume'];?><br />
<br />
<?php echo $donnees['step'];?>
</div>
<?php
  }

}
?>
