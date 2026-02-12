<?php
$table=$_GET['table'];

switch($table){
    case 'title':
        $h3="更換標題區圖片";
        $label="標題區圖片";
        break;
    case 'mvim':
        $h3="更換動畫區圖片";
        $label="動畫區圖片";
        break;
    default:
        $h3="更換校園映像區圖片";
        $label="校園映像區圖片";
        break;
}
?>
<h3 class="cent"><?=$h3?></h3>
<hr>
<form action="../api/update.php?table=<?=$_GET['table']?>&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <div>
        <?=$label?>:<input type="file" name="img">
        <input type="hidden" name="id[]" value="<?=$_GET['id']?>">
    </div>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>