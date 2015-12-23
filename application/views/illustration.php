<ol class="ani_breadcrumb breadcrumb">
<?php if(empty($animeTitle)){?>
	<li class="active"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>TOP</li>
<?php }else{ ?>
	<li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="<?php echo base_url();?>">TOP</a></li>
	<li><a href="<?php echo base_url();?>anime/<?php echo $animeTitle;?>"><?php echo $animeTitle;?></a></li>
	<li class="active">Illustration</li>
<?php } ?>
</ol>
<h1><?php echo $animeTitle?></h1>
<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Illustration</h4></ol>
<?php for($i=0;$i<count($imageUrls);$i++){?>
<img height="200" src="<?php echo $imageUrls[$i]->url?>">
<?php }?>
<br>
<br>
<br>
<br>
</div>

