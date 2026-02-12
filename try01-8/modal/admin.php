
    <div class="cent">新增管理者帳號</div>
    <hr>
    <form action="../api/insert.php?table=<?=$_GET['table']?>" method="post" style="margin:auto;width:50%;" enctype="multipart/form-data">
        <table>
            <tr>
                <td>帳號:<input type="text" name="acc"></td>
            </tr>
            <tr>
                <td>密碼:<input type="password" name="pw"></td>
            </tr>
              <tr>
                <td>
                    <input type="submit" value="新增">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
