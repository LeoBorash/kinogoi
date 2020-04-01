<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php
    $query = $conn->query("SELECT * FROM news_ban");
    while ($row = mysqli_fetch_assoc($query)) { ?>
      <div class="swiper-slide">
        <img class="img-thumbnail"src="/<?=$row['news_ban_img']?>">
      </div>
    <?php }
    ?>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>  