<!DOCTYPE html>                                                                                                                                                
<html>                                                                                                                                                         
<head>                                                                                                                                                         
<title>Movies</title>                                                                                                                                          
<meta charset="utf-8"/>                                                                                                                                        
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />                                                               
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>                                                                                            
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>                                                                         
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
</head>                                                                                                                                                        
<body>                                                                                                                                                         
<div data-role="page" id="p-top" data-theme="a">                                                                                                               
<div data-role="header">                                                                                                                                       
<h1>Ani Wall</h1>                                                                                                                                        
</div>                                                                                                                                                         
                                                                                                                                                               
<div data-role="content">                                                                                                                                      
<ul data-role="listview">                                                                                                                                      
<?php for($i=0;$i<count($artists);$i++){ ?>                                                                                                               
<li>
<a data-ajax="false" href="<?php echo base_url()."index.php/top/index/".$artists[$i]->id."/0";?>">
<h1><?php echo $artists[$i]->name; ?></h1>
<img height="100" src="<?php echo $url[$i][0]->url?>">
<img height="100" src="<?php echo $url[$i][2]->url?>">
<img height="100" src="<?php echo $url[$i][3]->url?>">
<img height="100" src="<?php echo $url[$i][4]->url?>">
<!--
-->
</a>
</li>                                                                                                                                                      
<?php } ?>                                                                                                                                                     
<li>
<h1>REQUEST</h1>
    <form method="POST" action="<?php echo base_url('index.php/menu');?>" data-ajax="false">
        <input name="anime" type="text" />
        <input type="submit" value="Request Other Anime" />
    </form>
</li>                                                                                                                                                               
</ul>                                                                                                                                                          
</div>                                                                                                                                                         
</div>                                                                                                                                                         
</body>                                                                                                                                                        
</html> 
