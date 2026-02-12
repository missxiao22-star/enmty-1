<div class="cent">校園映像資料管理</div>
<hr>
<form action="./api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img" value="" ></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>