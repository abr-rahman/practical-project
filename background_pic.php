<?php
  require_once "database.php";
  $background = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">Edite News</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Edite</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Edite News</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
          
          <form action="background_post.php" method="POST" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
         
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">News Photo : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="news_new_photo">
                </div>
              </div><!-- col-6 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Edite News</button>
            </div><!-- form-layout-footer -->   
          </table>
        </div><!-- form-layout -->
      </form>
  </div><!-- card -->


<?php
    require_once "footer.php";
?>


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
