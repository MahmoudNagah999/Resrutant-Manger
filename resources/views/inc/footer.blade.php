@if (Route::has('login'))                
@if (Auth::check())
  <div class="FooterFoot">
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

      <!-- Right -->
      <div class="clearfix">
        <div><span>Get connected with us on social networks :&nbsp;&nbsp;&nbsp;&nbsp;</span>

          <a href="https://www.facebook.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://www.twitter.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="https://www.google.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-google"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="https://www.github.com" target="_blank" class="me-4 text-reset">
            <i class="fa fa-github"></i>
          </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="FooterSection">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Parc Des Princes
            </h6>
            <p>
              Here you can order any meal you would like to eat with a sharming view to the Eiffel tower.
              <br>and with some company it would be much more better.
              <br>At Parc Des Princes the life is more.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="/menu" class="text-reset">Menu</a>
            </p>
            <p>
              <a href="/home" class="text-reset">Offers</a>
            </p>
            <p>
              <a href="/contact" class="text-reset">FQA</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fa fa-home me-3"></i> Cairo, Madinit nasr block 752, EG</p>
            <p><i class="fa fa-envelope me-3"></i> ParcDesPrinces@Gmail.com</p>
            <p><i class="fa fa-phone me-3"></i> + 011 234 567 488</p>
            <p><i class="fa fa-print me-3"></i> + 012 234 567 889</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 FooterCopy">
      © 2021 Copyright:
      <a class="text-reset fw-bold" target="_blank" href="https://gmail.com">Future board Company</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </div>

@endif
@endif