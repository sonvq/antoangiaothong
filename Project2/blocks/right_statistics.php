 <?php 
 
 	$sql1 = "SELECT 
	COUNT(newsID) as so_vu_2015 , 
	SUM(deaths) as bi_chet_2015, 
	SUM(injuries) as bi_thuong_2015
	FROM summary WHERE time LIKE '2015%'"; 
	
 	$sql2 = "SELECT 
	COUNT(newsID) as so_vu_2016 , 
	SUM(deaths) as bi_chet_2016, 
	SUM(injuries) as bi_thuong_2016
	FROM summary WHERE time LIKE '2016%'";
	
	$ketqua1 = mysqli_query($conn,$sql1);
	$kq2015 =  mysqli_fetch_assoc($ketqua1);
	
	$ketqua2 = mysqli_query($conn,$sql2);
	$kq2016 =  mysqli_fetch_assoc($ketqua2);
 ?>
 <div id="right">
 	<table >
 		<tr><td id="year" colspan="2">2016<td></tr>
        
        <tr>
        	<td width="150">Số vụ tai nạn</td>
            <td ><?php echo $kq2016['so_vu_2016']; ?></td>          
        </tr>
        
         <tr>
        	<td>Số người bị thương</td>
            <td><?php echo $kq2016['bi_thuong_2016']; ?></td>          
        </tr>
        
         <tr>
        	<td>Số người chết</td>
            <td><?php echo $kq2016['bi_chet_2016']; ?></td>          
        </tr>
        
    </table>
    
    <table >
 		<tr><td id="year" colspan="2">2015<td></tr>
        
        <tr>
        	<td width="150">Số vụ tai nạn</td>
            <td><?php echo $kq2015['so_vu_2015']; ?></td>          
        </tr>
        
         <tr>
        	<td>Số người bị thương</td>
            <td><?php echo $kq2015['bi_thuong_2015']; ?></td>          
        </tr>
        
         <tr>
        	<td>Số người chết</td>
            <td><?php echo $kq2015['bi_chet_2015']; ?></td>          
        </tr>
        
    </table>

 </div>