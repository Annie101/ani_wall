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
</center>
<br>
<br>
<div class="expanded button-group">
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$previousNumber;?>" class="button">Previous</a>
  <a href="<?php echo base_url()."anime/".$titleName."/illustration/".$nextNumber;?>" class="button">Next</a>
</div>
<br>
<br>
</div>

