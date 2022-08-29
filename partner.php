
<?php
session_start();
  require_once "database.php";
  $img_icon = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">Partner</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Partner</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Partner</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="partner_post.php" method="post" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
             
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Partner Photo : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="partner_photo">
                </div>
              </div><!-- col-6 -->
          
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Partner</button>
            </div><!-- form-layout-footer -->
            <hr>
              <h6>Partner</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th>Partner Photo :</th>
                    <th>Edite/Delete</th>
                  </tr>
                </thead>
            
          <?php foreach(arif("Partner") as $single_Partner) : ?>
          
                <tbody>
                  <tr>
                    <td><?= $single_Partner['partner_photo'] ?></td>
                    <td>
                      <a id="partner_delete.php?id=<?= $single_Partner['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
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