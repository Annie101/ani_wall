<div class="col s12">
<ul class="tabs">
<li class="tab col s3"><a name="<?php echo $pageType;?>_tab_news" class="active" href="#news">NEWS</a></li>
<li class="tab col s3"><a name="<?php echo $pageType;?>_tab_updated" href="#updated">UPDATED</a></li>
<li class="tab col s3"><a name="<?php echo $pageType;?>_tab_anime_list" href="#animeList">ANIME LIST</a></li>
</ul>
</div>
<div id="news" class="col s12">
<ul class="collection">

<?php 
for($i=0;$i<count($entry);$i++){ ?>
<li class="collection-item avatar">
<a name="<?php echo $pageType;?>_news_article" href="<?php echo $entry[$i]['link']; ?>">
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

<a name="<?php echo $pageType;?>_news_seemore" href="<?php echo base_url()."news"; ?>" class="seeMoreNewsButton waves-effect waves-light btn">See More News</a>
</div>

<div id="updated" class="col s12">
<ul data-role="listview">
<div class="row">
<?php for($i=0;$i<count($newTitles);$i++){ ?>
<div class="col s12 m7">
<a name="<?php echo $pageType;?>_new_<?php echo $newTitles[$i]->name;?>" data-ajax="false" href="<?php echo base_url();?>anime/<?php echo $newTitles[$i]->name;?>">
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
        <a name="<?php echo $pageType;?>_list_<?php echo $titles[$i]->name;?>" href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>" class="collection-item"><?php echo $titles[$i]->name;?></a>
	<?php } ?>
      </div>
</div>
