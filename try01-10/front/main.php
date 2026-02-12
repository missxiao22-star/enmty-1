<style>
    .all{
        display: none;
    }
</style>
<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    <?php
    //撈出資料且將資料庫資料跑一遍，最後顯示資料庫對應欄位內的值
        $rows=$Ad->all(['sh'=>1]);
        foreach($rows as $row){
            echo "{$row['text']}";
        }
    ?>
    </marquee>
    <div style="height:32px; display:block;"></div>
    <div style="width:100%; padding:2px; height:290px;">
        <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">沒有資料</div>
        </div>
    </div>
    <!--正中央-->
    <script>
        var lin = new Array();
        <?php
        //撈出資料且將資料庫資料跑一遍，最後顯示圖片，用圖片的位置連結
            $mvims=$Mvim->all(['sh'=>1]);
            foreach($mvims as $mvim){
                echo "lin.push('../upload/{$mvim['img']}');";
            }
        ?>
        var now = 0;
        if (lin.length > 1) {
            setInterval("ww()", 3000);
            // now = 1; 不用-1
        }
        function ww() {
            $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
                now = 0;
        }
        //在前面資料跑得當下，再跑一次這個方法，目的是要讓防呆的沒有資料不會有顯示的時間
        ww();
    </script>
        <?php
            //算出最新消息的總共顯示比數，只顯示5筆，目標設定初始值
            $total = $News->count(['sh'=>1]);
            $rows = $News->all(" limit 5");
        ?>
    <div
        style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
        <span class="t botli">最新消息區
            <?php
                //判斷總筆數>5就顯示一個More...的a標籤
                if($total >5){
                    echo "<a  style='float:right' href='?do=news'>More...</a>";
                }
            ?>
        </span>
        <ul class="ssaa" style="list-style-type:decimal;">
            <?php
                //先撈出所有資料
                foreach($rows as $row):
            ?>
            <li>
                <?php //設定我要顯示的字從第幾個開始到第幾個，將字放在span標籤內?>
                <?= mb_substr($row['text'],0,20) ?>
                <span class="all"><?=$row['text']?></span>
            </li>
            <?php
                endforeach;
            ?>
        </ul>
        <div id="altt"
            style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
        </div>
        <script>
            $(".ssaa li").hover(
                function () {
                    $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                    $("#altt").show()
                }
            )
            $(".ssaa li").mouseout(
                function () {
                    $("#altt").hide()
                }
            )
        </script>
    </div>
</div>