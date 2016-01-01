<div class="col s12">
<ul class="tabs">
<li class="tab col s3"><a href="#new">New</a></li>
<li class="tab col s3"><a class="active" href="#animeList">ANIME LIST</a></li>
</ul>
</div>
<div id="new" class="col s12">

<ul data-role="listview">
<div class="row">
<?php for($i=0;$i<count($newTitles);$i++){ ?>
<div class="col s12 m7">
<a data-ajax="false" href="<?php echo base_url();?>anime/<?php echo $newTitles[$i]->name;?>">
<div class="card">
	<div class="card-image">
	<img src="<?php echo $url[$i][0]->url?>">
	</div>

	<div class="tt_card_div card-action">
	<?php echo $newTitles[$i]->name; ?>
	</div>
</div>
</a>
</div>
<?php } ?>
</div>
<!--
<li>
<h1>REQUEST</h1>
    <form method="POST" action="<?php echo base_url();?>" data-ajax="false">
        <input name="anime" type="text" />
        <input type="submit" value="Request Other Anime" />
    </form>
</li>
-->                                                                                                                                                               
</ul>               
</div>

<div id="animeList" class="col s12">
<div class="collection">
	<?php for($i=0;$i<count($titles);$i++){?>
        <a href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>" class="collection-item"><?php echo $titles[$i]->name;?></a>
	<?php } ?>
      </div>
</div>
