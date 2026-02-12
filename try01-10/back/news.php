
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="../api/edit.php?table=<?=$do?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">最新消息資料</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                //目前頁數，顯示幾筆，共幾筆，共幾頁，開始頁數
                    $now=$_GET['page']??1;
                    $div=5;
                    $total=$News->count();
                    $pages=ceil($total/$div);
                    $start=($now-1)*$div;
                    $rows=$News->all(" limit $start,$div");
                    foreach($rows as $row):
                ?>
                <tr>
                    <td><textarea type="text" name="text[<?=$row['id']?>]" style="width:98%;height:100px;"><?=$row['text']?></textarea>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id']?>"<?=($row['sh']== 1 ?'checked':'')?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id']?>">
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
        <style>
            .ccc{
                display: flex;
                justify-content: center;
                align-items: flex-end;
            }
        </style>
        <div class="ccc">
            <?php
                if($now > 1){
                    $prev=$now-1;
                    echo "<a href='?do=news&page=$prev'> < </a>";
                }
                for($i=1;$i<=$pages;$i++){
                    $size=($now==$i)?"24px":"16px";
                    echo "<a style='font-size:$size;' href='?do=news&page=<?=$i?>'> {$i} </a>";
                }
                if($now < $pages){
                    $next=$now+1;
                    echo "<a href='?do=news&page=$next'> > </a>";
                }
            ?>
            
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=<?=$do?>')"
                            value="新增最新消息資料"></td>

                    <td class="cent">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>