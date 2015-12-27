<!DOCTYPE html>
<html>
<head>
<title><?php echo $headerTitle?></title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="alternate" href="<?php echo base_url();?>" hreflang="en-us">
<?php if(base_url()=="http://tokyotrack.co/"){ ?>
<link rel="stylesheet" href="<?php echo base_url();?>public/foundation-6/css/foundation.min.css">
<script src="<?php echo base_url();?>public/foundation-6/js/vendor/jquery.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54114189-8', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">                                                                                                                                
$('a').on('click', function() {                                                                                                                                
        ga('send', 'event', 'menu', 'click');                                                                                                                  
});                                                                                                                                                            
</script>                                                                                                                                                      
<?php }else{ ?>
<link rel="stylesheet" href="<?php echo base_url();?>../public/foundation-6/css/foundation.min.css">
<script src="<?php echo base_url();?>../public/foundation-6/js/vendor/jquery.min.js"></script>
<?php } ?>

<style type="text/css">
</style>  
</head>                                                                                                                                                        
<body>                                                                                                                                                         
<div class="title-bar">
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
    <span class="middle title-bar-title">Tokyo Track</span>
  </div>
</div>

<div class="off-canvas-wrapper"><div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas data-position="left">
          <ul class="submenu menu vertical">
		<?php for($i=0;$i<count($titles);$i++){?>
            <li><a href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>"><?php echo $titles[$i]->name;?></a></li>
		<?php } ?>
          </ul>
</div>
<div class="off-canvas-content" data-off-canvas-content>
