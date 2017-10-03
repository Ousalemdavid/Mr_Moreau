<?php

function connect() {
  try
 {
   $bdd = new PDO('mysql:host=localhost;dbname=projet_software;charset=utf8', 'root', '22Misterhoo');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
return $bdd;
}
