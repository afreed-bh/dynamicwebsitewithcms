<?php include'backend/connection.php';
$scrolling_news_bundle=mysqli_query($connection,"SELECT * FROM scrolling_news");
?>
<div class="container-fluid fixed-bottom  bg-transparent z-depth-1">
<small>
<marquee  behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
<span class="text-white blue">CuatroDEV Headline: </span>
<?php foreach($scrolling_news_bundle as $key => $value){ ?>
    <span style="color: #264653 "> <?= $value['headline'];?>
    </span>
    <?php } ?>
    <span class="text-white default-color">Offers: </span>
    <?php foreach($scrolling_news_bundle as $key => $value){ ?>
    <span style="color: #6a040f"> <?= $value['offers'];?>
    <?php } ?>
    </span>
    <span class="text-white success-color">Contact Us: </span>
    <span style="color: #264653 "> <i class="fas fa-map-marker-alt"></i> House - 11, Road - 11, Sector - 12, Uttara, Dhaka - 1230. <i class="fas fa-envelope"></i> cuatro.dev@gmail.com.
    </span>
</marquee>
</small>
</div>