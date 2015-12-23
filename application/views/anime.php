		<ol class="breadcrumb">
		        <?php if(empty($animeTitle)){?>
		        <li class="active"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>TOP</li>
		        <?php }else{ ?>
		        <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="<?php echo base_url();?>/top">TOP</a></li>
		        <li class="active"><?php echo $animeTitle;?></li>
		        <?php } ?>
		</ol>

		<div class="embed-responsive embed-responsive-16by9">
		<iframe src="http://widget.websta.me/in/tag:<?php echo $tag;?>/?r=1&w=5&h=5&b=1&p=5&sb=off" 
		allowtransparency="true" frameborder="0" scrolling="no" 
		style="border:none;overflow:hidden;width:100%; height:1500px" >
		</iframe> <!-- websta - websta.me -->
		</dev>
