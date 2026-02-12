<div class="cent">新增最新消息資料</div>
<hr>
<form action="./api/insert.php?table=<?=$_GET['table']?>" method="post" enctype="multipart/form-data" style="margin:auto;width:60%;">
    <table>
        <tr>
            <td>最新消息資料:</td>
            <td><textarea type="text" name="text" id="text" value=""></textarea>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>