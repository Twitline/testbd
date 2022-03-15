<?php
function db_connect(string $dbname, string $user='root', string $password=''):PDO{
    echo "Connexion...<br>";
    echo "<br>";
    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function deleteFrom(PDO $db,string $table,string $condition){
    $sql="DELETE FROM $table WHERE $condition";
    return $db->exec($sql);
}
?>