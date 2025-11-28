<!-- <!DOCTYPE html>
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
        // session_start();
        // if (isset($_SESSION['taches'])) {
        //    $_SESSION['taches'][]=$_POST['tache'];
        //     foreach ($_SESSION['taches'] as $tache) {
        //         echo "<li>". $tache . "</li>";
        //     }
        // }else{
        //     echo "<p>Auccun tache a ete ajouter</p>";
        // }

    ?>
    </ul>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des taches</title>
</head>
<?php
session_start();
if (isset($_SESSION['taches'])) {
        $lsit_taches = $_SESSION['taches'][] = $_POST['taches'];
}
?>
<body>
    <h1>Listes des taches</h1>
    <ul>
    <?php
    session_start();
    if (!empty($_SESSION['taches'])) {
        $lsit_taches = $_SESSION['taches'][] = $_POST['taches'];
        foreach ($lsit_taches as $taches) {
           echo "<li>".$tache."</li>";
        }

    }else {
        echo "<p> Accune tache a été ajouter</p>";
    }
    ?>
    </ul>
</body>
</html>