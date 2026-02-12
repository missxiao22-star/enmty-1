
    <div class="cent">新增動態文字廣告</div>
    <hr>
    <form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                動態文字廣告:
            </td>
            <td>
                <input type="text" name="text">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
    </form>
