<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo base_url();?>">TOP</a></li>
    <li><a href="<?php echo base_url();?>anime/<?php echo $titleName;?>"><?php echo $titleName;?></a></li>
    <li class="tt_currect">
      <span class="show-for-sr">Current: </span> Illustration
   </li>
  </ul>
</nav>
<div class="row">
<?php for($i=0;$i<count($imageUrls);$i++){?>
<div class="small-6 large-4 columns">
<a href="<?php echo base_url();?>anime/<?php echo $titleName;?>/illustration/<?php echo $i;?>">
<img height="200" src="<?php echo $imageUrls[$i]->url?>">
</a>
</div>
<?php }?>
</div>
<br>
<br>
<br>
<br>
</div>

