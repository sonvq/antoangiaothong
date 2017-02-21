<div id="left">
	<div id="left-content">
		<ul>
		<?php 
			while($news = mysqli_fetch_assoc($data)){	
		?>
		<li>
		<div id="newsTitle"><a href="detail_news_site.php?newsID=<?php echo $news['newsID'];?>"><?php echo $news['newsTitle'];?></a></div>
		<div id="newsImage"><img src="<?php echo $news['imageUrl']?>" width="160" height="100" /></div>
		<div id="newsDescription"><?php echo $news['newsDescription'];?></div>
		</li>
		<?php
		}
		for($j=0;$j<10;$j++)
			echo "<br>";
		?>
       
		</ul>
	</div>
</div>

