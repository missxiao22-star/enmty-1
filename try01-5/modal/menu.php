<div class="cent">編輯次選單</div>
<hr>
<form action="./api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>次選單名稱</td>
            <td><input type="text" name="text" value="" style="width:250px"></td>
        </tr>
        <tr>
            <td>次選單連結網址</td>
            <td><input type="text" name="href" value="" style="width:250px"></td>
        </tr>
        <tr>
            <td>刪除</td>
            <td><input type="checkbox" name="sh" value=""></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>