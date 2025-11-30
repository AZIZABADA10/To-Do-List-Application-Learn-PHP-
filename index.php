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

if (isset($_GET['supprimer'])) {
  $id = $_GET['supprimer'];
  $connexion -> query("DELETE FROM list_taches WHERE id='$id' ");
}

if (isset($_GET['terminer'])) {
  $id = $_GET['terminer'];
  $connexion -> query("UPDATE list_taches SET statut = 'terminer' WHERE id ='$id' ");
}

$taches = $connexion -> query("SELECT * FROM list_taches");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
  <link rel="stylesheet" href="style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


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
      <?php while($row = $taches->fetch_assoc()): ?>
        <li class="li_flex"><div>
          <b>Tache <?php echo $row['id'] ?>: </b>
          <?php echo $row['tache'];  ?>
        </div>
          <div>
            <a href="index.php?supprimer=<?php echo $row['id'] ?>"><i class='bx  bx-trash' style='color:#ff0900'></i></a>
          <a href="index.php?terminer=<?php echo $row['id'] ?>"><?php echo $row['statut']=='terminer'?"<i class='bx  bx-check-circle' style='color:#068b00'></i>":"<i class='bx  bx-check-circle' style='color:red'></i>"  ?></a>
          </div>
        </li>
      <?php endwhile ?>
    </ul>
    </fieldset>
  </div>
</body>
</html>