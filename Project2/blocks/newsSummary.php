<div id="newsSummary">
	<?php 
		
		$newsID = $_GET['newsID'];
		$sql = "select * from summary where newsID = $newsID";
		$baiviet = mysqli_query($conn,$sql);
		$dong = mysqli_fetch_assoc($baiviet);
											
	?>
    <h3>Tóm tắt bài báo</h3>
    <?php
		echo $dong['place']. "<br>";
		echo $dong['deaths']. "<br>";	
		echo $dong['injuries']. "<br>";	
		echo $dong['reason']. "<br>";
		echo $dong['vehicles']. "<br>";	
	?>

</div>                                                       