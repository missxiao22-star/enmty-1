<style>
    .all{
        display:none;
    }
</style>
<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
    $rows=$Ad->all(['sh'=>1]);
    foreach($rows as $row){
        echo "{$row['text']}";
    }
?>
</marquee>
<div style="height:32px; display:block;"></div>
    <!--正中央-->
<?php
    $now=$_GET['page']??1;
    $div=5;
    $total=$News->count();
    $pages=ceil($total/$div);
    $start=($now-1)*$div;
    $rows=$News->all(" limit $start, $div");
?>
<ol start="<?=$start+1?>" class="ssaa" style="list-style-type:decimal;">
    <?php
        foreach($rows as $row):
    ?>
    <li class="ssww">
        <?= mb_substr($row['text'],0,20) ?>
        <span class="all"><?=$row['text']?></span>
    </li>
    <?php
        endforeach;
    ?>
</ol>
<div class="cent">
    <?php
        if($now >1){
            $prev =$now-1;
            echo "<a href='?do=news&page=$prev'> < </a>";
        }
        for($i=1;$i<=$pages;$i++){
            $size=($now == $i)?"24px":"16px";
            echo "<a style='font-size:$size;' href='?do=news&page=$i'> {$i} </a>";
        }
        if($now < $pages){
            $next = $now+1;
            echo "<a href='?do=news&page=$next'> > </a>";
        }
    ?>  
</div>
         
<div id="alt"
	style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".sswww").hover(
		function () {
			$("#alt").html("" + $(this).children(".all").html() + "").css({ "top": $(this).offset().top - 50 })
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function () {
			$("#alt").hide()
		}
	)
</script>			