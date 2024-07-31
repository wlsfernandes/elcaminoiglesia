
<?php 

include 'head.php'; include 'navbar.php' ?>


<!--SUBPAGE HEAD-->

<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3>Contate-nos</h3>
    <p class="lead">Casa Brasil a sua casa em Atlanta</p>
  </div>
</div>

<!-- // END SUBPAGE HEAD -->

<div class="container">
  <div class="row">
    <div class="col-md-6 has-margin-bottom">
      <form id="phpcontactform" role="form">
        <div class="form-group">
          <label><?php echo $lang['nome']; ?></label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="mobile" id="mobile">
        </div>
        <div class="form-group">
          <label><?php echo $lang['mensagem']; ?></label>
          <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Send message</button>
        <span class="help-block loading"></span>
      </form>
    </div>
    <!--// col md 9-->
    
    <div class="col-md-6 has-margin-bottom">
      <h5><?php echo $lang['nosso_endereco']; ?></h5>
      <div class="row">
        <div class="col-lg-6"><?php echo $lang['igreja_casa_brasil']; ?><br>
        <?php echo $lang['numero_endereco']; ?> <br>
        <?php echo $lang['bairro_cep']; ?></div>
        <div class="col-lg-6">Phone: +1 (561) 340-9109<br>
          Email: <a href="#">rev.rafael@igrejacasabrasil.com</a></div>
      </div>
      <hr>
    </div>
  </div>
</div>

<div class="location-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6611.655065590119!2d-84.17515932365193!3d34.04829491793771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f599f751e5fc8d%3A0x4756cf8fa973faa0!2sIgreja%20Casa%20Brasil!5e0!3m2!1sen!2sus!4v1715731680401!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php include 'footer.php' ?>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/ketchup.all.js"></script> 
<script src="js/contact_form.js"></script> 
<script src="js/script.js"></script> 

</body>
</html>
