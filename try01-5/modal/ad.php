<div class="cent">新增動態文字廣告</div>
<hr>
<form action="../api/insert.php?table=<?=$_GET['table']?>" style="margin:auto;width:60%;" method="post" enctype="multipart/form-data">
    <div>
        動態文字廣告:<input type="text" name="text" style="width:300px">
    </div>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>