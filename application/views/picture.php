<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo base_url();?>">TOP</a></li>
    <li class="tt_currect">
      <span class="show-for-sr">Current: </span> <?php echo $titleName;?> 
   </li>
  </ul>
</nav>
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
<div class="expanded button-group">
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$previousNumber;?>" class="button">Previous</a>
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$nextNumber;?>" class="button">Next</a>
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

