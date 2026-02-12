<?php include_once "./api/db.php" ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-3.4.1.js"></script>
	<script src="./js/js.js"></script>
	<style>
		.image_box{
			width: 150px;
			margin: auto;
		}
		.image_box img {
			width: 140px;
    		height: 90px;
			border: 2px solid orange;
			margin: 2px auto;
		}

		.mainmu:hover .submenu{
            display: block;
			
		}
		.submenu{
            display: none;
			position: absolute;
			right: 0;
			top: 0;
			z-index: 99;
		}
	</style>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
				onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<iframe style="display:none;" name="back" id="back"></iframe>
	<div id="main">
			<?php
				$img = $Title->find(['sh'=>1]);
			?>
		<a title="<?=$img['text']?>" href="?">
			
			<div class="ti" style="background:url('./upload/<?=$img['img']?>'); background-size:cover;"></div><!--標題-->
		</a>
		<div id="ms"> 
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">主選單區</span>
						<?php
							$mains = $Menu->all(['sh'=>1,'main_id'=>0]);
							foreach ($mains as $main ) :
						?>
					<div class="mainmu">
						<a href="<?=$main['href']?>"><?=$main['text']?></a>
						<div class="submenu">
							<?php
							$subs = $Menu->all(['main_id'=>$main['id']]);
							foreach ($subs as $sub ) :
							?>
								<div class="mainmu2">
								<a href="<?=$sub['href']?>"><?=$sub['text']?></a>
								</div>
							<?php endforeach;?>
						</div>
					</div>
					<?php endforeach;?>
				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 :
						<?php
							$total = $Total->find(1);
							echo "{$total['total']}"
						?>		
					</span>
				</div>
			</div>
				<?php
					$do=$_GET['do'] ?? "main";
					$file="./front/$do.php";
					if (file_exists($file)) {
						include $file;
					}else{
						include "./front/main.php";
					}

				?>
		</div>
			<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
				<!--右邊-->
				<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
					onclick="lo('?do=login')">管理登入</button>
				<div style="width:89%; height:480px;" class="dbor">
					<span class="t botli">校園映象區</span>
					<div class="cent">
						<img src="./icon/up.jpg" alt="" onclick="pp(1)">
					</div>
					<div class="image_box">
						<?php
							$rows = $Image->all(['sh'=>1]);
							foreach ($rows as $t => $row):
						?>
							<img id="ssaa<?=$t?>" class="im" src="./upload/<?=$row['img']?>" alt="">
						<?php
							endforeach;
							?>
					</div>
					<div class="cent">
						<img src="./icon/dn.jpg" alt="" onclick="pp(2)">
					</div>
					<script>
						// 改num的質就好  放總數
						var nowpage = 0, num = <?=count($rows)?>;
						function pp(x) {
							var s, t;
							if (x == 1 && nowpage - 1 >= 0) { nowpage--; }
							if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) { nowpage++; }
							$(".im").hide()
							for (s = 0; s <= 2; s++) {
								t = s * 1 + nowpage * 1;
								$("#ssaa" + t).show()
							}
						}
						pp(1)
					</script>
				</div>
			</div>
		<div style="clear:both;"></div>
		<div
			style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
			<span class="t" style="line-height:123px;">
				<?php
					$bottom = $Bottom->find(1);
					echo "{$bottom['bottom']}";
				?>
			</span>
		</div>
	</div>

</body>

</html>
