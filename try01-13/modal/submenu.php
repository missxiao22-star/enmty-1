<div class="cent">編輯次選單</div>
<hr>
<?php include_once "../api/db.php"?>
<form action="./api/submenu.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table id="box">
        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除:</td>
        </tr>
        <?php
            $rows=$Menu->all(['main_id'=>$_GET['id']]);
            foreach($rows as $row):
        ?>
        <tr>
            <td><input type="text" name="text[<?=$row['id']?>]" value="<?=$row['text']?>"></td>
            <td><input type="text" name="href[<?=$row['id']?>]" value="<?=$row['href']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </tr>
        <?php
            endforeach;
        ?>
        <input type="hidden" name="main_id" value="<?=$_GET['id']?>">
    </table>
    <div>
        <input type="submit" value="新增">
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