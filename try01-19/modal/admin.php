<div class="cent">新增管理者帳號</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td>帳號:<input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼:<input type="text" name="pw"></td>
        </tr>
        <tr>
            <td>確認密碼:<input type="text" name="pw"></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>