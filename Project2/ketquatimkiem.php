<?php require("lib/conn.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Css  -->
<link rel="stylesheet" type="text/css" href="news_detail.css"/>

<!--Css  -->
<title>Ket qua tim kiem</title>
</head>

<body>
	<div id="wrapper">
        <?php require('menu.php') ?> 		
		<div id="content">
           	<?php require ("left_detail.php");?>
        	<div id="right">
        		<?php require ("newsSummary.php");?>
            	<div id="newsConcern">Tin liên quan</div>
       		</div>
        </div>
	</div>
</body>
</html>
