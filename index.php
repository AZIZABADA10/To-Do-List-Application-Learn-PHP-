<?php
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Todo App - Session</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="card">
    <h1>Ma todo list (session)</h1>

    <form action="action.php" method="POST" class="inline-form">
      <input type="text" name="task" placeholder="Nouvelle tâche..." required>
      <button type="submit" name="action" value="add">Ajouter</button>
    </form>

    <?php if (!empty($_SESSION['tasks'])): ?>
      <ul class="tasks">
        <?php foreach ($_SESSION['tasks'] as $i => $t): ?>
          <li>
            <span><?= htmlspecialchars($t) ?></span>
            <a class="small" href="action.php?action=delete&index=<?= $i ?>">Supprimer</a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Aucune tâche pour l'instant.</p>
    <?php endif; ?>
  </main>
</body>
</html>
