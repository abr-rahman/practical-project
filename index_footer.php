<?php
require_once "database.php";
?>

    <!-- Footer -->  
    <footer>
      <div class="section bg-dark py-5 pb-0">
        <div class="container">
          <div class="row">
           <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Phone:</h6>

             <p class="text-white mb-4"><?=setup('setups','phone_number')?></p>
            </div>
            <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Email:</h6>

             <p class="text-white mb-4"><?=setup('setups','email')?></p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Follow me:</h6>
              <ul class="social-icons">
               <li><a href="https://www.facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
               <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
               <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
               <li><a href="#"> <ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Subscribe:</h6>
              <form class="" action="subscribe.php" method="POST">
                <div class="input-group">
                  <input id="mc-email" type="email" name="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <button class="btn" type="submit">Go</button>
                  </div>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copy section-sm">
        <div class="container">© Copyright 2020 Richard. All Rights Reserved</div>
       </div>
    </footer>
     
    <!-- Modal -->
    <div class="modal fade" id="send-request">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title mt-0">Send request</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Leave your contacts and our managers will contact you soon.</p>

           <form class="form-request" action="head_form.php" method="POST">
             <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
             <div class="form-group">
               <input type="email" name="email"  class="form-control" required="" placeholder="Email *">
             </div>
             <div class="form-group">
              <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
             </div>
             <div class="message" id="success-message">Your message is successfully sent...</div>
             <div class="message" id="error-message">Sorry something went wrong</div>
             <div class="form-group mb-0 text-right">
               <button type="submit" class="btn">Submit</button>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- Optional JavaScript -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/interface.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 