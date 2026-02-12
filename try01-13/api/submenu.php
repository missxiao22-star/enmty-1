<?php
    include_once "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};

    //判斷次選單新增修改欄位是否有值，撈一遍text欄位，存href，存進物件
    if(!empty($_POST['more_text'])){
        foreach($_POST['more_text']as $key =>$text){
            $href=$_POST['more_href'][$key];
            $Menu->save(['text'=>$text,'href'=>$href,'main_id'=>$_POST['main_id']]);
        }
    }
    //判斷次選單新增修改欄位是否有值，撈一遍id欄位，判斷是否有刪除資料，有就刪除，沒有就先撈資料找id，接著新增欄位+id，存進db
    if(!empty($_POST['text'])){
        foreach($_POST['id'] as $key => $id){
            if(isset($_POST['del'])&& in_array($id,$_POST['del'])){
                $db->del($id);
            }else{
                $row=$db->find($id);
                $row['text']=$_POST['text'][$id];
                $row['href']=$_POST['href'][$id];
                $db->save($row);
            }
        }
    }
to("../back.php?do={$table}");
?>