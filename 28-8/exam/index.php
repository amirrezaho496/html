<?php
    session_start();
    echo "Paper count : {$_SESSION["count"]} <br> ";
    for ($i=0; $i < $_SESSION["count"]; $i++) {
        $paper = $_SESSION["paper_{$i}"]; 
        echo "<br> title : {$paper['title']} <br> id : paper_{$i} <br> {$paper['text']} <br>";
    }
?>