<!-- SUBSCRIBE -->
<div class="highlight-bg">
  <div class="container">
    <div class="row">
      <form action="subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
        <div class="form-group col-md-3 hidden-sm">
          <h5 class="susbcribe-head"><?php echo $lang['inscreva_se'] ?><span><?php echo $lang['nosso_boletim'] ?></span></h5>
        </div>
        <div class="form-group col-sm-8 col-md-6">
          <label class="sr-only">Email address</label>
          <input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
          <span class="help-block" id="result"></span>
        </div>
        <div class="form-group col-sm-4 col-md-3">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END SUBSCRIBE -->

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h5><?php echo $lang['sobre_nossa_igreja']; ?></h5>
        <p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
      </div>
      <!-- <div class="col-sm-6 col-md-3">
        <h5>QUICK LINKS</h5>
        <ul class="footer-links">
          <li><a href="#">Upcoming events</a></li>
          <li><a href="#">Ministries</a></li>
          <li><a href="#">Recent Sermons</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div> -->
      <div class="col-sm-6 col-md-3">
        <h5><?php echo $lang['nosso_endereco']; ?></h5>
        <p> <?php echo $lang['igreja_casa_brasil']; ?><br>
          <?php echo $lang['numero_endereco']; ?> <br>
          <?php echo $lang['bairro_cep']; ?> <br>
          <br>
          Phone: +1 (561) 340-9109<br>
          Email: <a href="#">rev.rafael@igrejacasabrasil.org</a>
        </p>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>CONNECT</h5>
        <div class="social-icons"><a href="#"><img src="images/fb-icon.png" alt="social"></a> <a href="#"><img src="images/tw-icon.png" alt="social"></a> <a href="#"><img src="images/in-icon.png" alt="social"></a></div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <p class="text-center">Copyright © devpromaster.com <span id="year"></span> All rights reserved</p>
    </div>
  </div>
</footer>


<!-- // END -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/ketchup.all.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/script.js"></script>
<script>
  var currentYear = new Date().getFullYear();
  document.getElementById('year').textContent = currentYear;
</script>


<!-- // END FOOTER -->