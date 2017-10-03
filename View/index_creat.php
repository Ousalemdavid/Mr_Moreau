<?php include("template/header.php");
?>



<h1> Besoin d'ajouté un projet ? </h1>

<div style="text-align:Center;">

  <form action="" method="post">
    <input type="text" name="title" value="" placeholder="Votre Titre"><br />
    <input type="text" name="name" value="" placeholder="Votre nom"> <br />
    <textarea name="resume" rows="8" cols="80" placeholder="Résumé du projet..."></textarea> <br />
  <textarea name="step" rows="8" cols="50" placeholder="Vos étapes de production..."></textarea> <br />
    <input type="submit" name="Validate" value="Envoyez">

  </form>
<a href="../Controleur/verif_accueil.php">Retour</a>
</div>

<?php include("template/footer.php"); ?>
