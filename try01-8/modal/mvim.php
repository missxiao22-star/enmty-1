<div class="cent">新增動畫圖片</div>
<hr>
<form action="../api/insert.php?table=<?= $_GET['table'] ?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                動畫圖片:
            </td>
            <td>
                <input type="file" name="img">
            </td>
        </tr>
        <td>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </table>
</form>