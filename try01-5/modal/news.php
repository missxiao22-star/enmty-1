<div class="cent">新增最新消息廣告</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <div style="margin:auto">
        新增最新消息:<textarea name="text" style="width:70%;height:60px;"></textarea>
    </div>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>