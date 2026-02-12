<div class="cent">編輯主選單</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td>主選單名稱:</td>
            <td>主選單連結網址:</td>
        </tr>
        <tr>
            <td><input type="text" name="text" ></td>
            <td><input type="text" name="href" ></td>
            <td><input type="checkbox" name="del" ></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>