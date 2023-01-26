<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/icon/faviconunflep.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="row" style="width: 120%;">
        <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <label for="" style="text-align: center;"> <strong>Bienvenidos!! Antes de Comenzar Presta Atención al video</strong> </label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <video autoplay controls style="width: 100%;">
                <source src="UNFLEP1.mp4" type="video/mp4">
                Tu navegador no soporta HTML5 video.
            </video>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
        <div class="row">
          <form method="POST" action="login.php">
            <section class="vh-100" style="background-color: #E4E4E4;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                      <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                          <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="assets/img/Portada-Login.jpg"
                              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                          </div>
                          <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
              
                              <form>
              
                                <div class="d-flex align-items-center mb-3 pb-1">
                                  <span class="h1 fw-bold mb-0" style="color: #37465D;">Test Vocacional</span>
                                </div>
              
                                <h6 class="fw-normal mb-3 pb-3" style="color: #37465D;">Universidad Nacional Francisco Luis Espinoza Pineda(UNFLEP) - Estelí, Nicaragua</h6>

                                <h6 class="fw-normal mb-3 pb-3" style="color: #37465D;">Ingrese su número de Solicitud</h6>
              
                                <div class="form-outline mb-4">
                                  <input placeholder="Ejemplo 747844354" type="text" name="codprema" id="form2Example17" class="form-control form-control-lg" />
                                </div>
              
                                <div class="pt-1 mb-4">
                                  <a href=""><button class="btn btn-lg btn-block" type="submit" style="width: 100%; background-color: #046633; color: #ffff;">Acceder</button></a>
                                </div>
                                <a href="unflep.edu.ni" class="small text-muted" style="color: #37465D;">Copyright © 2022 UNFLEP.</a>
                                <a href="unflep.edu.ni" class="small text-muted" style="color: #37465D;">Todos los Derechos Reservados</a>
                              </form>
              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
        </form>
    </div>

    <script>
      $( document ).ready(function() {
          $('#myModal').modal('toggle')
      });
    </script>
</body>
</html>