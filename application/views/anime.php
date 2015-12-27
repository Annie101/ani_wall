      <div class="tt_bread_div col s12 <?php echo $color2;?>">
	<span class="tt_bread"><a class="tt_bread" href="<?php echo base_url();?>">TOP</a> ＞ <?php echo $titleName;?></span>
      </div>

    <div class="tt_tab_div col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="tt_tab_a" href="#detail">Detail</a></li>
        <li class="tab col s4"><a class="tt_tab_a" href="#pictures">Illustrations</a></li>
<!--
        <li class="tab col s4"><a href="#sns">SNS</a></li>
-->
      </ul>
    </div>
    <div id="detail" class="col s12">
<?php if(!empty($movies)){ ?>
<div class="video-container">
<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $movies?>" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<div class="center-align">
<a href="<?php echo base_url()."anime/".$titleName."/movie"?>" class="<?php echo $color3?> waves-effect waves-light btn">See More Movies</a>
</div>
<?php } ?>
<br>
<p><?php echo $description?></p>

</div>
<div id="pictures" class="col s12">
<?php if(!empty($imageUrls)){ ?>
<?php for($i=0;$i<5;$i++){?>
<img width="100%" class="responsive-img" src="<?php echo $imageUrls[$i]->url?>">
<?php }?>
<br>
<br>
<div class="center-align">
<a href="<?php echo base_url()."anime/".$titleName."/illustration"?>" class="<?php echo $color3?> waves-effect waves-light btn">See More Pictures</a>
</div>
<br>
<?php } ?>
</div>
<!--
    <div id="sns" class="col s12">
<iframe src="http://widget.websta.me/in/tag:<?php echo $tag;?>/?r=1&w=2&h=5&b=1&p=5&sb=off" 
allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;" >
/iframe> 
<br><a href="<?php echo base_url()."anime/".$titleName."/instagram"?>">See more</a>
</div>
-->

