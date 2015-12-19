<!DOCTYPE html>
<html>
<head>
<title><?php echo $artistName;?></title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54114189-5', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    jQuery(function() {  
    jQuery("a").click(function(e) {        
        var name = jQuery(this).attr('name');
        ga('send', 'event', 'Apps', 'click', name);
	});
    });
</script>
</head>
<body>
<div data-role="page" id="p-top" data-theme="c">
<div data-role="header">
<!--
	<a data-ajax="false" href="<?php echo base_url()."index.php/menu/index";?>" class="ui-btn ui-btn-a ui-btn-left">Menu</a>
-->
	<h1><?php echo $artistName;?></h1>
</div>

<div data-role="content">
	<center>
	<img width="100%" src="<?php echo $url;?>"/>

<!--
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-8518445411560478"
     data-ad-slot="2276957141"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
-->
	</center>
	<div data-role="navbar">
		<ul>
		<li><a data-ajax="false" name="nextPage" href="<?php echo base_url("index.php/top/index")."/".$artistId."/".($NextPage);?>">NEXT PICTURE</a></li>
		</ul>
	</div>
<br>
</div>
</div>
</body>
</html>
