<?php include "templates/header.php" ?>

  <div class="container pt-4">
      <div class="row no-gutters">
          <div class="col-12 hero">
              <img src="img/contacto.jpg" alt="contacto" class="img-fluid">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2>
          </div>
      </div>
  </div>
  <div class="container pt-4">
      <div class="row justify-content-center">
        <main class="col-lg-10 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Contacto
            </h2>
            <form action="" class="mt-5 p-5 formulario-contacto needs-validation" novalidate>
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
                <div class="invalid-feedback">El nombre es obligatorio</div>
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Tu e-mail" required>
                <div class="invalid-feedback">El email es obligatorio</div>
                <div class="valid-feedback">Dirección de correo válida</div>
              </div>
              <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="2" class="form-control" required></textarea>
                <div class="invalid-feedback">El mensaje no puede estar vacio</div>
              </div>
              <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
            </form>
      </main>
    </div>
  </div>

  <?php include "templates/footer.php" ?>