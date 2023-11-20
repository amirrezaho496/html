<?php
    session_start();
    #store count of papers in $_SESSION['count']
    if (!isset($_SESSION["count"])) $_SESSION["count"] = 1;

    $id = $_POST['id'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $_SESSION["paper_{$id}"] = ["title" => $title, "text"=> $text];
    $_SESSION['count']++;
    header("Location: ./create.php");
?>