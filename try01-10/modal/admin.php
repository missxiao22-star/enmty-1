<div class="cent">新增管理者帳號</div>
<hr>
<form action="./api/insert.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc" id="acc" value=""></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw" id="pw" value=""></td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td><input type="password" name="pw" id="pw" value=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>