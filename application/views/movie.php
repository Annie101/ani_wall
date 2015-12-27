<div class="tt_bread_div col s12 <?echo $color2;?>">
<span class="tt_bread">
<a class="tt_bread" href="<?php echo base_url();?>">TOP</a>
 ＞ 
<a class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>"><?php echo $titleName;?></a>
 ＞ Movies
</span>
</div>
<div class="video-container">
<?php for($i=0;$i<count($movies);$i++){?>
<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $movies?>" frameborder="0" allowfullscreen></iframe>
<?php }?>
</div>
</div>

