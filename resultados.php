<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        h5{
            color: #046633;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-8 offset-md-2 offset-sm-0 offset-me-0">


            <div class="row">
                <img src="assets/img/fondo.png" alt="" style="width: 100%;">
            </div>
            <br>
            <br>
            
            <div class="cargando row">       
                <div class="d-flex justify-content-center">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Cargando...</span>
                  </div>
                </div>
              </div>
    
            <div class="row formulario">
                <h5> <b>DATOS DEL ASPIRANTE</b> </h5>

                <div class="col-md-4">
                    <p style="color: #37465D; margin-top: 3%;"> <b>Número de Prematrícula:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="doc" name="doc" placeholder="Ejemplo 747844354" onblur="buscar_datos();" required style="width: 100%;">
                </div>

                <br><br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Nombre completo:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nombre" name="nombre" onblur="buscar_datos();" readonly style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br><br>

                <h5> <b>CALIFICACIONES</b> </h5>
                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Promedio de Secundaria:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="promediosec" name="promediosec" onblur="buscar_datos();" readonly style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Test Vocacional:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="testvoc" name="testvoc" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Promedio ponderado:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="prompond" name="prompond" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br><br>

                <h5> <b>INFORMACIÓN DEL PROCESO DE INGRESO</b> </h5>
                <br><br>


                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Resultado:</b> </p>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="resultado" name="resultado" onblur="buscar_datos();" style="width: 110%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="opcion" name="opcion" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>


                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Carrera:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="carrera" name="carrera" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Modalidad:</b> </p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="modalidad" name="modalidad" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%;">
                </div>

                <br><br>

                <div class="col-md-4">
                    <p style="color: #37465D;"> <b>Observaciones:</b> </p>
                </div>
                <div class="col-md-8">
                    <textarea type="text" class="form-control" id="observaciones" name="observaciones" onblur="buscar_datos();" style="width: 100%; outline: none; background-color: white; border: 0; margin-top: -1%; height: 230px; text-align: justify;"></textarea>
                </div>
            </div>
    
    
            <div class="row div" id="div" style="display:none">
                <h5 style="color: #F9B233;"> <b>NOTA</b> </h5>
                <p style="color: #F9B233;">Los resultados finales son Inapelables</p>
                <p style="color: #37465D; text-align: justify;">Usted podrá realizar su matrícula de manera presencial en el período del 06 al 11 de febrero 2023 en el Recinto Universitario Francisco Luis Espinoza Pineda (Sede Central) en el siguiente horario: De lunes a viernes de 8:00 am – 12 md y de 1:00 pm – 4:30 pm; el sábado de 8:00 am – 12 md. El arancel de la matrícula es de $10 dólares netos o su equivalente en córdobas.</p>


                <br><br>
                <h5> <b> Curso Integral de Inducción </b></h5>
                <p style="margin-left: 8%; color:#37465D;"><b>Modalidad Presencial(Regular):</b> 13 al 17 de frebrero 2023</p>
                <p style="margin-left: 8%; color:#37465D;"><b>Modalidad Semipresencial(Sabatino):</b> 18 de frebrero 2023</p>
            </div>

            <div class="row" id="divdos" style="display:none">
                <p style="color: red; text-align: justify; font-size: 30px;">Recuerde que puede aplicar a la segunda fase.</p>
                <h5 style="color:#F9B233;">NOTA</h5><!--Solo presnetar Nota-->
                <p style="color: #F9B233;">Los resultados finales son Inapelables</p>
                <p style="color: #37465D; text-align: justify;">Usted no clasificó en ninguna de sus opciones. Considerando que obtuvo un promedio ponderado mayor o igual al puntaje final mínimo de 40 puntos puede optar a la segunda fase de clasificación los días 30 y 31 de enero de manera presencial en el Recinto Universitario Francisco Luis Espinoza Pineda (Sede Central); en las carreras donde quedan cupos disponibles; para lo cual se considerarán las notas obtenidas. El resultado de la segunda fase será dado de manera presencial el 03 de febrero 2023.</p>
            </div>


            <br>
            <div class="row">
                <button type="button" class="btn btn-outline-success" style="width: 100%;" onclick="javascript:window.print()">Imprimir</button>
            </div>
            <br>
        </div>
    </div>    
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
        url:   'respuesta.php',
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
            $("#solicitud").val(valores.solicitud);
            $("#nombre").val(valores.nombre);
            $("#promediosec").val(valores.promediosec);
            $("#testvoc").val(valores.testvoc);
            $("#prompond").val(valores.prompond);
            $("#resultado").val(valores.resultado);
            $("#opcion").val(valores.opcion);
            $("#carrera").val(valores.carrera);
            $("#modalidad").val(valores.modalidad);
            $("#observaciones").val(valores.observaciones);

            if(valores.resultado == "Clasificó en"){
                document.getElementById("div").style.display = "block";
                document.getElementById("divdos").style.display = "none";
            }else {
                document.getElementById("div").style.display = "none";
                document.getElementById("divdos").style.display = "block";
            }


          }
          else
          {
            alert("El propietario no existe, ¡Crealo!")
          }

        }
      }) 
    }
  </script>
</html>