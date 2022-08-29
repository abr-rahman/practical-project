<?php
  require_once "index_header.php";
?>

<section id="projects" class="section"style="background: <?=setup('setups','color')?>;">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Featured projects</h2></div>
        </div>
        <div class="mt-5 pt-5" data-aos="fade-in">
          <div class="carousel-project owl-carousel">

          <?php foreach(arif("fetured_project") as $single_project) : ?>

           <div class="project-item">
              <a href="#project1<?= $single_project['id'] ?>" class="popup-with-zoom-anim">
                <figure class="position-relative">

                  <img alt="" class="w-100" src="img/portfolio/<?= $single_project['project_picture'] ?>">

                  <figcaption class="text-white">

                    <h3 class="mb-2 text-white"><?= $single_project['picture_name'] ?></h3>
                    <p><?= $single_project['picture_details'] ?></p>
                  </figcaption>
                </figure>
              </a>
           </div>
        <?php endforeach ?>
         </div>
        </div>
      </div>
    </section>
    <?php foreach(arif("fetured_project") as $single_project) : ?>

<!-- Project Modal Dialog 1 -->
<div id="project1<?= $single_project['id'] ?>" class="container mfp-hide zoom-anim-dialog">
  <h2 class="mt-0"><?= $single_project['picture_name'] ?></h2>
  <div class="mt-5 pt-2 text-dark">
    <div class="row">
      <div class="mb-5 col-md-6 col-lg-3">
        <h6 class="my-0">Clients:</h6>
        <span><?= $single_project['clients'] ?></span>
      </div>
      <div class="mb-5 col-md-6 col-lg-3">
        <h6 class="my-0">Completion:</h6>
        <span><?= $single_project['completion'] ?></span>
      </div>
      <div class="mb-5 col-md-6 col-lg-3">
        <h6 class="my-0">Project Type:</h6>
        <span><?= $single_project['project_type'] ?></span>
      </div>
      <div class="mb-5 col-md-6 col-lg-3">
        <h6 class="my-0">Authors</h6>
        <span><?= $single_project['authors'] ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <h6 class="my-0">Budget:</h6>
        <span><?= $single_project['budget'] ?></span>
      </div>
    </div>
  </div>
  <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/<?= $single_project['project_picture'] ?>">
</div>

<?php endforeach ?>

<?php
  require_once "index_footer.php";
?>