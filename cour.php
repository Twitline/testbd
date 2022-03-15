<?php
include_once 'src/database.php';

$db=dbConnect('groups');
$st=$db->query('SELECT COUNT (*) FROM User');
echo $st->fetchColumn(0);

if(isset($_GET['delete'])){
    $delete=$_GET['delete'];
    $nb=deleteFrom($db,'user','suspended');
    echo "$nb supprimé(s)";
}
$st=$db->query('SELECT COUNT (*) FROM User where suspended');
echo $st->fetchColumn();