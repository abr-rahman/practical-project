<?php
session_start();
  require_once "database.php";
  $manager = true;
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
        
          <form action="sel_manager_post.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              
            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Message : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="message">
                  
                  <?php if(isset($_SESSION['message_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['message_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="employes_name">

                  <?php if(isset($_SESSION['employes_name_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['employes_name_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
             
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Position : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="position">
                  
                  <?php if(isset($_SESSION['position_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['position_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->        
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Experiance</button>
            </div><!-- form-layout-footer -->
            <hr>
              <h6>Experience</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th>Name:</th>
                    <th>Message :</th>
                    <th>Postion :</th>
                    <th>Edite</th>
                  </tr>
                </thead>
            
          <?php foreach(arif("sel_manager") as $single_experiance) : ?>
        
                <tbody>
                  <tr>
                    <td><?= $single_experiance['employes_name'] ?></td>
                    <td><?= $single_experiance['message'] ?></td>
                    <td><?= $single_experiance['position'] ?></td>
                    <td>
                    <a id="sel_manager_delete.php?id=<?= $single_experiance['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
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
    unset($_SESSION["'message_err','employes_name_err','position_err'"]);
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