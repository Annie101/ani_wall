<ol class="ani_breadcrumb breadcrumb">
<?php if(empty($animeTitle)){?>
	<li class="active"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>TOP</li>
<?php }else{ ?>
	<li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="<?php echo base_url();?>/top">TOP</a></li>
	<li><a href="<?php echo base_url();?>top/anime/<?php echo $animeTitle;?>"><?php echo $animeTitle;?></a></li>
	<li class="active">Instagram</li>
<?php } ?>
</ol>
<h1><?php echo $animeTitle?></h1>
<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Instagram</h4></ol>
<iframe src="http://widget.websta.me/in/tag:<?php echo $tag;?>/?r=1&w=5&h=5&b=1&p=5&sb=off" 
allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:100%; height:900px" >
</iframe> <!-- websta - websta.me -->
<br>
<br>
<br>
<br>
</div>
