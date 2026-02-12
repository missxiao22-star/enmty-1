<?php
    include_once "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};


    $row=$db->find($id);

    if(isset($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../upload/{$_FILES['img']['tmp_name']}");
        $row['img']=$_FILES['img']['tmp_name'];
    }

    $db->save($row);

    to("../back.php?do={$row}");

?>