<?php 

  if(isset($_POST['btnenviar'])){
    $codprema = $_POST['prematricula'];
  }

?>


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
    <link rel="stylesheet" href="css/test.css">
</head>
<body>
  <div id="column_left" class="col-xs-12 col-lg-3">
    <div class="my-fixed-item">
      <div id="app"></div>
    </div>
  </div>
    <img src="assets/img/Arriba.png" alt="" style="width: 100%;">
    <div class="container">
      <div class="cargando row">       
        <div class="d-flex justify-content-center">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Cargando...</span>
          </div>
        </div>
      </div>
      <br>
        <div class="row" style="padding: 0 10% 0 10%;">
            <div class="col-md-6">
                <img src="assets/img/logoUNFLEP.png" alt="" style="width: 30%;">
            </div>
            <div class="col-md-6 vAling">
                <h4 style="text-align: right;   height: 150px;
                display:flex;
                justify-content: center;
                align-items: center; font-family: 'Montserrat'; color: #37465D;">INGRESO 2023 TEST VOCACIONAL</h4>
            </div>
        </div>

        <br><br>

        <form action="procesar.php" method="post">


          <div class="container">
            <div class="row">
              <!-- Modal HTML -->
              <div id="myModal" class="modal fade">
                  <div class="modal-dialog modal-login">
                      <div class="modal-content" style="width: 100%">
                          <div class="modal-header">
                            <label for=""></label>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                          </div>
                          <div class="modal-body" style="text-align: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-x-circle border-danger" viewBox="0 0 16 16" style="color: #ea0000 !important;">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <br><br>
                            <p>Oops! <br> Lo sentimos, termino el tiempo presione el boton Fin del Test Vocacional</p>
                            <div class="row">
                              <div class="pt-1 mb-4">
                              <a><button class="btn btn-lg btn-block" type="submit" style="width: 100%; background-color: #046633; color: #ffff;">Fin del Test Vocacional</button></a>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

        <div class="row formulario" style="padding: 0 10% 0 10%;">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #046633;" >N° Prematrícula</label>
                    <input type="text" class="form-control" id="doc" name="prematricula" placeholder="Ejemplo 747844354" onblur="buscar_datos();" required>
                </div> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #046633;">Sexo</label>
                    <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #046633;">Nombres y Apellidos</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres y Apellidos" readonly>
                </div>
            </div>
        </div>
        <br><br>

        <div class="row" style="text-align: center;">
            <h2 style="color: #046633;"> <b> Test Vocacional </b></h2>
        </div>
        <br>

        <div class="row"  style="text-align: center;">
            <h5 style="color: #37465D;"> <b> Te Gusta Más (+) - Te Gusta Menos (-) </b></h5>
        </div>
        <br><br>

        <div class="row">
          <div class="col-md-12" style="background-color: #f9b0331e;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 1</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>En sus viajes observar de preferencia la gente</td>
                  <input class="form-check-input" type="checkbox" value="En sus viajes observar de preferencia la gente" name="pregunta" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op1" name="chk_op1" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op2" name="chk_op2" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="chk_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>En sus viajes observar de preferencia los paisajes</td>
                  <input class="form-check-input" type="checkbox" value="En sus viajes observar de preferencia los paisajes" name="pregunta2" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op3" name="chk_op3" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="chk_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op4" name="chk_op4" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="chk_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>En sus viajes observar de preferencia los cultivos</td>
                  <input class="form-check-input" type="checkbox" value="En sus viajes observar de preferencia los cultivos" name="pregunta3" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op5" name="chk_op5" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="chk_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk_op6" name="chk_op6" onclick="javascript:seleccionar();">
                      <label class="form-check-label" for="chk_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores" class="">
            espere
          </div>
        </div>


        <br>
        <!--SEgunda encuesta-->

        <div class="row">
          <div class="col-md-12" style="background-color: #37465d23;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 2</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ayudarse económicamente dedicando varias horas a leerle a un ciego</td>
                  <input class="form-check-input" type="checkbox" value="Ayudarse económicamente dedicando varias horas a leerle a un ciego" name="pregunta4" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op1" name="chk2_op1" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op2" name="chk2_op2" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ayudarse económicamente llevando la estadística de vehículos que pasan por un retén</td>
                  <input class="form-check-input" type="checkbox" value="Ayudarse económicamente llevando la estadística de vehículos que pasan por un retén" name="pregunta5" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op3" name="chk2_op3" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op4" name="chk2_op4" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ayudarse económicamente haciendo encuestas entre el pueblo</td>
                  <input class="form-check-input" type="checkbox" value="Ayudarse económicamente haciendo encuestas entre el pueblo" name="pregunta6" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op5" name="chk2_op5" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk2_op6" name="chk2_op6" onclick="javascript:seleccionar2();">
                      <label class="form-check-label" for="chk2_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div id="errores2" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row">
          <div class="col-md-12" style="background-color: #04663325;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 3</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar lugares de diversión en una feria de pueblo</td>
                  <input class="form-check-input" type="checkbox" value="Visitar lugares de diversión en una feria de pueblo" name="pregunta7" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op1" name="chk3_op1" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op2" name="chk3_op2" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar la exposición de productos alimenticios caseros en una feria de pueblo</td>
                  <input class="form-check-input" type="checkbox" value="Visitar la exposición de productos alimenticios caseros en una feria de pueblo" name="pregunta8" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op3" name="chk3_op3" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op4" name="chk3_op4" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar la exposición de ganado en una feria de pueblo</td>
                  <input class="form-check-input" type="checkbox" value="Visitar la exposición de ganado en una feria de pueblo" name="pregunta9" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op5" name="chk3_op5" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk3_op6" name="chk3_op6" onclick="javascript:seleccionar3();">
                      <label class="form-check-label" for="chk3_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores3" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 4</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer ejercicios de atletismo</td>
                  <input class="form-check-input" type="checkbox" value="Hacer ejercicios de atletismo" name="pregunta10" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op1" name="chk4_op1" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op2" name="chk4_op2" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ir a pescar</td>
                  <input class="form-check-input" type="checkbox" value="Ir a pescar" name="pregunta11" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op3" name="chk4_op3" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op4" name="chk4_op4" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar fútbol</td>
                  <input class="form-check-input" type="checkbox" value="Jugar fútbol" name="pregunta12" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op5" name="chk4_op5" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk4_op6" name="chk4_op6" onclick="javascript:seleccionar4();">
                      <label class="form-check-label" for="chk4_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores4" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 5</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hojear libros y revistas en una librería</td>
                  <input class="form-check-input" type="checkbox" value="Hojear libros y revistas en una librería" name="pregunta13" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op1" name="chk5_op1" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op2" name="chk5_op2" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Presenciar el ensayo de una orquesta</td>
                  <input class="form-check-input" type="checkbox" value="Presenciar el ensayo de una orquesta" name="pregunta14" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op3" name="chk5_op3" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op4" name="chk5_op4" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar un jardín zoológico</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un jardín zoológico" name="pregunta15" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op5" name="chk5_op5" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk5_op6" name="chk5_op6" onclick="javascript:seleccionar5();">
                      <label class="form-check-label" for="chk5_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores5" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 6</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Coleccionar autógrafos de personajes célebres</td>
                  <input class="form-check-input" type="checkbox" value="Coleccionar autógrafos de personajes célebres" name="pregunta16" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op1" name="chk6_op1" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op2" name="chk6_op2" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Coleccionar mariposas</td>
                  <input class="form-check-input" type="checkbox" value="Coleccionar mariposas" name="pregunta17" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op3" name="chk6_op3" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op4" name="chk6_op4" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Coleccionar muestras de maderas</td>
                  <input class="form-check-input" type="checkbox" value="Coleccionar muestras de maderas" name="pregunta18" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op5" name="chk6_op5" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk6_op6" name="chk6_op6" onclick="javascript:seleccionar6();">
                      <label class="form-check-label" for="chk6_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores6" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 7</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar una exposición de cuadros famosos</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una exposición de cuadros famosos" name="pregunta19" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op1" name="chk7_op1" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op2" name="chk7_op2" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una exposición de distintos medios de transporte</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una exposición de distintos medios de transporte" name="pregunta20" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op3" name="chk7_op3" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op4" name="chk7_op4" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op4">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una exposición de equipos de laboratorio</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una exposición de equipos de laboratorio" name="pregunta21" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op5" name="chk7_op5" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op5">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk7_op6" name="chk7_op6" onclick="javascript:seleccionar7();">
                      <label class="form-check-label" for="chk7_op6">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores7" class="">
            espere
          </div>
        </div>


        <br>


        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 8</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vender frutas</td>
                  <input class="form-check-input" type="checkbox" value="Vender frutas" name="pregunta22" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op1" name="chk8_op1" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="chk8_op1">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op2" name="chk8_op2" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="chk8_op2">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser un pianista profesional</td>
                  <input class="form-check-input" type="checkbox" value="Ser un pianista profesional" name="pregunta23" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op3" name="chk8_op3" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="chk8_op3">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op4" name="chk8_op4" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cultivar hortalizas</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar hortalizas" name="pregunta24" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op5" name="chk8_op5" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk8_op6" name="chk8_op6" onclick="javascript:seleccionar8();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores8" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 9</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dirigir la organización de una fiesta en un club social</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir la organización de una fiesta en un club social" name="pregunta25" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op1" name="chk9_op1" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op2" name="chk9_op2" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Decorar el salón para la fiesta</td>
                  <input class="form-check-input" type="checkbox" value="Decorar el salón para la fiesta" name="pregunta26" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op3" name="chk9_op3" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op4" name="chk9_op4" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Repartir las invitaciones para la fiesta</td>
                  <input class="form-check-input" type="checkbox" value="Repartir las invitaciones para la fiesta" name="pregunta27" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op5" name="chk9_op5" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk9_op6" name="chk9_op6" onclick="javascript:seleccionar9();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores9" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 10</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar un museo de ciencias</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un museo de ciencias" name="pregunta28" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op1" name="chk10_op1" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op2" name="chk10_op2" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una empresa periodística</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una empresa periodística" name="pregunta29" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op3" name="chk10_op3" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op4" name="chk10_op4" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una fábrica de máquinas de escribir</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una fábrica de máquinas de escribir" name="pregunta30" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op5" name="chk10_op5" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk10_op6" name="chk10_op6" onclick="javascript:seleccionar10();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores10" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 11</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer para distraer a una persona enferma</td>
                  <input class="form-check-input" type="checkbox" value="Leer para distraer a una persona enferma" name="pregunta31" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op1" name="chk11_op1" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op2" name="chk11_op2" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar tretas a un perro</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar tretas a un perro" name="pregunta32" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op3" name="chk11_op3" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op4" name="chk11_op4" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Desarmar un juguete dañado para ver cómo se arregla</td>
                  <input class="form-check-input" type="checkbox" value="Desarmar un juguete dañado para ver cómo se arregla" name="pregunta33" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op5" name="chk11_op5" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk11_op6" name="chk11_op6" onclick="javascript:seleccionar11();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores11" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 12</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Recibir clases de dibujo</td>
                  <input class="form-check-input" type="checkbox" value="Recibir clases de dibujo" name="pregunta34" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op1" name="chk12_op1" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op2" name="chk12_op2" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Recibir clases de biología</td>
                  <input class="form-check-input" type="checkbox" value="Recibir clases de biología" name="pregunta35" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op3" name="chk12_op3" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op4" name="chk12_op4" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Recibir clases de metalistería</td>
                  <input class="form-check-input" type="checkbox" value="Recibir clases de metalistería" name="pregunta36" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op5" name="chk12_op5" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk12_op6" name="chk12_op6" onclick="javascript:seleccionar12();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div id="errores12" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 13</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Constuir pajareras</td>
                  <input class="form-check-input" type="checkbox" value="Constuir pajareras" name="pregunta37" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op1" name="chk13_op1" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op2" name="chk13_op2" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre las aves</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre las aves" name="pregunta38" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op3" name="chk13_op3" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op4" name="chk13_op4" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dibujar las aves</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar las aves" name="pregunta39" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op5" name="chk13_op5" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk13_op6" name="chk13_op6" onclick="javascript:seleccionar13();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores13" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 14</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tratar de arreglar una máquina de coser dañada</td>
                  <input class="form-check-input" type="checkbox" value="Tratar de arreglar una máquina de coser dañada" name="pregunta40" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op1" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op2" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tocar el piano</td>
                  <input class="form-check-input" type="checkbox" value="Tocar el piano" name="pregunta41" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op3" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op4" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer el bosquejo de un escena interesante</td>
                  <input class="form-check-input" type="checkbox" value="Hacer el bosquejo de un escena interesante" name="pregunta42" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op5" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk14_op6" onclick="javascript:seleccionar14();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores14" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 15</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer un libro titulado "cómo cultivar buenas frutas."</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro titulado cómo cultivar buenas frutas." name="pregunta43" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op1" name="chk15_op1" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op2" name="chk15_op2" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer un libro titulado "cómo trabajar con materiales plásticos."</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro titulado cómo trabajar con materiales plásticos." name="pregunta44" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op3" name="chk15_op3" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op4" name="chk15_op4" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer un libro titulado "cómo tomar fotos de animales en su ambiente natural."</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro titulado cómo tomar fotos de animales en su ambiente natural." name="pregunta45" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op5" name="chk15_op5" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk15_op6" name="chk15_op6" onclick="javascript:seleccionar15();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores15" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 16</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tener a su cargo en un periódico la columna de "consejeros personales."</td>
                  <input class="form-check-input" type="checkbox" value="Tener a su cargo en un periódico la columna de consejeros personales." name="pregunta46" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op1" name="chk16_op1" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op2" name="chk16_op2" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Criar perros de raza</td>
                  <input class="form-check-input" type="checkbox" value="Criar perros de raza" name="pregunta47" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op3" name="chk16_op3" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op4" name="chk16_op4" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Investigar la eficiencia de diversos medios de propaganda</td>
                  <input class="form-check-input" type="checkbox" value="Investigar la eficiencia de diversos medios de propaganda" name="pregunta48" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op5" name="chk16_op5" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk16_op6" name="chk16_op6" onclick="javascript:seleccionar16();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores16" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 17</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser autoridad en el juego de ajedrez</td>
                  <input class="form-check-input" type="checkbox" value="Ser autoridad en el juego de ajedrez" name="pregunta49" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op1" name="chk17_op1" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op2" name="chk17_op2" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser autoridad en erosión de suelos</td>
                  <input class="form-check-input" type="checkbox" value="Ser autoridad en erosión de suelos" name="pregunta50" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op3" name="chk17_op3" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op4" name="chk17_op4" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser autoridad en materia  de propaganda gráfica</td>
                  <input class="form-check-input" type="checkbox" value="Ser autoridad en materia  de propaganda gráfica" name="pregunta51" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op5" name="chk17_op5" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk17_op6" name="chk17_op6" onclick="javascript:seleccionar17();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores17" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 18</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar un estudio cinematográfico</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un estudio cinematográfico" name="pregunta52" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op1" name="chk18_op1" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op2" name="chk18_op2" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una región montañosa célebre por sus paisajes</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una región montañosa célebre por sus paisajes" name="pregunta53" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op3" name="chk18_op3" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op4" name="chk18_op4" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar un antiguo campo de batalla</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un antiguo campo de batalla" name="pregunta54" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op5" name="chk18_op5" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk18_op6" name="chk18_op6" onclick="javascript:seleccionar18();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores18" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 19</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer sobre las actuaciones de los hombres y mujeres célebres en la vida pública</td>
                  <input class="form-check-input" type="checkbox" value="Leer sobre las actuaciones de los hombres y mujeres célebres en la vida pública" name="pregunta55" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op1" name="chk19_op1" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op2" name="chk19_op2" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer las opiniones de varios escritores sobre lo que sería el mundo ideal</td>
                  <input class="form-check-input" type="checkbox" value="Leer las opiniones de varios escritores sobre lo que sería el mundo ideal" name="pregunta56" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op3" name="chk19_op3" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op4" name="chk19_op4" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer cómo vivían los primeros colonizadores  del país</td>
                  <input class="form-check-input" type="checkbox" value="Leer cómo vivían los primeros colonizadores  del país" name="pregunta57" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op5" name="chk19_op5" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk19_op6" name="chk19_op6" onclick="javascript:seleccionar19();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores19" class="">
            espere
          </div>
        </div>


        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 20</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como psicólogo profesional atendiendo consultas de carácter personal</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como psicólogo profesional atendiendo consultas de carácter personal" name="pregunta58" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op1" name="chk20_op1" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op2" name="chk20_op2" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cazar animales raros para un museo</td>
                  <input class="form-check-input" type="checkbox" value="Cazar animales raros para un museo" name="pregunta59" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op3" name="chk20_op3" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op4" name="chk20_op4" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pagar cheques al público en un banco</td>
                  <input class="form-check-input" type="checkbox" value="Pagar cheques al público en un banco" name="pregunta60" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op5" name="chk20_op5" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk20_op6" name="chk20_op6" onclick="javascript:seleccionar20();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores20" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 21</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Pertenecer a una sociedad que estudie los problemas del mundo contemporáneo</td>
                  <input class="form-check-input" type="checkbox" value="Pertenecer a una sociedad que estudie los problemas del mundo contemporáneo" name="pregunta61" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op1" name="chk21_op1" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op2" name="chk21_op2" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pertenecer a un club literario</td>
                  <input class="form-check-input" type="checkbox" value="Pertenecer a un club literario" name="pregunta62" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op3" name="chk21_op3" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op4" name="chk21_op4" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pertenecer a una sociedad de aficionados a los estudios astronómicos</td>
                  <input class="form-check-input" type="checkbox" value="Pertenecer a una sociedad de aficionados a los estudios astronómicos" name="pregunta63" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op5" name="chk21_op5" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk21_op6" name="chk21_op6" onclick="javascript:seleccionar21();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores21" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 22</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Relacionarse con gente común y corriente</td>
                  <input class="form-check-input" type="checkbox" value="Relacionarse con gente común y corriente" name="pregunta64" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op1" name="chk22_op1" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op2" name="chk22_op2" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Relacionarse con gente extravagante y de ideas raras</td>
                  <input class="form-check-input" type="checkbox" value="Relacionarse con gente extravagante y de ideas raras" name="pregunta65" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op3" name="chk22_op3" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op4" name="chk22_op4" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Relacionarse con gente alegre y despreocupada</td>
                  <input class="form-check-input" type="checkbox" value="Relacionarse con gente alegre y despreocupada" name="pregunta66" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op5" name="chk22_op5" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk22_op6" name="chk22_op6" onclick="javascript:seleccionar22();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores22" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 23</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar castellano a los extranjeros</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar castellano a los extranjeros" name="pregunta67" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op1" name="chk23_op1" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op2" name="chk23_op2" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender pólizas de seguros</td>
                  <input class="form-check-input" type="checkbox" value="Vender pólizas de seguros" name="pregunta68" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op3" name="chk23_op3" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op4" name="chk23_op4" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser cocinero jefe de un restaurante de lujo</td>
                  <input class="form-check-input" type="checkbox" value="Ser cocinero jefe de un restaurante de lujo" name="pregunta69" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op5" name="chk23_op5" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk23_op6" name="chk23_op6" onclick="javascript:seleccionar23();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores23" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 24</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Desarrollar nuevas variedades de flores</td>
                  <input class="form-check-input" type="checkbox" value="Desarrollar nuevas variedades de flores" name="pregunta70" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op1" name="chk24_op1" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op2" name="chk24_op2" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir la propaganda para floristerías</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir la propaganda para floristerías" name="pregunta71" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op3" name="chk24_op3" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op4" name="chk24_op4" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Atender pedidos telefónicos en una floristería</td>
                  <input class="form-check-input" type="checkbox" value="Atender pedidos telefónicos en una floristería" name="pregunta72" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op5" name="chk24_op5" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk24_op6" name="chk24_op6" onclick="javascript:seleccionar24();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores24" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 25</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dirigir investigaciones sobre los métodos de la propaganda comercial</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir investigaciones sobre los métodos de la propaganda comercial" name="pregunta73" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op1" name="chk25_op1" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op2" name="chk25_op2" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser Decano de una Facultad Universitaria</td>
                  <input class="form-check-input" type="checkbox" value="Ser Decano de una Facultad Universitaria" name="pregunta74" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op3" name="chk25_op3" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op4" name="chk25_op4" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser experto en fotografía de colores</td>
                  <input class="form-check-input" type="checkbox" value="Ser experto en fotografía de colores" name="pregunta75" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op5" name="chk25_op5" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk25_op6" name="chk25_op6" onclick="javascript:seleccionar25();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores25" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 26</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dibujar cuadros para un libro de historia universal</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar cuadros para un libro de historia universal" name="pregunta76" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op1" name="chk26_op1" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op2" name="chk26_op2" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Producir una nueva variedad de naranjas sin semilla</td>
                  <input class="form-check-input" type="checkbox" value="Producir una nueva variedad de naranjas sin semilla" name="pregunta77" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op3" name="chk26_op3" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op4" name="chk26_op4" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Entrenar un grupo escénico ganador del primer puesto en un concurso nacional</td>
                  <input class="form-check-input" type="checkbox" value="Entrenar un grupo escénico ganador del primer puesto en un concurso nacional" name="pregunta78" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op5" name="chk26_op5" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk26_op6" name="chk26_op6" onclick="javascript:seleccionar26();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores26" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 27</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Costear en parte sus estudios trabajando como ayudante de laboratorio</td>
                  <input class="form-check-input" type="checkbox" value="Costear en parte sus estudios trabajando como ayudante de laboratorio" name="pregunta79" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op1" name="chk27_op1" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op2" name="chk27_op2" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Costearlos en parte ayudando en la secretaría del plantel donde estudia</td>
                  <input class="form-check-input" type="checkbox" value="Costearlos en parte ayudando en la secretaría del plantel donde estudia" name="pregunta80" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op3" name="chk27_op3" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op4" name="chk27_op4" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Costear en parte sus estudios tocando en una orquesta</td>
                  <input class="form-check-input" type="checkbox" value="Costear en parte sus estudios tocando en una orquesta" name="pregunta81" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op5" name="chk27_op5" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk27_op6" name="chk27_op6" onclick="javascript:seleccionar27();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores27" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 28</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir un libro sobre la historia de la Cruz Roja</td>
                  <input class="form-check-input" type="checkbox" value="Escribir un libro sobre la historia de la Cruz Roja" name="pregunta82" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op1" name="chk28_op1" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op2" name="chk28_op2" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Buscar datos que arrojen nueva luz sobre un célebre acontecimiento histórico</td>
                  <input class="form-check-input" type="checkbox" value="Buscar datos que arrojen nueva luz sobre un célebre acontecimiento histórico" name="pregunta83" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op3" name="chk28_op3" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op4" name="chk28_op4" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir una comedia musical</td>
                  <input class="form-check-input" type="checkbox" value="Escribir una comedia musical" name="pregunta84" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op5" name="chk28_op5" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk28_op6" name="chk28_op6" onclick="javascript:seleccionar28();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores28" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 29</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar castellano</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar castellano" name="pregunta85" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op1" name="chk29_op1" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op2" name="chk29_op2" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Atender pedidos telefónicos en un almacén</td>
                  <input class="form-check-input" type="checkbox" value="Atender pedidos telefónicos en un almacén" name="pregunta86" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op3" name="chk29_op3" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op4" name="chk29_op4" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer encuestas de opinión pública sobre temas de actualidad</td>
                  <input class="form-check-input" type="checkbox" value="Hacer encuestas de opinión pública sobre temas de actualidad" name="pregunta87" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op5" name="chk29_op5" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk29_op6" name="chk29_op6" onclick="javascript:seleccionar29();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores29" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 30</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Estar encargado de compras para un gran almacén</td>
                  <input class="form-check-input" type="checkbox" value="Estar encargado de compras para un gran almacén" name="pregunta88" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op1" name="chk30_op1" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op2" name="chk30_op2" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estar encargado de entrevistar a los aspirantes a empleos en una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Estar encargado de entrevistar a los aspirantes a empleos en una empresa" name="pregunta89" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op3" name="chk30_op3" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op4" name="chk30_op4" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una hacienda ganadera</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una hacienda ganadera" name="pregunta90" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op5" name="chk30_op5" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk30_op6" name="chk30_op6" onclick="javascript:seleccionar30();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores30" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 31</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser jefe de personal en una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Ser jefe de personal en una empresa" name="pregunta91" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op1" name="chk31_op1" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op2" name="chk31_op2" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir en una revista artículos sobre la vida de animales raros</td>
                  <input class="form-check-input" type="checkbox" value="Escribir en una revista artículos sobre la vida de animales raros" name="pregunta92" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op3" name="chk31_op3" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op4" name="chk31_op4" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir la columna "Consejos personales" en un periódico</td>
                  <input class="form-check-input" type="checkbox" value="Escribir la columna Consejos personales en un periódico" name="pregunta93" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op5" name="chk31_op5" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk31_op6" name="chk31_op6" onclick="javascript:seleccionar31();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores31" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 32</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer sobre métodos modernos empleados en los negocios</td>
                  <input class="form-check-input" type="checkbox" value="Leer sobre métodos modernos empleados en los negocios" name="pregunta94" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op1" name="chk32_op1" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op2" name="chk32_op2" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer sobre las costumbres de los habitantes de otros países</td>
                  <input class="form-check-input" type="checkbox" value="Leer sobre las costumbres de los habitantes de otros países" name="pregunta95" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op3" name="chk32_op3" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op4" name="chk32_op4" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer sobre nuevos métodos de explotación agrícola</td>
                  <input class="form-check-input" type="checkbox" value="Leer sobre nuevos métodos de explotación agrícola" name="pregunta96" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op5" name="chk32_op5" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk32_op6" name="chk32_op6" onclick="javascript:seleccionar32();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores31" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 33</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar en una estación meteorológica en el Ártico</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una estación meteorológica en el Ártico" name="pregunta97" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op1" name="chk33_op1" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op2" name="chk33_op2" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una estación meteorológica en la ciudad</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una estación meteorológica en la ciudad" name="pregunta98" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op3" name="chk33_op3" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op4" name="chk33_op4" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una estación meteorológica en las montañas</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una estación meteorológica en las montañas" name="pregunta99" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op5" name="chk33_op5" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk33_op6" name="chk33_op6" onclick="javascript:seleccionar33();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores33" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 34</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tener fama como director investigaciones científicas</td>
                  <input class="form-check-input" type="checkbox" value="Tener fama como director investigaciones científicas" name="pregunta100" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op1" name="chk34_op1" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op2" name="chk34_op2" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener fama como trabajador en el cuerpo de acción social</td>
                  <input class="form-check-input" type="checkbox" value="Tener fama como trabajador en el cuerpo de acción social" name="pregunta101" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op3" name="chk34_op3" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op4" name="chk34_op4" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener fama como crítico literario.</td>
                  <input class="form-check-input" type="checkbox" value="Tener fama como crítico literario." name="pregunta102" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op5" name="chk34_op5" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk34_op6" name="chk34_op6" onclick="javascript:seleccionar34();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores34" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 35</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Diseñar decoraciones para una obra teatral</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar decoraciones para una obra teatral" name="pregunta103" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op1" name="chk35_op1" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op2" name="chk35_op2" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer análisis químico de un nuevo producto</td>
                  <input class="form-check-input" type="checkbox" value="Hacer análisis químico de un nuevo producto" name="pregunta104" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op3" name="chk35_op3" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op4" name="chk35_op4" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos acerca de cómo reparar en casa utensilios domésticos</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos acerca de cómo reparar en casa utensilios domésticos" name="pregunta105" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op5" name="chk35_op5" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk35_op6" name="chk35_op6" onclick="javascript:seleccionar35();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores35" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 36</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Entrevistar a las personas que soliciten la ayuda de la beneficencia</td>
                  <input class="form-check-input" type="checkbox" value="Entrevistar a las personas que soliciten la ayuda de la beneficencia" name="pregunta106" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op1" name="chk36_op1" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op2" name="chk36_op2" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ensayar varios modelos de cartas de propaganda comercial para ver cual produce mejor resultado</td>
                  <input class="form-check-input" type="checkbox" value="Ensayar varios modelos de cartas de propaganda comercial para ver cual produce mejor resultado" name="pregunta107" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op3" name="chk36_op3" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op4" name="chk36_op4" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Perfeccionar los métodos de trabajo de oficina para hacerlos más efectivos</td>
                  <input class="form-check-input" type="checkbox" value="Perfeccionar los métodos de trabajo de oficina para hacerlos más efectivos" name="pregunta108" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op5" name="chk36_op5" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk36_op6" name="chk36_op6" onclick="javascript:seleccionar36();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores36" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 37</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Redactar la página financiera de un periódico</td>
                  <input class="form-check-input" type="checkbox" value="Redactar la página financiera de un periódico" name="pregunta109" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op1" name="chk37_op1" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op2" name="chk37_op2" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Preparar una nueva aleación de metales, más liviana y resistente</td>
                  <input class="form-check-input" type="checkbox" value="Preparar una nueva aleación de metales , más liviana y resistente" name="pregunta110" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op3" name="chk37_op3" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op4" name="chk37_op4" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Administrar un moderno campamento para obreros.</td>
                  <input class="form-check-input" type="checkbox" value="Administrar un moderno campamento para obreros." name="pregunta111" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op5" name="chk37_op5" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk37_op6" name="chk37_op6" onclick="javascript:seleccionar37();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores37" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;" >
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 38</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar un museo de bellas artes</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un museo de bellas artes" name="pregunta112" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op1" name="chk38_op1" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op2" name="chk38_op2" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar el centro de diversiones  de un barrio popular</td>
                  <input class="form-check-input" type="checkbox" value="Visitar el centro de diversiones  de un barrio popular" name="pregunta113" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op3" name="chk38_op3" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op4" name="chk38_op4" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar un célebre laboratorio de investigaciones médicas</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un célebre laboratorio de investigaciones médicas" name="pregunta114" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op5" name="chk38_op5" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk38_op6" name="chk38_op6" onclick="javascript:seleccionar38();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores38" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 39</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Asumir la responsabilidad de despedir empleados deficientes en una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Asumir la responsabilidad de despedir empleados deficientes en una empresa" name="pregunta115" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op1" name="chk39_op1" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op2" name="chk39_op2" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Asumir la responsabilidad para llamar la atención a empleado cuyo rendimiento no es satisfactorio</td>
                  <input class="form-check-input" type="checkbox" value="Asumir la responsabilidad para llamar la atención a empleado cuyo rendimiento no es satisfactorio" name="pregunta116" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op3" name="chk39_op3" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op4" name="chk39_op4" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Asumir la responsabilidad de emplear el personal nuevo en una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Asumir la responsabilidad de emplear el personal nuevo en una empresa" name="pregunta117" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op5" name="chk39_op5" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk39_op6" name="chk39_op6" onclick="javascript:seleccionar39();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores39" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 40</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer un diccionario de dichos populares</td>
                  <input class="form-check-input" type="checkbox" value="Hacer un diccionario de dichos populares" name="pregunta118" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op1" name="chk40_op1" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op2" name="chk40_op2" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Descubrir un remedio contra el asma</td>
                  <input class="form-check-input" type="checkbox" value="Descubrir un remedio contra el asma" name="pregunta119" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op3" name="chk40_op3" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op4" name="chk40_op4" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Implantar mejores métodos de trabajo en una empresa grande</td>
                  <input class="form-check-input" type="checkbox" value="Implantar mejores métodos de trabajo en una empresa grande" name="pregunta120" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op5" name="chk40_op5" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk40_op6" name="chk40_op6" onclick="javascript:seleccionar40();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores40" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 41</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer un libro sobre la historia del arte dramático</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro sobre la historia del arte dramático" name="pregunta121" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op1" name="chk41_op1" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op2" name="chk41_op2" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer un libro sobre las primitivas formas de la música</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro sobre las primitivas formas de la música" name="pregunta122" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op3" name="chk41_op3" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op4" name="chk41_op4" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer un libro sobre la influencia del lenguaje en el comportamiento</td>
                  <input class="form-check-input" type="checkbox" value="Leer un libro sobre la influencia del lenguaje en el comportamiento" name="pregunta123" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op5" name="chk41_op5" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk41_op6" name="chk41_op6" onclick="javascript:seleccionar41();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores41" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 42</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer un análisis químico de nuevos productos comerciales</td>
                  <input class="form-check-input" type="checkbox" value="Hacer un análisis químico de nuevos productos comerciales" name="pregunta124" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op1" name="chk42_op1" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op2" name="chk42_op2" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en el perfeccionamiento del "Pulmón artificial"para que proporcione mayor comodidad al enfermo </td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en el perfeccionamiento del Pulmón artificial para que proporcione mayor comodidad al enfermo" name="pregunta125" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op3" name="chk42_op3" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op4" name="chk42_op4" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Confeccionar gráficas del estado financiero de una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Confeccionar gráficas del estado financiero de una empresa" name="pregunta126" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op5" name="chk42_op5" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk42_op6" name="chk42_op6" onclick="javascript:seleccionar42();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores42" class="">
            espere
          </div>
        </div>


        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 43</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Repartir hojas volantes a los automóviles que se detienen en una esquina</td>
                  <input class="form-check-input" type="checkbox" value="Repartir hojas volantes a los automóviles que se detienen en una esquina" name="pregunta127" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op1" name="chk43_op1" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op2" name="chk43_op2" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Contar el número de automóviles que pasan por una esquina a distintas horas</td>
                  <input class="form-check-input" type="checkbox" value="Contar el número de automóviles que pasan por una esquina a distintas horas" name="pregunta128" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op3" name="chk43_op3" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op4" name="chk43_op4" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir el tráfico en una esquina</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir el tráfico en una esquina" name="pregunta129" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op5" name="chk43_op5" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk43_op6" name="chk43_op6" onclick="javascript:seleccionar43();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores43" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 44</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Reeducar a los niños lisiados por medio de ejercicios físicos</td>
                  <input class="form-check-input" type="checkbox" value="Reeducar a los niños lisiados por medio de ejercicios físicos" name="pregunta130" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op1" name="chk44_op1" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op2" name="chk44_op2" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cultivar hortalizas para la venta.</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar hortalizas para la venta." name="pregunta131" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op3" name="chk44_op3" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op4" name="chk44_op4" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar la confección de objetos de mimbre</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar la confección de objetos de mimbre" name="pregunta132" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op5" name="chk44_op5" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk44_op6" name="chk44_op6" onclick="javascript:seleccionar44();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores44" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 45</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Recolectar dinero para una obra de beneficiencia</td>
                  <input class="form-check-input" type="checkbox" value="Recolectar dinero para una obra de beneficiencia" name="pregunta133" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op1" name="chk45_op1" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op2" name="chk45_op2" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Redactar informes diarios sobre el progreso de la campaña de recolección de estos fondos</td>
                  <input class="form-check-input" type="checkbox" value="Redactar informes diarios sobre el progreso de la campaña de recolección de estos fondos" name="pregunta134" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op3" name="chk45_op3" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op4" name="chk45_op4" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Contabilizar los fondos recolectados a medida que estos van ingresando</td>
                  <input class="form-check-input" type="checkbox" value="Contabilizar los fondos recolectados a medida que estos van ingresando" name="pregunta135" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op5" name="chk45_op5" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk45_op6" name="chk45_op6" onclick="javascript:seleccionar45();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores45" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 46</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacerse cargo de los preparativos para una boda con numerosos invitados</td>
                  <input class="form-check-input" type="checkbox" value="Hacerse cargo de los preparativos para una boda con numerosos invitados" name="pregunta136" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op1" name="chk46_op1" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op2" name="chk46_op2" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Repartir las invitaciones para la boda</td>
                  <input class="form-check-input" type="checkbox" value="Repartir las invitaciones para la boda" name="pregunta137" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op3" name="chk46_op3" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op4" name="chk46_op4" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir un comentario en la prensa sobre su celebración</td>
                  <input class="form-check-input" type="checkbox" value="Escribir un comentario en la prensa sobre su celebración" name="pregunta138" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op5" name="chk46_op5" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk46_op6" name="chk46_op6" onclick="javascript:seleccionar46();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores46" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 47</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir novelas</td>
                  <input class="form-check-input" type="checkbox" value="Escribir novelas" name="pregunta139" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op1" name="chk47_op1" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op2" name="chk47_op2" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir investigaciones sobre los efectos psicológicos de la música</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir investigaciones sobre los efectos psicológicos de la música" name="pregunta140" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op3" name="chk47_op3" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op4" name="chk47_op4" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Confeccionar objetos de cerámica</td>
                  <input class="form-check-input" type="checkbox" value="Confeccionar objetos de cerámica" name="pregunta141" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op5" name="chk47_op5" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk47_op6" name="chk47_op6" onclick="javascript:seleccionar47();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores47" class="">
            espere
          </div>
        </div>

        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 48</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Investigar la eficiencia de los métodos para incrementar ventas</td>
                  <input class="form-check-input" type="checkbox" value="Investigar la eficiencia de los métodos para incrementar ventas" name="pregunta142" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op1" name="chk48_op1" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op2" name="chk48_op2" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Clasificar la cartas en una oficina de correos</td>
                  <input class="form-check-input" type="checkbox" value="Clasificar la cartas en una oficina de correos" name="pregunta143" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op3" name="chk48_op3" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op4" name="chk48_op4" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Criar pollos</td>
                  <input class="form-check-input" type="checkbox" value="Criar pollos" name="pregunta144" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op5" name="chk48_op5" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk48_op6" name="chk48_op6" onclick="javascript:seleccionar48();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores48" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 49</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir en un periódico la página dedicada a sucesos de actualidad</td>
                  <input class="form-check-input" type="checkbox" value="Escribir en un periódico la página dedicada a sucesos de actualidad" name="pregunta145" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op1" name="chk49_op1" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op2" name="chk49_op2" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dictar conferencias populares sobre química</td>
                  <input class="form-check-input" type="checkbox" value="Dictar conferencias populares sobre química" name="pregunta146" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op3" name="chk49_op3" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op4" name="chk49_op4" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ayudar a los jóvenes a descubrir su vocación</td>
                  <input class="form-check-input" type="checkbox" value="Ayudar a los jóvenes a descubrir su vocación" name="pregunta147" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op5" name="chk49_op5" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk49_op6" name="chk49_op6" onclick="javascript:seleccionar49();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores49" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 50</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tener una persona para que siempre le ayude a resolver sus problemas</td>
                  <input class="form-check-input" type="checkbox" value="Tener una persona para que siempre le ayude a resolver sus problemas" name="pregunta148" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op1" name="chk50_op1" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op2" name="chk50_op2" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener una persona para que ocasionalmente le resuelva sus problemas</td>
                  <input class="form-check-input" type="checkbox" value="Tener una persona para que ocasionalmente le resuelva sus problemas" name="pregunta149" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op3" name="chk50_op3" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op4" name="chk50_op4" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Resolver sus problemas sin consultar a nadie</td>
                  <input class="form-check-input" type="checkbox" value="Resolver sus problemas sin consultar a nadie" name="pregunta150" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op5" name="chk50_op5" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk50_op6" name="chk50_op6" onclick="javascript:seleccionar50();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores50" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 51</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como supervisor de ventas en un gran almacén</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como supervisor de ventas en un gran almacén" name="pregunta151" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op1" name="chk51_op1" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op2" name="chk51_op2" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir investigaciones sobre la televisión</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir investigaciones sobre la televisión" name="pregunta152" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op3" name="chk51_op3" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op4" name="chk51_op4" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir programas recreativos en una institución de beneficencia</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir programas recreativos en una institución de beneficencia" name="pregunta153" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op5" name="chk51_op5" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk51_op6" name="chk51_op6" onclick="javascript:seleccionar51();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores51" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 52</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Controlar el trabajo de varias mecanógrafas</td>
                  <input class="form-check-input" type="checkbox" value="Controlar el trabajo de varias mecanógrafas" name="pregunta154" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op1" name="chk52_op1" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op2" name="chk52_op2" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Entrevistar personas que hacen solicitud de empleo</td>
                  <input class="form-check-input" type="checkbox" value="Entrevistar personas que hacen solicitud de empleo" name="pregunta155" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op3" name="chk52_op3" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op4" name="chk52_op4" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como secretario(a) privado(a)</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como secretario(a) privado(a)" name="pregunta156" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op5" name="chk52_op5" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk52_op6" name="chk52_op6" onclick="javascript:seleccionar52();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores52" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 53</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dibujar tiras cómicas</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar tiras cómicas" name="pregunta157" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op1" name="chk53_op1" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op2" name="chk53_op2" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Redactar propaganda para artículos eléctricos</td>
                  <input class="form-check-input" type="checkbox" value="Redactar propaganda para artículos eléctricos" name="pregunta158" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op3" name="chk53_op3" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op4" name="chk53_op4" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cultivar una huerta</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar una huerta" name="pregunta159" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op5" name="chk53_op5" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk53_op6" name="chk53_op6" onclick="javascript:seleccionar53();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores53" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 54</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ensayar la hechura de dulces cuya receta usted no conoce</td>
                  <input class="form-check-input" type="checkbox" value="Ensayar la hechura de dulces cuya receta usted no conoce" name="pregunta160" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op1" name="chk54_op1" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op2" name="chk54_op2" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Contar cuentos a los niños</td>
                  <input class="form-check-input" type="checkbox" value="Contar cuentos a los niños" name="pregunta161" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op3" name="chk54_op3" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op4" name="chk54_op4" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pintar acuarelas</td>
                  <input class="form-check-input" type="checkbox" value="Pintar acuarelas" name="pregunta162" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op5" name="chk54_op5" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk54_op6" name="chk54_op6" onclick="javascript:seleccionar54();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores54" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 55</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer investigaciones químicas</td>
                  <input class="form-check-input" type="checkbox" value="Hacer investigaciones químicas" name="pregunta163" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op1" name="chk55_op1" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op2" name="chk55_op2" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Entrevistar la las personas que soliciten empleo</td>
                  <input class="form-check-input" type="checkbox" value="Entrevistar la las personas que soliciten empleo" name="pregunta164" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op3" name="chk55_op3" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op4" name="chk55_op4" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir reportajes para los periódicos</td>
                  <input class="form-check-input" type="checkbox" value="Escribir reportajes para los periódicos" name="pregunta165" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op5" name="chk55_op5" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk55_op6" name="chk55_op6" onclick="javascript:seleccionar55();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores55" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 56</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Bosquejar una escena interesante</td>
                  <input class="form-check-input" type="checkbox" value="Bosquejar una escena interesante" name="pregunta166" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op1" name="chk56_op1" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op2" name="chk56_op2" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ensayar varios tipos de aeromodelos para ver cual resulta mejor</td>
                  <input class="form-check-input" type="checkbox" value="Ensayar varios tipos de aeromodelos para ver cual resulta mejor" name="pregunta167" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op3" name="chk56_op3" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op4" name="chk56_op4" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir un ensayo imitando el estilo de un determinado escritor</td>
                  <input class="form-check-input" type="checkbox" value="Escribir un ensayo imitando el estilo de un determinado escritor" name="pregunta168" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op5" name="chk56_op5" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk56_op6" name="chk56_op6" onclick="javascript:seleccionar56();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores56" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 57</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vender boletas para una función de aficionados</td>
                  <input class="form-check-input" type="checkbox" value="Vender boletas para una función de aficionados" name="pregunta169" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op1" name="chk57_op1" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op2" name="chk57_op2" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Preparar los programas y boletas para la función</td>
                  <input class="form-check-input" type="checkbox" value="Preparar los programas y boletas para la función" name="pregunta170" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op3" name="chk57_op3" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op4" name="chk57_op4" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Actuar como tesorero de la función</td>
                  <input class="form-check-input" type="checkbox" value="Actuar como tesorero de la función" name="pregunta171" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op5" name="chk57_op5" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk57_op6" name="chk57_op6" onclick="javascript:seleccionar57();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores57" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 58</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Calcular el costo de fabricación de un nuevo modelo de lavadoras</td>
                  <input class="form-check-input" type="checkbox" value="Calcular el costo de fabricación de un nuevo modelo de lavadoras" name="pregunta172" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op1" name="chk58_op1" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op2" name="chk58_op2" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Convencer a un grupo de capitalistas para que financien la fabricación de estas lavadoras</td>
                  <input class="form-check-input" type="checkbox" value="Convencer a un grupo de capitalistas para que financien la fabricación de estas lavadoras" name="pregunta173" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op3" name="chk58_op3" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op4" name="chk58_op4" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar a la gente el funcionamiento del nuevo modelo de lavadoras</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar a la gente el funcionamiento del nuevo modelo de lavadoras" name="pregunta174" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op5" name="chk58_op5" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk58_op6" name="chk58_op6" onclick="javascript:seleccionar58();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores58" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 59</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Analizar los resultados de encuestas hechas al público</td>
                  <input class="form-check-input" type="checkbox" value="Analizar los resultados de encuestas hechas al público" name="pregunta175" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op1" name="chk59_op1" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op2" name="chk59_op2" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir editoriales para un periódico</td>
                  <input class="form-check-input" type="checkbox" value="Escribir editoriales para un periódico" name="pregunta176" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op3" name="chk59_op3" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op4" name="chk59_op4" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar trabajos manuales en un asilo de niños desamparados</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar trabajos manuales en un asilo de niños desamparados" name="pregunta177" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op5" name="chk59_op5" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk59_op6" name="chk59_op6" onclick="javascript:seleccionar59();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores59" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 60</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Leer acerca de las causas de varias enfermedades</td>
                  <input class="form-check-input" type="checkbox" value="Leer acerca de las causas de varias enfermedades" name="pregunta178" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op1" name="chk60_op1" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op2" name="chk60_op2" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer acerca de cómo lograron éxito los grandes capitanes de la industria</td>
                  <input class="form-check-input" type="checkbox" value="Leer acerca de cómo lograron éxito los grandes capitanes de la industria" name="pregunta179" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op3" name="chk60_op3" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op4" name="chk60_op4" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer acerca de los métodos empleados en la cría de ganados</td>
                  <input class="form-check-input" type="checkbox" value="Leer acerca de los métodos empleados en la cría de ganados" name="pregunta180" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op5" name="chk60_op5" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk60_op6" name="chk60_op6" onclick="javascript:seleccionar60();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores60" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 61</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Asistir a una reunión donde la mayoría de los invitados le es desconocida</td>
                  <input class="form-check-input" type="checkbox" value="Asistir a una reunión donde la mayoría de los invitados le es desconocida" name="pregunta181" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op1" name="chk61_op1" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op2" name="chk61_op2" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Asistir a una reunión en la que usted conoce a casi todos los invitados</td>
                  <input class="form-check-input" type="checkbox" value="Asistir a una reunión en la que usted conoce a casi todos los invitados" name="pregunta182" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op3" name="chk61_op3" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op4" name="chk61_op4" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Asistir a una reunión donde solo la mitad de los invitados le es conocida</td>
                  <input class="form-check-input" type="checkbox" value="Asistir a una reunión donde solo la mitad de los invitados le es conocida" name="pregunta183" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op5" name="chk61_op5" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk61_op6" name="chk61_op6" onclick="javascript:seleccionar61();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores61" class="">
            espere
          </div>
        </div>


        <br>
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 62</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vender materiales y equipos para los artistas pintores</td>
                  <input class="form-check-input" type="checkbox" value="Vender materiales y equipos para los artistas pintores" name="pregunta184" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op1" name="chk62_op1" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op2" name="chk62_op2" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Producir semillas para la venta</td>
                  <input class="form-check-input" type="checkbox" value="Producir semillas para la venta" name="pregunta185" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op3" name="chk62_op3" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op4" name="chk62_op4" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Criar ratones blancos para usos científicos</td>
                  <input class="form-check-input" type="checkbox" value="Criar ratones blancos para usos científicos" name="pregunta186" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op5" name="chk62_op5" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk62_op6" name="chk62_op6" onclick="javascript:seleccionar62();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores62" class="">
            espere
          </div>
        </div>


        <br>
                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 63</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer experimentos de laboratorio</td>
                  <input class="form-check-input" type="checkbox" value="Hacer experimentos de laboratorio" name="pregunta187" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op1" name="chk63_op1" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op2" name="chk63_op2" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Confeccionar muebles</td>
                  <input class="form-check-input" type="checkbox" value="Confeccionar muebles" name="pregunta188" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op3" name="chk63_op3" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op4" name="chk63_op4" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender pólizas de seguro</td>
                  <input class="form-check-input" type="checkbox" value="Vender pólizas de seguro" name="pregunta189" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op5" name="chk63_op5" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk63_op6" name="chk63_op6" onclick="javascript:seleccionar63();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores63" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 64</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Pesar encomiendas postales para determinar el porte que deben llevar</td>
                  <input class="form-check-input" type="checkbox" value="Pesar encomiendas postales para determinar el porte que deben llevar" name="pregunta190" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op1" name="chk64_op1" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op2" name="chk64_op2" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Seleccionar manuscritos enviados para publicación en una revista</td>
                  <input class="form-check-input" type="checkbox" value="Seleccionar manuscritos enviados para publicación en una revista" name="pregunta191" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op3" name="chk64_op3" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op4" name="chk64_op4" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ensayar nuevos modelos de automóviles para intoducirles otras mejoras</td>
                  <input class="form-check-input" type="checkbox" value="Ensayar nuevos modelos de automóviles para intoducirles otras mejoras" name="pregunta192" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op5" name="chk64_op5" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk64_op6" name="chk64_op6" onclick="javascript:seleccionar64();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores64" class="">
            espere
          </div>
        </div>


        <br>
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 65</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser experto en la talla de piedras preciosas</td>
                  <input class="form-check-input" type="checkbox" value="Ser experto en la talla de piedras preciosas" name="pregunta193" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op1" name="chk65_op1" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op2"  name="chk65_op2" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir investigaciones para encontrar un nuevo sustituto al caucho</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir investigaciones para encontrar un nuevo sustituto al caucho" name="pregunta194" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op3" name="chk65_op3" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op4" name="chk65_op4" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser comentarista musical de una radioemisora</td>
                  <input class="form-check-input" type="checkbox" value="Ser comentarista musical de una radioemisora" name="pregunta195" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op5" name="chk65_op5" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk65_op6" name="chk65_op6" onclick="javascript:seleccionar65();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores65" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 66</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ayudar a cuidar a los enfermos</td>
                  <input class="form-check-input" type="checkbox" value="Ayudar a cuidar a los enfermos" name="pregunta196" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op1" name="chk66_op1" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op2" name="chk66_op2" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender instrumentos musicales</td>
                  <input class="form-check-input" type="checkbox" value="Vender instrumentos musicales" name="pregunta197" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op3" name="chk66_op3" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op4" name="chk66_op4" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Reparar artefactos de uso casero</td>
                  <input class="form-check-input" type="checkbox" value="Reparar artefactos de uso casero" name="pregunta198" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op5" name="chk66_op5" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk66_op6" name="chk66_op6" onclick="javascript:seleccionar66();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores66" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 67</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Diseñar floreros</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar floreros" name="pregunta199" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op1" name="chk67_op1" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op2" name="chk67_op2" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir la fabricación de floreros</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir la fabricación de floreros" name="pregunta200" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op3" name="chk67_op3" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op4" name="chk67_op4" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Perfeccionar los métodos para la fabricación de floreros</td>
                  <input class="form-check-input" type="checkbox" value="Perfeccionar los métodos para la fabricación de floreros" name="pregunta201" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op5" name="chk67_op5" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk67_op6" name="chk67_op6" onclick="javascript:seleccionar67();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores67" class="">
            espere
          </div>
        </div>


        <br>
                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 68</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como cajero en un restaurante de gran movimiento</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como cajero en un restaurante de gran movimiento" name="pregunta202" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op1" name="chk68_op1" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op2" name="chk68_op2" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar a los niños la construcción de aeromodelos</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar a los niños la construcción de aeromodelos" name="pregunta203" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op3" name="chk68_op3" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op4" name="chk68_op4" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Llevar el registro de las investigaciones médicas que adelanta un científico</td>
                  <input class="form-check-input" type="checkbox" value="Llevar el registro de las investigaciones médicas que adelanta un científico" name="pregunta204" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op5" name="chk68_op5" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk68_op6" name="chk68_op6" onclick="javascript:seleccionar68();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores68" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 69</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dirigir un campo de juegos para niños pobres</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir un campo de juegos para niños pobres" name="pregunta205" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op1" name="chk69_op1" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op2" name="chk69_op2" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser cocinero de un restaurante</td>
                  <input class="form-check-input" type="checkbox" value="Ser cocinero de un restaurante" name="pregunta206" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op3" name="chk69_op3" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op4" name="chk69_op4" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender productos químicos</td>
                  <input class="form-check-input" type="checkbox" value="Vender productos químicos" name="pregunta207" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op5" name="chk69_op5" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk69_op6" name="chk69_op6" onclick="javascript:seleccionar69();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores69" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 70</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Reunir un buen equipo de herramientas para trabajar madera</td>
                  <input class="form-check-input" type="checkbox" value="Reunir un buen equipo de herramientas para trabajar madera" name="pregunta208" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op1" name="chk70_op1" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op2" name="chk70_op2" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Formar un álbum con las reproducciones de sus cuadros favoritos</td>
                  <input class="form-check-input" type="checkbox" value="Formar un álbum con las reproducciones de sus cuadros favoritos" name="pregunta209" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op3" name="chk70_op3" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op4" name="chk70_op4" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Formar un botiquín para casos de emergencia</td>
                  <input class="form-check-input" type="checkbox" value="Formar un botiquín para casos de emergencia" name="pregunta210" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op5" name="chk70_op5" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk70_op6" name="chk70_op6" onclick="javascript:seleccionar70();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores70" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 71</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dirigir una función teatral de aficionados</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir una función teatral de aficionados" name="pregunta211" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op1" name="chk71_op1" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op2" name="chk71_op2" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Organizar la impresión de programas y boletas para la función</td>
                  <input class="form-check-input" type="checkbox" value="Organizar la impresión de programas y boletas para la función" name="pregunta212" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op3" name="chk71_op3" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op4" name="chk71_op4" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir el argumento de la pieza teatral que se va a representar</td>
                  <input class="form-check-input" type="checkbox" value="Escribir el argumento de la pieza teatral que se va a representar" name="pregunta213" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op5" name="chk71_op5" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk71_op6" name="chk71_op6" onclick="javascript:seleccionar71();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores71" class="">
            espere
          </div>
        </div>


        <br>
                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 72</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Jugar a las damas con una persona que generalmente le gana a usted</td>
                  <input class="form-check-input" type="checkbox" value="Jugar a las damas con una persona que generalmente le gana a usted" name="pregunta214" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op1" name="chk72_op1" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op2" name="chk72_op2" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar a las damas con una persona que rara vez le gana a usted</td>
                  <input class="form-check-input" type="checkbox" value="Jugar a las damas con una persona que rara vez le gana a usted" name="pregunta215" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op3" name="chk72_op3" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op4" name="chk72_op4" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar a las damas con una persona que juegue más o menos como usted</td>
                  <input class="form-check-input" type="checkbox" value="Jugar a las damas con una persona que juegue más o menos como usted" name="pregunta216" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op5" name="chk72_op5" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk72_op6" name="chk72_op6" onclick="javascript:seleccionar72();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores72" class="">
            espere
          </div>
        </div>
        
        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 73</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Redactar un aviso de propaganda para un nuevo modelo de lavadoras</td>
                  <input class="form-check-input" type="checkbox" value="Redactar un aviso de propaganda para un nuevo modelo de lavadoras" name="pregunta217" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op1" name="chk73_op1" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op2" name="chk73_op2" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Calcular el precio de costo para la fabricación de esta lavadora</td>
                  <input class="form-check-input" type="checkbox" value="Calcular el precio de costo para la fabricación de esta lavadora" name="pregunta218" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op3" name="chk73_op3" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op4" name="chk73_op4" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender lavadoras</td>
                  <input class="form-check-input" type="checkbox" value="Vender lavadoras" name="pregunta219" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op5" name="chk73_op5" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk73_op6" name="chk73_op6" onclick="javascript:seleccionar73();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores73" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 74</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir en un periódico la columna "Se rumora en la ciudad"</td>
                  <input class="form-check-input" type="checkbox" value="Escribir en un periódico la columna Se rumora en la ciudad" name="pregunta220" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op1" name="chk74_op1" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op2" name="chk74_op2" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir en un periódico la columna "Consejos personales"</td>
                  <input class="form-check-input" type="checkbox" value="Escribir en un periódico la columna Consejos personales" name="pregunta221" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op3" name="chk74_op3" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op4" name="chk74_op4" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir en un periódico la columna "Cómo cuidar el jardín"</td>
                  <input class="form-check-input" type="checkbox" value="Escribir en un periódico la columna Cómo cuidar el jardín" name="pregunta222" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op5" name="chk74_op5" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk74_op6" name="chk74_op6" onclick="javascript:seleccionar74();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores74" class="">
            espere
          </div>
        </div>

        <br>

        
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 75</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser explorador</td>
                  <input class="form-check-input" type="checkbox" value="Ser explorador" name="pregunta223" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op1" name="chk75_op1" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op2" name="chk75_op2" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser dibujante proyectista</td>
                  <input class="form-check-input" type="checkbox" value="Ser dibujante proyectista" name="pregunta224" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op3" name="chk75_op3" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op4" name="chk75_op4" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser inventor</td>
                  <input class="form-check-input" type="checkbox" value="Ser inventor" name="pregunta225" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op5" name="chk75_op5" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk75_op6" name="chk75_op6" onclick="javascript:seleccionar75();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores75" class="">
            espere
          </div>
        </div>


        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 76</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar en la cosecha de café</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en la cosecha de café" name="pregunta226" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op1" name="chk76_op1" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op2" name="chk76_op2" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como tractorista en una hacienda</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como tractorista en una hacienda" name="pregunta227" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op3" name="chk76_op3" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op4" name="chk76_op4" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en un laboratorio de productos químicos</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en un laboratorio de productos químicos" name="pregunta228" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op5" name="chk76_op5" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk76_op6" name="chk76_op6" onclick="javascript:seleccionar76();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores76" class="">
            espere
          </div>
        </div>


        <br>
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 77</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Estudiar el arte de hablar en público</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar el arte de hablar en público" name="pregunta229" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op1" name="chk77_op1" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op2" name="chk77_op2" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar sociología</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar sociología" name="pregunta230" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op3" name="chk77_op3" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op4" name="chk77_op4" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar composición literaria</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar composición literaria" name="pregunta231" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op5" name="chk77_op5" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk77_op6" name="chk77_op6" onclick="javascript:seleccionar77();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores77" class="">
            espere
          </div>
        </div>

        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 78</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Manejar una máquina calculadora</td>
                  <input class="form-check-input" type="checkbox" value="Manejar una máquina calculadora" name="pregunta232" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op1" name="chk78_op1" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op2" name="chk78_op2" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ensamblar máquinas calculadoras en una fábrica</td>
                  <input class="form-check-input" type="checkbox" value="Ensamblar máquinas calculadoras en una fábrica" name="pregunta233" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op3" name="chk78_op3" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op4" name="chk78_op4" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender máquinas calculadora</td>
                  <input class="form-check-input" type="checkbox" value="Vender máquinas calculadora" name="pregunta234" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op5" name="chk78_op5" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk78_op6" name="chk78_op6" onclick="javascript:seleccionar78();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores78" class="">
            espere
          </div>
        </div>


        <br>
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 79</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Construir lanchas</td>
                  <input class="form-check-input" type="checkbox" value="Construir lanchas" name="pregunta235" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op1" name="chk79_op1" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op2" name="chk79_op2" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Intervenir en el arreglo de conflictos laborales</td>
                  <input class="form-check-input" type="checkbox" value="Intervenir en el arreglo de conflictos laborales" name="pregunta236" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op3" name="chk79_op3" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op4" name="chk79_op4" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender máquinas calculadora</td>
                  <input class="form-check-input" type="checkbox" value="Vender máquinas calculadora" name="pregunta237" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op5" name="chk79_op5" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk79_op6" name="chk79_op6" onclick="javascript:seleccionar79();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores79" class="">
            espere
          </div>
        </div>

        <br>
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 80</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser el mejor vendedor de tractores y otros implementos agrícolas</td>
                  <input class="form-check-input" type="checkbox" value="Ser el mejor vendedor de tractores y otros implementos agrícolas" name="pregunta238" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op1" name="chk80_op1" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op2" name="chk80_op2" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser contador público juramentado</td>
                  <input class="form-check-input" type="checkbox" value="Ser contador público juramentado" name="pregunta239" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op3" name="chk80_op3" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op4" name="chk80_op4" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser autoridad en materia de impuestos</td>
                  <input class="form-check-input" type="checkbox" value="Ser autoridad en materia de impuestos" name="pregunta240" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op5" name="chk80_op5" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk80_op6" name="chk80_op6" onclick="javascript:seleccionar80();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores80" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 81</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Perfeccionar métodos de trabajo de oficina en empresas importantes</td>
                  <input class="form-check-input" type="checkbox" value="Perfeccionar métodos de trabajo de oficina en empresas importantes" name="pregunta241" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op1" name="chk81_op1" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op2" name="chk81_op2" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser enfermero (a) de profesión</td>
                  <input class="form-check-input" type="checkbox" value="Ser enfermero (a) de profesión" name="pregunta242" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op3" name="chk81_op3" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op4" name="chk81_op4" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer ensayos para obtener mejores recetas de pastelería</td>
                  <input class="form-check-input" type="checkbox" value="Hacer ensayos para obtener mejores recetas de pastelería" name="pregunta243" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op5" name="chk81_op5" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk81_op6" name="chk81_op6" onclick="javascript:seleccionar81();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores81" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 82</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Reparar un daño en la plancha eléctrica</td>
                  <input class="form-check-input" type="checkbox" value="Reparar un daño en la plancha eléctrica" name="pregunta244" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op1" name="chk82_op1" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op2" name="chk82_op2" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cortar la leña para prender la estufa</td>
                  <input class="form-check-input" type="checkbox" value="Cortar la leña para prender la estufa" name="pregunta245" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op3" name="chk82_op3" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op4" name="chk82_op4" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir una carta a máquina por petición de un amigo</td>
                  <input class="form-check-input" type="checkbox" value="Escribir una carta a máquina por petición de un amigo" name="pregunta246" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op5" name="chk82_op5" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk82_op6" name="chk82_op6" onclick="javascript:seleccionar82();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores82" class="">
            espere
          </div>
        </div>

        <br>

                                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 83</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Manejar un almacén de música</td>
                  <input class="form-check-input" type="checkbox" value="Manejar un almacén de música" name="pregunta247" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op1" name="chk83_op1" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op2" name="chk83_op2" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer planos arquitectónicos</td>
                  <input class="form-check-input" type="checkbox" value="Hacer planos arquitectónicos" name="pregunta248" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op3" name="chk83_op3" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op4" name="chk83_op4" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Investigar el nivel de vida de distintos barrios de la ciudad</td>
                  <input class="form-check-input" type="checkbox" value="Investigar el nivel de vida de distintos barrios de la ciudad" name="pregunta249" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op5" name="chk83_op5" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk83_op6" name="chk83_op6" onclick="javascript:seleccionar83();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores83" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 84</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Examinar un nuevo juguete mecánico para ver cómo funciona</td>
                  <input class="form-check-input" type="checkbox" value="Examinar un nuevo juguete mecánico para ver cómo funciona" name="pregunta250" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op1" name="chk84_op1" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op2" name="chk84_op2" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar a las damas</td>
                  <input class="form-check-input" type="checkbox" value="Jugar a las damas" name="pregunta251" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op3" name="chk84_op3" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op4" name="chk84_op4" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar ajedrez</td>
                  <input class="form-check-input" type="checkbox" value="Jugar ajedrez" name="pregunta252" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op5" name="chk84_op5" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk84_op6" name="chk84_op6" onclick="javascript:seleccionar84();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores84" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 85</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Llevar la contabilidad de una empresa importante</td>
                  <input class="form-check-input" type="checkbox" value="Llevar la contabilidad de una empresa importante" name="pregunta253" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op1" name="chk85_op1" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op2" name="chk85_op2" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Desarrollar nuevas variedades de flores</td>
                  <input class="form-check-input" type="checkbox" value="Desarrollar nuevas variedades de flores" name="pregunta254" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op3" name="chk85_op3" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op4" name="chk85_op4" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser psicólogo profesional y atender consultas personales</td>
                  <input class="form-check-input" type="checkbox" value="Ser psicólogo profesional y atender consultas personales" name="pregunta255" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op5" name="chk85_op5" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk85_op6" name="chk85_op6" onclick="javascript:seleccionar85();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores85" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 86</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer de la pesca un medio para ganarse la vida</td>
                  <input class="form-check-input" type="checkbox" value="Hacer de la pesca un medio para ganarse la vida" name="pregunta256" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op1" name="chk86_op1" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op2" name="chk86_op2" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Seleccionar en un cafetal cafetos viejos para eliminarlos</td>
                  <input class="form-check-input" type="checkbox" value="Seleccionar en un cafetal cafetos viejos para eliminarlos" name="pregunta257" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op3" name="chk86_op3" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op4" name="chk86_op4" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pintar automóviles en una fábrica</td>
                  <input class="form-check-input" type="checkbox" value="Pintar automóviles en una fábrica" name="pregunta258" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op5" name="chk86_op5" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk86_op6" name="chk86_op6" onclick="javascript:seleccionar86();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores86" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 87</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser visitador (a) social</td>
                  <input class="form-check-input" type="checkbox" value="Ser visitador (a) social" name="pregunta259" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op1" name="chk87_op1" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op2" name="chk87_op2" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser secretario (a) privado(a) de una persona célebre</td>
                  <input class="form-check-input" type="checkbox" value="Ser secretario (a) privado(a) de una persona célebre" name="pregunta260" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op3" name="chk87_op3" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op4" name="chk87_op4" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Preparar la propaganda para una casa editorial</td>
                  <input class="form-check-input" type="checkbox" value="Preparar la propaganda para una casa editorial" name="pregunta261" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op5" name="chk87_op5" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk87_op6" name="chk87_op6" onclick="javascript:seleccionar87();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores87" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 88</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir estampas de la  vida real para una revista</td>
                  <input class="form-check-input" type="checkbox" value="Escribir estampas de la  vida real para una revista" name="pregunta262" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op1" name="chk88_op1" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op2" name="chk88_op2" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre la cría de aves de corral</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre la cría de aves de corral" name="pregunta263" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op3" name="chk88_op3" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op4" name="chk88_op4" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre la aplicación de primeros auxilios</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre la aplicación de primeros auxilios" name="pregunta264" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op5" name="chk88_op5" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk88_op6" name="chk88_op6" onclick="javascript:seleccionar88();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores88" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 89</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como mesero(a) en un restaurante</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como mesero(a) en un restaurante" name="pregunta265" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op1" name="chk89_op1" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op2" name="chk89_op2" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Seleccionar listas de personas para enviarles propaganda</td>
                  <input class="form-check-input" type="checkbox" value="Seleccionar listas de personas para enviarles propaganda" name="pregunta266" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op3" name="chk89_op3" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op4" name="chk89_op4" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cuidar enfermos</td>
                  <input class="form-check-input" type="checkbox" value="Cuidar enfermos" name="pregunta267" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op5" name="chk89_op5" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk89_op6" name="chk89_op6" onclick="javascript:seleccionar89();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores89" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 90</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Modelar objetos de arcilla</td>
                  <input class="form-check-input" type="checkbox" value="Modelar objetos de arcilla" name="pregunta268" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op1" name="chk90_op1" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op2" name="chk90_op2" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre recursos psicológicos para persuadir</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre recursos psicológicos para persuadir" name="pregunta269" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op3" name="chk90_op3" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op4" name="chk90_op4" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser apuntador en una obra teatral de aficionados</td>
                  <input class="form-check-input" type="checkbox" value="Ser apuntador en una obra teatral de aficionados" name="pregunta270" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op5" name="chk90_op5" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk90_op6" name="chk90_op6" onclick="javascript:seleccionar90();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores90" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 91</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser médico</td>
                  <input class="form-check-input" type="checkbox" value="Ser médico" name="pregunta271" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op1" name="chk91_op1" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op2" name="chk91_op2" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser escultor</td>
                  <input class="form-check-input" type="checkbox" value="Ser escultor" name="pregunta272" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op3" name="chk91_op3" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op4" name="chk91_op4" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser periodista</td>
                  <input class="form-check-input" type="checkbox" value="Ser periodista" name="pregunta273" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op5" name="chk91_op5" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk91_op6" name="chk91_op6" onclick="javascript:seleccionar91();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores91" class="">
            espere
          </div>
        </div>

        <br>

                                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 92</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Contestar por escrito consultas sobre máquinas de escribir</td>
                  <input class="form-check-input" type="checkbox" value="Contestar por escrito consultas sobre máquinas de escribir" name="pregunta274" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op1" name="chk92_op1" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op2" name="chk92_op2" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar la demanda que tienen las máquinas de escribir</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar la demanda que tienen las máquinas de escribir" name="pregunta275" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op3" name="chk92_op3" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op4" name="chk92_op4" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener a su cargo la reparación de máquinas de escribir</td>
                  <input class="form-check-input" type="checkbox" value="Tener a su cargo la reparación de máquinas de escribir" name="pregunta276" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op5" name="chk92_op5" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk92_op6" name="chk92_op6" onclick="javascript:seleccionar92();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores92" class="">
            espere
          </div>
        </div>

        <br>


                                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 93</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Estudiar métodos de propaganda usados durante la guerra</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar métodos de propaganda usados durante la guerra" name="pregunta277" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op1" name="chk93_op1" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op2" name="chk93_op2" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar sistemas para mejorar los trabajos de oficina</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar sistemas para mejorar los trabajos de oficina" name="pregunta278" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op3" name="chk93_op3" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op4" name="chk93_op4" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer un estudio acerca del movimiento demográfico del país</td>
                  <input class="form-check-input" type="checkbox" value="Hacer un estudio acerca del movimiento demográfico del país" name="pregunta279" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op5" name="chk93_op5" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk93_op6" name="chk93_op6" onclick="javascript:seleccionar93();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores93" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 94</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Corregir una prueba de imprenta</td>
                  <input class="form-check-input" type="checkbox" value="Corregir una prueba de imprenta" name="pregunta280" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op1" name="chk94_op1" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op2" name="chk94_op2" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Lavar platos</td>
                  <input class="form-check-input" type="checkbox" value="Lavar platos" name="pregunta281" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op3" name="chk94_op3" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op4" name="chk94_op4" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Preparar la comida</td>
                  <input class="form-check-input" type="checkbox" value="Preparar la comida" name="pregunta282" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op5" name="chk94_op5" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk94_op6" name="chk94_op6" onclick="javascript:seleccionar94();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores94" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 95</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar arquitectura</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar arquitectura" name="pregunta283" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op1" name="chk95_op1" onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op2" name="chk95_op2" onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Solicitar propaganda para una revista</td>
                  <input class="form-check-input" type="checkbox" value="Solicitar propaganda para una revista" name="pregunta284" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op3" name="chk95_op3" onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op4"  name="chk95_op4"onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Reparar relojes</td>
                  <input class="form-check-input" type="checkbox" value="Reparar relojes" name="pregunta285" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op5" name="chk95_op5" onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk95_op6" name="chk95_op6" onclick="javascript:seleccionar95();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores95" class="">
            espere
          </div>
        </div>


        <br>
                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 96</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Preparar la comida</td>
                  <input class="form-check-input" type="checkbox" value="Preparar la comida" name="pregunta286" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op1" name="chk96_op1" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op2" name="chk96_op2" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Reparar un juguete dañado</td>
                  <input class="form-check-input" type="checkbox" value="Reparar un juguete dañado" name="pregunta287" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op3" name="chk96_op3" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op4" name="chk96_op4" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Darle un masaje a una persona</td>
                  <input class="form-check-input" type="checkbox" value="Darle un masaje a una persona" name="pregunta288" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op5" name="chk96_op5" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk96_op6"  name="chk96_op6" onclick="javascript:seleccionar96();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores96" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 97</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tomar parte en una expedición en busca de animales raros</td>
                  <input class="form-check-input" type="checkbox" value="Tomar parte en una expedición en busca de animales raros" name="pregunta289" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op1" name="chk97_op1" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op2" name="chk97_op2" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar parte en una expedición para combatir epidemias</td>
                  <input class="form-check-input" type="checkbox" value="Tomar parte en una expedición para combatir epidemias" name="pregunta290" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op3" name="chk97_op3" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op4" name="chk97_op4" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una entidad de beneficencia</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una entidad de beneficencia" name="pregunta291" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op5" name="chk97_op5" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk97_op6" name="chk97_op6" onclick="javascript:seleccionar97();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores97" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 98</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser pintor - retratista</td>
                  <input class="form-check-input" type="checkbox" value="Ser pintor - retratista" name="pregunta292" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op1" name="chk98_op1" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op2" name="chk98_op2" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir investigaciones sobre las causas de los terremotos</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir investigaciones sobre las causas de los terremotos" name="pregunta293" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op3" name="chk98_op3" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op4" name="chk98_op4" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser ingeniero mecánico</td>
                  <input class="form-check-input" type="checkbox" value="Ser ingeniero mecánico" name="pregunta294" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op5" name="chk98_op5" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk98_op6" name="chk98_op6" onclick="javascript:seleccionar98();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores98" class="">
            espere
          </div>
        </div>
        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 99</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ayudar a las familias que reciben asistencia económica, a equilibrar sus presupuestos</td>
                  <input class="form-check-input" type="checkbox" value="Ayudar a las familias que reciben asistencia económica, a equilibrar sus presupuestos" name="pregunta295" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op1" name="chk99_op1" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op2" name="chk99_op2" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Catalogar libros en una biblioteca</td>
                  <input class="form-check-input" type="checkbox" value="Catalogar libros en una biblioteca" name="pregunta296" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op3" name="chk99_op3" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op4" name="chk99_op4" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser un experto en el cuidado de árboles</td>
                  <input class="form-check-input" type="checkbox" value="Ser un experto en el cuidado de árboles" name="pregunta297" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op5" name="chk99_op5" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk99_op6" name="chk99_op6" onclick="javascript:seleccionar99();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores99" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 100</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vender en un almacén</td>
                  <input class="form-check-input" type="checkbox" value="Vender en un almacén" name="pregunta298" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op1" name="chk100_op1" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op2" name="chk100_op2" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una hacienda ganadera</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una hacienda ganadera" name="pregunta299" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op3" name="chk100_op3" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op4" name="chk100_op4" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una casa editorial</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una casa editorial" name="pregunta300" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op5" name="chk100_op5" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk100_op6" name="chk100_op6" onclick="javascript:seleccionar100();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores100" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 101</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser profesor de matemáticas</td>
                  <input class="form-check-input" type="checkbox" value="Ser profesor de matemáticas" name="pregunta301" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op1" name="chk101_op1" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op2" name="chk101_op2" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser director de extensión cultural en una gran universidad</td>
                  <input class="form-check-input" type="checkbox" value="Ser director de extensión cultural en una gran universidad" name="pregunta302" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op3" name="chk101_op3" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op4" name="chk101_op4" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser profesor de lenguas extranjeras</td>
                  <input class="form-check-input" type="checkbox" value="Ser profesor de lenguas extranjeras" name="pregunta303" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op5" name="chk101_op5" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk101_op6" name="chk101_op6" onclick="javascript:seleccionar101();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores101" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 102</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tomar un curso de correspondencia comercial</td>
                  <input class="form-check-input" type="checkbox" value="Tomar un curso de correspondencia comercial" name="pregunta304" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op1" name="chk102_op1" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op2" name="chk102_op2" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar un curso de artes gráficas</td>
                  <input class="form-check-input" type="checkbox" value="Tomar un curso de artes gráficas" name="pregunta305" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op3" name="chk102_op3" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op4" name="chk102_op4" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar un curso de ventas</td>
                  <input class="form-check-input" type="checkbox" value="Tomar un curso de ventas" name="pregunta306" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op5" name="chk102_op5" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk102_op6" name="chk102_op6" onclick="javascript:seleccionar102();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores102" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 103</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dibujar planos de arquitectura</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar planos de arquitectura" name="pregunta307" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op1" name="chk103_op1" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op2" name="chk103_op2" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Elaborar propaganda para una nueva urbanización</td>
                  <input class="form-check-input" type="checkbox" value="Elaborar propaganda para una nueva urbanización" name="pregunta308" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op3" name="chk103_op3" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op4" name="chk103_op4" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos comentando nuevas ideas sobre construcciones</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos comentando nuevas ideas sobre construcciones" name="pregunta309" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op5" name="chk103_op5" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk103_op6" name="chk103_op6" onclick="javascript:seleccionar103();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores103" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 104</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Comprar artículos costosos utilizando el sistema de crédito</td>
                  <input class="form-check-input" type="checkbox" value="Comprar artículos costosos utilizando el sistema de crédito" name="pregunta310" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op1" name="chk104_op1" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op2" name="chk104_op2" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pedir prestado el dinero para comprar estos artículos</td>
                  <input class="form-check-input" type="checkbox" value="Pedir prestado el dinero para comprar estos artículos" name="pregunta311" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op3" name="chk104_op3" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op4" name="chk104_op4" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Economizar el dinero que se necesita para adquirirlos</td>
                  <input class="form-check-input" type="checkbox" value="Economizar el dinero que se necesita para adquirirlos" name="pregunta312" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op5" name="chk104_op5" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk104_op6" name="chk104_op6" onclick="javascript:seleccionar104();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores104" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 105</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Decorar muebles</td>
                  <input class="form-check-input" type="checkbox" value="Decorar muebles" name="pregunta313" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op1" name="chk105_op1" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op2" name="chk105_op2" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vigilar a los trabajadores en una plantación de caña de azúcar</td>
                  <input class="form-check-input" type="checkbox" value="Vigilar a los trabajadores en una plantación de caña de azúcar" name="pregunta314" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op3" name="chk105_op3" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op4" name="chk105_op4" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Criar  aves de corral</td>
                  <input class="form-check-input" type="checkbox" value="Criar  aves de corral" name="pregunta315" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op5" name="chk105_op5" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk105_op6" name="chk105_op6" onclick="javascript:seleccionar105();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores105" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 106</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ayudar a los jóvenes en la elección de su futura carrera</td>
                  <input class="form-check-input" type="checkbox" value="Ayudar a los jóvenes en la elección de su futura carrera" name="pregunta316" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op1" name="chk106_op1" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op2" name="chk106_op2" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diseñar motivos para nuevas telas</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar motivos para nuevas telas" name="pregunta317" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op3" name="chk106_op3" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op4" name="chk106_op4" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Elaborar propuestas de costos para impresión de libros y revistas</td>
                  <input class="form-check-input" type="checkbox" value="Elaborar propuestas de costos para impresión de libros y revistas" name="pregunta318" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op5" name="chk106_op5" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk106_op6" name="chk106_op6" onclick="javascript:seleccionar106();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores106" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 107</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Construir un telar de mano</td>
                  <input class="form-check-input" type="checkbox" value="Construir un telar de mano" name="pregunta319" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op1" name="chk107_op1" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op2" name="chk107_op2" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer análisis estadísticos para predecir tendencias del mercado</td>
                  <input class="form-check-input" type="checkbox" value="Hacer análisis estadísticos para predecir tendencias del mercado" name="pregunta320" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op3" name="chk107_op3" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op4" name="chk107_op4" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer encuestas sobre la actitud de los jóvenes hacia la religión</td>
                  <input class="form-check-input" type="checkbox" value="Hacer encuestas sobre la actitud de los jóvenes hacia la religión" name="pregunta321" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op5" name="chk107_op5" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk107_op6" name="chk107_op6" onclick="javascript:seleccionar107();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores107" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 108</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Modelar en yeso el rostro de un personaje célebre</td>
                  <input class="form-check-input" type="checkbox" value="Modelar en yeso el rostro de un personaje célebre" name="pregunta322" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op1" name="chk108_op1" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op2" name="chk108_op2" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre procedimientos para determinar el precio de venta de las mercancías</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre procedimientos para determinar el precio de venta de las mercancías" name="pregunta323" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op3" name="chk108_op3" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op4" name="chk108_op4" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir el tema músical para un programa radial</td>
                  <input class="form-check-input" type="checkbox" value="Escribir el tema músical para un programa radial" name="pregunta324" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op5" name="chk108_op5" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk108_op6" name="chk108_op6" onclick="javascript:seleccionar108();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores108" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 109</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como comprador de mercancías para una cooperativa</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como comprador de mercancías para una cooperativa" name="pregunta325" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op1" name="chk109_op1" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op2" name="chk109_op2" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Encargarse de la publicidad de una empresa importante</td>
                  <input class="form-check-input" type="checkbox" value="Encargarse de la publicidad de una empresa importante" name="pregunta326" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op3" name="chk109_op3" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op4" name="chk109_op4" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Encargarse del mantenimiento de las máquinas de contabilidad en una empresa comercial</td>
                  <input class="form-check-input" type="checkbox" value="Encargarse del mantenimiento de las máquinas de contabilidad en una empresa comercial" name="pregunta327" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op5" name="chk109_op5" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk109_op6" name="chk109_op6" onclick="javascript:seleccionar109();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores109" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 110</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Lograr que la gente lo trate a usted como a un amigo</td>
                  <input class="form-check-input" type="checkbox" value="Lograr que la gente lo trate a usted como a un amigo" name="pregunta328" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op1" name="chk110_op1" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op2" name="chk110_op2" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Lograr que la gente lo trate a usted como a un superior</td>
                  <input class="form-check-input" type="checkbox" value="Lograr que la gente lo trate a usted como a un superior" name="pregunta329" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op3" name="chk110_op3" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op4" name="chk110_op4" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Lograr que nadie se fije en usted</td>
                  <input class="form-check-input" type="checkbox" value="Lograr que nadie se fije en usted" name="pregunta330" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op5" name="chk110_op5" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk110_op6" name="chk110_op6" onclick="javascript:seleccionar110();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores110" class="">
            espere
          </div>
        </div>
        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 111</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser profesor de música</td>
                  <input class="form-check-input" type="checkbox" value="Ser profesor de música" name="pregunta331" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op1" name="chk111_op1" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op2" name="chk111_op2" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser diseñador de una casa de publicidad</td>
                  <input class="form-check-input" type="checkbox" value="Ser diseñador de una casa de publicidad" name="pregunta332" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op3" name="chk111_op3" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op4" name="chk111_op4" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Investigar por qué los chistes hacen reír</td>
                  <input class="form-check-input" type="checkbox" value="Investigar por qué los chistes hacen reír" name="pregunta333" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op5" name="chk111_op5" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk111_op6" name="chk111_op6" onclick="javascript:seleccionar111();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores111" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 112</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer las compras para una persona enferma</td>
                  <input class="form-check-input" type="checkbox" value="Hacer las compras para una persona enferma" name="pregunta334" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op1" name="chk112_op1" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op2" name="chk112_op2" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer un crucigrama para entretener a un enfermo</td>
                  <input class="form-check-input" type="checkbox" value="Hacer un crucigrama para entretener a un enfermo" name="pregunta335" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op3" name="chk112_op3" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op4" name="chk112_op4" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Leer para distraer a una persona enferma</td>
                  <input class="form-check-input" type="checkbox" value="Leer para distraer a una persona enferma" name="pregunta336" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op5" name="chk112_op5" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk112_op6" name="chk112_op6" onclick="javascript:seleccionar112();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores112" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 113</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Prestar primeros auxilios en un hospital</td>
                  <input class="form-check-input" type="checkbox" value="Prestar primeros auxilios en un hospital" name="pregunta337" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op1" name="chk113_op1" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op2" name="chk113_op2" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender flores en una floristería</td>
                  <input class="form-check-input" type="checkbox" value="Vender flores en una floristería" name="pregunta338" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op3" name="chk113_op3" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op4" name="chk113_op4" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como secretario (a) privado (a)</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como secretario (a) privado (a)" name="pregunta339" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op5" name="chk113_op5" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk113_op6" name="chk113_op6" onclick="javascript:seleccionar113();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores114" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 114</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Redactar la página financiera en un periódico</td>
                  <input class="form-check-input" type="checkbox" value="Redactar la página financiera en un periódico" name="pregunta340" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op1" name="chk114_op1" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op2" name="chk114_op2" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cultivar una buena extensión de tierra</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar una buena extensión de tierra" name="pregunta341" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op3" name="chk114_op3" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op4" name="chk114_op4" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser corredor de finca raíz</td>
                  <input class="form-check-input" type="checkbox" value="Ser corredor de finca raíz" name="pregunta342" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op5" name="chk114_op5" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk114_op6" name="chk114_op6" onclick="javascript:seleccionar114();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores114" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 115</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Cuidar a sordomudos en un asilo</td>
                  <input class="form-check-input" type="checkbox" value="Cuidar a sordomudos en un asilo" name="pregunta343" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op1" name="chk115_op1" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op2" name="chk115_op2" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dibujar gráficas estadísticas</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar gráficas estadísticas" name="pregunta344" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op3" name="chk115_op3" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op4" name="chk115_op4" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como dependiente en un almacén</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como dependiente en un almacén" name="pregunta345" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op5" name="chk115_op5" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk115_op6" name="chk115_op6" onclick="javascript:seleccionar115();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores115" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 116</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser escritor</td>
                  <input class="form-check-input" type="checkbox" value="Ser escritor" name="pregunta346" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op1" name="chk116_op1" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op2" name="chk116_op2" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser autoridad en propaganda</td>
                  <input class="form-check-input" type="checkbox" value="Ser autoridad en propaganda" name="pregunta347" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op3" name="chk116_op3" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op4" name="chk116_op4" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser religioso misionero</td>
                  <input class="form-check-input" type="checkbox" value="Ser religioso misionero" name="pregunta348" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op5" name="chk116_op5" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk116_op6" name="chk116_op6" onclick="javascript:seleccionar116();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores116" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 117</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar en lo que le agrada con un sueldo alto</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en lo que le agrada con un sueldo alto" name="pregunta349" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op1" name="chk117_op1" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op2" name="chk117_op2" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en lo que le agrada con un sueldo bajo</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en lo que le agrada con un sueldo bajo" name="pregunta350" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op3" name="chk117_op3" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op4" name="chk117_op4" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en algo que no le agrada con un sueldo alto</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en algo que no le agrada con un sueldo alto" name="pregunta351" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op5" name="chk117_op5" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk117_op6" name="chk117_op6" onclick="javascript:seleccionar117();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores118" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 118</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar a la gente pobre nociones de higiene</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar a la gente pobre nociones de higiene" name="pregunta352" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op1" name="chk118_op1" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op2" name="chk118_op2" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos sobre temas de actualidad</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre temas de actualidad" name="pregunta353" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op3" name="chk118_op3" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op4" name="chk118_op4" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender objetos de arte</td>
                  <input class="form-check-input" type="checkbox" value="Vender objetos de arte" name="pregunta354" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op5" name="chk118_op5" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk118_op6" name="chk118_op6" onclick="javascript:seleccionar118();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores118" class="">
            espere
          </div>
        </div>

        <br>

       <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 119</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser secretario (a) de un insigne líder político</td>
                  <input class="form-check-input" type="checkbox" value="Ser secretario (a) de un insigne líder político" name="pregunta355" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op1" name="chk119_op1" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op2" name="chk119_op2" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar a los niños pintura y modelado</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar a los niños pintura y modelado" name="pregunta356" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op3" name="chk119_op3" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op4" name="chk119_op4" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos para una revista de arte</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos para una revista de arte" name="pregunta357" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op5" name="chk119_op5" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk119_op6" name="chk119_op6" onclick="javascript:seleccionar119();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores119" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 120</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escoger su ropa siguiendo sus propios gustos</td>
                  <input class="form-check-input" type="checkbox" value="Escoger su ropa siguiendo sus propios gustos" name="pregunta358" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op1" name="chk120_op1" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op2" name="chk120_op2" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Oír consejos en la elección de su ropa</td>
                  <input class="form-check-input" type="checkbox" value="Oír consejos en la elección de su ropa" name="pregunta359" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op3" name="chk120_op3" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op4" name="chk120_op4" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dejar que otras personas la escojan para usted</td>
                  <input class="form-check-input" type="checkbox" value="Dejar que otras personas la escojan para usted" name="pregunta360" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op5" name="chk120_op5" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk120_op6" name="chk120_op6" onclick="javascript:seleccionar120();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores120" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 121</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Diseñar proyectos para la construcción de puentes</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar proyectos para la construcción de puentes" name="pregunta361" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op1" name="chk121_op1" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op2" name="chk121_op2" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en algo que requiere intenso cálculo mental</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en algo que requiere intenso cálculo mental" name="pregunta362" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op3" name="chk121_op3" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op4" name="chk121_op4" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener a su cargo la correspondencia de una oficina</td>
                  <input class="form-check-input" type="checkbox" value="Tener a su cargo la correspondencia de una oficina" name="pregunta363" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op5" name="chk121_op5" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk121_op6" name="chk121_op6" onclick="javascript:seleccionar121();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores121" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 122</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dirigir la producción de tarjetas de Navidad</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir la producción de tarjetas de Navidad" name="pregunta364" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op1" name="chk122_op1" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op2" name="chk122_op2" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Calcular el costo de producción de estas tarjetas</td>
                  <input class="form-check-input" type="checkbox" value="Calcular el costo de producción de estas tarjetas" name="pregunta365" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op3" name="chk122_op3" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op4" name="chk122_op4" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diseñar tarjetas de navidad</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar tarjetas de navidad" name="pregunta366" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op5" name="chk122_op5" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk122_op6" name="chk122_op6" onclick="javascript:seleccionar122();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores122" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 123</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Examinar una cerradura dañada para ver cómo se arregla</td>
                  <input class="form-check-input" type="checkbox" value="Examinar una cerradura dañada para ver cómo se arregla" name="pregunta367" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op1" name="chk123_op1" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op2" name="chk123_op2" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Corregir una prueba tipográfica</td>
                  <input class="form-check-input" type="checkbox" value="Corregir una prueba tipográfica" name="pregunta368" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op3" name="chk123_op3" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op4" name="chk123_op4" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Sumar una columna de cifras</td>
                  <input class="form-check-input" type="checkbox" value="Sumar una columna de cifras" name="pregunta369" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op5" name="chk123_op5" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk123_op6" name="chk123_op6" onclick="javascript:seleccionar123();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores123" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 124</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tener entre sus amistades a una persona que siempre hace bromas a usted</td>
                  <input class="form-check-input" type="checkbox" value="Tener entre sus amistades a una persona que siempre hace bromas a usted" name="pregunta370" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op1" name="chk124_op1" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault"> 
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op2" name="chk124_op2" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Hacer bromas a los otros</td>
                  <input class="form-check-input" type="checkbox" value="Hacer bromas a los otros" name="pregunta371" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op3" name="chk124_op3" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op4" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>No hacer bromas a nadie</td>
                  <input class="form-check-input" type="checkbox" value="No hacer bromas a nadie" name="pregunta372" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op5" name="chk124_op5" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk124_op6" name="chk124_op6" onclick="javascript:seleccionar124();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores124" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 125</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser psicólogo profesional</td>
                  <input class="form-check-input" type="checkbox" value="Ser psicólogo profesional" name="pregunta373" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op1" name="chk125_op1" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op2" name="chk125_op2" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir la construcción de puentes</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir la construcción de puentes" name="pregunta374" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op3" name="chk125_op3" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op4" name="chk125_op4" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser arquitecto urbanista</td>
                  <input class="form-check-input" type="checkbox" value="Ser arquitecto urbanista" name="pregunta375" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op5" name="chk125_op5" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk125_op6" name="chk125_op6" onclick="javascript:seleccionar125();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores125" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 126</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Investigar las causas de las enfermedades mentales</td>
                  <input class="form-check-input" type="checkbox" value="Investigar las causas de las enfermedades mentales" name="pregunta376" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op1" name="chk126_op1" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op2" name="chk126_op2" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar música</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar música" name="pregunta377" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op3" name="chk126_op3" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op4" name="chk126_op4" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar taquigrafía</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar taquigrafía" name="pregunta378" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op5" name="chk126_op5" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk126_op6" name="chk126_op6" onclick="javascript:seleccionar126();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores126" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 127</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como chofer de taxi</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como chofer de taxi" name="pregunta379" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op1" name="chk127_op1" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op2" name="chk127_op2" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como celador en un faro marítimo</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como celador en un faro marítimo" name="pregunta380" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op3" name="chk127_op3" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op4" name="chk127_op4" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como guardián de un paso ferroviario</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como guardián de un paso ferroviario" name="pregunta381" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op5" name="chk127_op5" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk127_op6" name="chk127_op6" onclick="javascript:seleccionar127();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores127" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 128</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Redactar avisos de propaganda</td>
                  <input class="form-check-input" type="checkbox" value="Redactar avisos de propaganda" name="pregunta382" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op1" name="chk128_op1" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op2" name="chk128_op2" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Dirigir una biblioteca pública</td>
                  <input class="form-check-input" type="checkbox" value="Dirigir una biblioteca pública" name="pregunta383" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op3" name="chk128_op3" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op4" name="chk128_op4" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Editar un períodico</td>
                  <input class="form-check-input" type="checkbox" value="Editar un períodico" name="pregunta384" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op5" name="chk128_op5" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk128_op6" name="chk128_op6" onclick="javascript:seleccionar128();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores128" class="">
            espere
          </div>
        </div>

        <br>


                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 129</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tomar clases de contabilidad de costos</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de contabilidad de costos" name="pregunta385" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op1" name="chk129_op1" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op2" name="chk129_op2" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases sobre el arte de vender</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases sobre el arte de vender" name="pregunta386" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op3" name="chk129_op3" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op4" name="chk129_op4" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases de correspondencia comercial</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de correspondencia comercial" name="pregunta387" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op5" name="chk129_op5" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk129_op6" name="chk129_op6" onclick="javascript:seleccionar129();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores129" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 130</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir una obra teatral</td>
                  <input class="form-check-input" type="checkbox" value="Escribir una obra teatral" name="pregunta388" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op1" name="chk130_op1" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op2" name="chk130_op2" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender las boletas para una función teatral</td>
                  <input class="form-check-input" type="checkbox" value="Vender las boletas para una función teatral" name="pregunta389" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op3" name="chk130_op3" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op4" name="chk130_op4" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Manejar los fondos de una función teatral</td>
                  <input class="form-check-input" type="checkbox" value="Manejar los fondos de una función teatral" name="pregunta390" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op5" name="chk130_op5" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk130_op6" name="chk130_op6" onclick="javascript:seleccionar130();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores130" class="">
            espere
          </div>
        </div>

        <br>


        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 131</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer caricaturas de personajes célebres</td>
                  <input class="form-check-input" type="checkbox" value="Hacer caricaturas de personajes célebres" name="pregunta391" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op1" name="chk131_op1" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op2" name="chk131_op2" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pintar retratos de personajes célebres</td>
                  <input class="form-check-input" type="checkbox" value="Pintar retratos de personajes célebres" name="pregunta392" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op3" name="chk131_op3" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op4" name="chk131_op4" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pintar paisajes</td>
                  <input class="form-check-input" type="checkbox" value="Pintar paisajes" name="pregunta393" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op5" name="chk131_op5" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk131_op6" name="chk131_op6" onclick="javascript:seleccionar131();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores131" class="">
            espere
          </div>
        </div>


        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 132</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Dibujar ilustraciones para revistas</td>
                  <input class="form-check-input" type="checkbox" value="Dibujar ilustraciones para revistas" name="pregunta394" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op1" name="chk132_op1" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op2" name="chk132_op2" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos para revistas</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos para revistas" name="pregunta395" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op3" name="chk132_op3" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op4" name="chk132_op4" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser agente distribuidor de una revista</td>
                  <input class="form-check-input" type="checkbox" value="Ser agente distribuidor de una revista" name="pregunta396" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op5" name="chk132_op5" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk132_op6" name="chk132_op6" onclick="javascript:seleccionar132();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores132" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 133</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Pasar vacaciones en un elegante sitio de veraneo</td>
                  <input class="form-check-input" type="checkbox" value="Pasar vacaciones en un elegante sitio de veraneo" name="pregunta397" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op1" name="chk133_op1" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op2" name="chk133_op2" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pasarlas acampando fuera de la ciudad</td>
                  <input class="form-check-input" type="checkbox" value="Pasarlas acampando fuera de la ciudad" name="pregunta398" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op3" name="chk133_op3" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op4" name="chk133_op4" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Pasarlas viajando por caminos apartados</td>
                  <input class="form-check-input" type="checkbox" value="Pasarlas viajando por caminos apartados" name="pregunta399" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op5" name="chk133_op5" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk133_op6" name="chk133_op6" onclick="javascript:seleccionar133();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores133" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 134</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vivir con un famoso crítico literario</td>
                  <input class="form-check-input" type="checkbox" value="Vivir con un famoso crítico literario" name="pregunta400" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op1" name="chk134_op1" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op2" name="chk134_op2" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vivir con un político destacado</td>
                  <input class="form-check-input" type="checkbox" value="Vivir con un político destacado" name="pregunta401" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op3" name="chk134_op3" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op4" name="chk134_op4" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vivir con un artista célebre</td>
                  <input class="form-check-input" type="checkbox" value="Vivir con un artista célebre" name="pregunta402" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op5" name="chk134_op5" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk134_op6" name="chk134_op6" onclick="javascript:seleccionar134();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores134" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 135</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Escribir artículos sobre pasatiempos</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos sobre pasatiempos" name="pregunta403" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op1" name="chk135_op1" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op2" name="chk135_op2" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Elaborar  cuadros estadísticos sobre costos de vida</td>
                  <input class="form-check-input" type="checkbox" value="Elaborar  cuadros estadísticos sobre costos de vida" name="pregunta404" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op3" name="chk135_op3" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op4" name="chk135_op4" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Reparar y arreglar muebles viejos</td>
                  <input class="form-check-input" type="checkbox" value="Reparar y arreglar muebles viejos" name="pregunta405" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op5" name="chk135_op5" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk135_op6" name="chk135_op6" onclick="javascript:seleccionar135();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores135" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 136</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Revisar las pruebas tipográficas de libros para niños</td>
                  <input class="form-check-input" type="checkbox" value="Revisar las pruebas tipográficas de libros para niños" name="pregunta406" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op1" name="chk136_op1" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op2" name="chk136_op2" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Contar cuentos a los niños</td>
                  <input class="form-check-input" type="checkbox" value="Contar cuentos a los niños" name="pregunta407" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op3" name="chk136_op3" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op4" name="chk136_op4" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Confeccionar juguetes para niños</td>
                  <input class="form-check-input" type="checkbox" value="Confeccionar juguetes para niños" name="pregunta408" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op5" name="chk136_op5" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk136_op6" name="chk136_op6" onclick="javascript:seleccionar136();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores136" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 137</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tomar clases de educación física</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de educación física" name="pregunta409" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op1" name="chk137_op1" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op2" name="chk137_op2" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases de trabajos manuales</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de trabajos manuales" name="pregunta410" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op3" name="chk137_op3" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op4" name="chk137_op4" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases de matemáticas</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de matemáticas" name="pregunta411" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op5" name="chk137_op5" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk137_op6" name="chk137_op6" onclick="javascript:seleccionar137();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores137" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 138</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser profesor de música</td>
                  <input class="form-check-input" type="checkbox" value="Ser profesor de música" name="pregunta412" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op1" name="chk138_op1" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op2" name="chk138_op2" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser maestro de escuela</td>
                  <input class="form-check-input" type="checkbox" value="Ser maestro de escuela" name="pregunta413" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op3" name="chk138_op3" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op4" name="chk138_op4" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser dentista</td>
                  <input class="form-check-input" type="checkbox" value="Ser dentista" name="pregunta414" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op5" name="chk138_op5" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk138_op6" name="chk138_op6" onclick="javascript:seleccionar138();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores138" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 139</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser taquígrafo(a) de un tribunal</td>
                  <input class="form-check-input" type="checkbox" value="Ser taquígrafo(a) de un tribunal" name="pregunta415" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op1" name="chk139_op1" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op2" name="chk139_op2" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser empresario de un célebre pianista</td>
                  <input class="form-check-input" type="checkbox" value="Ser empresario de un célebre pianista" name="pregunta416" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op3" name="chk139_op3" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op4" name="chk139_op4" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser consejero vocacional</td>
                  <input class="form-check-input" type="checkbox" value="Ser consejero vocacional" name="pregunta417" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op5" name="chk139_op5" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk139_op6" name="chk139_op6" onclick="javascript:seleccionar139();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores139" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 140</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Visitar un museo de ciencias naturales</td>
                  <input class="form-check-input" type="checkbox" value="Visitar un museo de ciencias naturales" name="pregunta418" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op1" name="chk140_op1" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op2" name="chk140_op2" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar una fábrica de aviones</td>
                  <input class="form-check-input" type="checkbox" value="Visitar una fábrica de aviones" name="pregunta419" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op3" name="chk140_op3" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op4" name="chk140_op4" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Visitar los barrios bajos de una ciudad</td>
                  <input class="form-check-input" type="checkbox" value="Visitar los barrios bajos de una ciudad" name="pregunta420" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op5" name="chk140_op5" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk140_op6" name="chk140_op6" onclick="javascript:seleccionar140();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores140" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 141</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer dibujos para revistas</td>
                  <input class="form-check-input" type="checkbox" value="Hacer dibujos para revistas" name="pregunta421" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op1" name="chk141_op1" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op2" name="chk141_op2" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Criar ganado</td>
                  <input class="form-check-input" type="checkbox" value="Criar ganado" name="pregunta422" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op3" name="chk141_op3" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op4" name="chk141_op4" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cultivar frutos para la venta</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar frutos para la venta" name="pregunta423" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op5" name="chk141_op5" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk141_op6" name="chk141_op6" onclick="javascript:seleccionar141();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores141" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 142</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como botones en un hotel</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como botones en un hotel" name="pregunta424" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op1" name="chk142_op1" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op2" name="chk142_op2" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Servir como mesero de restaurante</td>
                  <input class="form-check-input" type="checkbox" value="Servir como mesero de restaurante" name="pregunta425" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op3" name="chk142_op3" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op4" name="chk142_op4" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vivir en un sitio aislado atendiendo sus propias necesidades</td>
                  <input class="form-check-input" type="checkbox" value="Vivir en un sitio aislado atendiendo sus propias necesidades" name="pregunta426" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op5" name="chk142_op5" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk142_op6" name="chk142_op6" onclick="javascript:seleccionar142();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores142" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 143</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser guía de excursionistas</td>
                  <input class="form-check-input" type="checkbox" value="Ser guía de excursionistas" name="pregunta427" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op1" name="chk143_op1" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op2" name="chk143_op2" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diseñar equipos para excursionistas</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar equipos para excursionistas" name="pregunta428" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op3" name="chk143_op3" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op4" name="chk143_op4" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender equipos para excursionistas</td>
                  <input class="form-check-input" type="checkbox" value="Vender equipos para excursionistas" name="pregunta429" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op5" name="chk143_op5" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk143_op6" name="chk143_op6" onclick="javascript:seleccionar143();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores143" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 144</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Vender pólizas de seguro de vida</td>
                  <input class="form-check-input" type="checkbox" value="Vender pólizas de seguro de vida" name="pregunta430" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op1" name="chk144_op1" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op2" name="chk144_op2" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escribir artículos para una revista</td>
                  <input class="form-check-input" type="checkbox" value="Escribir artículos para una revista" name="pregunta431" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op3" name="chk144_op3" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op4" name="chk144_op4" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como jardinero-decorador</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como jardinero-decorador" name="pregunta432" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op5" name="chk144_op5" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk144_op6" name="chk144_op6" onclick="javascript:seleccionar144();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores144" class="">
            espere
          </div>
        </div>

        <br>


        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 145</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser considerado como modesto</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado como modesto" name="pregunta433" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op1" name="chk145_op1" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op2" name="chk145_op2" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser considerado digno de confianza</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado digno de confianza" name="pregunta434" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op3" name="chk145_op3" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op4" name="chk145_op4" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser considerado como poco serio</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado como poco serio" name="pregunta435" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op5" name="chk145_op5" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk145_op6" name="chk145_op6" onclick="javascript:seleccionar145();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores145" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 146</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar aritmética</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar aritmética" name="pregunta436" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op1" name="chk146_op1" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op2" name="chk146_op2" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Adiestrar perros para los ciegos</td>
                  <input class="form-check-input" type="checkbox" value="Adiestrar perros para los ciegos" name="pregunta437" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op3" name="chk146_op3" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op4" name="chk146_op4" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser secretario de un científico</td>
                  <input class="form-check-input" type="checkbox" value="Ser secretario de un científico" name="pregunta438" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op5" name="chk146_op5" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk146_op6" name="chk146_op6" onclick="javascript:seleccionar146();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores146" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 147</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tomar clases de música moderna</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de música moderna" name="pregunta439" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op1" name="chk147_op1" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op2" name="chk147_op2" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases de literatura moderna</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de literatura moderna" name="pregunta440" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op3" name="chk147_op3" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op4" name="chk147_op4" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tomar clases de pintura moderna</td>
                  <input class="form-check-input" type="checkbox" value="Tomar clases de pintura moderna" name="pregunta441" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op5" name="chk147_op5" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk147_op6" name="chk147_op6" onclick="javascript:seleccionar147();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores147" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 148</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser considerado como duro</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado como duro" name="pregunta442" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op1" name="chk148_op1" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op2" name="chk148_op2" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser considerado como justo</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado como justo" name="pregunta443" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op3" name="chk148_op3" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op4" name="chk148_op4" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser considerado como inteligente</td>
                  <input class="form-check-input" type="checkbox" value="Ser considerado como inteligente" name="pregunta444" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op5" name="chk148_op5" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk148_op6" name="chk148_op6" onclick="javascript:seleccionar148();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores148" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 149</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser director de orquesta</td>
                  <input class="form-check-input" type="checkbox" value="Ser director de orquesta" name="pregunta445" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op1" name="chk149_op1" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op2" name="chk149_op2" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser director de una empresa</td>
                  <input class="form-check-input" type="checkbox" value="Ser director de una empresa" name="pregunta446" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op3" name="chk149_op3" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op4" name="chk149_op4" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser director de un plan urbano</td>
                  <input class="form-check-input" type="checkbox" value="Ser director de un plan urbano" name="pregunta447" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op5" name="chk149_op5" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk149_op6" name="chk149_op6" onclick="javascript:seleccionar149();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores149" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 150</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Cultivar flores</td>
                  <input class="form-check-input" type="checkbox" value="Cultivar flores" name="pregunta448" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op1" name="chk150_op1" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op2" name="chk150_op2" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Manejar el mimeógrafo</td>
                  <input class="form-check-input" type="checkbox" value="Manejar el mimeógrafo" name="pregunta449" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op3" name="chk150_op3" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op4" name="chk150_op4" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Llevar la contabilidad</td>
                  <input class="form-check-input" type="checkbox" value="Llevar la contabilidad" name="pregunta450" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op5" name="chk150_op5" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk150_op6" name="chk150_op6" onclick="javascript:seleccionar150();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores150" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 151</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como guía de turistas</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como guía de turistas" name="pregunta451" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op1" name="chk151_op1" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op2" name="chk151_op2" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tallar joyas finas</td>
                  <input class="form-check-input" type="checkbox" value="Tallar joyas finas" name="pregunta452" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op3" name="chk151_op3" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op4" name="chk151_op4" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Arreglar música para orquesta</td>
                  <input class="form-check-input" type="checkbox" value="Arreglar música para orquesta" name="pregunta453" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op5" name="chk151_op5" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk151_op6" name="chk151_op6" onclick="javascript:seleccionar151();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores151" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 152</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar como telefonista</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como telefonista" name="pregunta454" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op1" name="chk152_op1" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op2" name="chk152_op2" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diseñar "Ex-libris"</td>
                  <input class="form-check-input" type="checkbox" value="Diseñar Ex-libris" name="pregunta455" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op3" name="chk152_op3" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op4" name="chk152_op4" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar juegos a los niños</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar juegos a los niños" name="pregunta456" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op5" name="chk152_op5" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk152_op6" name="chk152_op6" onclick="javascript:seleccionar152();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores152" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 153</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Reparar un artefacto eléctrico</td>
                  <input class="form-check-input" type="checkbox" value="Reparar un artefacto eléctrico" name="pregunta457" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op1" name="chk153_op1" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op2" name="chk153_op2" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ayudar a lavar platos</td>
                  <input class="form-check-input" type="checkbox" value="Ayudar a lavar platos" name="pregunta458" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op3" name="chk153_op3" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op4" name="chk153_op4" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Arreglar un cuarto desordenado</td>
                  <input class="form-check-input" type="checkbox" value="Arreglar un cuarto desordenado" name="pregunta459" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op5" name="chk153_op5" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk153_op6" name="chk153_op6" onclick="javascript:seleccionar153();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores153" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 154</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Enseñar la construcción de muebles</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar la construcción de muebles" name="pregunta460" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op1" name="chk154_op1" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op2" name="chk154_op2" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Corregir pruebas tipográficas</td>
                  <input class="form-check-input" type="checkbox" value="Corregir pruebas tipográficas" name="pregunta461" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op3" name="chk154_op3" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op4" name="chk154_op4" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender curiosidades de Oriente</td>
                  <input class="form-check-input" type="checkbox" value="Vender curiosidades de Oriente" name="pregunta462" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op5" name="chk154_op5" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk154_op6" name="chk154_op6" onclick="javascript:seleccionar154();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores154" class="">
            espere
          </div>
        </div>

        <br>

        
        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 155</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser secretario (a) privado (a)</td>
                  <input class="form-check-input" type="checkbox" value="Ser secretario (a) privado (a)" name="pregunta463" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op1" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op2" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser contador (a)</td>
                  <input class="form-check-input" type="checkbox" value="Ser contador (a)" name="pregunta464" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op3" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op4" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser vendedor (a)</td>
                  <input class="form-check-input" type="checkbox" value="Ser vendedor (a)" name="pregunta465" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op5" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk155_op6" onclick="javascript:seleccionar155();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores155" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 156</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Practicar patinaje de figuras</td>
                  <input class="form-check-input" type="checkbox" value="Practicar patinaje de figuras" name="pregunta466" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op1" name="chk156_op1" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op2" name="chk156_op2" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar tenis</td>
                  <input class="form-check-input" type="checkbox" value="Jugar tenis" name="pregunta467" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op3" name="chk156_op3" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op4" name="chk156_op4" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Escalar montañas</td>
                  <input class="form-check-input" type="checkbox" value="Escalar montañas" name="pregunta468" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op5" name="chk156_op5" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk156_op6" name="chk156_op6" onclick="javascript:seleccionar156();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores156" class="">
            espere
          </div>
        </div>

        <br>


        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 157</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar en una oficina</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una oficina" name="pregunta469" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk157_op1" name="chk157_op1" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk157_op2" name="chk157_op2" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en una hacienda</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una hacienda" name="pregunta470" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk157_op3" name="chk157_op3" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk157_op4" name="chk157_op4" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar como vendedor de casa en casa</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar como vendedor de casa en casa" name="pregunta471" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk157_op5" name="chk157_op5" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" vvalue="1" id="chk157_op6" name="chk157_op6" onclick="javascript:seleccionar157();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores157" class="">
            espere
          </div>
        </div>

        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 158</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Trabajar en una fábrica de dulces</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en una fábrica de dulces" name="pregunta472" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op1" name="chk158_op1" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op2" name="chk158_op2" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Explotar un colmenar</td>
                  <input class="form-check-input" type="checkbox" value="Explotar un colmenar" name="pregunta473" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op3" name="chk158_op3" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op4" name="chk158_op4" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser optómetra</td>
                  <input class="form-check-input" type="checkbox" value="Ser optómetra" name="pregunta474" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op5" name="chk158_op5" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk158_op6" name="chk158_op6" onclick="javascript:seleccionar158();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores158" class="">
            espere
          </div>
        </div>

        <br>


        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 159</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser agricultor</td>
                  <input class="form-check-input" type="checkbox" value="Ser agricultor" name="pregunta475" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op1" name="chk159_op1" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op2" name="chk159_op2" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser conductor de tren</td>
                  <input class="form-check-input" type="checkbox" value="Ser conductor de tren" name="pregunta476" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op3" name="chk159_op3" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op4" name="chk159_op4" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser oficinista</td>
                  <input class="form-check-input" type="checkbox" value="Ser oficinista" name="pregunta477" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op5" name="chk159_op5" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk159_op6" name="chk159_op6" onclick="javascript:seleccionar159();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores159" class="">
            espere
          </div>
        </div>


        <br>

                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 160</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Hacer trabajos de oficina</td>
                  <input class="form-check-input" type="checkbox" value="Hacer trabajos de oficina" name="pregunta478" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op1" name="chk160_op1" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op2" name="chk160_op2" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Enseñar literatura</td>
                  <input class="form-check-input" type="checkbox" value="Enseñar literatura" name="pregunta479" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op3" name="chk160_op3" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op4" name="chk160_op4" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vender objetos de arte</td>
                  <input class="form-check-input" type="checkbox" value="Vender objetos de arte" name="pregunta480" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op5" name="chk160_op5" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk160_op6" name="chk160_op6" onclick="javascript:seleccionar160();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores160" class="">
            espere
          </div>
        </div>

        <br>

                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 161</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Estudiar contabilidad</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar contabilidad" name="pregunta481" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op1" name="chk161_op1" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op2" name="chk161_op2" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar métodos en irrigación</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar métodos en irrigación" name="pregunta482" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op3" name="chk161_op3" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op4" name="chk161_op4" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Estudiar taquigrafía</td>
                  <input class="form-check-input" type="checkbox" value="Estudiar taquigrafía" name="pregunta483" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op5" name="chk161_op5" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk161_op6" name="chk161_op6" onclick="javascript:seleccionar161();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores161" class="">
            espere
          </div>
        </div>

        <br>



        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 162</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Repartir el correo</td>
                  <input class="form-check-input" type="checkbox" value="Repartir el correo" name="pregunta484" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op1" name="chk162_op1" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op2" name="chk162_op2" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en el aseo público</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en el aseo público" name="pregunta485" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op3" name="chk162_op3" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op4" name="chk162_op4" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Clasificar correo en una oficina postal</td>
                  <input class="form-check-input" type="checkbox" value="Clasificar correo en una oficina postal" name="pregunta486" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op5" name="chk162_op5" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk162_op6" name="chk162_op6" onclick="javascript:seleccionar162();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores162" class="">
            espere
          </div>
        </div>

        <br>
        
                <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 163</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser poeta</td>
                  <input class="form-check-input" type="checkbox" value="Ser poeta" name="pregunta487" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op1" name="chk163_op1" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op2" name="chk163_op2" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser artista</td>
                  <input class="form-check-input" type="checkbox" value="Ser artista" name="pregunta488" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op3" name="chk163_op3" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op4" name="chk163_op4" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trabajar en la asistencia social</td>
                  <input class="form-check-input" type="checkbox" value="Trabajar en la asistencia social" name="pregunta489" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op5" name="chk163_op5" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk163_op6" name="chk163_op6" onclick="javascript:seleccionar163();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores163" class="">
            espere
          </div>
        </div>

        <br>


                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 164</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Resolver rompecabezas numéricos</td>
                  <input class="form-check-input" type="checkbox" value="Resolver rompecabezas numéricos" name="pregunta490" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op1" name="chk164_op1" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op2" name="chk164_op2" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Jugar a las damas</td>
                  <input class="form-check-input" type="checkbox" value="Jugar a las damas" name="pregunta491" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op3" name="chk164_op3" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op4" name="chk164_op4" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Resolver rompecabezas mecánicos</td>
                  <input class="form-check-input" type="checkbox" value="Resolver rompecabezas mecánicos" name="pregunta492" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op5" name="chk164_op5" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk164_op6" name="chk164_op6" onclick="javascript:seleccionar164();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores164" class="">
            espere
          </div>
        </div>

        <br>

                                <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 165</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Fundar un periódico</td>
                  <input class="form-check-input" type="checkbox" value="Fundar un periódico" name="pregunta493" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op1" name="chk165_op1" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op2" name="chk165_op2" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Fundar una escuela de arte</td>
                  <input class="form-check-input" type="checkbox" value="Fundar una escuela de arte" name="pregunta494" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op3" name="chk165_op3" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op4" name="chk165_op4" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Fundar una orquesta</td>
                  <input class="form-check-input" type="checkbox" value="Fundar una orquesta" name="pregunta495" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op5" name="chk165_op5" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk165_op6" name="chk165_op6" onclick="javascript:seleccionar165();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores165" class="">
            espere
          </div>
        </div>

        <br>

                                        <!--Tercera encuesta-->

        <div class="row" style="background-color: #04663325;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 166</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Tener amigos</td>
                  <input class="form-check-input" type="checkbox" value="Tener amigos" name="pregunta496" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op1" name="chk166_op1" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op2" name="chk166_op2" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener poder</td>
                  <input class="form-check-input" type="checkbox" value="Tener poder" name="pregunta497" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op3" name="chk166_op3" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op4" name="chk166_op4" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tener fama</td>
                  <input class="form-check-input" type="checkbox" value="Tener fama" name="pregunta498" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op5" name="chk166_op5" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk166_op6" name="chk166_op6" onclick="javascript:seleccionar166();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores166" class="">
            espere
          </div>
        </div>

        <br>

                                                <!--Tercera encuesta-->

        <div class="row" style="background-color: #f9b0331e;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 167</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Ser mecánico</td>
                  <input class="form-check-input" type="checkbox" value="Ser mecánico" name="pregunta499" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op1" name="chk167_op1" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op2" name="chk167_op2" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser arquitecto</td>
                  <input class="form-check-input" type="checkbox" value="Ser arquitecto" name="pregunta500" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op3" name="chk167_op3" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op4" name="chk167_op4" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Ser químico</td>
                  <input class="form-check-input" type="checkbox" value="Ser químico" name="pregunta501" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op5" name="chk167_op5" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk167_op6" name="chk167_op6" onclick="javascript:seleccionar167();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores167" class="">
            espere
          </div>
        </div>

        <br>

        <!--Tercera encuesta-->

        <div class="row" style="background-color: #37465d23;">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Encuesta 168</th>
                  <th scope="col">Más</th>
                  <th scope="col">Menos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 75%">Empastar libros</td>
                  <input class="form-check-input" type="checkbox" value="Empastar libros" name="pregunta502" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op1" name="chk168_op1" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op2" name="chk168_op2" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Cuidar niños enfermos</td>
                  <input class="form-check-input" type="checkbox" value="Cuidar niños enfermos" name="pregunta503" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op3" name="chk168_op3" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op4" name="chk168_op4" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Copiar cartas en máquina</td>
                  <input class="form-check-input" type="checkbox" value="Copiar cartas en máquina" name="pregunta504" style="display: none !important;" checked>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op5" name="chk168_op5" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        +
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="chk168_op6" name="chk168_op6" onclick="javascript:seleccionar168();">
                      <label class="form-check-label" for="flexCheckDefault">
                        -
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="errores168" class="">
            espere
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="pt-1 mb-4">
          <a><button class="btn btn-lg btn-block" type="submit" name="btnenviar" style="width: 100%; background-color: #046633; color: #ffff;">Fin del Test Vocacional</button></a>
          </div>
        </div>
      </form>
        <br>
      </div>

    </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/check.js"></script>
    <script src="js/timer.js"></script>




    <script type="text/javascript">
      $(document).ready(function(){
            $('.cargando').hide();
          });  

      function buscar_datos()
      {
        doc = $("#doc").val();
        
        
        var parametros = 
        {
          "buscar": "1",
          "doc" : doc
        };
        $.ajax(
        {
          data:  parametros,
          dataType: 'json',
          url:   'codigos_php.php',
          type:  'post',
          beforeSend: function() 
          {
            $('.formulario').hide();
            $('.cargando').show();
            
          }, 
          error: function()
          {alert("Error");},
          complete: function() 
          {
            $('.formulario').show();
            $('.cargando').hide();
          
          },
          success:  function (valores) 
          {
            if(valores.existe=="1") //Aqui usamos la variable que NO use en el vídeo
            {
              $("#prematricula").val(valores.prematricula);
              $("#nombre").val(valores.nombre);
              $("#sexo").val(valores.sexo);
            }
            else
            {
              alert("El propietario no existe, ¡Crealo!")
            }

          }
        }) 
      }
    </script>


</body>
</html>