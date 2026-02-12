<?php
    $table=$_GET['table'];
    switch($table){
        case 'title':
            $h3="更換標題區圖片";
            $label="標題區圖片";
            break;
        case 'admin':
            $h3="更換動畫區圖片";
            $label="動畫區圖片";
            break;
        default:
            $h3="更換校園映像圖片";
            $label="校園映像圖片";
            break;
    }
?>

<div class="cent"><?=$h3?></div>
<hr>
<form action="../api/update.php?table=<?=$_GET['table']?>&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td><?=$label?><input type="file" name="img" id="img"></td>
            <td><input type="hidden" name="id[]" value="<?=$_GET['id']?>"></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="更換">
        <input type="reset" value="重置">
    </div>
</form>