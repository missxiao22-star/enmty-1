
    <div class="cent">新增標題區圖片</div>
    <hr>
    <form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                標題區圖片:
            </td>
            <td>
                <input type="file" name="img">
            </td>
        </tr>
        <tr>
            <td>
                標題區替換文字:
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
