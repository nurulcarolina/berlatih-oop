<?php
    //Release 0
    require ('animal.php');
    $sheep = new Animal("shaun");
    

    echo $sheep->name; // "shaun"
    echo "<br>";
    echo $sheep->legs; // 2
    echo "<br>";
    echo $sheep->cold_blooded; // false
    echo "<br>";

    //Release 1
    require ('ape.php');
    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"
    echo "<br>";
    
    require ('frog.php');
    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"
    echo "<br>";
?>