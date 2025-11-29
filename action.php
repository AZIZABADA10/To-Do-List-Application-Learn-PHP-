<?php
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $task = trim($_POST['task'] ?? '');
    if ($task !== '') {
        $_SESSION['tasks'][] = $task;
    }
    header('Location: index.php');
    exit;
}

if ($method === 'GET' && isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'delete' && isset($_GET['index'])) {
        $idx = (int)$_GET['index'];
        if (isset($_SESSION['tasks'][$idx])) {
            unset($_SESSION['tasks'][$idx]);
            // reindex
            $_SESSION['tasks'] = array_values($_SESSION['tasks']);
        }
    }
    
}

header('Location: index.php');
exit;
