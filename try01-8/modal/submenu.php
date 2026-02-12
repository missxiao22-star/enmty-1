<?php include_once "../api/db.php";?>
<div class="cent">編輯次選單</div>
<hr>
<form action="../api/submenu.php?table=<?=$_GET['table']?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
    <table id="box" style="width:60%;margin:auto;">
        <tr>
            <td width="30%">次選單名稱:</td>
            <td width="60%">次選單連結網址</td>
            <td width="10%">刪除</td>
        </tr>
        <?php
            $rows=$Menu->all(['main_id'=>$_GET['id']]);
            foreach($rows as $row):
        ?>
        <tr>
            <td><input type="text" name="text[<?=$row['id']?>]" value="<?=$row['text']?>"></td>
            <td><input type="text" name="href[<?=$row['id']?>]" value="<?=$row['href']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$row['id']?>"></td>
        </tr>
        <?php endforeach;?>
        <td><input type="hidden" name="main_id" value="<?=$_GET['id']?>"></td>
    </table>
    <div>
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>
<script>
    function more(){
        $row=
        `<tr>
        <td><input type="text" name="more_text[]"></td>
        <td><input type="text" name="more_href[]"></td>
        <td></td>
        </tr>`;
        $('#box').append($row);
    }
</script>
