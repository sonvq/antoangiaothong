 <?php
		$conn = mysqli_connect('localhost', 'root', '', 'traffic_accident');
		mysqli_set_charset($conn, 'UTF8');
		
		$data = mysqli_query($conn, 'select * from newsheader order by newsDate DESC');
		$number_record = mysqli_num_rows($data); 
		//$news = mysqli_fetch_assoc($data);
		
		function ChiTietTin($newsID){
			$qr = "select * from newsheader where newsID = $newsID";
			return msql_query($qr);	
		}
?>