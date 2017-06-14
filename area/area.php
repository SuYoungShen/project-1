<?php foreach ($DisplayPlaceSes as $key => $value) { ?>
<div class="col-sm-3 col-xs-12 portfolio-item <?php echo $value[place];?>">
  <div class="view efffect">
    <div class="portfolio-image">
      <img src="<?php echo $bc.$value[path].$value[name];?>" alt=""></div>
      <div class="mask text-center">
        <h3><?php echo $value["viewpoint"]; ?></h3>
        <!-- <h4>Lorem ipsum dolor sit amet consectetur</h4> -->
        <a href="#"><i class="fa fa-link"></i></a>
        <!-- <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a> -->
        <a href="" data-toggle="modal" data-target="#area-<?php echo $key;?>"><i class="fa fa-search-plus"></i></a>
      </div>
  </div>
</div>

<div class="modal fade" id="area-<?php echo $key;?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <img src="<?php echo $bc.$value[path].$value[name];?>" class="img-responsive"  alt="" />
        <h2><?php echo $value["place"]."|".$value["viewpoint"]; ?></h2>
        <h4>介紹</h4>
        <p><?php echo $value["attractions"]; ?></p>
        <h4>如何到達:</h4>
        <p><?php echo $value["arrival"]; ?></p>
      </div><!--modal-body-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div><!--modal-->
<?php } ?>
