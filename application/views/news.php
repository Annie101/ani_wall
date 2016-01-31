      <div class="tt_bread_div col s12 <?php echo $color2;?>">
	<span class="tt_bread"><a name="<?php echo $pageType;?>_bread_top" class="tt_bread" href="<?php echo base_url();?>">TOP</a> ＞ <?php echo $titleName;?></span>
      </div>

<ul class="collection">

<?php 
for($i=0;$i<count($entry);$i++){ ?>
<li class="collection-item avatar">
<a  name="<?php echo $pageType;?>_news_article" href="<?php echo $entry[$i]['link']; ?>">
<img src="<?php echo $entry[$i]['image'] ?>" alt="" class="circle">

<?php 
if(strlen($entry[$i]['title']) > 140){ ?>
<p class="truncate"><?php echo $entry[$i]['title']; ?></p>
<?php }else{ ?>
<p><?php echo $entry[$i]['title']; ?></p>
<?php } ?>
<p class="media"><?php echo date("Y/m/d",$entry[$i]['date'])." - ".$entry[$i]['media'];//." - ".$entry[$i]['date']; ?></p>
</a>
      </li>
<?php } ?>
</ul>

<?php if($preButton !== false){ ?>
<a name="<?php echo $pageType;?>_news_previous" href="<?php echo base_url()."news/index/".$preButton; ?>" class="preButton waves-effect waves-light btn">PREVIOUS</a>
<?php }?>
<?php if($nextButton !== false){ ?>
<a name="<?php echo $pageType;?>_news_next" href="<?php echo base_url()."news/index/".$nextButton; ?>" class="nextButton waves-effect waves-light btn">NEXT</a>
<?php } ?>
