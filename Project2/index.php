<?php require("lib/dbCon.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>Project 2</title>
</head>

<body>
    <div id="wrapper">
        <div id="banner"><img src="images/banner.png" /></div>
        
		<?php require('blocks/menu.php'); ?>
        
        <div id="content">
        <?php require('Project2/blocks/left_list_news.php'); ?>
        <?php require('Project2/blocks/right_statistics.php');?>
        </div>
        
        <div id="footer">Day la chan trang</div>
    </div>
</body>
</html>
