
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/sylelogin.css">
    <link rel="icon" href="imgs/logo.png" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <div ><span class="error">CREDENCIALES INCORRECTAS</span></div>
            <div class="mb-md-5 mt-md-4 pb-5">

            <form action="../../models/verificar.php" method="post" class="formDelLogin">
              <h2 class="fw-bold mb-2 text-uppercase">Inicio De Sesion</h2>
            
              <div class="form-outline form-white mb-4">
                <input type="text" id="usuario" name="usuario" required class="form-control form-control-lg">
                <label class="form-label" for="usuario">Usuario</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="contra" name="contra" class="form-control form-control-lg" required>
                <label class="form-label" for="contra">Contrasena</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Iniciar sesión" name="btnIngresar">Login</button>
              </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>