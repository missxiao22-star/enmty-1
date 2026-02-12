<div class="cent">新增標題區圖片</div>
<hr>
<form action="../api/insert.php?table=<?= $_GET['table']?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>替代標題區文字:</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>