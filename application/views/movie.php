<ol class="ani_breadcrumb breadcrumb">
<?php if(empty($animeTitle)){?>
	<li class="active"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>TOP</li>
<?php }else{ ?>
	<li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="<?php echo base_url();?>">TOP</a></li>
	<li><a href="<?php echo base_url();?>anime/<?php echo $animeTitle;?>"><?php echo $animeTitle;?></a></li>
	<li class="active">Movie</li>
<?php } ?>
</ol>
<h1><?php echo $animeTitle?></h1>
<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Movie</h4></ol>
<?php for($i=0;$i<count($movies);$i++){?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movies[$i]?>" frameborder="0" allowfullscreen></iframe>
<?php }?>
<br>
<br>
<br>
<br>
</div>

