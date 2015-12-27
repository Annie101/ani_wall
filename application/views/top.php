<ul data-role="listview">
<div class="row">
<?php for($i=0;$i<count($titles);$i++){ ?>
<a data-ajax="false" href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-image">
				<img src="<?php echo $url[$i][0]->url?>">
			</div>
			<div class="tt_card_div card-action">
				<?php echo $titles[$i]->name; ?>
			</div>
		</div>
	</div>
</a>
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
