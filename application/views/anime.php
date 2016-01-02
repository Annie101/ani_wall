      <div class="tt_bread_div col s12 <?php echo $color2;?>">
	<span class="tt_bread"><a name="<?php echo $pageType;?>_bread_top" class="tt_bread" href="<?php echo base_url();?>">TOP</a> ＞ <?php echo $titleName;?></span>
      </div>

<ul class="collection">
<li class="tt_contents_list collection-item">
<h5>Movie</h5>
<!-- Movie -->
<?php if(!empty($movies)){ ?>
<div class="video-container">
<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $movies?>" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<div class="center-align">
<a name="<?php echo $pageType;?>_seemore_movie" href="<?php echo base_url()."anime/".$titleName."/movie"?>" class="<?php echo $color3?> waves-effect waves-light btn">See More Movies</a>
</div>
<br>
<?php } ?>
<!-- Movie -->
</li>

<li class="tt_contents_list collection-item">
<!-- Picture -->
<h5>Pictures</h5>
<?php if(!empty($imageUrls)){ ?>
<div class="carousel">
    <img class="trimming carousel-item"src="<?php echo $imageUrls[0]->url?>">
    <img class="trimming carousel-item"src="<?php echo $imageUrls[1]->url?>">
    <img class="trimming carousel-item"src="<?php echo $imageUrls[2]->url?>">
    <img class="trimming carousel-item"src="<?php echo $imageUrls[3]->url?>">
    <img class="trimming carousel-item"src="<?php echo $imageUrls[4]->url?>">
</div>
<br>
<div class="center-align">
<a name="<?php echo $pageType;?>_seemore_picture" href="<?php echo base_url()."anime/".$titleName."/picture/0"?>" class="<?php echo $color3?> waves-effect waves-light btn">See More Pictures</a>
</div>
<br>
<?php } ?>
<!-- Picture -->
</li>

<li class="tt_contents_list collection-item">
<h5>Details</h5>
<!-- Description -->
<p><?php echo $description?></p>
<!-- Description -->
</li>
</ul>


<!--
    <div id="sns" class="col s12">
<iframe src="http://widget.websta.me/in/tag:<?php echo $tag;?>/?r=1&w=2&h=5&b=1&p=5&sb=off" 
allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;" >
/iframe> 
<br><a href="<?php echo base_url()."anime/".$titleName."/instagram"?>">See more</a>
</div>
-->

