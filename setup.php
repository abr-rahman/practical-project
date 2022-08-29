<?php
session_start();
  require_once "database.php";
  $setup = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">Setup</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Setup</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Setup</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
        <form action="setup_post.php" method="post" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Author Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="author_name" value="<?=setup('setups','author_name')?>">

                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="<?=setup('setups','email')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">About ME : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="about_me" value="<?=setup('setups','about_me')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone Number : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone_number" value="<?=setup('setups','phone_number')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Experiance Duration : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="experiance_duration" value="<?=setup('setups','experiance_duration')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Background Color : <span class="tx-danger">*</span></label>
                  <input  type="color" name="color" value="<?=setup('setups','color')?>">
                </div>
              </div><!-- col-4 -->
    
            
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Setup</button>
            </div><!-- form-layout-footer -->
              </table>
          </div><!-- form-layout -->
          
        </form>
        </div><!-- card -->


<?php
    require_once "footer.php";
    //session_unset();
?>

<?php if($_SESSION['add_status']): ?>
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
  unset($_SESSION['add_status']); 
  ?>
  
  