<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marcar y desmarcar todos los checkbox de formulario con un botón</title>
    </head>
    <body>
        
    <form name="f1" id="formElement">
        <p>
            Nombre: <input type="text" name="nombre" />
            <br>
            <input type="checkbox" name="ch1" /> Opcion 1
            <br>
            <input type="checkbox" name="ch2" /> Opcion 2
            <br>
            <input type="checkbox" name="ch3" /> Opcion 3
            <br>
            <input type="checkbox" name="ch4" /> Opcion 4
            <br>
            <select name="otro">
                <option value="1">Seleccion 1</option>
                <option value="2">Seleccion 2</option>
            </select>
            <br>
            <input type="submit" value="Enviar" />
        </p>
        <p>
            <a href="#" id="marcarTodo">Marcar todos los checkbox</a> |
            <a href="#" id="desmarcarTodo">Desmarcar todos los checkbox</a>
        </p>
    </form>
    
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('marcarTodo').addEventListener('click', function(e) {
                e.preventDefault();
                //seleccionarTodo();
                checkAll();
            });
            document.getElementById('desmarcarTodo').addEventListener('click', function(e) {
                e.preventDefault();
                //desmarcarTodo();
                uncheckAll();
            });
        });
    
        function seleccionarTodo() {
            for (let i=0; i < document.f1.elements.length; i++) {
                if(document.f1.elements[i].type === "checkbox") {
                    document.f1.elements[i].checked = true;
                }
            }
        }
    
        function desmarcarTodo() {
            for (let i=0; i<document.f1.elements.length; i++) {
                if(document.f1.elements[i].type == "checkbox") {
                    document.f1.elements[i].checked = false
                }
            }
        }
    
        function checkAll() {
            document.querySelectorAll('#formElement input[type=checkbox]').forEach(function(checkElement) {
                checkElement.checked = true;
            });
        }
    
        function uncheckAll() {
            document.querySelectorAll('#formElement input[type=checkbox]').forEach(function(checkElement) {
                checkElement.checked = false;
            });
        }
    </script>

    <script>

            //Dos

    $("#chk_op2").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op2").prop("checked", true);
      $("#chk_op1").prop("checked", false);
      $("#chk_op3").prop("checked", false);
      $("#chk_op4").prop("checked", false);
      $("#chk_op5").prop("checked", false);
      $("#chk_op6").prop("checked", false);

      $("#errores").html("solo dos check puede ser seleccionados");
      setTimeout(function(){
        $('#errores').html("");
      }, 2000);
    });

    //Dos

    $("#chk_op3").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op3").prop("checked", true);
      $("#chk_op1").prop("checked", false);
      $("#chk_op2").prop("checked", false);
      $("#chk_op4").prop("checked", false);
      $("#chk_op5").prop("checked", false);
      $("#chk_op6").prop("checked", false);

      $("#errores").html("solo dos check puede ser seleccionados");
      setTimeout(function(){
        $('#errores').html("");
      }, 2000);
    });

    //cuatro

    $("#chk_op4").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op4").prop("checked", true);
      $("#chk_op1").prop("checked", false);
      $("#chk_op2").prop("checked", false);
      $("#chk_op3").prop("checked", false);
      $("#chk_op5").prop("checked", false);
      $("#chk_op6").prop("checked", false);

      $("#errores").html("solo dos check puede ser seleccionados");
      setTimeout(function(){
        $('#errores').html("");
      }, 2000);
    });

    //Dos

    $("#chk_op5").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op5").prop("checked", true);
      $("#chk_op1").prop("checked", false);
      $("#chk_op2").prop("checked", false);
      $("#chk_op3").prop("checked", false);
      $("#chk_op4").prop("checked", false);
      $("#chk_op6").prop("checked", false);

      $("#errores").html("solo dos check puede ser seleccionados");
      setTimeout(function(){
        $('#errores').html("");
      }, 5000);
    });

    //Dos

    $("#chk_op6").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op6").prop("checked", true);
      $("#chk_op1").prop("checked", false);
      $("#chk_op2").prop("checked", false);
      $("#chk_op3").prop("checked", false);
      $("#chk_op4").prop("checked", false);
      $("#chk_op5").prop("checked", false);

      $("#errores").html("solo dos check puede ser seleccionados");
      setTimeout(function(){
        $('#errores').html("");
      }, 2000);
    });
    </script>
    </body>
    </html>