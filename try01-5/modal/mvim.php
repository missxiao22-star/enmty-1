<div class="cent">新增動畫區圖片</div>
<hr>
<form action="./api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <table style="margin:auto;width:60%;">
        <tr>
            <td>動畫圖片:<input type="file" name="img" value="" ></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>