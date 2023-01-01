<?php
	include("config.php");
		//$connection->exec("set names utf8");
		$statement = $connection->query("SELECT * FROM general_setting WHERE id='1'");
		$dd = $statement->fetch(PDO::FETCH_ASSOC);
		$currency = $dd['currency'];
		include("header.php");
?>
<!-- START CONTENT -->

<section id="main" class="container"> <!-- 1152 pixels Container -->

	<!-- Page Title -->
	<div class="sixteen columns">
		<div class="page-title">
			<h1><?php echo($dd['sitename']) ?></h1>
		</div>
	</div>
	
	
	<!-- Page Content -->
	<?php   
		$block1 = $connection->query("SELECT * FROM block WHERE id='1'");
		$block1 = $block1->fetch(PDO::FETCH_ASSOC);
?>	
	<div class="twelve columns" id="pContent">
	
		<section id="page-content" class="clearfix"> <!-- inner grid 720 pixels wide -->
		
			<div class="twelve columns margin-bottom-35px">
				
				<p class="middle-font-size"><strong><h2><?php echo($block1['icon']) ?></h2></strong></p>
				
				<div class="small-bar colored"></div>
				
				
				<p><h4><?php echo($block1['description']) ?></h4></p>
					
			</div> <!-- end twelve columns -->
			
			<div class="clear"></div>
			<div class="twelve columns margin-bottom-0px">
<?php   
		$block4 = $connection->query("SELECT * FROM block WHERE id='4'");
		$block4 = $block4->fetch(PDO::FETCH_ASSOC);
?>					
				<p class="middle-font-size"><strong><h2><?php echo $block4['title'] ?></h2></strong></p>
				
				<div class="small-bar colored"></div>
				
				<h4> <?php echo $block4['description'] ?> </h4> 
				
			</div> <!-- end twelve columns -->
			<div class="twelve columns margin-bottom-0px">
					
			</div> <!-- end twelve columns -->
			
		</section> <!-- end inner grid -->
	
	</div>
	<!-- end Page Content -->
	
		
<?php
	include("sidebar.php");
?>
	
	<div class="clear"></div>
	
</section>
<!-- END CONTENT -->
<?php
	include("footer.php");
	?>
