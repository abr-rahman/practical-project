<?php
session_start();
  require_once "database.php";
  $fetured_project = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Poor Developed Fund</a>
        <a class="breadcrumb-item" href="index.html">Fetured Project</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Fetured Project</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Fetured Project</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="fetured_project_post.php" method="POST" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Fetured Project Headline : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="project_headline">
                  
                  <?php if(isset($_SESSION['project_headline_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['project_headline_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Project Picture : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="project_picture" >
                  
                  <?php if(isset($_SESSION['project_picture_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['project_picture_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Picture Name : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="picture_name" placeholder="Picture Name">
                  
                  <?php if(isset($_SESSION['picture_name_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['picture_name_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Picture Details : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="picture_details" placeholder="Some Picture Details">
                  
                  <?php if(isset($_SESSION['picture_details_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['picture_details_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-6 -->


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">CLIENTS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="clients">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">COMPLETION : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="completion">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">PROJECT TYPE : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="project_type">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">AUTHORS : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="authors">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">BUDGET : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="budget">
                </div>
              </div>
          
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Fetured Project</button>
            </div><!-- form-layout-footer -->
            <hr>
              <h6>Fetured Project</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th>Fetured Project</th>
                    <th>Project Picture</th>
                    <th>Project Name</th>
                    <th>Picture Details</th>
                    <th>CLIENTS</th>
                    <th>COMPLETION</th>
                    <th>PROJECT TYPE</th>
                    <th>AUTHORS</th>
                    <th>BUDGET</th>
                    <th>Edite/Delete</th>
                  </tr>
                </thead>
          
          <?php foreach(arif("fetured_project") as $single_project) : ?>
          
                <tbody>
                  <tr>
                    <td><?= $single_project['project_headline'] ?></td>
                    <td> <img  src="img/portfolio/<?= $single_project['project_picture'] ?>" alt="" width="200px" ></td>
                    <td><?= $single_project['picture_name'] ?></td>
                    <td><?= $single_project['picture_details'] ?></td>>
                    <td><?= $single_project['clients'] ?></td>
                    <td><?= $single_project['completion'] ?></td>
                    <td><?= $single_project['project_type'] ?></td>
                    <td><?= $single_project['authors'] ?></td>
                    <td><?= $single_project['budget'] ?></td>
                    <td>
                      <a id="fetured_project_delete.php?id=<?= $single_project['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
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
    unset($_SESSION["'project_headline_err','project_picture_err','picture_name_err','picture_details_err'"]);
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