<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php
    $query = $conn->query("SELECT * FROM news_ban");
    while ($row = mysqli_fetch_assoc($query)) { ?>
      <div class="swiper-slide">
        <img class="img-fluid" src="/assets/images/6.jpg" alt="">
      </div>
    <?php }
    ?>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>  