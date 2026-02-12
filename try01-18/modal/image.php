<div class="cent">新增校園映像圖片</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img" value=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>