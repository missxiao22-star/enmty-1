<div class="cent">新增動態文字廣告</div>
<hr>
<form action="../api/insert.php?table=<?= $_GET['table'] ?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                最新消息資料:<textarea name="text" style="width:300px;height:50px;"></textarea>
            </td>
        </tr>
        <td>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </table>
</form>