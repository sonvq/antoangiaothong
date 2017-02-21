<div id="left">
     <div id="left-content">
 		<?php 
			
			include('simple_html_dom.php');
			
			$newsID = $_GET["newsID"];
			
			$sql = "select * from newsheader where newsID = $newsID";
			$baiviet = mysqli_query($conn,$sql);
			$dong = mysqli_fetch_assoc($baiviet);					
			
			$html = file_get_html($dong['sourceLink']);
			$html->find('.baiviet-bailienquan',0)->outertext='';
			$html ->load($html ->save());
			$content = $html->find('.text-conent',0);
			//$content1 = htmlentities($content,ENT_COMPAT,'UTF-8');
			//$content1 = str_replace(array("</a>"),array(""),$content);
									
		?>
        <div class="box-detail">
         	<br />
          	<h3><?php echo $dong['newsTitle'];?></h3><br />
			<h4><?php echo $dong['newsDescription'];?></h4><br />
			<?php echo $content; ?>
            
            
		</div>
	</div>
</div>