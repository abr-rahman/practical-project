<?php
  require_once "index_header.php";
?>

<section id="news" class="section bg-light">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Latest news</h2></div>
        </div>
        <div class="mt-5 pt-5">
          <div class="row-news row">

          <?php foreach(arif('news') as $single_news) : ?>

            <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
              <figure class="position-relative">
                <div class="position-relative">
                  <a href=""><img alt="Not Found" style="width: 348px!important; height: 191px;" class="w-100 d-block" src="img/news/<?= $single_news['news_photo'] ?>"></a>
                  <mark class="date"><?= $single_news['news_date_time'] ?></mark>
                </div>
                <figcaption>
                  <h5><a href="news_details.php?id=<?=$single_news['id']?>"><?= $single_news['news_headline'] ?></a></h5>
                  <?= substr( $single_news['news_details'], 0, 35) ?>...
                </figcaption>
              </figure>
            </div>
            <?php endforeach ?> 
         </div>
        </div>
      </div>
    </section>


<?php
  require_once "index_footer.php";
?>