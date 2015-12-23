
<!DOCTYPE html>
<html>
<head>
<title>TOKYO TRACK</title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
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
<style type="text/css">
.ninja_image {
        position: relative;
}
.ninja_image_label {
        position: absolute;
        left:10px;
        top:10px;
}
.ninja_tag {
        margin-bottom:5px;
        color: #757575;
}
.glyphicon{
        margin-right:8px;
}

.navbar{
	background-color:#0288D1;
}

.navbar-brand:link { color: #FFFFFF; }
.navbar-brand:visited { color: #FFFFFF; }
.navbar-brand:hover { color: #FFFFFF; }
.navbar-brand:active { color: #FFFFFF; }

.ani_breadcrumb{
	background-color:#E1F5FE;
}

.contents_menu{
	background-color:#FAFAFA;
}

.panel-default > .panel-heading{
	background-color:#0288D1;
	color:#FFFFFF;
}

</style>  
</head>                                                                                                                                                        
<body>                                                                                                                                                         

<nav class="navbar">
        <div class="container">
                <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url();?>">TOKYO TRACK</a>

                </div>
                <div class="collapse navbar-collapse" id="navbarEexample1">
                        <ul class="nav navbar-nav">
				<!--
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CATEGORY <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo base_url();?>top">ALL</a></li>
                                                                                                <li><a href="<?php echo base_url();?>top/anime/<?php echo $titles[0]->name;?>"><?php echo $titles[0]->name?></a></li>
                                                                                        </ul>
                                </li>
                                <li><a href="http://www.delshack.co/ani_wall/about">ABOUT US</a></li>

				<form class="navbar-form navbar-left" role="search" method="POST" action="http://www.delshack.co/ani_wall/index.php/menu" data-ajax="false">
						<div class="form-group">
							<input name="anime" type="text" class="form-control" size="40" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Search</button>
				</form>
				-->
                        </ul>
                </div>
        </div>
</nav>
<div class="container" style="padding:0 0 0 0">
   <!-- content -->
    <div class="row">
        <!-- left -->
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Anime List
                </div>
                <ul class="nav nav-pills nav-stacked">
			<?php for($i=0;$i<count($titles);$i++){?>
                    <li><a href="<?php echo base_url();?>anime/<?php echo $titles[$i]->name;?>"><?php echo $titles[$i]->name;?></a></li>
			<?php } ?>
                </ul> 
            </div>
        </div>
        <!-- center -->
        <div class="col-md-10">
