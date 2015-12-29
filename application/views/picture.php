<div class="tt_bread_div col s12 <?php echo $color2?>">
<span class="tt_bread">
<a class="tt_bread" href="<?php echo base_url();?>">TOP</a>
 ＞ 
<a class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>"><?php echo $titleName;?></a>
 ＞ 
<a class="tt_bread" href="<?php echo base_url();?>anime/<?php echo $titleName;?>/illustration/0">Illustration</a>
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
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$previousNumber;?>" class="<?php echo $color3?> waves-effect waves-light btn s6">＜Previous</a>
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$nextNumber;?>" class="<?php echo $color3?> waves-effect waves-light btn s6">Next＞</a>
</div>
<div style="margin-top:5px" class="col s12">
  <a href="<?php echo base_url()?>" class="<?php echo $color3?> waves-effect waves-light btn s6">See Other Anime</a>
</div>
<br>
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
</center>
</div>

