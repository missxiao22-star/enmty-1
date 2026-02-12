<?php
    include_once "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};

    if(isset($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../upload/{$_FILES['img']['tmp_name']}");
        $_POST['img']=$_FILES['img']['name'];
    }

    switch($table){
        case 'title':
            $_POST['sh']=0;
            break;
        case 'admin':
            break;
        default:
            $_POST['sh']=1;
            break;
    }

    $db->save($_POST);

    to("../back.php?do={$table}");

?>