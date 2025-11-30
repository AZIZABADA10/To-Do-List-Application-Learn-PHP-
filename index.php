<?php
$connexion = new mysqli("localhost","root","","to_do_list");
if ($connexion->connect_error) {
  die("erreur de connexion:".$connexion->connect_error);
}

if (isset($_POST["ajouter_tache"])) {
  $tache =  $_POST["tache"];
  $connexion -> query("INSERT INTO list_taches (tache) VALUES ('$tache') ");
  header("Location: index.php");
}
$taches = $connexion -> query("SELECT * FROM list_taches");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="contaier">
    <h1>Todo List</h1>
    <fieldset>
      <form action="index.php" method="post">
      <input type="text" name="tache" placeholder="Ajouter votre tache: " id="tache" require>
      <button type="submit" name="ajouter_tache">Ajouter Tache</button>
    </form>
    <ul>
      <?php 
      if ($taches->num_rows == 0) {
        echo "<p>Accune tache a été ajouter </p>";
      }else {
        
       while ($row = $taches->fetch_assoc()) {
        echo "<li>ID:".$row['id']." Tache:".$row['tache']." statut:".$row['statut']."</li>";
       }

      }
      ?>
    </ul>
    </fieldset>
  </div>
</body>
</html>