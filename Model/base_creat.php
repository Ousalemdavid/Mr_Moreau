<?php
 include('dbconnect/db_connexion.php');

function insertbdd( $title , $name , $resume , $step) {
  $req = connect()->prepare('INSERT INTO work_project (title , name, resume , step)
  VALUES (:title , :name , :resume , :step)');
  $req->execute(array(
    'title' => $title,
    'name' => $name,
    'resume'=> $resume,
    'step'=> $step
  ));

}
