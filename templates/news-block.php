<div class="row">
    <?php
        $query = $conn -> query("SELECT * FROM news LIMIT 6");
        while($row = mysqli_fetch_assoc($query)){ ?> 
        <div class="col-md-4 col-6 mt-1 news__main">
             <p class="news__cat"><?=$row['news_cat']?></p>
            <img class="news__img" src="/assets/images/<?=$row['news_images']?>">
            <p class="news__title"><?=$row['news_title']?></p>
        </div>
        <?php }
    ?>
</div>