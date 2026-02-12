<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="../api/edit.php?table=<?=$do?>">
        <table width="50%" style="margin:auto">
            <tbody>
                <?php
                    $row=$Bottom->find(1);
                    if(!$row){
                        $row = ['bottom' => 0]; 
                    }
                ?>
                <tr class="yel">
                    <td width="45%">頁尾版權資料:</td>
                    <td width="45%">
                        <input type="text" name="<?=$do?>" value="<?=$row[$do]?>">
                        <input type="hidden" name="id[]" value="1">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%; margin:auto;" >
            <tbody>
                <tr>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>