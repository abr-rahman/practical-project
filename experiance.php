<?php
session_start();
  require_once "database.php";
  $experiance = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">Experience</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Experience</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Experience</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="experiance_post.php" method="post">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="company_name">

                  <?php if(isset($_SESSION['company_name_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['company_name_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Duration : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="duration" placeholder="Eg: 2012-2016">

                  <?php if(isset($_SESSION['duration_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['duration_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Designation : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="designation">

                  <?php if(isset($_SESSION['designation_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['designation_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                  <label class="form-control-label">Description : <span class="tx-danger">*</span></label>
                 <textarea class="form-control" rows="4" name="description"></textarea>

                 <?php if(isset($_SESSION['description_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['description_err'] ?></small>
                  <?php endif?>
              </div><!-- col-12 -->
            
            </div><!-- row -->

            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Add Experiance</button>
            </div><!-- form-layout-footer -->
          </form>
            <hr>
              <h6>Experience</h6>

            

              <table class="table">
                <thead>
                  <tr>
                    <th>Company Name:</th>
                    <th>Duration :</th>
                    <th>Designation :</th>
                    <th>Description :</th>
                    <th>Edite/Delete</th>
                  </tr>
                </thead>
            
          <?php foreach(arif("experianc") as $single_experiance) : ?>
          
                <tbody>
                  <tr>
                    <td><?= $single_experiance['company_name'] ?></td>
                    <td><?= $single_experiance['duration'] ?></td>
                    <td><?= $single_experiance['designation'] ?></td>
                    <td><?= $single_experiance['description'] ?></td>  
             
                    <td>
                     <a id="experiance_delete.php?id=<?= $single_experiance['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
                    </td>
                  </tr>
                </tbody>
              <?php endforeach ?>
              </table>
          </div><!-- form-layout -->
         
        </div><!-- card -->

<?php
    require_once "footer.php";
    unset($_SESSION["'duration_err','designation_err','description_err','company_name_err'"]);
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