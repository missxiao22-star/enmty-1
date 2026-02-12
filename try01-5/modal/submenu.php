<div class="cent">編輯次選單</div>
<hr>
<?php include_once "../api/db.php";?>
<form action="./api/submenu.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <table id="box" style="width:60%;margin:auto;">
        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除</td>
            <td></td>
        </tr>
        <?php
        $rows =$Menu->all(['main_id'=>$_GET['id']]);
        foreach($rows as $row):
        ?>
        <tr>
            <td><input type="tetx" name="text[<?=$row['id']?>]" value="<?=$row['text']?>"></td>
            <td><input type="text" name="href[<?=$row['id']?>]" value="<?=$row['href']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$row['id']?>"></td>
        </tr>
        <?php endforeach;?>
    </table>
    <div class="cent">
        <input type="submit" value="確認">
        <input type="reset" value="重置">
        <input type="reset" value="更多次選單" onclick="more()">
    </div>
</form>

<script>
    function more(){
        $row=
        `<tr>
            <td>
                <input type="text" name="text[]">
            </td>
            <td>
                <input type="text" name="href[]">
            </td>
        </tr>`;
        $('#box').append($row);
    }
</script>