<div class="container text-center">
    <div class="section-title center">
      <h2 class="section-heading">Contáctanos</h2>
      <p class="section-subheading">Nos comunicaremos con usted lo antes posible.</p>
      <div class="space"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">      
      <form  id="contactForm"  action="./layout/enviar.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="visitor_name" class="form-control" placeholder="Nombre" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="visitor_email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="col-md-12 messagebox">
            <div class="form-group">
            <input type="text"  id="title" name="email_title" class="form-control" placeholder="Asunto" required="required">
            <p class="help-block text-danger"></p>
        </div>
        </div>
        <div class="col-md-12 messagebox">
            <div class="form-group">
          <textarea name="message" id="message"  name="visitor_message"class="form-control" rows="4" placeholder="Mensaje" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        </div>
        
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar mensaje</button>
      </form>
      
    </div>
  </div>
  <p></p>
</div>