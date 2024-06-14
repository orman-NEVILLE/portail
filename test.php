<?php
  //requête de suppression
  include_once "connection_bdd.php";
    $req= "SELECT COUNT(*)FROM user WHERE role='membre'";
    $rep_prep=$connection->prepare($req);
    $nombre=$rep_prep->execute();
   echo $nombre;
?>