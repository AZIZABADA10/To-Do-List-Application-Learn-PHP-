<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affich</title>
</head>
<body>
    <h1>To do</h1>
    <ul>
        <?php 
            echo "<li> la tache:".$_POST['tache']."</li>" ;
            echo "<li> la discription:".$_POST['tache']."</li>" ;
        ?>
    </ul>
    <?php 
    //session_start();
    //var_dump($_SESSION);
    ?>
</body>
</html>