<div class="tt_bread_div col s12 <?php echo $color2?>">
<span class="tt_bread">
<a name="<?php echo $pageType;?>_bread_top" class="tt_bread" href="<?php echo base_url();?>">TOP</a>
 ＞ 
<a name="<?php echo $pageType;?>_bread_anime" class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>"><?php echo $titleName;?></a>
 ＞ 
<a name="<?php echo $pageType;?>_bread_picture" class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>/picture/0">Picture</a>
</span>
</div>

<center>
<img width="80%" src="<?php echo $imageUrls[$currentNumber]->url?>">
<br>
<?php if(base_url()=="http://tokyotrack.co/"){ ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- TokyoTrack_banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-8518445411560478"
     data-ad-slot="7643976349"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php } ?>
<div class="col s12">
  <a name="<?php echo $pageType;?>_previous" href="<?php echo base_url()."anime/".$titleName."/picture/".$previousNumber;?>" class="<?php echo $color3?> preButton waves-effect waves-light btn s6">BACK</a>
  <a name="<?php echo $pageType;?>_next" href="<?php echo base_url()."anime/".$titleName."/picture/".$nextNumber;?>" class="<?php echo $color3?> nextButton waves-effect waves-light btn s6">NEXT </a>
</div>
<br>

<a name="<?php echo $pageType;?>_tweet_<?php echo $hashtag?>" data-hashtags="<?php echo $hashtag; ?> #tokyotrack" data-size="large" class="twitter-share-button" href="https://twitter.com/share" data-dnt="true">tweet</a>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>

<?php if(base_url()=="http://tokyotrack.co/"){ ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- TokyoTrack_footer -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8518445411560478"
     data-ad-slot="9120709545"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php } ?>
<div class="collection">
  <p class="tt_color1 collection-item">ANIME LIST</p>
	<?php for($i=0;$i<count($titles);$i++){?>
        <a name="<?php echo $pageType;?>_seeother_anime_<?php echo $titles[$i]->name;?>" href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>" class="collection-item"><?php echo $titles[$i]->name;?></a>
	<?php } ?>
  <a name="<?php echo $pageType;?>_seeother_anime" href="<?php echo base_url()?>" class="collection-item">See Other Anime</a>
      </div>
</center>
</div>

