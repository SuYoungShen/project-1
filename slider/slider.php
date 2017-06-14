<ol class="carousel-indicators">
  <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
  <?php for ($i=1; $i < $CountSilder; $i++) { ?>
  <li data-target="#main-carousel" data-slide-to="<?php echo $i;?>"></li>
  <?php } ?>
</ol><!--/.carousel-indicators-->
<div class="carousel-inner">
  <div class="item active" style="background-image: url(<?php echo $SliderPic0;?>)">
    <div class="carousel-caption">
      <div>
        <h2 class="heading animated bounceInDown">'Himu' Onepage HTML Template</h2>
        <p class="animated bounceInUp">Fully Professional one page template</p>
        <a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a>
      </div>
    </div>
  </div>
  <?php for ($i=1; $i < $CountSilder; $i++) {?>

  <div class="item" style="background-image: url(<?php echo $bc.$DisplaySlider[$i][path].$DisplaySlider[$i][name];?>)">
    <div class="carousel-caption">
      <div>
        <h2 class="heading animated bounceInDown">Get All in Onepage</h2>
        <p class="animated bounceInUp">Everything is outstanding </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a>
      </div>
    </div>
  </div><!-- item -->
  <?php } ?>
</div><!--/.carousel-inner-->
