<ol class="ani_breadcrumb breadcrumb">
	<li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="<?php echo base_url();?>">TOP</a></li>
	<li class="active"><?php echo $titleName;?></li>
</ol>
<h1><?php echo $titleName?></h1>
<p><?php echo $description?></p>

<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Movie</h4></ol>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movies?>" frameborder="0" allowfullscreen></iframe>
<br><a href="<?php echo base_url()."anime/".$titleName."/movie"?>">See more</a>

<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Illustration</h4></ol>

<?php for($i=0;$i<5;$i++){?>
<img height="200" src="<?php echo $imageUrls[$i]->url?>">
<?php }?>

<br><a href="<?php echo base_url()."anime/".$titleName."/illustration"?>">See more</a>

<ol class="contents_menu breadcrumb" style="margin-top:20px"><h4>Instagram</h4></ol>
<iframe src="http://widget.websta.me/in/tag:<?php echo $tag;?>/?r=1&w=5&h=5&b=1&p=5&sb=off" 
allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:100%; height:900px" >
</iframe> <!-- websta - websta.me -->
<br><a href="<?php echo base_url()."anime/".$titleName."/instagram"?>">See more</a>
<br>
<br>
<br>
<br>
</div>

