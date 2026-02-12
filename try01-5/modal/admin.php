<div class="cent">新增管理者帳號</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <table style="width:300px;margin:auto;">
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td><input type="password" name="pw"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>