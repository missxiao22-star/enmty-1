<?php
    include "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};

    if(!empty($_POST['more_text'])){
        foreach($_POST['more_text'] as $key => $text){
            $href = $_POST['more_href'][$key];
            $Menu->save(['text'=>$text,'href'=>$href,'main_id'=>$_POST['main_id']]);
        }
    }

    if(!empty($_POST['text'])){
        foreach($_POST['id'] as $key => $id){
            if(isset($_POST['del']) && in_array($id,$_POST['del'])){
                $db->del($id);
            }else{
                $row = $db->find($id);
                $row['text']=$_POST['text'][$id];
                $row['href']=$_POST['href'][$id];
                $db->save($row);
            }
        }
    }
to("../back.php?do={$table}");

?>