<?php
session_start();
  require_once "database.php";
  $news = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">News</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>News</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add News</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="news_post.php" method="post" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">News Headline : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="news_headline">
                  
                  <?php if(isset($_SESSION['news_headline_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['news_headline_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">News Photo : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="news_photo">

                  <?php if(isset($_SESSION['news_details_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['news_details_err'] ?></small>
                  <?php endif?>
                  <small>Size 640x520</small>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-12">
                  <label class="form-control-label">News Details : <span class="tx-danger">*</span></label>
                 <textarea class="form-control" rows="4" name="news_details"></textarea>

                <?php if(isset($_SESSION['news_photo_err'])) :?>
                <small class="text-danger"><?= $_SESSION['news_photo_err'] ?></small>
                <?php endif?>
              </div><!-- col-12 -->
          
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add News</button>
            </div><!-- form-layout-footer -->
            <hr>
              <h6>News</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th>News Headline :</th>
                    <th>News Details :</th>
                    <th>News Photo :</th>
                    <th>Edite/Delete</th>
                  </tr>
                </thead>
            
          <?php foreach(arif("news") as $single_news) : ?>
        
                <tbody>
                  <tr>
                    <td><?= $single_news['news_headline'] ?></td>
                    <td><?= $single_news['news_details'] ?></td>
                    <td>
                      <img src="img/news/<?= $single_news['news_photo'] ?>" alt="not found" width="100">
                    </td>
                    <td>
                      <a href="news_edite.php?id=<?= $single_news['id'] ?>" class="btn btn-sm bg-success"><i class="far fa-edit"></i> Edite</a>
                    </td>
                    <td>
                      <a id="news_delete.php?id=<?= $single_news['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
                    </td>
                  </tr>
                </tbody>
              <?php endforeach ?>
              </table>
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->


<?php
    require_once "footer.php";
    unset($_SESSION["'news_headline_err','news_details_err','news_photo_err'"]);
?>
<!-- Deleted work -->
<?php if(isset($_SESSION['delete_status'])): ?>
  <script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been deleted',
  showConfirmButton: false,
  timer: 1500
})
  </script>
<?php endif;
      unset($_SESSION['delete_status']); ?>
<!-- Deleted work end -->

<!-- Added work -->
<?php if(isset($_SESSION['add_status'])): ?>
<script>
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

</script>
  <?php endif; 
  unset($_SESSION['add_status']); ?>
<!-- Added work end-->

<!-- Confirmation delete work start -->
<script>
   $('.delete_btn').click(function(){
    var link = ($(this).attr('id'));
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link;
  }
})
    });
</script>
<!--Confirmation Deleted work end -->