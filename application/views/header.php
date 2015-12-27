<!DOCTYPE html>
<html>
<head>
<title><?php echo $headerTitle?></title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="alternate" href="<?php echo base_url();?>" hreflang="en-us">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<?php if(base_url()=="http://tokyotrack.co/"){ ?>
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
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>../public/materialize/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>../public/style.css"  media="screen,projection"/>
<script src="<?php echo base_url();?>../public/materialize/js/materialize.js"></script>
<script type="text/javascript">                                                                                                                                
$('a').on('click', function() {
ga('send', 'event', 'menu', 'click');                                                                 });                                                                                                                                                            
(function($){
 $(function(){
	 $('.button-collapse').sideNav();
	 $('.parallax').parallax();
	 $(".dropdown-button").dropdown();
	 $('.slider').slider({full_width: true});
	 }); 
 })(jQuery);
</script>                                                                                                                                                      
<?php } ?>
</head>                                                            <header>
    <nav>
        <div class="nav-wrapper <?php echo $color1?>">
        <a href="<?php echo base_url()?>" class="tt_logo_a brand-logo">Tokyo Track</a>
        <ul id="nav-mobile" class="right side-nav">
	<?php for($i=0;$i<count($titles);$i++){?>
            <li><a href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>"><?php echo $titles[$i]->name;?></a></li>
	<?php } ?>
        </ul>
        <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
</header>
