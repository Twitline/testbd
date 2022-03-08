<?php
include_once 'index.php';
$dbInstance=db_connect('groups');
?>
<form method=post>
    <button type="submit" name="c" value="(-5)">-5</button>
    <button type="submit" name="c" value="5">+5</button>
</form>
<?php
extract($_POST);
$a=0;
$b=5;
$c??=0;
if(isset($_POST["c"])){
    $a=$a+$c;
    $b=$b+$c;
}

function countTable(\PDO $db,string $tableName){
    $sql="SELECT COUNT(*) FROM $tableName;"
    $st=$db->query($sql);
    return $st->fetchColumn();
}
$sql='SELECT firstname, lastname FROM USER limit '.$a.','.$b.';';
$statement=$dbInstance->query($sql);
foreach ($statement as $user){
    echo $user['firstname'].' '.$user['lastname'];
    echo '<br>';
    echo '<br>';
}
?>
