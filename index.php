<?php
  require_once "index_header.php";
?>
    <!-- Masthead -->  
    <?php foreach(letest_number('background_photo', 1) as $single_pic) : ?>

    <main id="home" class="masthead jarallax" style="background-image:url('img/bg/<?=$single_pic['news_new_photo'] ?>')" role="main">
      <div class="opener">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5">

              <h1 class="text-white"><?=setup('setups','author_name')?></h1>
              <p class="lead mt-4 mb-5 text-white"><?=setup('setups','about_me')?></p>
              
              <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
          </div>
          </div>
        </div>
      </div>
    </main>
 <?php endforeach ?>
    <!-- About -->
    <section id="about" class="section">
     <div class="container">
       <h2 data-aos="fade-up">Just trust me.</h2>
       <section class="mt-4">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
              <p><?=setup('setups','turest_me')?></p>
              <div class="experience d-flex align-items-center">
                <div class="experience-number text-parallax"><?=setup('setups','experiance_duration')?></div><div class="text-dark mt-3 ml-4">Years<br> of experience</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 " data-aos="fade-in" data-aos-delay="50">

            <?php foreach(arif("sill") as $single_skill) : ?>

              <h6 class="mt-0"><?=$single_skill['skill_name'] ?></h6>
              <div class="progress mb-5">
                <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?=$single_skill['percantage'] ?>%" aria-valuenow="<?=$single_skill['percantage'] ?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <?php endforeach ?>
            </div>            
          </div>
        </section>
      </div>
    </section>

    <section class="section bg-dark">
     <div class="container">
        <div class="container">
          <div class="row">

          <?php foreach(arif("message_skill") as $single_skill) : ?>

            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
                <i class="text-white fa <?= $single_skill['icon'] ?> fa-5x"></i>
            <h6 class="text-white">
                <?=$single_skill['skill_name'] ?>
            </h6>
              <p>
                 <?=$single_skill['message'] ?>
              </p>
          </div>
           <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>
      
     <!-- Experience -->
     <section id="experience" class="section pb-0">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Experience</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a download href="pdf/download.pdf">Download my cv</a></h6></div>
        </div>
        <div class="mt-5 pt-5">
      
          <?php foreach(arif("experianc") as $single_experiance) : ?>

          <div class="row-experience row justify-content-between" data-aos="fade-up">
            <div class="col-md-4">
              <div class="h6 my-0 text-gray"><?= $single_experiance['duration'] ?></div>
              <h5 class="mt-2 text-primary text-uppercase"><?= $single_experiance['company_name'] ?></h5>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3 mt-0 text-uppercase"><?= $single_experiance['designation'] ?></h5>
            </div>
            <div class="col-md-4">
              <p><?= $single_experiance['description'] ?></p>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section"style="background: <?=setup('setups','color')?>;">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Featured projects</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="view_all_project.php">View all projects</a></h6></div>
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

    
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section" >
      <div class="container">
         <div class="carousel-testimonials owl-carousel">

         <?php foreach(arif('sel_manager') as $single_manager) : ?>

           <div class="col-testimonial" data-aos="fade-up">
              <span class="quiote">"</span>
              <p data-aos="fade-up"><?= $single_manager['message'] ?></p>
              <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $single_manager['employes_name'] ?></strong> - <?= $single_manager['position'] ?></p>
           </div>
            <?php endforeach ?>
         </div>
       </div>
    </section>

     <!-- News --> 
    <section id="news" class="section bg-light">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Latest news</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="text-gray my-0"><a href="news_all.php">View all news</a></h6></div>
        </div>
        <div class="mt-5 pt-5">
          <div class="row-news row">

          <?php foreach(letest_number('news', 3) as $single_news) : ?>

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

    <!-- Partners -->
    <section class="section-sm">
       <div class="container">
         <div class="row-partners row">

         <?php foreach(arif('partner') as $single_partner) : ?>

           <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
              <img alt="" src="img/partners/<?= $single_partner['partner_photo'] ?>">
           </div>
           <?php endforeach ?> 
         </div>
       </div>
    </section>


    <?php
  require_once "index_footer.php";
?>