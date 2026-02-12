<?php
    include_once "db.php";
    $table=$_GET['table'];
    $db=${ucfirst($table)};
    //處理新增次選單
//判斷次選單欄位more_text裡面是否有值，先foreach撈text欄位新資料，根據$key抓more_href資料存進href，物件存取所有欄位到同名變數裡
    if(!empty($_POST['more_text'])){
        foreach($_POST['more_text'] as $key => $text){
            $href=$_POST['more_href'][$key];
            $Menu->save(['text'=>$text,'href'=>$href,'main_id'=>$_POST['main_id']]);
        }
    }
    //處理既有次選單的修改與刪除
//判斷次選單text欄位是否有值，先foreach撈id欄位新資料，檢查是否有刪除資料，有就執行刪除，沒有就先db撈id，將text跟href存進row
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