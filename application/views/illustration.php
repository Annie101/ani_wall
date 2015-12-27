<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo base_url();?>">TOP</a></li>
    <li class="tt_currect">
      <span class="show-for-sr">Current: </span> <?php echo $titleName;?> 
   </li>
  </ul>
</nav>
<?php for($i=0;$i<count($imageUrls);$i++){?>
<img height="200" src="<?php echo $imageUrls[$i]->url?>">
<?php }?>
<br>
<br>
<br>
<br>
</div>

