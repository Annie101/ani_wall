<ul data-role="listview">                                                                                                                                      
<?php for($i=0;$i<count($titles);$i++){ ?>                                                                                                               
<li>
<a data-ajax="false" href="">
<h1><?php echo $titles[$i]->name; ?></h1>
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
    <form method="POST" action="<?php echo base_url();?>" data-ajax="false">
        <input name="anime" type="text" />
        <input type="submit" value="Request Other Anime" />
    </form>
</li>                                                                                                                                                               
</ul>               
