<?php
  require_once("../../template/plantillaFormulario.php");
?>

  <header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="../../Index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <h3>PatojoMarket</h3>
          </a>
        </div>
      </div>
    </div>
  </header>

<div class="form-signin">
  <form action="../controlador/login.php" method="POST">
    <img class="mb-4" src="../../imagen/pngegg.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Correo Electronico </label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Introduce tu contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <a href="#olvidaContraseña">Olvide mi contraseña...</a>
      <br>
      <label>
        <input type="checkbox" value="remember-me"> Acuerdate de mi...
      </label>

    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn_enviar">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">© 2021–2022</p>
  </form>
</div>