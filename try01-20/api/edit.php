<?php
    include_once "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};

    foreach($_POST['id'] as $key =>$id){
        if(isset($_FILES['img']['tmp_name']&& in_array($id,$_FILES['img']['name']))){
            $db->del($id);
        }else{
            $row=$db->find($id);
            switch($table){
                case 'title':
                    $row['text']=$_POST['text'][$id];
                    $row['sh']=($_POST['sh']==$id)?1:0;
                    break;
                case 'ad':
                case 'news':
                    $row['text']=$_POST['text'][$id];
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                    break;
                case 'mvim':
                case 'image':
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                    break;
                case 'total':
                case 'bottom':
                    $row[$table]=$_POST[$table];
                    break;
                case 'admin':
                    $row['acc']=$_POST['acc'][$id];
                    $row['pw']=$_POST['pw'][$id];
                    break;
                case 'menu':
                    $row['text']=$_POST['text'][$id];
                    $row['href']=$_POST['href'][$id];
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                    break;
            }
            $db->save($id);
        }
    }
to("../back.php?do={$table}");
?>