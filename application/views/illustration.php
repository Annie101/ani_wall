<div class="tt_bread_div col s12 <?echo $color2;?>">
<span class="tt_bread">
<a class="tt_bread" href="<?php echo base_url();?>">TOP</a>
 ＞ 
<a class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>"><?php echo $titleName;?></a>
 ＞ Illustrations
</span>
</div>

<div class="row">
<?php for($i=0;$i<count($imageUrls);$i++){?>
<div class="small-6 large-4 columns">
<a href="<?php echo base_url();?>anime/<?php echo $titleName;?>/picture/<?php echo $i;?>">
<img width="100%" src="<?php echo $imageUrls[$i]->url?>">
</a>
</div>
<?php }?>
</div>
</div>

