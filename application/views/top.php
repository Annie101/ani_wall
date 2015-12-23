<?php for($i=0;$i<count($artists);$i++){ ?>
<div class="panel panel-default">
        <div class="panel-heading">
                <?php echo $artists[$i]->name?>
        </div>
        <div class="panel-body">
        <div class="media-left">
                <a href="https://www.instagram.com/<?php //echo $username[$i]?>/">
		<img height="150px" src="<?php echo $url[$i][0]->url;?>"></a>
		<img height="150px" src="<?php echo $url[$i][1]->url;?>"></a>
		<img height="150px" src="<?php echo $url[$i][2]->url;?>"></a>
		<img height="150px" src="<?php echo $url[$i][3]->url;?>"></a>
        </div>
        </div>
</div>
<?php } ?>
