<!-- Latest Product-->
<section id="latest" class="row">
  <div class="container">
    <h1 class="heading1"><span class="maintext">Lastest Products</span><span class="subtext"> See Our Lastest Products</span></h1>
    <ul class="thumbnails">
      <?php foreach($lastest_product as $item){ ?>
        <li class="span3">
          <a class='productname' href="<?php echo 'chi-tiet-san-pham.php?id='.$item['id'] ?>"><?php echo $item['name'] ?></a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <?php echo "<a href='chi-tiet-san-pham.php?id=".$item['id']."'><img alt='' src='resources/upload/".$item['image']."'></a>"; ?>
            <div class="pricetag">
              <span class="spiral"></span>
              <?php echo "<a href='routes/mua-hang.php?id=".$item['id']."' class='productcart'>ADD TO CART</a>"; ?>
              <div class="price">
                <?php echo "<div class='pricenew'>".number_format($item['price'],0,",",".")."</div>"; ?>
                <div class="priceold"></div>
              </div>
            </div>
          </div>
        </li>
      <?php } ?>
      </li>
    </ul>
  </div>
</section>
<!-- Random Product-->
  <section id="random" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Random Products</span><span class="subtext"> See Our Random Products</span></h1>
      <ul class="thumbnails">
      <?php
      foreach($random_product as $item){
        ?>
        <li class="span3">
          <a class='productname' href="<?php echo 'chi-tiet-san-pham.php?id='.$item['id'] ?>"><?php echo $item['name'] ?></a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <?php echo "<a href='chi-tiet-san-pham.php?id=".$item['id']."'><img alt='' src='resources/upload/".$item['image']."'></a>";
            ?>
            <div class="pricetag">
              <span class="spiral"></span>
              <?php echo "<a href='routes/mua-hang.php?id=".$item['id']."' class='productcart'>ADD TO CART</a>"; ?>
              <div class="price">
              <?php echo "<div class='pricenew'>".number_format($item['price'],0,",",".")."</div>";
              ?>
                <div class="priceold"></div>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
        </li>
      </ul>
    </div>
  </section>