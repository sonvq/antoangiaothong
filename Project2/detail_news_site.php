<?php require("lib/dbCon.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/detail_news_site.css"/>
<title>Chi tiet bai bao</title>
</head>

<body> 
	<div id="wrapper">
		<?php require('blocks/menu.php') ?> 		
		<div id="content">
			<!--
            <div id="left">
     			<div id="left-content">
					<?php
						//$newsID = $_GET['newsID'];
						//$sql = "select * from newsheader where newsID = $newsID";
						//$baiviet = mysqli_query($conn,$sql);
						//$dong = mysqli_fetch_assoc($baiviet);						
					?>
                    <div class="box-detail">
                        <br />
                        <h3><?php //echo $dong['newsTitle'];?></h3><br />
                        <h4><?php //echo $dong['newsDescription'];?></h4><br />
                        <?php //echo $content; ?>
					</div>
				</div>
			</div>
			-->
            <?php require('blocks/news_detail.php'); ?>
            <div id="right">
				<?php require ("blocks/newsSummary.php");?>
				<div id="newsConcern">Tin liên quan</div>
			</div>

		</div>
	</div>
</body>
</html>
