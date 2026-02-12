<?php
    $table=$_GET['table'];
    switch($table){
        case 'title':
            $h3="更換標題區圖片";
            $label="標題區圖片";
            break;
        case 'image':
            $h3="更換校園映像圖片";
            $label="校園映像圖片";
            break;
        case 'mvim':
            $h3="更換動畫輪播圖片";
            $label="動畫輪播圖片";
            break;
    }
?>
<h3 class="cent"><?=$h3?></h3>
<hr>
<form action="../api/update.php?table=<?=$_GET['table']?>&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
    <tr>
        <td>
            <?=$label?><input type="file" name="img">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="更換">
            <input type="reset" value="重置">
        </td>
    </tr>
</form>
