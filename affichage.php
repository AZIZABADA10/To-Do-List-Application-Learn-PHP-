<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affchege des taches</title>
</head>
<body>
    <h1>liste des taches </h1>
    <ul>
    <?php  
        session_start();
        if (isset($_SESSION['taches'])) {
           $_SESSION['taches'][]=$_POST['tache'];
            foreach ($_SESSION['taches'] as $tache) {
                echo "<li>". $tache . "</li>";
            }
        }else{
            echo "<p>Auccun tache a ete ajouter</p>";
        }

    ?>
    </ul>
</body>
</html>