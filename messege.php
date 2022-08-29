<?php 

require_once "header.php"; 
  session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header bg-success">
                <h4 class="card title bg-success p-2 text-center text-white h2">Poor Developed Fund </h4>
       </div>
        <div class="card-body">

       <form action="submit.php" method="POST">            

        <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Left Label Alignment</h6>
              <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p>
              <div class="row">
                <label class="col-sm-4 form-control-label" name="first_name">Firstname: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="Enter your firstname">
                  
                  <?php if(isset($_SESSION['fname_err'])) :?>
                  <small class="text-danger"><?=$_SESSION['fname_err']?></small>
                  <?php endif ?>

                  </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label" name="last_name">Lastname: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="Enter your lastname">

                  <?php if(isset($_SESSION['lname_err'])) : ?>
                  <small class="text-danger"><?=$_SESSION['lname_err']?></small>
                  <?php endif;?>

                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label" name="email">Email: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="email" class="form-control" placeholder="Enter email address">
                  
                  <?php if(isset($_SESSION['email_err'])) : ?>
                  <small class="text-danger"><?=$_SESSION['email_err']?></small>
                  <?php endif;?>

                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label" name="password">Password : <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="password" class="form-control" placeholder="Enter Password">
                
                <?php if(isset($_SESSION['password_err'])) : ?>
                  <small class="text-danger"><?=$_SESSION['password_err']?></small>
                <?php endif;?>
 
              </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label" name="confirm_password">Confirm Password : <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="password" class="form-control" placeholder="Enter Confirm Password">
                           
                <?php if(isset($_SESSION['password_match_err'])) : ?>
                  <small class="text-danger"><?=$_SESSION['password_match_err']?></small>
                <?php endif;?>
    
              </div>
              </div>

              <div class="form-layout-footer mg-t-30">
                <button type="submit" class="btn btn-info mg-r-5">Login</button>
              </div><!-- form-layout-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
          
        </div>
        </form>    
        </div>
    </div> 
        </div>
    </div>
</div>



<?php require_once "footer.php"; 
session_unset();
 // unset($_SESSION["'fname_err','lname_err','email_err','password_err','password_match_err'"]);
?>