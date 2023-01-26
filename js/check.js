function seleccionar(){
    $("#chk_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk_op1").prop("checked", true);
      $("#chk_op2").prop("checked", false);
      $("#chk_op3").prop("checked", false);
      $("#chk_op5").prop("checked", false);

      //$("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      //setTimeout(function(){
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      //}, 2000);
    });

    //segundo Check

    $("#chk_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk_op1").prop("checked", false);
        $("#chk_op2").prop("checked", true);
        $("#chk_op4").prop("checked", false);
        $("#chk_op6").prop("checked", false);
  
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk_op1").prop("checked", false);
        $("#chk_op3").prop("checked", true);
        $("#chk_op4").prop("checked", false);
        $("#chk_op5").prop("checked", false);
  
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk_op2").prop("checked", false);
        $("#chk_op3").prop("checked", false);
        $("#chk_op4").prop("checked", true);
        $("#chk_op6").prop("checked", false);
  
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk_op1").prop("checked", false);
        $("#chk_op3").prop("checked", false);
        $("#chk_op5").prop("checked", true);
        $("#chk_op6").prop("checked", false);
  
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk_op2").prop("checked", false);
        $("#chk_op4").prop("checked", false);
        $("#chk_op5").prop("checked", false);
        $("#chk_op6").prop("checked", true);
  
        $("#errores").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores').html("");
        }, 2000);
      });
  }




//2 grupo

function seleccionar2(){
  $("#chk2_op1").on('change', function (ev){
    ev.preventDefault();

    $("#chk2_op1").prop("checked", true);
    $("#chk2_op2").prop("checked", false);
    $("#chk2_op3").prop("checked", false);
    $("#chk2_op5").prop("checked", false);

    $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
    setTimeout(function(){
      $('#errores2').html("");
    }, 2000);
  });

  //segundo Check

  $("#chk2_op2").on('change', function (ev){
      ev.preventDefault();

      $("#chk2_op1").prop("checked", false);
      $("#chk2_op2").prop("checked", true);
      $("#chk2_op4").prop("checked", false);
      $("#chk2_op6").prop("checked", false);

      $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores2').html("");
      }, 2000);
    });

  //Tercer Check

  $("#chk2_op3").on('change', function (ev){
      ev.preventDefault();

      $("#chk2_op1").prop("checked", false);
      $("#chk2_op3").prop("checked", true);
      $("#chk2_op4").prop("checked", false);
      $("#chk2_op5").prop("checked", false);

      $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores2').html("");
      }, 2000);
    });

  //cuarto Check

  $("#chk2_op4").on('change', function (ev){
      ev.preventDefault();

      $("#chk2_op2").prop("checked", false);
      $("#chk2_op3").prop("checked", false);
      $("#chk2_op4").prop("checked", true);
      $("#chk2_op6").prop("checked", false);

      $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores2').html("");
      }, 2000);
    });

  //Quinta Check

  $("#chk2_op5").on('change', function (ev){
      ev.preventDefault();

      $("#chk2_op1").prop("checked", false);
      $("#chk2_op3").prop("checked", false);
      $("#chk2_op5").prop("checked", true);
      $("#chk2_op6").prop("checked", false);

      $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores2').html("");
      }, 2000);
    });

  //Quinta Check

  $("#chk2_op6").on('change', function (ev){
      ev.preventDefault();

      $("#chk2_op2").prop("checked", false);
      $("#chk2_op4").prop("checked", false);
      $("#chk2_op5").prop("checked", false);
      $("#chk2_op6").prop("checked", true);

      $("#errores2").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores2').html("");
      }, 2000);
    });
}



//3 Grupo

function seleccionar3(){
    $("#chk3_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk3_op1").prop("checked", true);
      $("#chk3_op2").prop("checked", false);
      $("#chk3_op3").prop("checked", false);
      $("#chk3_op5").prop("checked", false);

      $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores3').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk3_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk3_op1").prop("checked", false);
        $("#chk3_op2").prop("checked", true);
        $("#chk3_op4").prop("checked", false);
        $("#chk3_op6").prop("checked", false);
  
        $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores3').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk3_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk3_op1").prop("checked", false);
        $("#chk3_op3").prop("checked", true);
        $("#chk3_op4").prop("checked", false);
        $("#chk3_op5").prop("checked", false);
  
        $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores3').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk3_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk3_op2").prop("checked", false);
        $("#chk3_op3").prop("checked", false);
        $("#chk3_op4").prop("checked", true);
        $("#chk3_op6").prop("checked", false);
  
        $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores3').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk3_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk3_op1").prop("checked", false);
        $("#chk3_op3").prop("checked", false);
        $("#chk3_op5").prop("checked", true);
        $("#chk3_op6").prop("checked", false);
  
        $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores3').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk3_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk3_op2").prop("checked", false);
        $("#chk3_op4").prop("checked", false);
        $("#chk3_op5").prop("checked", false);
        $("#chk3_op6").prop("checked", true);
  
        $("#errores3").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores3').html("");
        }, 2000);
      });
  }



  //4 grupo

  function seleccionar4(){
    $("#chk4_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk4_op1").prop("checked", true);
      $("#chk4_op2").prop("checked", false);
      $("#chk4_op3").prop("checked", false);
      $("#chk4_op5").prop("checked", false);

      $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores4').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk4_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk4_op1").prop("checked", false);
        $("#chk4_op2").prop("checked", true);
        $("#chk4_op4").prop("checked", false);
        $("#chk4_op6").prop("checked", false);
  
        $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores4').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk4_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk4_op1").prop("checked", false);
        $("#chk4_op3").prop("checked", true);
        $("#chk4_op4").prop("checked", false);
        $("#chk4_op5").prop("checked", false);
  
        $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores4').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk4_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk4_op2").prop("checked", false);
        $("#chk4_op3").prop("checked", false);
        $("#chk4_op4").prop("checked", true);
        $("#chk4_op6").prop("checked", false);
  
        $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores4').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk4_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk4_op1").prop("checked", false);
        $("#chk4_op3").prop("checked", false);
        $("#chk4_op5").prop("checked", true);
        $("#chk4_op6").prop("checked", false);
  
        $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores4').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk4_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk4_op2").prop("checked", false);
        $("#chk4_op4").prop("checked", false);
        $("#chk4_op5").prop("checked", false);
        $("#chk4_op6").prop("checked", true);
  
        $("#errores4").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores4').html("");
        }, 2000);
      });
  }


  /// 5 grupo
  function seleccionar5(){
    $("#chk5_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk5_op1").prop("checked", true);
      $("#chk5_op2").prop("checked", false);
      $("#chk5_op3").prop("checked", false);
      $("#chk5_op5").prop("checked", false);

      $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores5').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk5_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk5_op1").prop("checked", false);
        $("#chk5_op2").prop("checked", true);
        $("#chk5_op4").prop("checked", false);
        $("#chk5_op6").prop("checked", false);
  
        $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores5').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk5_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk5_op1").prop("checked", false);
        $("#chk5_op3").prop("checked", true);
        $("#chk5_op4").prop("checked", false);
        $("#chk5_op5").prop("checked", false);
  
        $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores5').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk5_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk5_op2").prop("checked", false);
        $("#chk5_op3").prop("checked", false);
        $("#chk5_op4").prop("checked", true);
        $("#chk5_op6").prop("checked", false);
  
        $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores5').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk5_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk5_op1").prop("checked", false);
        $("#chk5_op3").prop("checked", false);
        $("#chk5_op5").prop("checked", true);
        $("#chk5_op6").prop("checked", false);
  
        $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores5').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk5_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk5_op2").prop("checked", false);
        $("#chk5_op4").prop("checked", false);
        $("#chk5_op5").prop("checked", false);
        $("#chk5_op6").prop("checked", true);
  
        $("#errores5").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores5').html("");
        }, 2000);
      });
  }



    /// 6 grupo
    function seleccionar6(){
      $("#chk6_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk6_op1").prop("checked", true);
        $("#chk6_op2").prop("checked", false);
        $("#chk6_op3").prop("checked", false);
        $("#chk6_op5").prop("checked", false);
  
        $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores6').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk6_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op1").prop("checked", false);
          $("#chk6_op2").prop("checked", true);
          $("#chk6_op4").prop("checked", false);
          $("#chk6_op6").prop("checked", false);
    
          $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores6').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk6_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op1").prop("checked", false);
          $("#chk6_op3").prop("checked", true);
          $("#chk6_op4").prop("checked", false);
          $("#chk6_op5").prop("checked", false);
    
          $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores6').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk6_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op2").prop("checked", false);
          $("#chk6_op3").prop("checked", false);
          $("#chk6_op4").prop("checked", true);
          $("#chk6_op6").prop("checked", false);
    
          $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores6').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk6_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op1").prop("checked", false);
          $("#chk6_op3").prop("checked", false);
          $("#chk6_op5").prop("checked", true);
          $("#chk6_op6").prop("checked", false);
    
          $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores6').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk6_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op2").prop("checked", false);
          $("#chk6_op4").prop("checked", false);
          $("#chk6_op5").prop("checked", false);
          $("#chk6_op6").prop("checked", true);
    
          $("#errores6").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores6').html("");
          }, 2000);
        });
    }



  /// 7 grupo
  function seleccionar7(){
    $("#chk7_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk7_op1").prop("checked", true);
      $("#chk7_op2").prop("checked", false);
      $("#chk7_op3").prop("checked", false);
      $("#chk7_op5").prop("checked", false);

      $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores7').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk7_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk7_op1").prop("checked", false);
        $("#chk7_op2").prop("checked", true);
        $("#chk7_op4").prop("checked", false);
        $("#chk7_op6").prop("checked", false);
  
        $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores7').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk7_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk7_op1").prop("checked", false);
        $("#chk7_op3").prop("checked", true);
        $("#chk7_op4").prop("checked", false);
        $("#chk7_op5").prop("checked", false);
  
        $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores7').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk7_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk7_op2").prop("checked", false);
        $("#chk7_op3").prop("checked", false);
        $("#chk7_op4").prop("checked", true);
        $("#chk7_op6").prop("checked", false);
  
        $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores7').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk7_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk7_op1").prop("checked", false);
        $("#chk7_op3").prop("checked", false);
        $("#chk7_op5").prop("checked", true);
        $("#chk7_op6").prop("checked", false);
  
        $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores7').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk7_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk7_op2").prop("checked", false);
        $("#chk7_op4").prop("checked", false);
        $("#chk7_op5").prop("checked", false);
        $("#chk7_op6").prop("checked", true);
  
        $("#errores7").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores7').html("");
        }, 2000);
      });
  }



    /// 8 grupo
    function seleccionar8(){
      $("#chk8_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk8_op1").prop("checked", true);
        $("#chk8_op2").prop("checked", false);
        $("#chk8_op3").prop("checked", false);
        $("#chk8_op5").prop("checked", false);
  
        $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores8').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk8_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk8_op1").prop("checked", false);
          $("#chk8_op2").prop("checked", true);
          $("#chk8_op4").prop("checked", false);
          $("#chk8_op6").prop("checked", false);
    
          $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores8').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk8_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk8_op1").prop("checked", false);
          $("#chk8_op3").prop("checked", true);
          $("#chk8_op4").prop("checked", false);
          $("#chk8_op5").prop("checked", false);
    
          $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores8').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk8_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk8_op2").prop("checked", false);
          $("#chk8_op3").prop("checked", false);
          $("#chk8_op4").prop("checked", true);
          $("#chk8_op6").prop("checked", false);
    
          $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores8').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk8_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk8_op1").prop("checked", false);
          $("#chk8_op3").prop("checked", false);
          $("#chk8_op5").prop("checked", true);
          $("#chk8_op6").prop("checked", false);
    
          $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores8').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk8_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk8_op2").prop("checked", false);
          $("#chk8_op4").prop("checked", false);
          $("#chk8_op5").prop("checked", false);
          $("#chk8_op6").prop("checked", true);
    
          $("#errores8").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores8').html("");
          }, 2000);
        });
    }



  /// 9 grupo
  function seleccionar9(){
    $("#chk9_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk9_op1").prop("checked", true);
      $("#chk9_op2").prop("checked", false);
      $("#chk9_op3").prop("checked", false);
      $("#chk9_op5").prop("checked", false);

      $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores9').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk9_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk9_op1").prop("checked", false);
        $("#chk9_op2").prop("checked", true);
        $("#chk9_op4").prop("checked", false);
        $("#chk9_op6").prop("checked", false);
  
        $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores9').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk9_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk9_op1").prop("checked", false);
        $("#chk9_op3").prop("checked", true);
        $("#chk9_op4").prop("checked", false);
        $("#chk9_op5").prop("checked", false);
  
        $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores9').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk9_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk9_op2").prop("checked", false);
        $("#chk9_op3").prop("checked", false);
        $("#chk9_op4").prop("checked", true);
        $("#chk9_op6").prop("checked", false);
  
        $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores9').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk9_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk9_op1").prop("checked", false);
        $("#chk9_op3").prop("checked", false);
        $("#chk9_op5").prop("checked", true);
        $("#chk9_op6").prop("checked", false);
  
        $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores9').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk9_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk9_op2").prop("checked", false);
        $("#chk9_op4").prop("checked", false);
        $("#chk9_op5").prop("checked", false);
        $("#chk9_op6").prop("checked", true);
  
        $("#errores9").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores9').html("");
        }, 2000);
      });
  }



    /// 10 grupo
    function seleccionar10(){
      $("#chk10_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk10_op1").prop("checked", true);
        $("#chk10_op2").prop("checked", false);
        $("#chk10_op3").prop("checked", false);
        $("#chk10_op5").prop("checked", false);
  
        $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores10').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk10_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk10_op1").prop("checked", false);
          $("#chk10_op2").prop("checked", true);
          $("#chk10_op4").prop("checked", false);
          $("#chk10_op6").prop("checked", false);
    
          $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores10').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk10_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk10_op1").prop("checked", false);
          $("#chk10_op3").prop("checked", true);
          $("#chk10_op4").prop("checked", false);
          $("#chk10_op5").prop("checked", false);
    
          $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores10').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk10_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk10_op2").prop("checked", false);
          $("#chk10_op3").prop("checked", false);
          $("#chk10_op4").prop("checked", true);
          $("#chk10_op6").prop("checked", false);
    
          $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores10').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk10_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk10_op1").prop("checked", false);
          $("#chk10_op3").prop("checked", false);
          $("#chk10_op5").prop("checked", true);
          $("#chk10_op6").prop("checked", false);
    
          $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores10').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk10_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk10_op2").prop("checked", false);
          $("#chk10_op4").prop("checked", false);
          $("#chk10_op5").prop("checked", false);
          $("#chk10_op6").prop("checked", true);
    
          $("#errores10").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores10').html("");
          }, 2000);
        });
    }



  /// 11 grupo
  function seleccionar11(){
    $("#chk11_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk11_op1").prop("checked", true);
      $("#chk11_op2").prop("checked", false);
      $("#chk11_op3").prop("checked", false);
      $("#chk11_op5").prop("checked", false);

      $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores11').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk11_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk11_op1").prop("checked", false);
        $("#chk11_op2").prop("checked", true);
        $("#chk11_op4").prop("checked", false);
        $("#chk11_op6").prop("checked", false);
  
        $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores11').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk11_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk11_op1").prop("checked", false);
        $("#chk11_op3").prop("checked", true);
        $("#chk11_op4").prop("checked", false);
        $("#chk11_op5").prop("checked", false);
  
        $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores11').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk11_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk11_op2").prop("checked", false);
        $("#chk11_op3").prop("checked", false);
        $("#chk11_op4").prop("checked", true);
        $("#chk11_op6").prop("checked", false);
  
        $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores11').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk11_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk11_op1").prop("checked", false);
        $("#chk11_op3").prop("checked", false);
        $("#chk11_op5").prop("checked", true);
        $("#chk11_op6").prop("checked", false);
  
        $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores11').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk11_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk11_op2").prop("checked", false);
        $("#chk11_op4").prop("checked", false);
        $("#chk11_op5").prop("checked", false);
        $("#chk11_op6").prop("checked", true);
  
        $("#errores11").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores11').html("");
        }, 2000);
      });
  }



    /// 12 grupo
    function seleccionar12(){
      $("#chk12_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk12_op1").prop("checked", true);
        $("#chk12_op2").prop("checked", false);
        $("#chk12_op3").prop("checked", false);
        $("#chk12_op5").prop("checked", false);
  
        $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores12').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk12_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk12_op1").prop("checked", false);
          $("#chk12_op2").prop("checked", true);
          $("#chk12_op4").prop("checked", false);
          $("#chk12_op6").prop("checked", false);
    
          $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores12').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk12_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk12_op1").prop("checked", false);
          $("#chk12_op3").prop("checked", true);
          $("#chk12_op4").prop("checked", false);
          $("#chk12_op5").prop("checked", false);
    
          $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores12').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk12_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk12_op2").prop("checked", false);
          $("#chk12_op3").prop("checked", false);
          $("#chk12_op4").prop("checked", true);
          $("#chk12_op6").prop("checked", false);
    
          $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores12').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk12_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk12_op1").prop("checked", false);
          $("#chk12_op3").prop("checked", false);
          $("#chk12_op5").prop("checked", true);
          $("#chk12_op6").prop("checked", false);
    
          $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores12').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk12_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk12_op2").prop("checked", false);
          $("#chk12_op4").prop("checked", false);
          $("#chk12_op5").prop("checked", false);
          $("#chk12_op6").prop("checked", true);
    
          $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores12').html("");
          }, 2000);
        });
    }



  /// 13 grupo
  function seleccionar13(){
    $("#chk13_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk13_op1").prop("checked", true);
      $("#chk13_op2").prop("checked", false);
      $("#chk13_op3").prop("checked", false);
      $("#chk13_op5").prop("checked", false);

      $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores13').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk13_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk13_op1").prop("checked", false);
        $("#chk13_op2").prop("checked", true);
        $("#chk13_op4").prop("checked", false);
        $("#chk13_op6").prop("checked", false);
  
        $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores13').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk13_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk13_op1").prop("checked", false);
        $("#chk13_op3").prop("checked", true);
        $("#chk13_op4").prop("checked", false);
        $("#chk13_op5").prop("checked", false);
  
        $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores13').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk13_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk13_op2").prop("checked", false);
        $("#chk13_op3").prop("checked", false);
        $("#chk13_op4").prop("checked", true);
        $("#chk13_op6").prop("checked", false);
  
        $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores13').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk13_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk13_op1").prop("checked", false);
        $("#chk13_op3").prop("checked", false);
        $("#chk13_op5").prop("checked", true);
        $("#chk13_op6").prop("checked", false);
  
        $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores13').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk13_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk13_op2").prop("checked", false);
        $("#chk13_op4").prop("checked", false);
        $("#chk13_op5").prop("checked", false);
        $("#chk13_op6").prop("checked", true);
  
        $("#errores13").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores13').html("");
        }, 2000);
      });
  }



    /// 14 grupo
    function seleccionar14(){
      $("#chk14_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk14_op1").prop("checked", true);
        $("#chk14_op2").prop("checked", false);
        $("#chk14_op3").prop("checked", false);
        $("#chk14_op5").prop("checked", false);
  
        $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores14').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk14_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk14_op1").prop("checked", false);
          $("#chk14_op2").prop("checked", true);
          $("#chk14_op4").prop("checked", false);
          $("#chk14_op6").prop("checked", false);
    
          $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores14').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk14_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk14_op1").prop("checked", false);
          $("#chk14_op3").prop("checked", true);
          $("#chk14_op4").prop("checked", false);
          $("#chk14_op5").prop("checked", false);
    
          $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores14').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk14_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk14_op2").prop("checked", false);
          $("#chk14_op3").prop("checked", false);
          $("#chk14_op4").prop("checked", true);
          $("#chk14_op6").prop("checked", false);
    
          $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores14').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk14_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk14_op1").prop("checked", false);
          $("#chk14_op3").prop("checked", false);
          $("#chk14_op5").prop("checked", true);
          $("#chk14_op6").prop("checked", false);
    
          $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores14').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk14_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk14_op2").prop("checked", false);
          $("#chk14_op4").prop("checked", false);
          $("#chk14_op5").prop("checked", false);
          $("#chk14_op6").prop("checked", true);
    
          $("#errores14").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores14').html("");
          }, 2000);
        });
    }


  /// 15 grupo
  function seleccionar15(){
    $("#chk15_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk15_op1").prop("checked", true);
      $("#chk15_op2").prop("checked", false);
      $("#chk15_op3").prop("checked", false);
      $("#chk15_op5").prop("checked", false);

      $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores15').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk15_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk15_op1").prop("checked", false);
        $("#chk15_op2").prop("checked", true);
        $("#chk15_op4").prop("checked", false);
        $("#chk15_op6").prop("checked", false);
  
        $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores15').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk15_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk15_op1").prop("checked", false);
        $("#chk15_op3").prop("checked", true);
        $("#chk15_op4").prop("checked", false);
        $("#chk15_op5").prop("checked", false);
  
        $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores15').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk15_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk15_op2").prop("checked", false);
        $("#chk15_op3").prop("checked", false);
        $("#chk15_op4").prop("checked", true);
        $("#chk15_op6").prop("checked", false);
  
        $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores15').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk15_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk15_op1").prop("checked", false);
        $("#chk15_op3").prop("checked", false);
        $("#chk15_op5").prop("checked", true);
        $("#chk15_op6").prop("checked", false);
  
        $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores15').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk15_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk15_op2").prop("checked", false);
        $("#chk15_op4").prop("checked", false);
        $("#chk15_op5").prop("checked", false);
        $("#chk15_op6").prop("checked", true);
  
        $("#errores15").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores15').html("");
        }, 2000);
      });
  }



    /// 16 grupo
    function seleccionar16(){
      $("#chk16_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk16_op1").prop("checked", true);
        $("#chk16_op2").prop("checked", false);
        $("#chk16_op3").prop("checked", false);
        $("#chk16_op5").prop("checked", false);
  
        $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores16').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk16_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk16_op1").prop("checked", false);
          $("#chk16_op2").prop("checked", true);
          $("#chk16_op4").prop("checked", false);
          $("#chk16_op6").prop("checked", false);
    
          $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores16').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk16_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk16_op1").prop("checked", false);
          $("#chk16_op3").prop("checked", true);
          $("#chk16_op4").prop("checked", false);
          $("#chk16_op5").prop("checked", false);
    
          $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores16').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk16_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk16_op2").prop("checked", false);
          $("#chk16_op3").prop("checked", false);
          $("#chk16_op4").prop("checked", true);
          $("#chk16_op6").prop("checked", false);
    
          $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores16').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk16_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk16_op1").prop("checked", false);
          $("#chk16_op3").prop("checked", false);
          $("#chk16_op5").prop("checked", true);
          $("#chk16_op6").prop("checked", false);
    
          $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores16').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk16_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk16_op2").prop("checked", false);
          $("#chk16_op4").prop("checked", false);
          $("#chk16_op5").prop("checked", false);
          $("#chk16_op6").prop("checked", true);
    
          $("#errores16").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores16').html("");
          }, 2000);
        });
    }


  /// 17 grupo
  function seleccionar17(){
    $("#chk17_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk17_op1").prop("checked", true);
      $("#chk17_op2").prop("checked", false);
      $("#chk17_op3").prop("checked", false);
      $("#chk17_op5").prop("checked", false);

      $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores17').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk17_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk17_op1").prop("checked", false);
        $("#chk17_op2").prop("checked", true);
        $("#chk17_op4").prop("checked", false);
        $("#chk17_op6").prop("checked", false);
  
        $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores17').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk17_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk17_op1").prop("checked", false);
        $("#chk17_op3").prop("checked", true);
        $("#chk17_op4").prop("checked", false);
        $("#chk17_op5").prop("checked", false);
  
        $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores17').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk17_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk17_op2").prop("checked", false);
        $("#chk17_op3").prop("checked", false);
        $("#chk17_op4").prop("checked", true);
        $("#chk17_op6").prop("checked", false);
  
        $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores17').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk17_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk17_op1").prop("checked", false);
        $("#chk17_op3").prop("checked", false);
        $("#chk17_op5").prop("checked", true);
        $("#chk17_op6").prop("checked", false);
  
        $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores17').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk17_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk17_op2").prop("checked", false);
        $("#chk17_op4").prop("checked", false);
        $("#chk17_op5").prop("checked", false);
        $("#chk17_op6").prop("checked", true);
  
        $("#errores17").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores17').html("");
        }, 2000);
      });
  }


    /// 18 grupo
    function seleccionar18(){
      $("#chk18_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk18_op1").prop("checked", true);
        $("#chk18_op2").prop("checked", false);
        $("#chk18_op3").prop("checked", false);
        $("#chk18_op5").prop("checked", false);
  
        $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores18').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk18_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk18_op1").prop("checked", false);
          $("#chk18_op2").prop("checked", true);
          $("#chk18_op4").prop("checked", false);
          $("#chk18_op6").prop("checked", false);
    
          $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores18').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk18_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk18_op1").prop("checked", false);
          $("#chk18_op3").prop("checked", true);
          $("#chk18_op4").prop("checked", false);
          $("#chk18_op5").prop("checked", false);
    
          $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores18').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk18_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk18_op2").prop("checked", false);
          $("#chk18_op3").prop("checked", false);
          $("#chk18_op4").prop("checked", true);
          $("#chk18_op6").prop("checked", false);
    
          $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores18').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk18_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk18_op1").prop("checked", false);
          $("#chk18_op3").prop("checked", false);
          $("#chk18_op5").prop("checked", true);
          $("#chk18_op6").prop("checked", false);
    
          $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores18').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk18_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk18_op2").prop("checked", false);
          $("#chk18_op4").prop("checked", false);
          $("#chk18_op5").prop("checked", false);
          $("#chk18_op6").prop("checked", true);
    
          $("#errores18").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores18').html("");
          }, 2000);
        });
    }



  /// 19 grupo
  function seleccionar19(){
    $("#chk19_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk19_op1").prop("checked", true);
      $("#chk19_op2").prop("checked", false);
      $("#chk19_op3").prop("checked", false);
      $("#chk19_op5").prop("checked", false);

      $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores19').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk19_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk19_op1").prop("checked", false);
        $("#chk19_op2").prop("checked", true);
        $("#chk19_op4").prop("checked", false);
        $("#chk19_op6").prop("checked", false);
  
        $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores19').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk19_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk19_op1").prop("checked", false);
        $("#chk19_op3").prop("checked", true);
        $("#chk19_op4").prop("checked", false);
        $("#chk19_op5").prop("checked", false);
  
        $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores19').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk19_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk19_op2").prop("checked", false);
        $("#chk19_op3").prop("checked", false);
        $("#chk19_op4").prop("checked", true);
        $("#chk19_op6").prop("checked", false);
  
        $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores19').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk19_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk19_op1").prop("checked", false);
        $("#chk19_op3").prop("checked", false);
        $("#chk19_op5").prop("checked", true);
        $("#chk19_op6").prop("checked", false);
  
        $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores19').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk19_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk19_op2").prop("checked", false);
        $("#chk19_op4").prop("checked", false);
        $("#chk19_op5").prop("checked", false);
        $("#chk19_op6").prop("checked", true);
  
        $("#errores19").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores19').html("");
        }, 2000);
      });
  }


    /// 20 grupo
    function seleccionar20(){
      $("#chk20_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk20_op1").prop("checked", true);
        $("#chk20_op2").prop("checked", false);
        $("#chk20_op3").prop("checked", false);
        $("#chk20_op5").prop("checked", false);
  
        $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores20').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk20_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk20_op1").prop("checked", false);
          $("#chk20_op2").prop("checked", true);
          $("#chk20_op4").prop("checked", false);
          $("#chk20_op6").prop("checked", false);
    
          $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores20').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk20_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk20_op1").prop("checked", false);
          $("#chk20_op3").prop("checked", true);
          $("#chk20_op4").prop("checked", false);
          $("#chk20_op5").prop("checked", false);
    
          $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores20').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk20_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk20_op2").prop("checked", false);
          $("#chk20_op3").prop("checked", false);
          $("#chk20_op4").prop("checked", true);
          $("#chk20_op6").prop("checked", false);
    
          $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores20').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk20_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk20_op1").prop("checked", false);
          $("#chk20_op3").prop("checked", false);
          $("#chk20_op5").prop("checked", true);
          $("#chk20_op6").prop("checked", false);
    
          $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores20').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk20_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk20_op2").prop("checked", false);
          $("#chk20_op4").prop("checked", false);
          $("#chk20_op5").prop("checked", false);
          $("#chk20_op6").prop("checked", true);
    
          $("#errores20").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores20').html("");
          }, 2000);
        });
    }




  /// 21 grupo
  function seleccionar21(){
    $("#chk21_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk21_op1").prop("checked", true);
      $("#chk21_op2").prop("checked", false);
      $("#chk21_op3").prop("checked", false);
      $("#chk21_op5").prop("checked", false);

      $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores21').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk21_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk21_op1").prop("checked", false);
        $("#chk21_op2").prop("checked", true);
        $("#chk21_op4").prop("checked", false);
        $("#chk21_op6").prop("checked", false);
  
        $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores21').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk21_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk21_op1").prop("checked", false);
        $("#chk21_op3").prop("checked", true);
        $("#chk21_op4").prop("checked", false);
        $("#chk21_op5").prop("checked", false);
  
        $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores21').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk21_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk21_op2").prop("checked", false);
        $("#chk21_op3").prop("checked", false);
        $("#chk21_op4").prop("checked", true);
        $("#chk21_op6").prop("checked", false);
  
        $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores21').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk21_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk21_op1").prop("checked", false);
        $("#chk21_op3").prop("checked", false);
        $("#chk21_op5").prop("checked", true);
        $("#chk21_op6").prop("checked", false);
  
        $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores21').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk21_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk21_op2").prop("checked", false);
        $("#chk21_op4").prop("checked", false);
        $("#chk21_op5").prop("checked", false);
        $("#chk21_op6").prop("checked", true);
  
        $("#errores21").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores21').html("");
        }, 2000);
      });
  }


    /// 22 grupo
    function seleccionar22(){
      $("#chk22_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk22_op1").prop("checked", true);
        $("#chk22_op2").prop("checked", false);
        $("#chk22_op3").prop("checked", false);
        $("#chk22_op5").prop("checked", false);
  
        $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores22').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk22_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk22_op1").prop("checked", false);
          $("#chk22_op2").prop("checked", true);
          $("#chk22_op4").prop("checked", false);
          $("#chk22_op6").prop("checked", false);
    
          $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores22').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk22_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk22_op1").prop("checked", false);
          $("#chk22_op3").prop("checked", true);
          $("#chk22_op4").prop("checked", false);
          $("#chk22_op5").prop("checked", false);
    
          $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores22').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk22_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk22_op2").prop("checked", false);
          $("#chk22_op3").prop("checked", false);
          $("#chk222_op4").prop("checked", true);
          $("#chk22_op6").prop("checked", false);
    
          $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores22').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk22_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk22_op1").prop("checked", false);
          $("#chk22_op3").prop("checked", false);
          $("#chk22_op5").prop("checked", true);
          $("#chk22_op6").prop("checked", false);
    
          $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores22').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk22_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk22_op2").prop("checked", false);
          $("#chk22_op4").prop("checked", false);
          $("#chk22_op5").prop("checked", false);
          $("#chk22_op6").prop("checked", true);
    
          $("#errores22").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores22').html("");
          }, 2000);
        });
    }



      /// 23 grupo
  function seleccionar23(){
    $("#chk23_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk23_op1").prop("checked", true);
      $("#chk23_op2").prop("checked", false);
      $("#chk23_op3").prop("checked", false);
      $("#chk23_op5").prop("checked", false);

      $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores23').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk23_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk23_op1").prop("checked", false);
        $("#chk23_op2").prop("checked", true);
        $("#chk23_op4").prop("checked", false);
        $("#chk23_op6").prop("checked", false);
  
        $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores23').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk23_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk23_op1").prop("checked", false);
        $("#chk23_op3").prop("checked", true);
        $("#chk23_op4").prop("checked", false);
        $("#chk23_op5").prop("checked", false);
  
        $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores23').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk23_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk23_op2").prop("checked", false);
        $("#chk23_op3").prop("checked", false);
        $("#chk23_op4").prop("checked", true);
        $("#chk23_op6").prop("checked", false);
  
        $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores23').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk23_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk23_op1").prop("checked", false);
        $("#chk23_op3").prop("checked", false);
        $("#chk23_op5").prop("checked", true);
        $("#chk23_op6").prop("checked", false);
  
        $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores23').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk23_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk23_op2").prop("checked", false);
        $("#chk23_op4").prop("checked", false);
        $("#chk23_op5").prop("checked", false);
        $("#chk23_op6").prop("checked", true);
  
        $("#errores23").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores23').html("");
        }, 2000);
      });
  }



    /// 24 grupo
    function seleccionar24(){
      $("#chk24_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk24_op1").prop("checked", true);
        $("#chk24_op2").prop("checked", false);
        $("#chk24_op3").prop("checked", false);
        $("#chk24_op5").prop("checked", false);
  
        $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores24').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk24_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk24_op1").prop("checked", false);
          $("#chk24_op2").prop("checked", true);
          $("#chk24_op4").prop("checked", false);
          $("#chk24_op6").prop("checked", false);
    
          $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores24').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk24_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk24_op1").prop("checked", false);
          $("#chk24_op3").prop("checked", true);
          $("#chk24_op4").prop("checked", false);
          $("#chk24_op5").prop("checked", false);
    
          $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores24').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk24_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk24_op2").prop("checked", false);
          $("#chk24_op3").prop("checked", false);
          $("#chk24_op4").prop("checked", true);
          $("#chk24_op6").prop("checked", false);
    
          $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores24').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk24_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk24_op1").prop("checked", false);
          $("#chk24_op3").prop("checked", false);
          $("#chk24_op5").prop("checked", true);
          $("#chk24_op6").prop("checked", false);
    
          $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores24').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk24_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk24_op2").prop("checked", false);
          $("#chk24_op4").prop("checked", false);
          $("#chk24_op5").prop("checked", false);
          $("#chk24_op6").prop("checked", true);
    
          $("#errores24").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores24').html("");
          }, 2000);
        });
    }



   /// 25 grupo
  function seleccionar25(){
    $("#chk25_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk25_op1").prop("checked", true);
      $("#chk25_op2").prop("checked", false);
      $("#chk25_op3").prop("checked", false);
      $("#chk25_op5").prop("checked", false);

      $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores25').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk25_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk25_op1").prop("checked", false);
        $("#chk25_op2").prop("checked", true);
        $("#chk25_op4").prop("checked", false);
        $("#chk25_op6").prop("checked", false);
  
        $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores25').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk25_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk25_op1").prop("checked", false);
        $("#chk25_op3").prop("checked", true);
        $("#chk25_op4").prop("checked", false);
        $("#chk25_op5").prop("checked", false);
  
        $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores25').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk25_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk25_op2").prop("checked", false);
        $("#chk25_op3").prop("checked", false);
        $("#chk25_op4").prop("checked", true);
        $("#chk25_op6").prop("checked", false);
  
        $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores25').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk25_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk25_op1").prop("checked", false);
        $("#chk25_op3").prop("checked", false);
        $("#chk25_op5").prop("checked", true);
        $("#chk25_op6").prop("checked", false);
  
        $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores25').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk25_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk25_op2").prop("checked", false);
        $("#chk25_op4").prop("checked", false);
        $("#chk25_op5").prop("checked", false);
        $("#chk25_op6").prop("checked", true);
  
        $("#errores25").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores25').html("");
        }, 2000);
      });
  }



    /// 26 grupo
    function seleccionar26(){
      $("#chk26_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk26_op1").prop("checked", true);
        $("#chk26_op2").prop("checked", false);
        $("#chk26_op3").prop("checked", false);
        $("#chk26_op5").prop("checked", false);
  
        $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores26').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk26_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk26_op1").prop("checked", false);
          $("#chk26_op2").prop("checked", true);
          $("#chk26_op4").prop("checked", false);
          $("#chk26_op6").prop("checked", false);
    
          $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores26').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk26_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk26_op1").prop("checked", false);
          $("#chk26_op3").prop("checked", true);
          $("#chk26_op4").prop("checked", false);
          $("#chk26_op5").prop("checked", false);
    
          $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores26').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk26_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk26_op2").prop("checked", false);
          $("#chk26_op3").prop("checked", false);
          $("#chk26_op4").prop("checked", true);
          $("#chk26_op6").prop("checked", false);
    
          $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores26').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk26_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk26_op1").prop("checked", false);
          $("#chk26_op3").prop("checked", false);
          $("#chk26_op5").prop("checked", true);
          $("#chk26_op6").prop("checked", false);
    
          $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores26').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk26_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk26_op2").prop("checked", false);
          $("#chk26_op4").prop("checked", false);
          $("#chk26_op5").prop("checked", false);
          $("#chk26_op6").prop("checked", true);
    
          $("#errores26").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores26').html("");
          }, 2000);
        });
    }

  /// 27 grupo
  function seleccionar27(){
    $("#chk27_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk27_op1").prop("checked", true);
      $("#chk27_op2").prop("checked", false);
      $("#chk27_op3").prop("checked", false);
      $("#chk27_op5").prop("checked", false);

      $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores27').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk27_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk27_op1").prop("checked", false);
        $("#chk27_op2").prop("checked", true);
        $("#chk27_op4").prop("checked", false);
        $("#chk27_op6").prop("checked", false);
  
        $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores27').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk27_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk27_op1").prop("checked", false);
        $("#chk27_op3").prop("checked", true);
        $("#chk27_op4").prop("checked", false);
        $("#chk27_op5").prop("checked", false);
  
        $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores27').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk27_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk27_op2").prop("checked", false);
        $("#chk27_op3").prop("checked", false);
        $("#chk27_op4").prop("checked", true);
        $("#chk27_op6").prop("checked", false);
  
        $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores27').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk27_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk27_op1").prop("checked", false);
        $("#chk27_op3").prop("checked", false);
        $("#chk27_op5").prop("checked", true);
        $("#chk27_op6").prop("checked", false);
  
        $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores27').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk27_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk27_op2").prop("checked", false);
        $("#chk27_op4").prop("checked", false);
        $("#chk27_op5").prop("checked", false);
        $("#chk27_op6").prop("checked", true);
  
        $("#errores27").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores27').html("");
        }, 2000);
      });
  }


    /// 28 grupo
    function seleccionar28(){
      $("#chk28_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk28_op1").prop("checked", true);
        $("#chk28_op2").prop("checked", false);
        $("#chk28_op3").prop("checked", false);
        $("#chk28_op5").prop("checked", false);
  
        $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores28').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk28_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk28_op1").prop("checked", false);
          $("#chk28_op2").prop("checked", true);
          $("#chk28_op4").prop("checked", false);
          $("#chk28_op6").prop("checked", false);
    
          $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores28').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk28_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk28_op1").prop("checked", false);
          $("#chk28_op3").prop("checked", true);
          $("#chk28_op4").prop("checked", false);
          $("#chk28_op5").prop("checked", false);
    
          $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores28').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk28_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk28_op2").prop("checked", false);
          $("#chk28_op3").prop("checked", false);
          $("#chk28_op4").prop("checked", true);
          $("#chk28_op6").prop("checked", false);
    
          $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores28').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk28_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk28_op1").prop("checked", false);
          $("#chk28_op3").prop("checked", false);
          $("#chk28_op5").prop("checked", true);
          $("#chk28_op6").prop("checked", false);
    
          $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores28').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk28_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk28_op2").prop("checked", false);
          $("#chk28_op4").prop("checked", false);
          $("#chk28_op5").prop("checked", false);
          $("#chk28_op6").prop("checked", true);
    
          $("#errores28").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores28').html("");
          }, 2000);
        });
    }


  
  /// 29 grupo
  function seleccionar29(){
    $("#chk29_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk29_op1").prop("checked", true);
      $("#chk29_op2").prop("checked", false);
      $("#chk29_op3").prop("checked", false);
      $("#chk29_op5").prop("checked", false);

      $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores29').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk29_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk29_op1").prop("checked", false);
        $("#chk29_op2").prop("checked", true);
        $("#chk29_op4").prop("checked", false);
        $("#chk29_op6").prop("checked", false);
  
        $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores29').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk29_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk29_op1").prop("checked", false);
        $("#chk29_op3").prop("checked", true);
        $("#chk29_op4").prop("checked", false);
        $("#chk29_op5").prop("checked", false);
  
        $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores29').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk29_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk29_op2").prop("checked", false);
        $("#chk29_op3").prop("checked", false);
        $("#chk29_op4").prop("checked", true);
        $("#chk29_op6").prop("checked", false);
  
        $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores29').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk29_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk29_op1").prop("checked", false);
        $("#chk29_op3").prop("checked", false);
        $("#chk29_op5").prop("checked", true);
        $("#chk29_op6").prop("checked", false);
  
        $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores29').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk29_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk29_op2").prop("checked", false);
        $("#chk29_op4").prop("checked", false);
        $("#chk29_op5").prop("checked", false);
        $("#chk29_op6").prop("checked", true);
  
        $("#errores29").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores29').html("");
        }, 2000);
      });
  }



    /// 30 grupo
    function seleccionar30(){
      $("#chk30_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk30_op1").prop("checked", true);
        $("#chk30_op2").prop("checked", false);
        $("#chk30_op3").prop("checked", false);
        $("#chk30_op5").prop("checked", false);
  
        $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores30').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk30_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk30_op1").prop("checked", false);
          $("#chk30_op2").prop("checked", true);
          $("#chk30_op4").prop("checked", false);
          $("#chk30_op6").prop("checked", false);
    
          $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores30').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk30_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk30_op1").prop("checked", false);
          $("#chk30_op3").prop("checked", true);
          $("#chk30_op4").prop("checked", false);
          $("#chk30_op5").prop("checked", false);
    
          $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores30').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk30_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk30_op2").prop("checked", false);
          $("#chk30_op3").prop("checked", false);
          $("#chk30_op4").prop("checked", true);
          $("#chk30_op6").prop("checked", false);
    
          $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores30').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk30_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk30_op1").prop("checked", false);
          $("#chk30_op3").prop("checked", false);
          $("#chk30_op5").prop("checked", true);
          $("#chk30_op6").prop("checked", false);
    
          $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores30').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk30_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk30_op2").prop("checked", false);
          $("#chk30_op4").prop("checked", false);
          $("#chk30_op5").prop("checked", false);
          $("#chk30_op6").prop("checked", true);
    
          $("#errores30").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores30').html("");
          }, 2000);
        });
    }




  /// 31 grupo
  function seleccionar31(){
    $("#chk31_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk31_op1").prop("checked", true);
      $("#chk31_op2").prop("checked", false);
      $("#chk31_op3").prop("checked", false);
      $("#chk31_op5").prop("checked", false);

      $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores31').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk31_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk31_op1").prop("checked", false);
        $("#chk31_op2").prop("checked", true);
        $("#chk31_op4").prop("checked", false);
        $("#chk31_op6").prop("checked", false);
  
        $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores31').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk31_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk31_op1").prop("checked", false);
        $("#chk31_op3").prop("checked", true);
        $("#chk31_op4").prop("checked", false);
        $("#chk31_op5").prop("checked", false);
  
        $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores31').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk31_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk31_op2").prop("checked", false);
        $("#chk31_op3").prop("checked", false);
        $("#chk31_op4").prop("checked", true);
        $("#chk31_op6").prop("checked", false);
  
        $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores31').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk31_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk31_op1").prop("checked", false);
        $("#chk31_op3").prop("checked", false);
        $("#chk31_op5").prop("checked", true);
        $("#chk31_op6").prop("checked", false);
  
        $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores31').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk31_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk31_op2").prop("checked", false);
        $("#chk31_op4").prop("checked", false);
        $("#chk31_op5").prop("checked", false);
        $("#chk31_op6").prop("checked", true);
  
        $("#errores31").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores31').html("");
        }, 2000);
      });
  }


    /// 32 grupo
    function seleccionar32(){
      $("#chk32_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk32_op1").prop("checked", true);
        $("#chk32_op2").prop("checked", false);
        $("#chk32_op3").prop("checked", false);
        $("#chk32_op5").prop("checked", false);
  
        $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores32').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk32_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk32_op1").prop("checked", false);
          $("#chk32_op2").prop("checked", true);
          $("#chk32_op4").prop("checked", false);
          $("#chk32_op6").prop("checked", false);
    
          $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores32').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk32_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk32_op1").prop("checked", false);
          $("#chk32_op3").prop("checked", true);
          $("#chk32_op4").prop("checked", false);
          $("#chk32_op5").prop("checked", false);
    
          $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores32').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk32_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk32_op2").prop("checked", false);
          $("#chk32_op3").prop("checked", false);
          $("#chk32_op4").prop("checked", true);
          $("#chk32_op6").prop("checked", false);
    
          $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores32').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk32_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk32_op1").prop("checked", false);
          $("#chk32_op3").prop("checked", false);
          $("#chk32_op5").prop("checked", true);
          $("#chk32_op6").prop("checked", false);
    
          $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores32').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk32_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk32_op2").prop("checked", false);
          $("#chk32_op4").prop("checked", false);
          $("#chk32_op5").prop("checked", false);
          $("#chk32_op6").prop("checked", true);
    
          $("#errores32").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores32').html("");
          }, 2000);
        });
    }




  /// 33 grupo
  function seleccionar33(){
    $("#chk33_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk33_op1").prop("checked", true);
      $("#chk33_op2").prop("checked", false);
      $("#chk33_op3").prop("checked", false);
      $("#chk33_op5").prop("checked", false);

      $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores33').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk33_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk33_op1").prop("checked", false);
        $("#chk33_op2").prop("checked", true);
        $("#chk33_op4").prop("checked", false);
        $("#chk33_op6").prop("checked", false);
  
        $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores33').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk33_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk33_op1").prop("checked", false);
        $("#chk33_op3").prop("checked", true);
        $("#chk33_op4").prop("checked", false);
        $("#chk33_op5").prop("checked", false);
  
        $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores33').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk33_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk33_op2").prop("checked", false);
        $("#chk33_op3").prop("checked", false);
        $("#chk33_op4").prop("checked", true);
        $("#chk33_op6").prop("checked", false);
  
        $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores33').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk33_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk33_op1").prop("checked", false);
        $("#chk33_op3").prop("checked", false);
        $("#chk33_op5").prop("checked", true);
        $("#chk33_op6").prop("checked", false);
  
        $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores33').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk33_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk33_op2").prop("checked", false);
        $("#chk33_op4").prop("checked", false);
        $("#chk33_op5").prop("checked", false);
        $("#chk33_op6").prop("checked", true);
  
        $("#errores33").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores33').html("");
        }, 2000);
      });
  }




    /// 34 grupo
    function seleccionar34(){
      $("#chk34_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk34_op1").prop("checked", true);
        $("#chk34_op2").prop("checked", false);
        $("#chk34_op3").prop("checked", false);
        $("#chk34_op5").prop("checked", false);
  
        $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores34').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk34_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk34_op1").prop("checked", false);
          $("#chk34_op2").prop("checked", true);
          $("#chk34_op4").prop("checked", false);
          $("#chk34_op6").prop("checked", false);
    
          $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores34').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk34_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk34_op1").prop("checked", false);
          $("#chk34_op3").prop("checked", true);
          $("#chk34_op4").prop("checked", false);
          $("#chk34_op5").prop("checked", false);
    
          $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores34').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk34_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk34_op2").prop("checked", false);
          $("#chk34_op3").prop("checked", false);
          $("#chk34_op4").prop("checked", true);
          $("#chk34_op6").prop("checked", false);
    
          $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores34').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk34_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk34_op1").prop("checked", false);
          $("#chk34_op3").prop("checked", false);
          $("#chk34_op5").prop("checked", true);
          $("#chk34_op6").prop("checked", false);
    
          $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores34').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk34_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk34_op2").prop("checked", false);
          $("#chk34_op4").prop("checked", false);
          $("#chk34_op5").prop("checked", false);
          $("#chk34_op6").prop("checked", true);
    
          $("#errores34").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores34').html("");
          }, 2000);
        });
    }



  /// 35 grupo
  function seleccionar35(){
    $("#chk35_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk35_op1").prop("checked", true);
      $("#chk35_op2").prop("checked", false);
      $("#chk35_op3").prop("checked", false);
      $("#chk35_op5").prop("checked", false);

      $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores35').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk35_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk35_op1").prop("checked", false);
        $("#chk35_op2").prop("checked", true);
        $("#chk35_op4").prop("checked", false);
        $("#chk35_op6").prop("checked", false);
  
        $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores35').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk35_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk35_op1").prop("checked", false);
        $("#chk35_op3").prop("checked", true);
        $("#chk35_op4").prop("checked", false);
        $("#chk35_op5").prop("checked", false);
  
        $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores35').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk35_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk35_op2").prop("checked", false);
        $("#chk35_op3").prop("checked", false);
        $("#chk35_op4").prop("checked", true);
        $("#chk35_op6").prop("checked", false);
  
        $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores35').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk35_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk35_op1").prop("checked", false);
        $("#chk35_op3").prop("checked", false);
        $("#chk35_op5").prop("checked", true);
        $("#chk35_op6").prop("checked", false);
  
        $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores35').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk35_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk35_op2").prop("checked", false);
        $("#chk35_op4").prop("checked", false);
        $("#chk35_op5").prop("checked", false);
        $("#chk35_op6").prop("checked", true);
  
        $("#errores35").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores35').html("");
        }, 2000);
      });
  }



    /// 36 grupo
    function seleccionar36(){
      $("#chk36_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk36_op1").prop("checked", true);
        $("#chk36_op2").prop("checked", false);
        $("#chk36_op3").prop("checked", false);
        $("#chk36_op5").prop("checked", false);
  
        $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores36').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk36_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk36_op1").prop("checked", false);
          $("#chk36_op2").prop("checked", true);
          $("#chk36_op4").prop("checked", false);
          $("#chk36_op6").prop("checked", false);
    
          $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores36').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk36_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk36_op1").prop("checked", false);
          $("#chk36_op3").prop("checked", true);
          $("#chk36_op4").prop("checked", false);
          $("#chk36_op5").prop("checked", false);
    
          $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores36').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk36_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk36_op2").prop("checked", false);
          $("#chk36_op3").prop("checked", false);
          $("#chk36_op4").prop("checked", true);
          $("#chk36_op6").prop("checked", false);
    
          $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores36').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk36_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk36_op1").prop("checked", false);
          $("#chk36_op3").prop("checked", false);
          $("#chk36_op5").prop("checked", true);
          $("#chk36_op6").prop("checked", false);
    
          $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores36').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk36_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk36_op2").prop("checked", false);
          $("#chk36_op4").prop("checked", false);
          $("#chk36_op5").prop("checked", false);
          $("#chk36_op6").prop("checked", true);
    
          $("#errores36").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores36').html("");
          }, 2000);
        });
    }




  /// 37 grupo
  function seleccionar37(){
    $("#chk37_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk37_op1").prop("checked", true);
      $("#chk37_op2").prop("checked", false);
      $("#chk37_op3").prop("checked", false);
      $("#chk37_op5").prop("checked", false);

      $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores37').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk37_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk37_op1").prop("checked", false);
        $("#chk37_op2").prop("checked", true);
        $("#chk37_op4").prop("checked", false);
        $("#chk37_op6").prop("checked", false);
  
        $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores37').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk37_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk37_op1").prop("checked", false);
        $("#chk37_op3").prop("checked", true);
        $("#chk37_op4").prop("checked", false);
        $("#chk37_op5").prop("checked", false);
  
        $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores37').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk37_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk37_op2").prop("checked", false);
        $("#chk37_op3").prop("checked", false);
        $("#chk37_op4").prop("checked", true);
        $("#chk37_op6").prop("checked", false);
  
        $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores37').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk37_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk37_op1").prop("checked", false);
        $("#chk37_op3").prop("checked", false);
        $("#chk37_op5").prop("checked", true);
        $("#chk37_op6").prop("checked", false);
  
        $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores37').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk37_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk37_op2").prop("checked", false);
        $("#chk37_op4").prop("checked", false);
        $("#chk37_op5").prop("checked", false);
        $("#chk37_op6").prop("checked", true);
  
        $("#errores37").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores37').html("");
        }, 2000);
      });
  }



    /// 88 grupo
    function seleccionar38(){
      $("#chk38_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk38_op1").prop("checked", true);
        $("#chk38_op2").prop("checked", false);
        $("#chk38_op3").prop("checked", false);
        $("#chk38_op5").prop("checked", false);
  
        $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores38').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk38_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk38_op1").prop("checked", false);
          $("#chk38_op2").prop("checked", true);
          $("#chk38_op4").prop("checked", false);
          $("#chk38_op6").prop("checked", false);
    
          $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores38').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk38_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk38_op1").prop("checked", false);
          $("#chk38_op3").prop("checked", true);
          $("#chk38_op4").prop("checked", false);
          $("#chk38_op5").prop("checked", false);
    
          $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores38').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk38_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk38_op2").prop("checked", false);
          $("#chk38_op3").prop("checked", false);
          $("#chk38_op4").prop("checked", true);
          $("#chk38_op6").prop("checked", false);
    
          $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores38').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk38_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk38_op1").prop("checked", false);
          $("#chk38_op3").prop("checked", false);
          $("#chk38_op5").prop("checked", true);
          $("#chk38_op6").prop("checked", false);
    
          $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores38').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk38_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk38_op2").prop("checked", false);
          $("#chk38_op4").prop("checked", false);
          $("#chk38_op5").prop("checked", false);
          $("#chk38_op6").prop("checked", true);
    
          $("#errores38").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores38').html("");
          }, 2000);
        });
    }




  /// 39 grupo
  function seleccionar39(){
    $("#chk39_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk39_op1").prop("checked", true);
      $("#chk39_op2").prop("checked", false);
      $("#chk39_op3").prop("checked", false);
      $("#chk39_op5").prop("checked", false);

      $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores39').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk39_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk39_op1").prop("checked", false);
        $("#chk39_op2").prop("checked", true);
        $("#chk39_op4").prop("checked", false);
        $("#chk39_op6").prop("checked", false);
  
        $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores39').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk39_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk39_op1").prop("checked", false);
        $("#chk39_op3").prop("checked", true);
        $("#chk39_op4").prop("checked", false);
        $("#chk39_op5").prop("checked", false);
  
        $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores39').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk39_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk39_op2").prop("checked", false);
        $("#chk39_op3").prop("checked", false);
        $("#chk39_op4").prop("checked", true);
        $("#chk39_op6").prop("checked", false);
  
        $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores39').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk39_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk39_op1").prop("checked", false);
        $("#chk39_op3").prop("checked", false);
        $("#chk39_op5").prop("checked", true);
        $("#chk39_op6").prop("checked", false);
  
        $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores39').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk39_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk39_op2").prop("checked", false);
        $("#chk39_op4").prop("checked", false);
        $("#chk39_op5").prop("checked", false);
        $("#chk39_op6").prop("checked", true);
  
        $("#errores39").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores39').html("");
        }, 2000);
      });
  }



    /// 40 grupo
    function seleccionar40(){
      $("#chk40_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk40_op1").prop("checked", true);
        $("#chk40_op2").prop("checked", false);
        $("#chk40_op3").prop("checked", false);
        $("#chk40_op5").prop("checked", false);
  
        $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores40').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk40_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk40_op1").prop("checked", false);
          $("#chk40_op2").prop("checked", true);
          $("#chk40_op4").prop("checked", false);
          $("#chk40_op6").prop("checked", false);
    
          $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores40').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk40_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk40_op1").prop("checked", false);
          $("#chk40_op3").prop("checked", true);
          $("#chk40_op4").prop("checked", false);
          $("#chk40_op5").prop("checked", false);
    
          $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores40').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk40_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk40_op2").prop("checked", false);
          $("#chk40_op3").prop("checked", false);
          $("#chk40_op4").prop("checked", true);
          $("#chk40_op6").prop("checked", false);
    
          $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores40').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk40_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk40_op1").prop("checked", false);
          $("#chk40_op3").prop("checked", false);
          $("#chk40_op5").prop("checked", true);
          $("#chk40_op6").prop("checked", false);
    
          $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores40').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk40_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk40_op2").prop("checked", false);
          $("#chk40_op4").prop("checked", false);
          $("#chk40_op5").prop("checked", false);
          $("#chk40_op6").prop("checked", true);
    
          $("#errores40").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores40').html("");
          }, 2000);
        });
    }



  /// 41 grupo
  function seleccionar41(){
    $("#chk41_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk41_op1").prop("checked", true);
      $("#chk41_op2").prop("checked", false);
      $("#chk41_op3").prop("checked", false);
      $("#chk41_op5").prop("checked", false);

      $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores41').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk41_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk41_op1").prop("checked", false);
        $("#chk41_op2").prop("checked", true);
        $("#chk41_op4").prop("checked", false);
        $("#chk41_op6").prop("checked", false);
  
        $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores41').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk41_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk41_op1").prop("checked", false);
        $("#chk41_op3").prop("checked", true);
        $("#chk41_op4").prop("checked", false);
        $("#chk41_op5").prop("checked", false);
  
        $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores41').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk41_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk41_op2").prop("checked", false);
        $("#chk41_op3").prop("checked", false);
        $("#chk41_op4").prop("checked", true);
        $("#chk41_op6").prop("checked", false);
  
        $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores41').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk41_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk41_op1").prop("checked", false);
        $("#chk41_op3").prop("checked", false);
        $("#chk41_op5").prop("checked", true);
        $("#chk41_op6").prop("checked", false);
  
        $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores41').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk41_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk41_op2").prop("checked", false);
        $("#chk41_op4").prop("checked", false);
        $("#chk41_op5").prop("checked", false);
        $("#chk41_op6").prop("checked", true);
  
        $("#errores41").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores41').html("");
        }, 2000);
      });
  }




    /// 42 grupo
    function seleccionar42(){
      $("#chk42_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk42_op1").prop("checked", true);
        $("#chk42_op2").prop("checked", false);
        $("#chk42_op3").prop("checked", false);
        $("#chk42_op5").prop("checked", false);
  
        $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores42').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk42_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk42_op1").prop("checked", false);
          $("#chk42_op2").prop("checked", true);
          $("#chk42_op4").prop("checked", false);
          $("#chk42_op6").prop("checked", false);
    
          $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores42').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk42_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk42_op1").prop("checked", false);
          $("#chk42_op3").prop("checked", true);
          $("#chk42_op4").prop("checked", false);
          $("#chk42_op5").prop("checked", false);
    
          $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores42').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk42_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk42_op2").prop("checked", false);
          $("#chk42_op3").prop("checked", false);
          $("#chk42_op4").prop("checked", true);
          $("#chk42_op6").prop("checked", false);
    
          $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores42').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk42_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk42_op1").prop("checked", false);
          $("#chk42_op3").prop("checked", false);
          $("#chk42_op5").prop("checked", true);
          $("#chk42_op6").prop("checked", false);
    
          $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores42').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk42_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk42_op2").prop("checked", false);
          $("#chk42_op4").prop("checked", false);
          $("#chk42_op5").prop("checked", false);
          $("#chk42_op6").prop("checked", true);
    
          $("#errores42").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores42').html("");
          }, 2000);
        });
    }




  /// 43 grupo
  function seleccionar43(){
    $("#chk43_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk43_op1").prop("checked", true);
      $("#chk43_op2").prop("checked", false);
      $("#chk43_op3").prop("checked", false);
      $("#chk43_op5").prop("checked", false);

      $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores43').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk43_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk43_op1").prop("checked", false);
        $("#chk43_op2").prop("checked", true);
        $("#chk43_op4").prop("checked", false);
        $("#chk43_op6").prop("checked", false);
  
        $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores43').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk43_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk43_op1").prop("checked", false);
        $("#chk43_op3").prop("checked", true);
        $("#chk43_op4").prop("checked", false);
        $("#chk43_op5").prop("checked", false);
  
        $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores43').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk43_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk43_op2").prop("checked", false);
        $("#chk43_op3").prop("checked", false);
        $("#chk43_op4").prop("checked", true);
        $("#chk43_op6").prop("checked", false);
  
        $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores43').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk43_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk43_op1").prop("checked", false);
        $("#chk43_op3").prop("checked", false);
        $("#chk43_op5").prop("checked", true);
        $("#chk43_op6").prop("checked", false);
  
        $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores43').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk43_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk43_op2").prop("checked", false);
        $("#chk43_op4").prop("checked", false);
        $("#chk43_op5").prop("checked", false);
        $("#chk43_op6").prop("checked", true);
  
        $("#errores43").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores43').html("");
        }, 2000);
      });
  }



    /// 44 grupo
    function seleccionar44(){
      $("#chk44_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk44_op1").prop("checked", true);
        $("#chk44_op2").prop("checked", false);
        $("#chk44_op3").prop("checked", false);
        $("#chk44_op5").prop("checked", false);
  
        $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores44').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk44_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk44_op1").prop("checked", false);
          $("#chk44_op2").prop("checked", true);
          $("#chk44_op4").prop("checked", false);
          $("#chk44_op6").prop("checked", false);
    
          $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores44').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk44_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk44_op1").prop("checked", false);
          $("#chk44_op3").prop("checked", true);
          $("#chk44_op4").prop("checked", false);
          $("#chk44_op5").prop("checked", false);
    
          $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores44').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk44_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk44_op2").prop("checked", false);
          $("#chk44_op3").prop("checked", false);
          $("#chk44_op4").prop("checked", true);
          $("#chk44_op6").prop("checked", false);
    
          $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores44').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk44_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk44_op1").prop("checked", false);
          $("#chk44_op3").prop("checked", false);
          $("#chk44_op5").prop("checked", true);
          $("#chk44_op6").prop("checked", false);
    
          $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores44').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk44_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk44_op2").prop("checked", false);
          $("#chk44_op4").prop("checked", false);
          $("#chk44_op5").prop("checked", false);
          $("#chk44_op6").prop("checked", true);
    
          $("#errores44").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores44').html("");
          }, 2000);
        });
    }





  /// 45 grupo
  function seleccionar45(){
    $("#chk45_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk45_op1").prop("checked", true);
      $("#chk45_op2").prop("checked", false);
      $("#chk45_op3").prop("checked", false);
      $("#chk45_op5").prop("checked", false);

      $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores45').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk45_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk45_op1").prop("checked", false);
        $("#chk45_op2").prop("checked", true);
        $("#chk45_op4").prop("checked", false);
        $("#chk45_op6").prop("checked", false);
  
        $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores45').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk45_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk45_op1").prop("checked", false);
        $("#chk45_op3").prop("checked", true);
        $("#chk45_op4").prop("checked", false);
        $("#chk45_op5").prop("checked", false);
  
        $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores45').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk45_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk45_op2").prop("checked", false);
        $("#chk45_op3").prop("checked", false);
        $("#chk45_op4").prop("checked", true);
        $("#chk45_op6").prop("checked", false);
  
        $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores45').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk45_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk45_op1").prop("checked", false);
        $("#chk45_op3").prop("checked", false);
        $("#chk45_op5").prop("checked", true);
        $("#chk45_op6").prop("checked", false);
  
        $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores45').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk45_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk45_op2").prop("checked", false);
        $("#chk45_op4").prop("checked", false);
        $("#chk45_op5").prop("checked", false);
        $("#chk45_op6").prop("checked", true);
  
        $("#errores45").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores45').html("");
        }, 2000);
      });
  }




    /// 46 grupo
    function seleccionar46(){
      $("#chk46_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk46_op1").prop("checked", true);
        $("#chk46_op2").prop("checked", false);
        $("#chk46_op3").prop("checked", false);
        $("#chk46_op5").prop("checked", false);
  
        $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores46').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk46_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk46_op1").prop("checked", false);
          $("#chk46_op2").prop("checked", true);
          $("#chk46_op4").prop("checked", false);
          $("#chk46_op6").prop("checked", false);
    
          $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk46_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk46_op1").prop("checked", false);
          $("#chk46_op3").prop("checked", true);
          $("#chk46_op4").prop("checked", false);
          $("#chk46_op5").prop("checked", false);
    
          $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk46_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk46_op2").prop("checked", false);
          $("#chk46_op3").prop("checked", false);
          $("#chk46_op4").prop("checked", true);
          $("#chk46_op6").prop("checked", false);
    
          $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk46_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk46_op1").prop("checked", false);
          $("#chk46_op3").prop("checked", false);
          $("#chk46_op5").prop("checked", true);
          $("#chk46_op6").prop("checked", false);
    
          $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk46_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk46_op2").prop("checked", false);
          $("#chk46_op4").prop("checked", false);
          $("#chk46_op5").prop("checked", false);
          $("#chk46_op6").prop("checked", true);
    
          $("#errores46").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
    }




  /// 47 grupo
  function seleccionar47(){
    $("#chk47_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk47_op1").prop("checked", true);
      $("#chk47_op2").prop("checked", false);
      $("#chk47_op3").prop("checked", false);
      $("#chk47_op5").prop("checked", false);

      $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores47').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk47_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk47_op1").prop("checked", false);
        $("#chk47_op2").prop("checked", true);
        $("#chk47_op4").prop("checked", false);
        $("#chk47_op6").prop("checked", false);
  
        $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores47').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk47_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk47_op1").prop("checked", false);
        $("#chk47_op3").prop("checked", true);
        $("#chk47_op4").prop("checked", false);
        $("#chk47_op5").prop("checked", false);
  
        $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores47').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk47_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk47_op2").prop("checked", false);
        $("#chk47_op3").prop("checked", false);
        $("#chk47_op4").prop("checked", true);
        $("#chk47_op6").prop("checked", false);
  
        $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores47').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk47_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk47_op1").prop("checked", false);
        $("#chk47_op3").prop("checked", false);
        $("#chk47_op5").prop("checked", true);
        $("#chk47_op6").prop("checked", false);
  
        $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores47').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk47_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk47_op2").prop("checked", false);
        $("#chk47_op4").prop("checked", false);
        $("#chk47_op5").prop("checked", false);
        $("#chk47_op6").prop("checked", true);
  
        $("#errores47").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores47').html("");
        }, 2000);
      });
  }




  /// 48 grupo
  function seleccionar48(){
    $("#chk48_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk48_op1").prop("checked", true);
      $("#chk48_op2").prop("checked", false);
      $("#chk48_op3").prop("checked", false);
      $("#chk48_op5").prop("checked", false);

      $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores48').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk48_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk48_op1").prop("checked", false);
        $("#chk48_op2").prop("checked", true);
        $("#chk48_op4").prop("checked", false);
        $("#chk48_op6").prop("checked", false);
  
        $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores48').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk48_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk48_op1").prop("checked", false);
        $("#chk48_op3").prop("checked", true);
        $("#chk48_op4").prop("checked", false);
        $("#chk48_op5").prop("checked", false);
  
        $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores48').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk48_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk48_op2").prop("checked", false);
        $("#chk48_op3").prop("checked", false);
        $("#chk48_op4").prop("checked", true);
        $("#chk48_op6").prop("checked", false);
  
        $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores48').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk48_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk48_op1").prop("checked", false);
        $("#chk48_op3").prop("checked", false);
        $("#chk48_op5").prop("checked", true);
        $("#chk48_op6").prop("checked", false);
  
        $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores48').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk48_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk48_op2").prop("checked", false);
        $("#chk48_op4").prop("checked", false);
        $("#chk48_op5").prop("checked", false);
        $("#chk48_op6").prop("checked", true);
  
        $("#errores48").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores48').html("");
        }, 2000);
      });
  }



    /// 49 grupo
    function seleccionar49(){
      $("#chk49_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk49_op1").prop("checked", true);
        $("#chk49_op2").prop("checked", false);
        $("#chk49_op3").prop("checked", false);
        $("#chk49_op5").prop("checked", false);
  
        $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores49').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk49_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk49_op1").prop("checked", false);
          $("#chk49_op2").prop("checked", true);
          $("#chk49_op4").prop("checked", false);
          $("#chk49_op6").prop("checked", false);
    
          $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores49').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk49_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk49_op1").prop("checked", false);
          $("#chk49_op3").prop("checked", true);
          $("#chk49_op4").prop("checked", false);
          $("#chk49_op5").prop("checked", false);
    
          $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores49').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk49_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk49_op2").prop("checked", false);
          $("#chk49_op3").prop("checked", false);
          $("#chk49_op4").prop("checked", true);
          $("#chk49_op6").prop("checked", false);
    
          $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores49').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk49_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk49_op1").prop("checked", false);
          $("#chk49_op3").prop("checked", false);
          $("#chk49_op5").prop("checked", true);
          $("#chk49_op6").prop("checked", false);
    
          $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores49').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk49_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk49_op2").prop("checked", false);
          $("#chk49_op4").prop("checked", false);
          $("#chk49_op5").prop("checked", false);
          $("#chk49_op6").prop("checked", true);
    
          $("#errores49").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores49').html("");
          }, 2000);
        });
    }



  /// 50 grupo
  function seleccionar50(){
    $("#chk50_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk50_op1").prop("checked", true);
      $("#chk50_op2").prop("checked", false);
      $("#chk50_op3").prop("checked", false);
      $("#chk50_op5").prop("checked", false);

      $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores50').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk50_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk50_op1").prop("checked", false);
        $("#chk50_op2").prop("checked", true);
        $("#chk50_op4").prop("checked", false);
        $("#chk50_op6").prop("checked", false);
  
        $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores50').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk50_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk50_op1").prop("checked", false);
        $("#chk50_op3").prop("checked", true);
        $("#chk50_op4").prop("checked", false);
        $("#chk50_op5").prop("checked", false);
  
        $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores50').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk50_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk50_op2").prop("checked", false);
        $("#chk50_op3").prop("checked", false);
        $("#chk50_op4").prop("checked", true);
        $("#chk50_op6").prop("checked", false);
  
        $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores50').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk50_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk50_op1").prop("checked", false);
        $("#chk50_op3").prop("checked", false);
        $("#chk50_op5").prop("checked", true);
        $("#chk50_op6").prop("checked", false);
  
        $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores50').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk50_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk50_op2").prop("checked", false);
        $("#chk50_op4").prop("checked", false);
        $("#chk50_op5").prop("checked", false);
        $("#chk50_op6").prop("checked", true);
  
        $("#errores50").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores50').html("");
        }, 2000);
      });
  }




    /// 5 grupo
    function seleccionar51(){
      $("#chk51_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk51_op1").prop("checked", true);
        $("#chk51_op2").prop("checked", false);
        $("#chk51_op3").prop("checked", false);
        $("#chk51_op5").prop("checked", false);
  
        $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores51').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk51_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk51_op1").prop("checked", false);
          $("#chk51_op2").prop("checked", true);
          $("#chk51_op4").prop("checked", false);
          $("#chk51_op6").prop("checked", false);
    
          $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores51').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk51_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk51_op1").prop("checked", false);
          $("#chk51_op3").prop("checked", true);
          $("#chk51_op4").prop("checked", false);
          $("#chk51_op5").prop("checked", false);
    
          $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores51').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk51_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk51_op2").prop("checked", false);
          $("#chk51_op3").prop("checked", false);
          $("#chk51_op4").prop("checked", true);
          $("#chk51_op6").prop("checked", false);
    
          $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores51').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk51_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk51_op1").prop("checked", false);
          $("#chk51_op3").prop("checked", false);
          $("#chk51_op5").prop("checked", true);
          $("#chk51_op6").prop("checked", false);
    
          $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores51').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk51_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk51_op2").prop("checked", false);
          $("#chk51_op4").prop("checked", false);
          $("#chk51_op5").prop("checked", false);
          $("#chk51_op6").prop("checked", true);
    
          $("#errores51").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores51').html("");
          }, 2000);
        });
    }



  /// 52 grupo
  function seleccionar52(){
    $("#chk52_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk52_op1").prop("checked", true);
      $("#chk52_op2").prop("checked", false);
      $("#chk52_op3").prop("checked", false);
      $("#chk52_op5").prop("checked", false);

      $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores52').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk52_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk52_op1").prop("checked", false);
        $("#chk52_op2").prop("checked", true);
        $("#chk52_op4").prop("checked", false);
        $("#chk52_op6").prop("checked", false);
  
        $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores52').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk52_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk52_op1").prop("checked", false);
        $("#chk52_op3").prop("checked", true);
        $("#chk52_op4").prop("checked", false);
        $("#chk52_op5").prop("checked", false);
  
        $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores52').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk52_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk52_op2").prop("checked", false);
        $("#chk52_op3").prop("checked", false);
        $("#chk52_op4").prop("checked", true);
        $("#chk52_op6").prop("checked", false);
  
        $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores52').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk52_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk52_op1").prop("checked", false);
        $("#chk52_op3").prop("checked", false);
        $("#chk52_op5").prop("checked", true);
        $("#chk52_op6").prop("checked", false);
  
        $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores52').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk52_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk52_op2").prop("checked", false);
        $("#chk52_op4").prop("checked", false);
        $("#chk52_op5").prop("checked", false);
        $("#chk52_op6").prop("checked", true);
  
        $("#errores52").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores52').html("");
        }, 2000);
      });
  }




    /// 53 grupo
    function seleccionar53(){
      $("#chk53_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk53_op1").prop("checked", true);
        $("#chk53_op2").prop("checked", false);
        $("#chk53_op3").prop("checked", false);
        $("#chk53_op5").prop("checked", false);
  
        $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores53').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk53_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk53_op1").prop("checked", false);
          $("#chk53_op2").prop("checked", true);
          $("#chk53_op4").prop("checked", false);
          $("#chk53_op6").prop("checked", false);
    
          $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores53').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk53_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk53_op1").prop("checked", false);
          $("#chk53_op3").prop("checked", true);
          $("#chk53_op4").prop("checked", false);
          $("#chk53_op5").prop("checked", false);
    
          $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores53').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk53_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk53_op2").prop("checked", false);
          $("#chk53_op3").prop("checked", false);
          $("#chk53_op4").prop("checked", true);
          $("#chk53_op6").prop("checked", false);
    
          $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores53').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk53_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk53_op1").prop("checked", false);
          $("#chk53_op3").prop("checked", false);
          $("#chk53_op5").prop("checked", true);
          $("#chk53_op6").prop("checked", false);
    
          $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores53').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk53_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk53_op2").prop("checked", false);
          $("#chk53_op4").prop("checked", false);
          $("#chk53_op5").prop("checked", false);
          $("#chk53_op6").prop("checked", true);
    
          $("#errores53").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores53').html("");
          }, 2000);
        });
    }



  /// 54 grupo
  function seleccionar54(){
    $("#chk54_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk54_op1").prop("checked", true);
      $("#chk54_op2").prop("checked", false);
      $("#chk54_op3").prop("checked", false);
      $("#chk54_op5").prop("checked", false);

      $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores54').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk54_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk54_op1").prop("checked", false);
        $("#chk54_op2").prop("checked", true);
        $("#chk54_op4").prop("checked", false);
        $("#chk54_op6").prop("checked", false);
  
        $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores54').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk54_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk54_op1").prop("checked", false);
        $("#chk54_op3").prop("checked", true);
        $("#chk54_op4").prop("checked", false);
        $("#chk54_op5").prop("checked", false);
  
        $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores54').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk54_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk54_op2").prop("checked", false);
        $("#chk54_op3").prop("checked", false);
        $("#chk54_op4").prop("checked", true);
        $("#chk54_op6").prop("checked", false);
  
        $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores54').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk54_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk54_op1").prop("checked", false);
        $("#chk54_op3").prop("checked", false);
        $("#chk54_op5").prop("checked", true);
        $("#chk54_op6").prop("checked", false);
  
        $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores54').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk54_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk54_op2").prop("checked", false);
        $("#chk54_op4").prop("checked", false);
        $("#chk54_op5").prop("checked", false);
        $("#chk54_op6").prop("checked", true);
  
        $("#errores54").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores54').html("");
        }, 2000);
      });
  }


    /// 55 grupo
    function seleccionar55(){
      $("#chk55_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk55_op1").prop("checked", true);
        $("#chk55_op2").prop("checked", false);
        $("#chk55_op3").prop("checked", false);
        $("#chk55_op5").prop("checked", false);
  
        $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores55').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk55_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk55_op1").prop("checked", false);
          $("#chk55_op2").prop("checked", true);
          $("#chk55_op4").prop("checked", false);
          $("#chk55_op6").prop("checked", false);
    
          $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores55').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk55_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk55_op1").prop("checked", false);
          $("#chk55_op3").prop("checked", true);
          $("#chk55_op4").prop("checked", false);
          $("#chk55_op5").prop("checked", false);
    
          $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores55').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk55_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk55_op2").prop("checked", false);
          $("#chk55_op3").prop("checked", false);
          $("#chk55_op4").prop("checked", true);
          $("#chk55_op6").prop("checked", false);
    
          $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores55').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk55_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk55_op1").prop("checked", false);
          $("#chk55_op3").prop("checked", false);
          $("#chk55_op5").prop("checked", true);
          $("#chk55_op6").prop("checked", false);
    
          $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores55').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk55_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk55_op2").prop("checked", false);
          $("#chk55_op4").prop("checked", false);
          $("#chk55_op5").prop("checked", false);
          $("#chk55_op6").prop("checked", true);
    
          $("#errores55").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores55').html("");
          }, 2000);
        });
    }




  /// 56 grupo
  function seleccionar56(){
    $("#chk56_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk56_op1").prop("checked", true);
      $("#chk56_op2").prop("checked", false);
      $("#chk56_op3").prop("checked", false);
      $("#chk56_op5").prop("checked", false);

      $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores56').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk56_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk56_op1").prop("checked", false);
        $("#chk56_op2").prop("checked", true);
        $("#chk56_op4").prop("checked", false);
        $("#chk56_op6").prop("checked", false);
  
        $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores56').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk56_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk56_op1").prop("checked", false);
        $("#chk56_op3").prop("checked", true);
        $("#chk56_op4").prop("checked", false);
        $("#chk56_op5").prop("checked", false);
  
        $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores56').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk56_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk56_op2").prop("checked", false);
        $("#chk56_op3").prop("checked", false);
        $("#chk56_op4").prop("checked", true);
        $("#chk56_op6").prop("checked", false);
  
        $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores56').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk56_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk56_op1").prop("checked", false);
        $("#chk56_op3").prop("checked", false);
        $("#chk56_op5").prop("checked", true);
        $("#chk56_op6").prop("checked", false);
  
        $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores56').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk56_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk56_op2").prop("checked", false);
        $("#chk56_op4").prop("checked", false);
        $("#chk56_op5").prop("checked", false);
        $("#chk56_op6").prop("checked", true);
  
        $("#errores56").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores56').html("");
        }, 2000);
      });
  }




    /// 57 grupo
    function seleccionar57(){
      $("#chk57_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk57_op1").prop("checked", true);
        $("#chk57_op2").prop("checked", false);
        $("#chk57_op3").prop("checked", false);
        $("#chk57_op5").prop("checked", false);
  
        $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores57').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk57_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk57_op1").prop("checked", false);
          $("#chk57_op2").prop("checked", true);
          $("#chk57_op4").prop("checked", false);
          $("#chk57_op6").prop("checked", false);
    
          $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores57').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk57_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk57_op1").prop("checked", false);
          $("#chk57_op3").prop("checked", true);
          $("#chk57_op4").prop("checked", false);
          $("#chk57_op5").prop("checked", false);
    
          $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores57').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk57_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk57_op2").prop("checked", false);
          $("#chk57_op3").prop("checked", false);
          $("#chk57_op4").prop("checked", true);
          $("#chk57_op6").prop("checked", false);
    
          $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores57').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk57_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk57_op1").prop("checked", false);
          $("#chk57_op3").prop("checked", false);
          $("#chk57_op5").prop("checked", true);
          $("#chk57_op6").prop("checked", false);
    
          $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores57').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk57_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk57_op2").prop("checked", false);
          $("#chk57_op4").prop("checked", false);
          $("#chk57_op5").prop("checked", false);
          $("#chk57_op6").prop("checked", true);
    
          $("#errores57").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores57').html("");
          }, 2000);
        });
    }



  /// 58 grupo
  function seleccionar58(){
    $("#chk58_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk58_op1").prop("checked", true);
      $("#chk58_op2").prop("checked", false);
      $("#chk58_op3").prop("checked", false);
      $("#chk58_op5").prop("checked", false);

      $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores58').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk58_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk58_op1").prop("checked", false);
        $("#chk58_op2").prop("checked", true);
        $("#chk58_op4").prop("checked", false);
        $("#chk58_op6").prop("checked", false);
  
        $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores58').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk58_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk58_op1").prop("checked", false);
        $("#chk58_op3").prop("checked", true);
        $("#chk58_op4").prop("checked", false);
        $("#chk58_op5").prop("checked", false);
  
        $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores58').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk58_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk58_op2").prop("checked", false);
        $("#chk58_op3").prop("checked", false);
        $("#chk58_op4").prop("checked", true);
        $("#chk58_op6").prop("checked", false);
  
        $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores58').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk58_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk58_op1").prop("checked", false);
        $("#chk58_op3").prop("checked", false);
        $("#chk58_op5").prop("checked", true);
        $("#chk58_op6").prop("checked", false);
  
        $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores58').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk58_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk58_op2").prop("checked", false);
        $("#chk58_op4").prop("checked", false);
        $("#chk58_op5").prop("checked", false);
        $("#chk58_op6").prop("checked", true);
  
        $("#errores58").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores58').html("");
        }, 2000);
      });
  }



    /// 59 grupo
    function seleccionar59(){
      $("#chk59_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk59_op1").prop("checked", true);
        $("#chk59_op2").prop("checked", false);
        $("#chk59_op3").prop("checked", false);
        $("#chk59_op5").prop("checked", false);
  
        $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores59').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk59_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk59_op1").prop("checked", false);
          $("#chk59_op2").prop("checked", true);
          $("#chk59_op4").prop("checked", false);
          $("#chk59_op6").prop("checked", false);
    
          $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores59').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk59_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk59_op1").prop("checked", false);
          $("#chk59_op3").prop("checked", true);
          $("#chk59_op4").prop("checked", false);
          $("#chk59_op5").prop("checked", false);
    
          $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores59').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk59_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk59_op2").prop("checked", false);
          $("#chk59_op3").prop("checked", false);
          $("#chk59_op4").prop("checked", true);
          $("#chk59_op6").prop("checked", false);
    
          $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores59').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk59_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk59_op1").prop("checked", false);
          $("#chk59_op3").prop("checked", false);
          $("#chk59_op5").prop("checked", true);
          $("#chk59_op6").prop("checked", false);
    
          $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores59').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk59_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk59_op2").prop("checked", false);
          $("#chk59_op4").prop("checked", false);
          $("#chk59_op5").prop("checked", false);
          $("#chk59_op6").prop("checked", true);
    
          $("#errores59").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores59').html("");
          }, 2000);
        });
    }



  /// 60 grupo
  function seleccionar60(){
    $("#chk60_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk60_op1").prop("checked", true);
      $("#chk60_op2").prop("checked", false);
      $("#chk60_op3").prop("checked", false);
      $("#chk60_op5").prop("checked", false);

      $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores60').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk60_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk60_op1").prop("checked", false);
        $("#chk60_op2").prop("checked", true);
        $("#chk60_op4").prop("checked", false);
        $("#chk60_op6").prop("checked", false);
  
        $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores60').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk60_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk60_op1").prop("checked", false);
        $("#chk60_op3").prop("checked", true);
        $("#chk60_op4").prop("checked", false);
        $("#chk60_op5").prop("checked", false);
  
        $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores60').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk60_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk60_op2").prop("checked", false);
        $("#chk60_op3").prop("checked", false);
        $("#chk60_op4").prop("checked", true);
        $("#chk60_op6").prop("checked", false);
  
        $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores60').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk60_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk60_op1").prop("checked", false);
        $("#chk60_op3").prop("checked", false);
        $("#chk60_op5").prop("checked", true);
        $("#chk60_op6").prop("checked", false);
  
        $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores60').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk60_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk60_op2").prop("checked", false);
        $("#chk60_op4").prop("checked", false);
        $("#chk60_op5").prop("checked", false);
        $("#chk60_op6").prop("checked", true);
  
        $("#errores60").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores60').html("");
        }, 2000);
      });
  }



    /// 61 grupo
    function seleccionar61(){
      $("#chk61_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk61_op1").prop("checked", true);
        $("#chk61_op2").prop("checked", false);
        $("#chk61_op3").prop("checked", false);
        $("#chk61_op5").prop("checked", false);
  
        $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores61').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk61_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk61_op1").prop("checked", false);
          $("#chk61_op2").prop("checked", true);
          $("#chk61_op4").prop("checked", false);
          $("#chk61_op6").prop("checked", false);
    
          $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores61').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk61_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk61_op1").prop("checked", false);
          $("#chk61_op3").prop("checked", true);
          $("#chk61_op4").prop("checked", false);
          $("#chk61_op5").prop("checked", false);
    
          $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores61').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk61_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk61_op2").prop("checked", false);
          $("#chk61_op3").prop("checked", false);
          $("#chk61_op4").prop("checked", true);
          $("#chk61_op6").prop("checked", false);
    
          $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores61').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk61_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk61_op1").prop("checked", false);
          $("#chk61_op3").prop("checked", false);
          $("#chk61_op5").prop("checked", true);
          $("#chk61_op6").prop("checked", false);
    
          $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores61').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk61_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk61_op2").prop("checked", false);
          $("#chk61_op4").prop("checked", false);
          $("#chk61_op5").prop("checked", false);
          $("#chk61_op6").prop("checked", true);
    
          $("#errores61").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores61').html("");
          }, 2000);
        });
    }



  /// 62 grupo
  function seleccionar62(){
    $("#chk62_op1").on('change', function (ev){
      ev.preventDefault();

      $("#chk62_op1").prop("checked", true);
      $("#chk62_op2").prop("checked", false);
      $("#chk62_op3").prop("checked", false);
      $("#chk62_op5").prop("checked", false);

      $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
      setTimeout(function(){
        $('#errores62').html("");
      }, 2000);
    });

    //segundo Check

    $("#chk62_op2").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk62_op1").prop("checked", false);
        $("#chk62_op2").prop("checked", true);
        $("#chk62_op4").prop("checked", false);
        $("#chk62_op6").prop("checked", false);
  
        $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores62').html("");
        }, 2000);
      });

    //Tercer Check

    $("#chk62_op3").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk62_op1").prop("checked", false);
        $("#chk62_op3").prop("checked", true);
        $("#chk62_op4").prop("checked", false);
        $("#chk62_op5").prop("checked", false);
  
        $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores62').html("");
        }, 2000);
      });

    //cuarto Check

    $("#chk62_op4").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk62_op2").prop("checked", false);
        $("#chk62_op3").prop("checked", false);
        $("#chk62_op4").prop("checked", true);
        $("#chk62_op6").prop("checked", false);
  
        $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores62').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk62_op5").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk62_op1").prop("checked", false);
        $("#chk62_op3").prop("checked", false);
        $("#chk62_op5").prop("checked", true);
        $("#chk62_op6").prop("checked", false);
  
        $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores62').html("");
        }, 2000);
      });

    //Quinta Check

    $("#chk62_op6").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk62_op2").prop("checked", false);
        $("#chk62_op4").prop("checked", false);
        $("#chk62_op5").prop("checked", false);
        $("#chk62_op6").prop("checked", true);
  
        $("#errores62").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores62').html("");
        }, 2000);
      });
  }



    /// 63 grupo
    function seleccionar63(){
      $("#chk63_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk63_op1").prop("checked", true);
        $("#chk63_op2").prop("checked", false);
        $("#chk63_op3").prop("checked", false);
        $("#chk63_op5").prop("checked", false);
  
        $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores63').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk63_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk63_op1").prop("checked", false);
          $("#chk63_op2").prop("checked", true);
          $("#chk63_op4").prop("checked", false);
          $("#chk63_op6").prop("checked", false);
    
          $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores63').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk63_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk63_op1").prop("checked", false);
          $("#chk63_op3").prop("checked", true);
          $("#chk63_op4").prop("checked", false);
          $("#chk63_op5").prop("checked", false);
    
          $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores63').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk63_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk63_op2").prop("checked", false);
          $("#chk63_op3").prop("checked", false);
          $("#chk63_op4").prop("checked", true);
          $("#chk63_op6").prop("checked", false);
    
          $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores63').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk63_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk63_op1").prop("checked", false);
          $("#chk63_op3").prop("checked", false);
          $("#chk63_op5").prop("checked", true);
          $("#chk63_op6").prop("checked", false);
    
          $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores63').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk63_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk63_op2").prop("checked", false);
          $("#chk63_op4").prop("checked", false);
          $("#chk63_op5").prop("checked", false);
          $("#chk63_op6").prop("checked", true);
    
          $("#errores63").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores63').html("");
          }, 2000);
        });
    }


    // 64 grupo
    function seleccionar64(){
      $("#chk64_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk64_op1").prop("checked", true);
        $("#chk64_op2").prop("checked", false);
        $("#chk64_op3").prop("checked", false);
        $("#chk64_op5").prop("checked", false);
  
        $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores64').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk64_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk64_op1").prop("checked", false);
          $("#chk64_op2").prop("checked", true);
          $("#chk64_op4").prop("checked", false);
          $("#chk64_op6").prop("checked", false);
    
          $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores64').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk64_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk64_op1").prop("checked", false);
          $("#chk64_op3").prop("checked", true);
          $("#chk64_op4").prop("checked", false);
          $("#chk64_op5").prop("checked", false);
    
          $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores64').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk64_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk64_op2").prop("checked", false);
          $("#chk64_op3").prop("checked", false);
          $("#chk64_op4").prop("checked", true);
          $("#chk64_op6").prop("checked", false);
    
          $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores46').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk64_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk64_op1").prop("checked", false);
          $("#chk64_op3").prop("checked", false);
          $("#chk64_op5").prop("checked", true);
          $("#chk64_op6").prop("checked", false);
    
          $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores64').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk64_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk64_op2").prop("checked", false);
          $("#chk64_op4").prop("checked", false);
          $("#chk64_op5").prop("checked", false);
          $("#chk64_op6").prop("checked", true);
    
          $("#errores64").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores64').html("");
          }, 2000);
        });
    }



    //65 grupo
    
    function seleccionar65(){
      $("#chk65_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk65_op1").prop("checked", true);
        $("#chk65_op2").prop("checked", false);
        $("#chk65_op3").prop("checked", false);
        $("#chk65_op5").prop("checked", false);
  
        $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores65').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk65_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk65_op1").prop("checked", false);
          $("#chk65_op2").prop("checked", true);
          $("#chk65_op4").prop("checked", false);
          $("#chk65_op6").prop("checked", false);
    
          $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores65').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk65_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk65_op1").prop("checked", false);
          $("#chk65_op3").prop("checked", true);
          $("#chk65_op4").prop("checked", false);
          $("#chk65_op5").prop("checked", false);
    
          $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores65').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk65_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk65_op2").prop("checked", false);
          $("#chk65_op3").prop("checked", false);
          $("#chk65_op4").prop("checked", true);
          $("#chk65_op6").prop("checked", false);
    
          $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores65').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk65_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk65_op1").prop("checked", false);
          $("#chk65_op3").prop("checked", false);
          $("#chk65_op5").prop("checked", true);
          $("#chk65_op6").prop("checked", false);
    
          $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores65').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk65_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk65_op2").prop("checked", false);
          $("#chk65_op4").prop("checked", false);
          $("#chk65_op5").prop("checked", false);
          $("#chk65_op6").prop("checked", true);
    
          $("#errores65").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores65').html("");
          }, 2000);
        });
    }


    //66 grupo

    function seleccionar66(){
      $("#chk66_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk66_op1").prop("checked", true);
        $("#chk66_op2").prop("checked", false);
        $("#chk66_op3").prop("checked", false);
        $("#chk66_op5").prop("checked", false);
  
        $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores66').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk66_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk6_op1").prop("checked", false);
          $("#chk66_op2").prop("checked", true);
          $("#chk66_op4").prop("checked", false);
          $("#chk66_op6").prop("checked", false);
    
          $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores66').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk66_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk66_op1").prop("checked", false);
          $("#chk666_op3").prop("checked", true);
          $("#chk66_op4").prop("checked", false);
          $("#chk66_op5").prop("checked", false);
    
          $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores66').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk66_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk66_op2").prop("checked", false);
          $("#chk66_op3").prop("checked", false);
          $("#chk66_op4").prop("checked", true);
          $("#chk66_op6").prop("checked", false);
    
          $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores66').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk66_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk66_op1").prop("checked", false);
          $("#chk66_op3").prop("checked", false);
          $("#chk66_op5").prop("checked", true);
          $("#chk66_op6").prop("checked", false);
    
          $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores66').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk66_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk66_op2").prop("checked", false);
          $("#chk66_op4").prop("checked", false);
          $("#chk66_op5").prop("checked", false);
          $("#chk66_op6").prop("checked", true);
    
          $("#errores66").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores66').html("");
          }, 2000);
        });
    }


    //67 grupo

    function seleccionar67(){
      $("#chk67_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk67_op1").prop("checked", true);
        $("#chk67_op2").prop("checked", false);
        $("#chk67_op3").prop("checked", false);
        $("#chk67_op5").prop("checked", false);
  
        $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores67').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk67_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk67_op1").prop("checked", false);
          $("#chk67_op2").prop("checked", true);
          $("#chk67_op4").prop("checked", false);
          $("#chk67_op6").prop("checked", false);
    
          $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores67').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk67_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk67_op1").prop("checked", false);
          $("#chk67_op3").prop("checked", true);
          $("#chk67_op4").prop("checked", false);
          $("#chk67_op5").prop("checked", false);
    
          $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores67').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk67_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk67_op2").prop("checked", false);
          $("#chk67_op3").prop("checked", false);
          $("#chk67_op4").prop("checked", true);
          $("#chk67_op6").prop("checked", false);
    
          $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores67').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk67_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk67_op1").prop("checked", false);
          $("#chk67_op3").prop("checked", false);
          $("#chk67_op5").prop("checked", true);
          $("#chk67_op6").prop("checked", false);
    
          $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores67').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk67_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk67_op2").prop("checked", false);
          $("#chk67_op4").prop("checked", false);
          $("#chk67_op5").prop("checked", false);
          $("#chk67_op6").prop("checked", true);
    
          $("#errores67").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores67').html("");
          }, 2000);
        });
    }



    //68 grupo

    function seleccionar68(){
      $("#chk68_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk68_op1").prop("checked", true);
        $("#chk68_op2").prop("checked", false);
        $("#chk68_op3").prop("checked", false);
        $("#chk68_op5").prop("checked", false);
  
        $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores68').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk68_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk68_op1").prop("checked", false);
          $("#chk68_op2").prop("checked", true);
          $("#chk68_op4").prop("checked", false);
          $("#chk68_op6").prop("checked", false);
    
          $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores68').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk68_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk68_op1").prop("checked", false);
          $("#chk68_op3").prop("checked", true);
          $("#chk68_op4").prop("checked", false);
          $("#chk68_op5").prop("checked", false);
    
          $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores68').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk68_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk68_op2").prop("checked", false);
          $("#chk68_op3").prop("checked", false);
          $("#chk68_op4").prop("checked", true);
          $("#chk68_op6").prop("checked", false);
    
          $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores68').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk68_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk68_op1").prop("checked", false);
          $("#chk68_op3").prop("checked", false);
          $("#chk68_op5").prop("checked", true);
          $("#chk68_op6").prop("checked", false);
    
          $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores68').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk68_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk68_op2").prop("checked", false);
          $("#chk68_op4").prop("checked", false);
          $("#chk68_op5").prop("checked", false);
          $("#chk68_op6").prop("checked", true);
    
          $("#errores68").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores68').html("");
          }, 2000);
        });
    }




    //669 grupo

    function seleccionar69(){
      $("#chk69_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk69_op1").prop("checked", true);
        $("#chk69_op2").prop("checked", false);
        $("#chk69_op3").prop("checked", false);
        $("#chk69_op5").prop("checked", false);
  
        $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores69').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk69_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk69_op1").prop("checked", false);
          $("#chk69_op2").prop("checked", true);
          $("#chk69_op4").prop("checked", false);
          $("#chk69_op6").prop("checked", false);
    
          $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores69').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk69_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk69_op1").prop("checked", false);
          $("#chk69_op3").prop("checked", true);
          $("#chk69_op4").prop("checked", false);
          $("#chk69_op5").prop("checked", false);
    
          $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores69').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk69_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk69_op2").prop("checked", false);
          $("#chk69_op3").prop("checked", false);
          $("#chk69_op4").prop("checked", true);
          $("#chk69_op6").prop("checked", false);
    
          $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores69').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk69_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk69_op1").prop("checked", false);
          $("#chk69_op3").prop("checked", false);
          $("#chk69_op5").prop("checked", true);
          $("#chk69_op6").prop("checked", false);
    
          $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores69').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk69_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk69_op2").prop("checked", false);
          $("#chk69_op4").prop("checked", false);
          $("#chk69_op5").prop("checked", false);
          $("#chk69_op6").prop("checked", true);
    
          $("#errores69").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores69').html("");
          }, 2000);
        });
    }




    //70 grupo

    function seleccionar70(){
      $("#chk70_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk70_op1").prop("checked", true);
        $("#chk70_op2").prop("checked", false);
        $("#chk70_op3").prop("checked", false);
        $("#chk70_op5").prop("checked", false);
  
        $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores70').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk70_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk70_op1").prop("checked", false);
          $("#chk70_op2").prop("checked", true);
          $("#chk70_op4").prop("checked", false);
          $("#chk70_op6").prop("checked", false);
    
          $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores70').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk70_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk70_op1").prop("checked", false);
          $("#chk70_op3").prop("checked", true);
          $("#chk70_op4").prop("checked", false);
          $("#chk70_op5").prop("checked", false);
    
          $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores70').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk70_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk70_op2").prop("checked", false);
          $("#chk70_op3").prop("checked", false);
          $("#chk70_op4").prop("checked", true);
          $("#chk70_op6").prop("checked", false);
    
          $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores70').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk70_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk70_op1").prop("checked", false);
          $("#chk70_op3").prop("checked", false);
          $("#chk70_op5").prop("checked", true);
          $("#chk70_op6").prop("checked", false);
    
          $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores70').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk70_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk70_op2").prop("checked", false);
          $("#chk70_op4").prop("checked", false);
          $("#chk70_op5").prop("checked", false);
          $("#chk70_op6").prop("checked", true);
    
          $("#errores70").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores70').html("");
          }, 2000);
        });
    }




    //71 grupo

    function seleccionar71(){
      $("#chk71_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk71_op1").prop("checked", true);
        $("#chk71_op2").prop("checked", false);
        $("#chk71_op3").prop("checked", false);
        $("#chk71_op5").prop("checked", false);
  
        $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores71').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk71_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk71_op1").prop("checked", false);
          $("#chk71_op2").prop("checked", true);
          $("#chk71_op4").prop("checked", false);
          $("#chk71_op6").prop("checked", false);
    
          $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores71').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk71_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk17_op1").prop("checked", false);
          $("#chk71_op3").prop("checked", true);
          $("#chk71_op4").prop("checked", false);
          $("#chk71_op5").prop("checked", false);
    
          $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores71').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk71_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk71_op2").prop("checked", false);
          $("#chk71_op3").prop("checked", false);
          $("#chk71_op4").prop("checked", true);
          $("#chk71_op6").prop("checked", false);
    
          $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores71').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk71_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk71_op1").prop("checked", false);
          $("#chk71_op3").prop("checked", false);
          $("#chk71_op5").prop("checked", true);
          $("#chk71_op6").prop("checked", false);
    
          $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores71').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk71_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk71_op2").prop("checked", false);
          $("#chk71_op4").prop("checked", false);
          $("#chk71_op5").prop("checked", false);
          $("#chk71_op6").prop("checked", true);
    
          $("#errores71").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores71').html("");
          }, 2000);
        });
    }



    //72 grupo

    function seleccionar72(){
      $("#chk72_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk72_op1").prop("checked", true);
        $("#chk72_op2").prop("checked", false);
        $("#chk72_op3").prop("checked", false);
        $("#chk72_op5").prop("checked", false);
  
        $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores72').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk72_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk72_op1").prop("checked", false);
          $("#chk72_op2").prop("checked", true);
          $("#chk72_op4").prop("checked", false);
          $("#chk72_op6").prop("checked", false);
    
          $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores72').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk72_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk72_op1").prop("checked", false);
          $("#chk72_op3").prop("checked", true);
          $("#chk72_op4").prop("checked", false);
          $("#chk72_op5").prop("checked", false);
    
          $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores72').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk72_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk72_op2").prop("checked", false);
          $("#chk72_op3").prop("checked", false);
          $("#chk72_op4").prop("checked", true);
          $("#chk72_op6").prop("checked", false);
    
          $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores72').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk72_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk72_op1").prop("checked", false);
          $("#chk72_op3").prop("checked", false);
          $("#chk72_op5").prop("checked", true);
          $("#chk72_op6").prop("checked", false);
    
          $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores72').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk72_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk72_op2").prop("checked", false);
          $("#chk72_op4").prop("checked", false);
          $("#chk72_op5").prop("checked", false);
          $("#chk72_op6").prop("checked", true);
    
          $("#errores72").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores72').html("");
          }, 2000);
        });
    }


    //73 grupo

    function seleccionar73(){
      $("#chk73_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk73_op1").prop("checked", true);
        $("#chk73_op2").prop("checked", false);
        $("#chk73_op3").prop("checked", false);
        $("#chk73_op5").prop("checked", false);
  
        $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores73').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk73_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk73_op1").prop("checked", false);
          $("#chk73_op2").prop("checked", true);
          $("#chk73_op4").prop("checked", false);
          $("#chk73_op6").prop("checked", false);
    
          $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores73').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk73_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk73_op1").prop("checked", false);
          $("#chk73_op3").prop("checked", true);
          $("#chk73_op4").prop("checked", false);
          $("#chk73_op5").prop("checked", false);
    
          $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores73').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk73_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk73_op2").prop("checked", false);
          $("#chk73_op3").prop("checked", false);
          $("#chk73_op4").prop("checked", true);
          $("#chk73_op6").prop("checked", false);
    
          $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores73').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk73_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk73_op1").prop("checked", false);
          $("#chk73_op3").prop("checked", false);
          $("#chk73_op5").prop("checked", true);
          $("#chk73_op6").prop("checked", false);
    
          $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores73').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk73_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk73_op2").prop("checked", false);
          $("#chk73_op4").prop("checked", false);
          $("#chk73_op5").prop("checked", false);
          $("#chk73_op6").prop("checked", true);
    
          $("#errores73").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores73').html("");
          }, 2000);
        });
    }



    //74 grupo

    function seleccionar74(){
      $("#chk74_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk74_op1").prop("checked", true);
        $("#chk74_op2").prop("checked", false);
        $("#chk74_op3").prop("checked", false);
        $("#chk74_op5").prop("checked", false);
  
        $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores74').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk74_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk74_op1").prop("checked", false);
          $("#chk74_op2").prop("checked", true);
          $("#chk74_op4").prop("checked", false);
          $("#chk74_op6").prop("checked", false);
    
          $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores74').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk74_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk74_op1").prop("checked", false);
          $("#chk74_op3").prop("checked", true);
          $("#chk74_op4").prop("checked", false);
          $("#chk74_op5").prop("checked", false);
    
          $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores74').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk74_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk74_op2").prop("checked", false);
          $("#chk74_op3").prop("checked", false);
          $("#chk74_op4").prop("checked", true);
          $("#chk74_op6").prop("checked", false);
    
          $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores74').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk74_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk74_op1").prop("checked", false);
          $("#chk74_op3").prop("checked", false);
          $("#chk74_op5").prop("checked", true);
          $("#chk74_op6").prop("checked", false);
    
          $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores74').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk74_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk74_op2").prop("checked", false);
          $("#chk74_op4").prop("checked", false);
          $("#chk74_op5").prop("checked", false);
          $("#chk74_op6").prop("checked", true);
    
          $("#errores74").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores74').html("");
          }, 2000);
        });
    }




    //75 grupo

    function seleccionar75(){
      $("#chk75_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk75_op1").prop("checked", true);
        $("#chk75_op2").prop("checked", false);
        $("#chk75_op3").prop("checked", false);
        $("#chk75_op5").prop("checked", false);
  
        $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores75').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk75_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk75_op1").prop("checked", false);
          $("#chk75_op2").prop("checked", true);
          $("#chk75_op4").prop("checked", false);
          $("#chk75_op6").prop("checked", false);
    
          $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores75').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk75_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk75_op1").prop("checked", false);
          $("#chk75_op3").prop("checked", true);
          $("#chk75_op4").prop("checked", false);
          $("#chk75_op5").prop("checked", false);
    
          $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores75').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk75_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk75_op2").prop("checked", false);
          $("#chk75_op3").prop("checked", false);
          $("#chk75_op4").prop("checked", true);
          $("#chk75_op6").prop("checked", false);
    
          $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores75').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk75_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk75_op1").prop("checked", false);
          $("#chk75_op3").prop("checked", false);
          $("#chk75_op5").prop("checked", true);
          $("#chk75_op6").prop("checked", false);
    
          $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores75').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk75_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk75_op2").prop("checked", false);
          $("#chk75_op4").prop("checked", false);
          $("#chk75_op5").prop("checked", false);
          $("#chk75_op6").prop("checked", true);
    
          $("#errores75").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores75').html("");
          }, 2000);
        });
    }



    //76 grupo

    function seleccionar76(){
      $("#chk76_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk76_op1").prop("checked", true);
        $("#chk76_op2").prop("checked", false);
        $("#chk76_op3").prop("checked", false);
        $("#chk76_op5").prop("checked", false);
  
        $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores76').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk76_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk76_op1").prop("checked", false);
          $("#chk76_op2").prop("checked", true);
          $("#chk76_op4").prop("checked", false);
          $("#chk76_op6").prop("checked", false);
    
          $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores76').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk76_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk76_op1").prop("checked", false);
          $("#chk76_op3").prop("checked", true);
          $("#chk76_op4").prop("checked", false);
          $("#chk76_op5").prop("checked", false);
    
          $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores76').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk76_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk76_op2").prop("checked", false);
          $("#chk76_op3").prop("checked", false);
          $("#chk76_op4").prop("checked", true);
          $("#chk76_op6").prop("checked", false);
    
          $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores76').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk76_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk76_op1").prop("checked", false);
          $("#chk76_op3").prop("checked", false);
          $("#chk76_op5").prop("checked", true);
          $("#chk76_op6").prop("checked", false);
    
          $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores76').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk76_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk76_op2").prop("checked", false);
          $("#chk76_op4").prop("checked", false);
          $("#chk76_op5").prop("checked", false);
          $("#chk76_op6").prop("checked", true);
    
          $("#errores76").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores76').html("");
          }, 2000);
        });
    }



    //77 grupo

    function seleccionar77(){
      $("#chk77_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk77_op1").prop("checked", true);
        $("#chk77_op2").prop("checked", false);
        $("#chk77_op3").prop("checked", false);
        $("#chk77_op5").prop("checked", false);
  
        $("#errores77").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores77').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk77_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk77_op1").prop("checked", false);
          $("#chk77_op2").prop("checked", true);
          $("#chk77_op4").prop("checked", false);
          $("#chk77_op6").prop("checked", false);
    
          $("#errores77").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores77').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk77_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk77_op1").prop("checked", false);
          $("#chk77_op3").prop("checked", true);
          $("#chk77_op4").prop("checked", false);
          $("#chk77_op5").prop("checked", false);
    
          $("#errores77").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores77').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk77_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk77_op2").prop("checked", false);
          $("#chk77_op3").prop("checked", false);
          $("#chk77_op4").prop("checked", true);
          $("#chk77_op6").prop("checked", false);
    
          $("#errores777").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores777').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk77_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk77_op1").prop("checked", false);
          $("#chk77_op3").prop("checked", false);
          $("#chk77_op5").prop("checked", true);
          $("#chk77_op6").prop("checked", false);
    
          $("#errores77").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores77').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk77_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk77_op2").prop("checked", false);
          $("#chk77_op4").prop("checked", false);
          $("#chk77_op5").prop("checked", false);
          $("#chk77_op6").prop("checked", true);
    
          $("#errores77").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores77').html("");
          }, 2000);
        });
    }



    //78 grupo

    function seleccionar78(){
      $("#chk78_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk78_op1").prop("checked", true);
        $("#chk78_op2").prop("checked", false);
        $("#chk78_op3").prop("checked", false);
        $("#chk78_op5").prop("checked", false);
  
        $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores78').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk78_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk78_op1").prop("checked", false);
          $("#chk78_op2").prop("checked", true);
          $("#chk78_op4").prop("checked", false);
          $("#chk78_op6").prop("checked", false);
    
          $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores78').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk78_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk78_op1").prop("checked", false);
          $("#chk78_op3").prop("checked", true);
          $("#chk78_op4").prop("checked", false);
          $("#chk78_op5").prop("checked", false);
    
          $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores78').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk78_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk78_op2").prop("checked", false);
          $("#chk78_op3").prop("checked", false);
          $("#chk78_op4").prop("checked", true);
          $("#chk78_op6").prop("checked", false);
    
          $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores78').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk78_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk78_op1").prop("checked", false);
          $("#chk78_op3").prop("checked", false);
          $("#chk78_op5").prop("checked", true);
          $("#chk78_op6").prop("checked", false);
    
          $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores78').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk78_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk78_op2").prop("checked", false);
          $("#chk78_op4").prop("checked", false);
          $("#chk78_op5").prop("checked", false);
          $("#chk78_op6").prop("checked", true);
    
          $("#errores78").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores78').html("");
          }, 2000);
        });
    }


    //79 grupo

    function seleccionar79(){
      $("#chk79_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk79_op1").prop("checked", true);
        $("#chk79_op2").prop("checked", false);
        $("#chk79_op3").prop("checked", false);
        $("#chk79_op5").prop("checked", false);
  
        $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores79').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk79_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk79_op1").prop("checked", false);
          $("#chk79_op2").prop("checked", true);
          $("#chk79_op4").prop("checked", false);
          $("#chk79_op6").prop("checked", false);
    
          $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores79').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk79_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk79_op1").prop("checked", false);
          $("#chk79_op3").prop("checked", true);
          $("#chk79_op4").prop("checked", false);
          $("#chk79_op5").prop("checked", false);
    
          $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores79').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk79_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk79_op2").prop("checked", false);
          $("#chk79_op3").prop("checked", false);
          $("#chk79_op4").prop("checked", true);
          $("#chk79_op6").prop("checked", false);
    
          $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores79').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk79_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk79_op1").prop("checked", false);
          $("#chk79_op3").prop("checked", false);
          $("#chk79_op5").prop("checked", true);
          $("#chk79_op6").prop("checked", false);
    
          $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores79').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk79_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk79_op2").prop("checked", false);
          $("#chk79_op4").prop("checked", false);
          $("#chk79_op5").prop("checked", false);
          $("#chk79_op6").prop("checked", true);
    
          $("#errores79").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores79').html("");
          }, 2000);
        });
    }


    
    //80 grupo

    function seleccionar80(){
      $("#chk80_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk80_op1").prop("checked", true);
        $("#chk80_op2").prop("checked", false);
        $("#chk80_op3").prop("checked", false);
        $("#chk80_op5").prop("checked", false);
  
        $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores80').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk80_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk80_op1").prop("checked", false);
          $("#chk80_op2").prop("checked", true);
          $("#chk80_op4").prop("checked", false);
          $("#chk80_op6").prop("checked", false);
    
          $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores80').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk80_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk80_op1").prop("checked", false);
          $("#chk80_op3").prop("checked", true);
          $("#chk80_op4").prop("checked", false);
          $("#chk80_op5").prop("checked", false);
    
          $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores80').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk80_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk80_op2").prop("checked", false);
          $("#chk80_op3").prop("checked", false);
          $("#chk80_op4").prop("checked", true);
          $("#chk80_op6").prop("checked", false);
    
          $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores80').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk80_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk80_op1").prop("checked", false);
          $("#chk80_op3").prop("checked", false);
          $("#chk80_op5").prop("checked", true);
          $("#chk80_op6").prop("checked", false);
    
          $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores80').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk80_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk80_op2").prop("checked", false);
          $("#chk80_op4").prop("checked", false);
          $("#chk80_op5").prop("checked", false);
          $("#chk80_op6").prop("checked", true);
    
          $("#errores80").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores80').html("");
          }, 2000);
        });
    }



    //81 grupo

    function seleccionar81(){
      $("#chk81_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk81_op1").prop("checked", true);
        $("#chk81_op2").prop("checked", false);
        $("#chk81_op3").prop("checked", false);
        $("#chk81_op5").prop("checked", false);
  
        $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores81').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk81_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk81_op1").prop("checked", false);
          $("#chk81_op2").prop("checked", true);
          $("#chk81_op4").prop("checked", false);
          $("#chk81_op6").prop("checked", false);
    
          $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores81').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk81_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk81_op1").prop("checked", false);
          $("#chk81_op3").prop("checked", true);
          $("#chk81_op4").prop("checked", false);
          $("#chk81_op5").prop("checked", false);
    
          $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores81').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk81_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk81_op2").prop("checked", false);
          $("#chk81_op3").prop("checked", false);
          $("#chk81_op4").prop("checked", true);
          $("#chk81_op6").prop("checked", false);
    
          $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores81').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk81_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk81_op1").prop("checked", false);
          $("#chk81_op3").prop("checked", false);
          $("#chk81_op5").prop("checked", true);
          $("#chk81_op6").prop("checked", false);
    
          $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores81').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk81_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk81_op2").prop("checked", false);
          $("#chk81_op4").prop("checked", false);
          $("#chk81_op5").prop("checked", false);
          $("#chk81_op6").prop("checked", true);
    
          $("#errores81").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores81').html("");
          }, 2000);
        });
    }



    //82 grupo

    function seleccionar82(){
      $("#chk82_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk82_op1").prop("checked", true);
        $("#chk82_op2").prop("checked", false);
        $("#chk82_op3").prop("checked", false);
        $("#chk82_op5").prop("checked", false);
  
        $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores82').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk82_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk82_op1").prop("checked", false);
          $("#chk82_op2").prop("checked", true);
          $("#chk82_op4").prop("checked", false);
          $("#chk82_op6").prop("checked", false);
    
          $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores82').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk82_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk82_op1").prop("checked", false);
          $("#chk82_op3").prop("checked", true);
          $("#chk82_op4").prop("checked", false);
          $("#chk82_op5").prop("checked", false);
    
          $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores82').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk82_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk82_op2").prop("checked", false);
          $("#chk82_op3").prop("checked", false);
          $("#chk82_op4").prop("checked", true);
          $("#chk82_op6").prop("checked", false);
    
          $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores82').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk82_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk82_op1").prop("checked", false);
          $("#chk82_op3").prop("checked", false);
          $("#chk82_op5").prop("checked", true);
          $("#chk82_op6").prop("checked", false);
    
          $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores82').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk82_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk82_op2").prop("checked", false);
          $("#chk82_op4").prop("checked", false);
          $("#chk82_op5").prop("checked", false);
          $("#chk82_op6").prop("checked", true);
    
          $("#errores82").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores82').html("");
          }, 2000);
        });
    }



    //83 grupo

    function seleccionar83(){
      $("#chk83_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk83_op1").prop("checked", true);
        $("#chk83_op2").prop("checked", false);
        $("#chk83_op3").prop("checked", false);
        $("#chk83_op5").prop("checked", false);
  
        $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores83').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk83_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk83_op1").prop("checked", false);
          $("#chk83_op2").prop("checked", true);
          $("#chk83_op4").prop("checked", false);
          $("#chk83_op6").prop("checked", false);
    
          $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores83').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk83_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk83_op1").prop("checked", false);
          $("#chk83_op3").prop("checked", true);
          $("#chk83_op4").prop("checked", false);
          $("#chk83_op5").prop("checked", false);
    
          $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores83').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk83_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk83_op2").prop("checked", false);
          $("#chk83_op3").prop("checked", false);
          $("#chk83_op4").prop("checked", true);
          $("#chk83_op6").prop("checked", false);
    
          $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores83').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk83_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk83_op1").prop("checked", false);
          $("#chk83_op3").prop("checked", false);
          $("#chk83_op5").prop("checked", true);
          $("#chk83_op6").prop("checked", false);
    
          $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores83').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk83_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk83_op2").prop("checked", false);
          $("#chk83_op4").prop("checked", false);
          $("#chk83_op5").prop("checked", false);
          $("#chk83_op6").prop("checked", true);
    
          $("#errores83").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores83').html("");
          }, 2000);
        });
    }



    //84 grupo

    function seleccionar84(){
      $("#chk84_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk84_op1").prop("checked", true);
        $("#chk84_op2").prop("checked", false);
        $("#chk84_op3").prop("checked", false);
        $("#chk84_op5").prop("checked", false);
  
        $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores84').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk84_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk84_op1").prop("checked", false);
          $("#chk84_op2").prop("checked", true);
          $("#chk84_op4").prop("checked", false);
          $("#chk84_op6").prop("checked", false);
    
          $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores84').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk84_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk84_op1").prop("checked", false);
          $("#chk84_op3").prop("checked", true);
          $("#chk84_op4").prop("checked", false);
          $("#chk84_op5").prop("checked", false);
    
          $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores84').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk84_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk84_op2").prop("checked", false);
          $("#chk84_op3").prop("checked", false);
          $("#chk84_op4").prop("checked", true);
          $("#chk84_op6").prop("checked", false);
    
          $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores84').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk84_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk84_op1").prop("checked", false);
          $("#chk84_op3").prop("checked", false);
          $("#chk84_op5").prop("checked", true);
          $("#chk84_op6").prop("checked", false);
    
          $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores84').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk84_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk84_op2").prop("checked", false);
          $("#chk84_op4").prop("checked", false);
          $("#chk84_op5").prop("checked", false);
          $("#chk84_op6").prop("checked", true);
    
          $("#errores84").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores84').html("");
          }, 2000);
        });
    }



    //85 grupo

    function seleccionar85(){
      $("#chk85_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk85_op1").prop("checked", true);
        $("#chk85_op2").prop("checked", false);
        $("#chk85_op3").prop("checked", false);
        $("#chk85_op5").prop("checked", false);
  
        $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores85').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk85_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk85_op1").prop("checked", false);
          $("#chk85_op2").prop("checked", true);
          $("#chk85_op4").prop("checked", false);
          $("#chk85_op6").prop("checked", false);
    
          $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores85').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk85_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk85_op1").prop("checked", false);
          $("#chk85_op3").prop("checked", true);
          $("#chk85_op4").prop("checked", false);
          $("#chk85_op5").prop("checked", false);
    
          $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores85').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk85_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk85_op2").prop("checked", false);
          $("#chk85_op3").prop("checked", false);
          $("#chk85_op4").prop("checked", true);
          $("#chk85_op6").prop("checked", false);
    
          $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores85').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk85_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk85_op1").prop("checked", false);
          $("#chk85_op3").prop("checked", false);
          $("#chk85_op5").prop("checked", true);
          $("#chk85_op6").prop("checked", false);
    
          $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores85').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk85_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk85_op2").prop("checked", false);
          $("#chk85_op4").prop("checked", false);
          $("#chk85_op5").prop("checked", false);
          $("#chk85_op6").prop("checked", true);
    
          $("#errores85").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores85').html("");
          }, 2000);
        });
    }



    //86 grupo

    function seleccionar86(){
      $("#chk86_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk86_op1").prop("checked", true);
        $("#chk86_op2").prop("checked", false);
        $("#chk86_op3").prop("checked", false);
        $("#chk86_op5").prop("checked", false);
  
        $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores86').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk86_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk86_op1").prop("checked", false);
          $("#chk86_op2").prop("checked", true);
          $("#chk86_op4").prop("checked", false);
          $("#chk86_op6").prop("checked", false);
    
          $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores86').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk86_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk86_op1").prop("checked", false);
          $("#chk86_op3").prop("checked", true);
          $("#chk86_op4").prop("checked", false);
          $("#chk86_op5").prop("checked", false);
    
          $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores86').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk86_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk86_op2").prop("checked", false);
          $("#chk86_op3").prop("checked", false);
          $("#chk86_op4").prop("checked", true);
          $("#chk86_op6").prop("checked", false);
    
          $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores86').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk86_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk86_op1").prop("checked", false);
          $("#chk86_op3").prop("checked", false);
          $("#chk86_op5").prop("checked", true);
          $("#chk86_op6").prop("checked", false);
    
          $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores86').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk86_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk86_op2").prop("checked", false);
          $("#chk86_op4").prop("checked", false);
          $("#chk86_op5").prop("checked", false);
          $("#chk86_op6").prop("checked", true);
    
          $("#errores86").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores86').html("");
          }, 2000);
        });
    }



    //87 grupo

    function seleccionar87(){
      $("#chk87_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk87_op1").prop("checked", true);
        $("#chk87_op2").prop("checked", false);
        $("#chk87_op3").prop("checked", false);
        $("#chk87_op5").prop("checked", false);
  
        $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores87').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk87_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk87_op1").prop("checked", false);
          $("#chk87_op2").prop("checked", true);
          $("#chk87_op4").prop("checked", false);
          $("#chk87_op6").prop("checked", false);
    
          $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores87').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk87_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk87_op1").prop("checked", false);
          $("#chk87_op3").prop("checked", true);
          $("#chk87_op4").prop("checked", false);
          $("#chk87_op5").prop("checked", false);
    
          $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores87').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk87_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk87_op2").prop("checked", false);
          $("#chk87_op3").prop("checked", false);
          $("#chk87_op4").prop("checked", true);
          $("#chk87_op6").prop("checked", false);
    
          $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores87').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk87_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk87_op1").prop("checked", false);
          $("#chk87_op3").prop("checked", false);
          $("#chk87_op5").prop("checked", true);
          $("#chk87_op6").prop("checked", false);
    
          $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores87').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk87_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk87_op2").prop("checked", false);
          $("#chk87_op4").prop("checked", false);
          $("#chk87_op5").prop("checked", false);
          $("#chk87_op6").prop("checked", true);
    
          $("#errores87").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores87').html("");
          }, 2000);
        });
    }



    //88 grupo

    function seleccionar88(){
      $("#chk88_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk88_op1").prop("checked", true);
        $("#chk88_op2").prop("checked", false);
        $("#chk88_op3").prop("checked", false);
        $("#chk88_op5").prop("checked", false);
  
        $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores88').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk88_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk88_op1").prop("checked", false);
          $("#chk88_op2").prop("checked", true);
          $("#chk88_op4").prop("checked", false);
          $("#chk88_op6").prop("checked", false);
    
          $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores88').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk88_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk88_op1").prop("checked", false);
          $("#chk88_op3").prop("checked", true);
          $("#chk88_op4").prop("checked", false);
          $("#chk88_op5").prop("checked", false);
    
          $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores88').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk88_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk88_op2").prop("checked", false);
          $("#chk88_op3").prop("checked", false);
          $("#chk88_op4").prop("checked", true);
          $("#chk88_op6").prop("checked", false);
    
          $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores88').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk88_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk88_op1").prop("checked", false);
          $("#chk88_op3").prop("checked", false);
          $("#chk88_op5").prop("checked", true);
          $("#chk88_op6").prop("checked", false);
    
          $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores88').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk88_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk88_op2").prop("checked", false);
          $("#chk88_op4").prop("checked", false);
          $("#chk88_op5").prop("checked", false);
          $("#chk88_op6").prop("checked", true);
    
          $("#errores88").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores88').html("");
          }, 2000);
        });
    }


    //89 grupo

    function seleccionar89(){
      $("#chk89_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk89_op1").prop("checked", true);
        $("#chk89_op2").prop("checked", false);
        $("#chk89_op3").prop("checked", false);
        $("#chk89_op5").prop("checked", false);
  
        $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores89').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk89_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk89_op1").prop("checked", false);
          $("#chk89_op2").prop("checked", true);
          $("#chk89_op4").prop("checked", false);
          $("#chk89_op6").prop("checked", false);
    
          $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores89').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk89_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk89_op1").prop("checked", false);
          $("#chk89_op3").prop("checked", true);
          $("#chk89_op4").prop("checked", false);
          $("#chk89_op5").prop("checked", false);
    
          $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores89').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk89_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk89_op2").prop("checked", false);
          $("#chk89_op3").prop("checked", false);
          $("#chk89_op4").prop("checked", true);
          $("#chk89_op6").prop("checked", false);
    
          $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores89').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk89_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk89_op1").prop("checked", false);
          $("#chk89_op3").prop("checked", false);
          $("#chk89_op5").prop("checked", true);
          $("#chk89_op6").prop("checked", false);
    
          $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores89').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk89_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk89_op2").prop("checked", false);
          $("#chk89_op4").prop("checked", false);
          $("#chk89_op5").prop("checked", false);
          $("#chk89_op6").prop("checked", true);
    
          $("#errores89").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores89').html("");
          }, 2000);
        });
    }

    //90 grupo

    function seleccionar90(){
      $("#chk90_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk90_op1").prop("checked", true);
        $("#chk90_op2").prop("checked", false);
        $("#chk90_op3").prop("checked", false);
        $("#chk90_op5").prop("checked", false);
  
        $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores90').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk90_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk90_op1").prop("checked", false);
          $("#chk90_op2").prop("checked", true);
          $("#chk90_op4").prop("checked", false);
          $("#chk90_op6").prop("checked", false);
    
          $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores90').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk90_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk90_op1").prop("checked", false);
          $("#chk90_op3").prop("checked", true);
          $("#chk90_op4").prop("checked", false);
          $("#chk90_op5").prop("checked", false);
    
          $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores90').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk90_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk90_op2").prop("checked", false);
          $("#chk90_op3").prop("checked", false);
          $("#chk90_op4").prop("checked", true);
          $("#chk90_op6").prop("checked", false);
    
          $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores90').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk90_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk90_op1").prop("checked", false);
          $("#chk90_op3").prop("checked", false);
          $("#chk90_op5").prop("checked", true);
          $("#chk90_op6").prop("checked", false);
    
          $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores90').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk90_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk90_op2").prop("checked", false);
          $("#chk90_op4").prop("checked", false);
          $("#chk90_op5").prop("checked", false);
          $("#chk90_op6").prop("checked", true);
    
          $("#errores90").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores90').html("");
          }, 2000);
        });
    }

    


    //91 grupo

    function seleccionar91(){
      $("#chk91_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk91_op1").prop("checked", true);
        $("#chk91_op2").prop("checked", false);
        $("#chk91_op3").prop("checked", false);
        $("#chk91_op5").prop("checked", false);
  
        $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores91').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk91_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk91_op1").prop("checked", false);
          $("#chk91_op2").prop("checked", true);
          $("#chk91_op4").prop("checked", false);
          $("#chk91_op6").prop("checked", false);
    
          $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores91').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk91_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk91_op1").prop("checked", false);
          $("#chk91_op3").prop("checked", true);
          $("#chk91_op4").prop("checked", false);
          $("#chk91_op5").prop("checked", false);
    
          $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores91').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk91_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk91_op2").prop("checked", false);
          $("#chk91_op3").prop("checked", false);
          $("#chk91_op4").prop("checked", true);
          $("#chk91_op6").prop("checked", false);
    
          $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores91').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk91_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk91_op1").prop("checked", false);
          $("#chk91_op3").prop("checked", false);
          $("#chk91_op5").prop("checked", true);
          $("#chk91_op6").prop("checked", false);
    
          $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores91').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk91_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk91_op2").prop("checked", false);
          $("#chk91_op4").prop("checked", false);
          $("#chk91_op5").prop("checked", false);
          $("#chk91_op6").prop("checked", true);
    
          $("#errores91").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores91').html("");
          }, 2000);
        });
    }



    //92 grupo

    function seleccionar92(){
      $("#chk92_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk92_op1").prop("checked", true);
        $("#chk92_op2").prop("checked", false);
        $("#chk92_op3").prop("checked", false);
        $("#chk92_op5").prop("checked", false);
  
        $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores92').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk92_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk92_op1").prop("checked", false);
          $("#chk92_op2").prop("checked", true);
          $("#chk92_op4").prop("checked", false);
          $("#chk92_op6").prop("checked", false);
    
          $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores92').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk92_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk92_op1").prop("checked", false);
          $("#chk92_op3").prop("checked", true);
          $("#chk92_op4").prop("checked", false);
          $("#chk92_op5").prop("checked", false);
    
          $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores92').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk92_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk92_op2").prop("checked", false);
          $("#chk92_op3").prop("checked", false);
          $("#chk92_op4").prop("checked", true);
          $("#chk92_op6").prop("checked", false);
    
          $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores92').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk92_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk92_op1").prop("checked", false);
          $("#chk92_op3").prop("checked", false);
          $("#chk92_op5").prop("checked", true);
          $("#chk92_op6").prop("checked", false);
    
          $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores92').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk92_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk92_op2").prop("checked", false);
          $("#chk92_op4").prop("checked", false);
          $("#chk92_op5").prop("checked", false);
          $("#chk92_op6").prop("checked", true);
    
          $("#errores92").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores92').html("");
          }, 2000);
        });
    }


    //93 grupo

    function seleccionar93(){
      $("#chk93_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk93_op1").prop("checked", true);
        $("#chk93_op2").prop("checked", false);
        $("#chk93_op3").prop("checked", false);
        $("#chk93_op5").prop("checked", false);
  
        $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores93').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk93_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk93_op1").prop("checked", false);
          $("#chk93_op2").prop("checked", true);
          $("#chk93_op4").prop("checked", false);
          $("#chk93_op6").prop("checked", false);
    
          $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores93').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk93_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk93_op1").prop("checked", false);
          $("#chk93_op3").prop("checked", true);
          $("#chk93_op4").prop("checked", false);
          $("#chk93_op5").prop("checked", false);
    
          $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores93').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk93_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk93_op2").prop("checked", false);
          $("#chk93_op3").prop("checked", false);
          $("#chk93_op4").prop("checked", true);
          $("#chk93_op6").prop("checked", false);
    
          $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores93').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk93_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk93_op1").prop("checked", false);
          $("#chk93_op3").prop("checked", false);
          $("#chk93_op5").prop("checked", true);
          $("#chk93_op6").prop("checked", false);
    
          $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores93').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk93_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk93_op2").prop("checked", false);
          $("#chk93_op4").prop("checked", false);
          $("#chk93_op5").prop("checked", false);
          $("#chk93_op6").prop("checked", true);
    
          $("#errores93").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores93').html("");
          }, 2000);
        });
    }



    //94 grupo

    function seleccionar94(){
      $("#chk94_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk94_op1").prop("checked", true);
        $("#chk94_op2").prop("checked", false);
        $("#chk94_op3").prop("checked", false);
        $("#chk94_op5").prop("checked", false);
  
        $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores94').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk94_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk94_op1").prop("checked", false);
          $("#chk94_op2").prop("checked", true);
          $("#chk94_op4").prop("checked", false);
          $("#chk94_op6").prop("checked", false);
    
          $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores94').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk94_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk94_op1").prop("checked", false);
          $("#chk94_op3").prop("checked", true);
          $("#chk94_op4").prop("checked", false);
          $("#chk94_op5").prop("checked", false);
    
          $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores94').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk94_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk94_op2").prop("checked", false);
          $("#chk94_op3").prop("checked", false);
          $("#chk94_op4").prop("checked", true);
          $("#chk94_op6").prop("checked", false);
    
          $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores94').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk94_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk94_op1").prop("checked", false);
          $("#chk94_op3").prop("checked", false);
          $("#chk94_op5").prop("checked", true);
          $("#chk94_op6").prop("checked", false);
    
          $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores94').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk94_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk94_op2").prop("checked", false);
          $("#chk94_op4").prop("checked", false);
          $("#chk94_op5").prop("checked", false);
          $("#chk94_op6").prop("checked", true);
    
          $("#errores94").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores94').html("");
          }, 2000);
        });
    }


    //95 grupo

    function seleccionar95(){
      $("#chk95_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk95_op1").prop("checked", true);
        $("#chk95_op2").prop("checked", false);
        $("#chk95_op3").prop("checked", false);
        $("#chk95_op5").prop("checked", false);
  
        $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores95').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk95_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk95_op1").prop("checked", false);
          $("#chk95_op2").prop("checked", true);
          $("#chk95_op4").prop("checked", false);
          $("#chk95_op6").prop("checked", false);
    
          $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores95').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk95_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk95_op1").prop("checked", false);
          $("#chk95_op3").prop("checked", true);
          $("#chk95_op4").prop("checked", false);
          $("#chk95_op5").prop("checked", false);
    
          $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores95').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk95_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk95_op2").prop("checked", false);
          $("#chk95_op3").prop("checked", false);
          $("#chk95_op4").prop("checked", true);
          $("#chk95_op6").prop("checked", false);
    
          $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores95').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk95_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk95_op1").prop("checked", false);
          $("#chk95_op3").prop("checked", false);
          $("#chk95_op5").prop("checked", true);
          $("#chk95_op6").prop("checked", false);
    
          $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores95').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk95_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk95_op2").prop("checked", false);
          $("#chk95_op4").prop("checked", false);
          $("#chk95_op5").prop("checked", false);
          $("#chk95_op6").prop("checked", true);
    
          $("#errores95").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores95').html("");
          }, 2000);
        });
    }



    //96 grupo

    function seleccionar96(){
      $("#chk96_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk96_op1").prop("checked", true);
        $("#chk96_op2").prop("checked", false);
        $("#chk96_op3").prop("checked", false);
        $("#chk96_op5").prop("checked", false);
  
        $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores96').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk96_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk96_op1").prop("checked", false);
          $("#chk96_op2").prop("checked", true);
          $("#chk96_op4").prop("checked", false);
          $("#chk96_op6").prop("checked", false);
    
          $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores96').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk96_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk96_op1").prop("checked", false);
          $("#chk96_op3").prop("checked", true);
          $("#chk96_op4").prop("checked", false);
          $("#chk96_op5").prop("checked", false);
    
          $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores96').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk96_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk96_op2").prop("checked", false);
          $("#chk96_op3").prop("checked", false);
          $("#chk96_op4").prop("checked", true);
          $("#chk96_op6").prop("checked", false);
    
          $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores96').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk96_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk96_op1").prop("checked", false);
          $("#chk96_op3").prop("checked", false);
          $("#chk96_op5").prop("checked", true);
          $("#chk96_op6").prop("checked", false);
    
          $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores96').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk96_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk96_op2").prop("checked", false);
          $("#chk96_op4").prop("checked", false);
          $("#chk96_op5").prop("checked", false);
          $("#chk96_op6").prop("checked", true);
    
          $("#errores96").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores96').html("");
          }, 2000);
        });
    }




    //97 grupo

    function seleccionar97(){
      $("#chk97_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk97_op1").prop("checked", true);
        $("#chk97_op2").prop("checked", false);
        $("#chk97_op3").prop("checked", false);
        $("#chk97_op5").prop("checked", false);
  
        $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores97').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk97_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk97_op1").prop("checked", false);
          $("#chk97_op2").prop("checked", true);
          $("#chk97_op4").prop("checked", false);
          $("#chk97_op6").prop("checked", false);
    
          $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores97').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk97_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk97_op1").prop("checked", false);
          $("#chk97_op3").prop("checked", true);
          $("#chk97_op4").prop("checked", false);
          $("#chk97_op5").prop("checked", false);
    
          $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores97').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk97_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk97_op2").prop("checked", false);
          $("#chk97_op3").prop("checked", false);
          $("#chk97_op4").prop("checked", true);
          $("#chk97_op6").prop("checked", false);
    
          $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores97').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk97_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk97_op1").prop("checked", false);
          $("#chk97_op3").prop("checked", false);
          $("#chk97_op5").prop("checked", true);
          $("#chk97_op6").prop("checked", false);
    
          $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores97').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk97_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk97_op2").prop("checked", false);
          $("#chk97_op4").prop("checked", false);
          $("#chk97_op5").prop("checked", false);
          $("#chk97_op6").prop("checked", true);
    
          $("#errores97").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores97').html("");
          }, 2000);
        });
    }



    //98 grupo

    function seleccionar98(){
      $("#chk98_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk98_op1").prop("checked", true);
        $("#chk98_op2").prop("checked", false);
        $("#chk98_op3").prop("checked", false);
        $("#chk98_op5").prop("checked", false);
  
        $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores98').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk98_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk98_op1").prop("checked", false);
          $("#chk98_op2").prop("checked", true);
          $("#chk98_op4").prop("checked", false);
          $("#chk98_op6").prop("checked", false);
    
          $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores98').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk98_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk98_op1").prop("checked", false);
          $("#chk98_op3").prop("checked", true);
          $("#chk98_op4").prop("checked", false);
          $("#chk98_op5").prop("checked", false);
    
          $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores98').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk98_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk98_op2").prop("checked", false);
          $("#chk98_op3").prop("checked", false);
          $("#chk98_op4").prop("checked", true);
          $("#chk98_op6").prop("checked", false);
    
          $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores98').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk98_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk98_op1").prop("checked", false);
          $("#chk98_op3").prop("checked", false);
          $("#chk98_op5").prop("checked", true);
          $("#chk98_op6").prop("checked", false);
    
          $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores98').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk98_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk98_op2").prop("checked", false);
          $("#chk98_op4").prop("checked", false);
          $("#chk98_op5").prop("checked", false);
          $("#chk98_op6").prop("checked", true);
    
          $("#errores98").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores98').html("");
          }, 2000);
        });
    }


    //99 grupo

    function seleccionar99(){
      $("#chk99_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk99_op1").prop("checked", true);
        $("#chk99_op2").prop("checked", false);
        $("#chk99_op3").prop("checked", false);
        $("#chk99_op5").prop("checked", false);
  
        $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores99').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk99_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk99_op1").prop("checked", false);
          $("#chk99_op2").prop("checked", true);
          $("#chk99_op4").prop("checked", false);
          $("#chk99_op6").prop("checked", false);
    
          $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores99').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk99_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk99_op1").prop("checked", false);
          $("#chk99_op3").prop("checked", true);
          $("#chk99_op4").prop("checked", false);
          $("#chk99_op5").prop("checked", false);
    
          $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores99').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk99_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk99_op2").prop("checked", false);
          $("#chk99_op3").prop("checked", false);
          $("#chk99_op4").prop("checked", true);
          $("#chk99_op6").prop("checked", false);
    
          $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores99').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk99_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk99_op1").prop("checked", false);
          $("#chk99_op3").prop("checked", false);
          $("#chk99_op5").prop("checked", true);
          $("#chk99_op6").prop("checked", false);
    
          $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores99').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk99_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk99_op2").prop("checked", false);
          $("#chk99_op4").prop("checked", false);
          $("#chk99_op5").prop("checked", false);
          $("#chk99_op6").prop("checked", true);
    
          $("#errores99").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores99').html("");
          }, 2000);
        });
    }




    //100 grupo

    function seleccionar100(){
      $("#chk100_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk100_op1").prop("checked", true);
        $("#chk100_op2").prop("checked", false);
        $("#chk100_op3").prop("checked", false);
        $("#chk100_op5").prop("checked", false);
  
        $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores100').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk100_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk100_op1").prop("checked", false);
          $("#chk100_op2").prop("checked", true);
          $("#chk100_op4").prop("checked", false);
          $("#chk100_op6").prop("checked", false);
    
          $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores100').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk100_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk100_op1").prop("checked", false);
          $("#chk100_op3").prop("checked", true);
          $("#chk100_op4").prop("checked", false);
          $("#chk100_op5").prop("checked", false);
    
          $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores100').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk100_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk100_op2").prop("checked", false);
          $("#chk100_op3").prop("checked", false);
          $("#chk100_op4").prop("checked", true);
          $("#chk100_op6").prop("checked", false);
    
          $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores100').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk100_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk100_op1").prop("checked", false);
          $("#chk100_op3").prop("checked", false);
          $("#chk100_op5").prop("checked", true);
          $("#chk100_op6").prop("checked", false);
    
          $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores100').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk100_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk100_op2").prop("checked", false);
          $("#chk100_op4").prop("checked", false);
          $("#chk100_op5").prop("checked", false);
          $("#chk100_op6").prop("checked", true);
    
          $("#errores100").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores100').html("");
          }, 2000);
        });
    }



        //101 grupo

        function seleccionar101(){
          $("#chk101_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk101_op1").prop("checked", true);
            $("#chk101_op2").prop("checked", false);
            $("#chk101_op3").prop("checked", false);
            $("#chk101_op5").prop("checked", false);
      
            $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores101').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk101_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk101_op1").prop("checked", false);
              $("#chk101_op2").prop("checked", true);
              $("#chk101_op4").prop("checked", false);
              $("#chk101_op6").prop("checked", false);
        
              $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores101').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk101_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk101_op1").prop("checked", false);
              $("#chk101_op3").prop("checked", true);
              $("#chk101_op4").prop("checked", false);
              $("#chk101_op5").prop("checked", false);
        
              $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores101').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk101_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk101_op2").prop("checked", false);
              $("#chk101_op3").prop("checked", false);
              $("#chk101_op4").prop("checked", true);
              $("#chk101_op6").prop("checked", false);
        
              $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores101').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk101_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk101_op1").prop("checked", false);
              $("#chk101_op3").prop("checked", false);
              $("#chk101_op5").prop("checked", true);
              $("#chk101_op6").prop("checked", false);
        
              $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores101').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk101_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk101_op2").prop("checked", false);
              $("#chk101_op4").prop("checked", false);
              $("#chk101_op5").prop("checked", false);
              $("#chk101_op6").prop("checked", true);
        
              $("#errores101").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores101').html("");
              }, 2000);
            });
        }

        

    //100 grupo

    function seleccionar102(){
      $("#chk102_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk102_op1").prop("checked", true);
        $("#chk102_op2").prop("checked", false);
        $("#chk102_op3").prop("checked", false);
        $("#chk102_op5").prop("checked", false);
  
        $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores102').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk102_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk102_op1").prop("checked", false);
          $("#chk102_op2").prop("checked", true);
          $("#chk102_op4").prop("checked", false);
          $("#chk102_op6").prop("checked", false);
    
          $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores102').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk102_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk102_op1").prop("checked", false);
          $("#chk102_op3").prop("checked", true);
          $("#chk102_op4").prop("checked", false);
          $("#chk102_op5").prop("checked", false);
    
          $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores102').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk102_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk102_op2").prop("checked", false);
          $("#chk102_op3").prop("checked", false);
          $("#chk102_op4").prop("checked", true);
          $("#chk102_op6").prop("checked", false);
    
          $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores102').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk102_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk102_op1").prop("checked", false);
          $("#chk102_op3").prop("checked", false);
          $("#chk102_op5").prop("checked", true);
          $("#chk102_op6").prop("checked", false);
    
          $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores102').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk102_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk102_op2").prop("checked", false);
          $("#chk102_op4").prop("checked", false);
          $("#chk102_op5").prop("checked", false);
          $("#chk102_op6").prop("checked", true);
    
          $("#errores102").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores102').html("");
          }, 2000);
        });
    }



        //103 grupo

        function seleccionar103(){
          $("#chk103_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk103_op1").prop("checked", true);
            $("#chk103_op2").prop("checked", false);
            $("#chk103_op3").prop("checked", false);
            $("#chk103_op5").prop("checked", false);
      
            $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores103').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk103_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk103_op1").prop("checked", false);
              $("#chk103_op2").prop("checked", true);
              $("#chk103_op4").prop("checked", false);
              $("#chk103_op6").prop("checked", false);
        
              $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores103').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk103_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk103_op1").prop("checked", false);
              $("#chk103_op3").prop("checked", true);
              $("#chk103_op4").prop("checked", false);
              $("#chk103_op5").prop("checked", false);
        
              $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores103').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk103_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk103_op2").prop("checked", false);
              $("#chk103_op3").prop("checked", false);
              $("#chk103_op4").prop("checked", true);
              $("#chk103_op6").prop("checked", false);
        
              $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores103').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk103_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk103_op1").prop("checked", false);
              $("#chk103_op3").prop("checked", false);
              $("#chk103_op5").prop("checked", true);
              $("#chk103_op6").prop("checked", false);
        
              $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores103').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk103_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk103_op2").prop("checked", false);
              $("#chk103_op4").prop("checked", false);
              $("#chk103_op5").prop("checked", false);
              $("#chk103_op6").prop("checked", true);
        
              $("#errores103").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores103').html("");
              }, 2000);
            });
        }


    //104 grupo

    function seleccionar104(){
      $("#chk104_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk104_op1").prop("checked", true);
        $("#chk104_op2").prop("checked", false);
        $("#chk104_op3").prop("checked", false);
        $("#chk104_op5").prop("checked", false);
  
        $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores104').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk104_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk104_op1").prop("checked", false);
          $("#chk104_op2").prop("checked", true);
          $("#chk104_op4").prop("checked", false);
          $("#chk104_op6").prop("checked", false);
    
          $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores104').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk104_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk104_op1").prop("checked", false);
          $("#chk104_op3").prop("checked", true);
          $("#chk104_op4").prop("checked", false);
          $("#chk104_op5").prop("checked", false);
    
          $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores104').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk104_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk104_op2").prop("checked", false);
          $("#chk104_op3").prop("checked", false);
          $("#chk104_op4").prop("checked", true);
          $("#chk104_op6").prop("checked", false);
    
          $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores104').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk104_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk104_op1").prop("checked", false);
          $("#chk104_op3").prop("checked", false);
          $("#chk104_op5").prop("checked", true);
          $("#chk104_op6").prop("checked", false);
    
          $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores104').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk104_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk104_op2").prop("checked", false);
          $("#chk104_op4").prop("checked", false);
          $("#chk104_op5").prop("checked", false);
          $("#chk104_op6").prop("checked", true);
    
          $("#errores104").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores104').html("");
          }, 2000);
        });
    }




        //105 grupo

        function seleccionar105(){
          $("#chk105_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk105_op1").prop("checked", true);
            $("#chk105_op2").prop("checked", false);
            $("#chk105_op3").prop("checked", false);
            $("#chk105_op5").prop("checked", false);
      
            $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores105').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk105_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk105_op1").prop("checked", false);
              $("#chk105_op2").prop("checked", true);
              $("#chk105_op4").prop("checked", false);
              $("#chk105_op6").prop("checked", false);
        
              $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores105').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk105_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk105_op1").prop("checked", false);
              $("#chk105_op3").prop("checked", true);
              $("#chk105_op4").prop("checked", false);
              $("#chk105_op5").prop("checked", false);
        
              $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores105').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk105_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk105_op2").prop("checked", false);
              $("#chk105_op3").prop("checked", false);
              $("#chk105_op4").prop("checked", true);
              $("#chk105_op6").prop("checked", false);
        
              $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores105').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk105_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk105_op1").prop("checked", false);
              $("#chk105_op3").prop("checked", false);
              $("#chk105_op5").prop("checked", true);
              $("#chk105_op6").prop("checked", false);
        
              $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores105').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk105_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk105_op2").prop("checked", false);
              $("#chk105_op4").prop("checked", false);
              $("#chk105_op5").prop("checked", false);
              $("#chk105_op6").prop("checked", true);
        
              $("#errores105").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores105').html("");
              }, 2000);
            });
        }


    //106 grupo

    function seleccionar106(){
      $("#chk106_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk106_op1").prop("checked", true);
        $("#chk106_op2").prop("checked", false);
        $("#chk106_op3").prop("checked", false);
        $("#chk106_op5").prop("checked", false);
  
        $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores106').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk106_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk106_op1").prop("checked", false);
          $("#chk106_op2").prop("checked", true);
          $("#chk106_op4").prop("checked", false);
          $("#chk106_op6").prop("checked", false);
    
          $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores106').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk106_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk106_op1").prop("checked", false);
          $("#chk106_op3").prop("checked", true);
          $("#chk106_op4").prop("checked", false);
          $("#chk106_op5").prop("checked", false);
    
          $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores106').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk106_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk106_op2").prop("checked", false);
          $("#chk106_op3").prop("checked", false);
          $("#chk106_op4").prop("checked", true);
          $("#chk106_op6").prop("checked", false);
    
          $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores106').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk106_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk106_op1").prop("checked", false);
          $("#chk106_op3").prop("checked", false);
          $("#chk106_op5").prop("checked", true);
          $("#chk106_op6").prop("checked", false);
    
          $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores106').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk106_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk106_op2").prop("checked", false);
          $("#chk106_op4").prop("checked", false);
          $("#chk106_op5").prop("checked", false);
          $("#chk106_op6").prop("checked", true);
    
          $("#errores106").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores106').html("");
          }, 2000);
        });
    }


    //107 grupo

    function seleccionar107(){
      $("#chk107_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk107_op1").prop("checked", true);
        $("#chk107_op2").prop("checked", false);
        $("#chk107_op3").prop("checked", false);
        $("#chk107_op5").prop("checked", false);
  
        $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores107').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk107_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk107_op1").prop("checked", false);
          $("#chk107_op2").prop("checked", true);
          $("#chk107_op4").prop("checked", false);
          $("#chk107_op6").prop("checked", false);
    
          $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores107').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk107_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk107_op1").prop("checked", false);
          $("#chk107_op3").prop("checked", true);
          $("#chk107_op4").prop("checked", false);
          $("#chk107_op5").prop("checked", false);
    
          $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores107').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk107_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk107_op2").prop("checked", false);
          $("#chk107_op3").prop("checked", false);
          $("#chk107_op4").prop("checked", true);
          $("#chk107_op6").prop("checked", false);
    
          $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores107').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk107_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk107_op1").prop("checked", false);
          $("#chk107_op3").prop("checked", false);
          $("#chk107_op5").prop("checked", true);
          $("#chk107_op6").prop("checked", false);
    
          $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores107').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk107_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk107_op2").prop("checked", false);
          $("#chk107_op4").prop("checked", false);
          $("#chk107_op5").prop("checked", false);
          $("#chk107_op6").prop("checked", true);
    
          $("#errores107").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores107').html("");
          }, 2000);
        });
    }



    //108 grupo

    function seleccionar108(){
      $("#chk108_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk108_op1").prop("checked", true);
        $("#chk108_op2").prop("checked", false);
        $("#chk108_op3").prop("checked", false);
        $("#chk108_op5").prop("checked", false);
  
        $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores108').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk108_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk108_op1").prop("checked", false);
          $("#chk108_op2").prop("checked", true);
          $("#chk108_op4").prop("checked", false);
          $("#chk108_op6").prop("checked", false);
    
          $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores108').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk108_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk108_op1").prop("checked", false);
          $("#chk108_op3").prop("checked", true);
          $("#chk108_op4").prop("checked", false);
          $("#chk108_op5").prop("checked", false);
    
          $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores108').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk108_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk108_op2").prop("checked", false);
          $("#chk108_op3").prop("checked", false);
          $("#chk108_op4").prop("checked", true);
          $("#chk108_op6").prop("checked", false);
    
          $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores108').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk108_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk108_op1").prop("checked", false);
          $("#chk108_op3").prop("checked", false);
          $("#chk108_op5").prop("checked", true);
          $("#chk108_op6").prop("checked", false);
    
          $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores108').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk108_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk108_op2").prop("checked", false);
          $("#chk108_op4").prop("checked", false);
          $("#chk108_op5").prop("checked", false);
          $("#chk108_op6").prop("checked", true);
    
          $("#errores108").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores108').html("");
          }, 2000);
        });
    }





        //109 grupo

        function seleccionar109(){
          $("#chk10_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk109_op1").prop("checked", true);
            $("#chk109_op2").prop("checked", false);
            $("#chk109_op3").prop("checked", false);
            $("#chk109_op5").prop("checked", false);
      
            $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores109').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk109_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk109_op1").prop("checked", false);
              $("#chk109_op2").prop("checked", true);
              $("#chk109_op4").prop("checked", false);
              $("#chk109_op6").prop("checked", false);
        
              $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores109').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk109_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk109_op1").prop("checked", false);
              $("#chk109_op3").prop("checked", true);
              $("#chk109_op4").prop("checked", false);
              $("#chk109_op5").prop("checked", false);
        
              $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores109').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk109_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk109_op2").prop("checked", false);
              $("#chk109_op3").prop("checked", false);
              $("#chk109_op4").prop("checked", true);
              $("#chk109_op6").prop("checked", false);
        
              $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores109').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk109_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk109_op1").prop("checked", false);
              $("#chk109_op3").prop("checked", false);
              $("#chk109_op5").prop("checked", true);
              $("#chk109_op6").prop("checked", false);
        
              $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores109').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk109_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk109_op2").prop("checked", false);
              $("#chk109_op4").prop("checked", false);
              $("#chk109_op5").prop("checked", false);
              $("#chk109_op6").prop("checked", true);
        
              $("#errores109").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores109').html("");
              }, 2000);
            });
        }




    //110 grupo

    function seleccionar110(){
      $("#chk110_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk110_op1").prop("checked", true);
        $("#chk110_op2").prop("checked", false);
        $("#chk110_op3").prop("checked", false);
        $("#chk110_op5").prop("checked", false);
  
        $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores110').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk110_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk110_op1").prop("checked", false);
          $("#chk110_op2").prop("checked", true);
          $("#chk110_op4").prop("checked", false);
          $("#chk110_op6").prop("checked", false);
    
          $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores110').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk110_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk110_op1").prop("checked", false);
          $("#chk110_op3").prop("checked", true);
          $("#chk110_op4").prop("checked", false);
          $("#chk110_op5").prop("checked", false);
    
          $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores110').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk110_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk110_op2").prop("checked", false);
          $("#chk110_op3").prop("checked", false);
          $("#chk110_op4").prop("checked", true);
          $("#chk110_op6").prop("checked", false);
    
          $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores110').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk110_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk110_op1").prop("checked", false);
          $("#chk110_op3").prop("checked", false);
          $("#chk110_op5").prop("checked", true);
          $("#chk110_op6").prop("checked", false);
    
          $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores110').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk110_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk110_op2").prop("checked", false);
          $("#chk110_op4").prop("checked", false);
          $("#chk110_op5").prop("checked", false);
          $("#chk110_op6").prop("checked", true);
    
          $("#errores110").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores110').html("");
          }, 2000);
        });
    }


        //111 grupo

        function seleccionar111(){
          $("#chk111_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk111_op1").prop("checked", true);
            $("#chk111_op2").prop("checked", false);
            $("#chk111_op3").prop("checked", false);
            $("#chk111_op5").prop("checked", false);
      
            $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores111').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk111_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk111_op1").prop("checked", false);
              $("#chk111_op2").prop("checked", true);
              $("#chk111_op4").prop("checked", false);
              $("#chk111_op6").prop("checked", false);
        
              $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores111').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk111_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk111_op1").prop("checked", false);
              $("#chk111_op3").prop("checked", true);
              $("#chk111_op4").prop("checked", false);
              $("#chk111_op5").prop("checked", false);
        
              $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores111').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk111_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk111_op2").prop("checked", false);
              $("#chk111_op3").prop("checked", false);
              $("#chk111_op4").prop("checked", true);
              $("#chk111_op6").prop("checked", false);
        
              $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores111').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk111_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk111_op1").prop("checked", false);
              $("#chk111_op3").prop("checked", false);
              $("#chk111_op5").prop("checked", true);
              $("#chk111_op6").prop("checked", false);
        
              $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores111').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk111_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk111_op2").prop("checked", false);
              $("#chk111_op4").prop("checked", false);
              $("#chk111_op5").prop("checked", false);
              $("#chk111_op6").prop("checked", true);
        
              $("#errores111").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores111').html("");
              }, 2000);
            });
        }





        //112 grupo

        function seleccionar112(){
          $("#chk112_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk112_op1").prop("checked", true);
            $("#chk112_op2").prop("checked", false);
            $("#chk112_op3").prop("checked", false);
            $("#chk112_op5").prop("checked", false);
      
            $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores112').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk112_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk112_op1").prop("checked", false);
              $("#chk112_op2").prop("checked", true);
              $("#chk112_op4").prop("checked", false);
              $("#chk112_op6").prop("checked", false);
        
              $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores112').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk112_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk112_op1").prop("checked", false);
              $("#chk112_op3").prop("checked", true);
              $("#chk112_op4").prop("checked", false);
              $("#chk112_op5").prop("checked", false);
        
              $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores112').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk112_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk112_op2").prop("checked", false);
              $("#chk112_op3").prop("checked", false);
              $("#chk112_op4").prop("checked", true);
              $("#chk112_op6").prop("checked", false);
        
              $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores112').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk112_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk112_op1").prop("checked", false);
              $("#chk112_op3").prop("checked", false);
              $("#chk112_op5").prop("checked", true);
              $("#chk112_op6").prop("checked", false);
        
              $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores112').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk112_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk112_op2").prop("checked", false);
              $("#chk112_op4").prop("checked", false);
              $("#chk112_op5").prop("checked", false);
              $("#chk112_op6").prop("checked", true);
        
              $("#errores112").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores112').html("");
              }, 2000);
            });
        }






    //113 grupo

    function seleccionar113(){
      $("#chk113_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk113_op1").prop("checked", true);
        $("#chk113_op2").prop("checked", false);
        $("#chk113_op3").prop("checked", false);
        $("#chk113_op5").prop("checked", false);
  
        $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores113').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk113_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk113_op1").prop("checked", false);
          $("#chk113_op2").prop("checked", true);
          $("#chk113_op4").prop("checked", false);
          $("#chk113_op6").prop("checked", false);
    
          $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores113').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk113_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk113_op1").prop("checked", false);
          $("#chk113_op3").prop("checked", true);
          $("#chk113_op4").prop("checked", false);
          $("#chk113_op5").prop("checked", false);
    
          $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores113').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk113_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk113_op2").prop("checked", false);
          $("#chk113_op3").prop("checked", false);
          $("#chk113_op4").prop("checked", true);
          $("#chk113_op6").prop("checked", false);
    
          $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores113').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk113_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk113_op1").prop("checked", false);
          $("#chk113_op3").prop("checked", false);
          $("#chk113_op5").prop("checked", true);
          $("#chk113_op6").prop("checked", false);
    
          $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores113').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk113_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk113_op2").prop("checked", false);
          $("#chk113_op4").prop("checked", false);
          $("#chk113_op5").prop("checked", false);
          $("#chk113_op6").prop("checked", true);
    
          $("#errores113").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores113').html("");
          }, 2000);
        });
    }




    //114 grupo

    function seleccionar114(){
      $("#chk114_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk114_op1").prop("checked", true);
        $("#chk114_op2").prop("checked", false);
        $("#chk114_op3").prop("checked", false);
        $("#chk114_op5").prop("checked", false);
  
        $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores114').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk114_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk114_op1").prop("checked", false);
          $("#chk114_op2").prop("checked", true);
          $("#chk114_op4").prop("checked", false);
          $("#chk114_op6").prop("checked", false);
    
          $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores114').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk114_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk114_op1").prop("checked", false);
          $("#chk114_op3").prop("checked", true);
          $("#chk114_op4").prop("checked", false);
          $("#chk114_op5").prop("checked", false);
    
          $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores114').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk114_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk114_op2").prop("checked", false);
          $("#chk114_op3").prop("checked", false);
          $("#chk114_op4").prop("checked", true);
          $("#chk114_op6").prop("checked", false);
    
          $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores114').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk114_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk114_op1").prop("checked", false);
          $("#chk114_op3").prop("checked", false);
          $("#chk114_op5").prop("checked", true);
          $("#chk114_op6").prop("checked", false);
    
          $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores114').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk114_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk114_op2").prop("checked", false);
          $("#chk114_op4").prop("checked", false);
          $("#chk114_op5").prop("checked", false);
          $("#chk114_op6").prop("checked", true);
    
          $("#errores114").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores114').html("");
          }, 2000);
        });
    }





    //115 grupo

    function seleccionar115(){
      $("#chk115_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk115_op1").prop("checked", true);
        $("#chk115_op2").prop("checked", false);
        $("#chk115_op3").prop("checked", false);
        $("#chk115_op5").prop("checked", false);
  
        $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores115').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk115_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk115_op1").prop("checked", false);
          $("#chk115_op2").prop("checked", true);
          $("#chk115_op4").prop("checked", false);
          $("#chk115_op6").prop("checked", false);
    
          $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores115').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk115_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk115_op1").prop("checked", false);
          $("#chk115_op3").prop("checked", true);
          $("#chk115_op4").prop("checked", false);
          $("#chk115_op5").prop("checked", false);
    
          $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores115').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk115_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk115_op2").prop("checked", false);
          $("#chk115_op3").prop("checked", false);
          $("#chk115_op4").prop("checked", true);
          $("#chk115_op6").prop("checked", false);
    
          $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores115').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk115_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk115_op1").prop("checked", false);
          $("#chk115_op3").prop("checked", false);
          $("#chk115_op5").prop("checked", true);
          $("#chk115_op6").prop("checked", false);
    
          $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores115').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk115_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk115_op2").prop("checked", false);
          $("#chk115_op4").prop("checked", false);
          $("#chk115_op5").prop("checked", false);
          $("#chk115_op6").prop("checked", true);
    
          $("#errores115").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores115').html("");
          }, 2000);
        });
    }





        //116 grupo

        function seleccionar116(){
          $("#chk116_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk116_op1").prop("checked", true);
            $("#chk116_op2").prop("checked", false);
            $("#chk116_op3").prop("checked", false);
            $("#chk116_op5").prop("checked", false);
      
            $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores116').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk116_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk116_op1").prop("checked", false);
              $("#chk116_op2").prop("checked", true);
              $("#chk116_op4").prop("checked", false);
              $("#chk116_op6").prop("checked", false);
        
              $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores116').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk116_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk116_op1").prop("checked", false);
              $("#chk116_op3").prop("checked", true);
              $("#chk116_op4").prop("checked", false);
              $("#chk116_op5").prop("checked", false);
        
              $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores116').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk116_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk116_op2").prop("checked", false);
              $("#chk116_op3").prop("checked", false);
              $("#chk116_op4").prop("checked", true);
              $("#chk116_op6").prop("checked", false);
        
              $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores116').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk116_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk116_op1").prop("checked", false);
              $("#chk116_op3").prop("checked", false);
              $("#chk116_op5").prop("checked", true);
              $("#chk116_op6").prop("checked", false);
        
              $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores116').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk116_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk116_op2").prop("checked", false);
              $("#chk116_op4").prop("checked", false);
              $("#chk116_op5").prop("checked", false);
              $("#chk116_op6").prop("checked", true);
        
              $("#errores116").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores116').html("");
              }, 2000);
            });
        }






    //117 grupo

    function seleccionar117(){
      $("#chk117_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk117_op1").prop("checked", true);
        $("#chk117_op2").prop("checked", false);
        $("#chk117_op3").prop("checked", false);
        $("#chk117_op5").prop("checked", false);
  
        $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores117').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk117_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk117_op1").prop("checked", false);
          $("#chk117_op2").prop("checked", true);
          $("#chk117_op4").prop("checked", false);
          $("#chk117_op6").prop("checked", false);
    
          $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores117').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk117_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk117_op1").prop("checked", false);
          $("#chk117_op3").prop("checked", true);
          $("#chk117_op4").prop("checked", false);
          $("#chk117_op5").prop("checked", false);
    
          $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores117').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk117_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk117_op2").prop("checked", false);
          $("#chk117_op3").prop("checked", false);
          $("#chk117_op4").prop("checked", true);
          $("#chk117_op6").prop("checked", false);
    
          $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores117').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk117_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk117_op1").prop("checked", false);
          $("#chk117_op3").prop("checked", false);
          $("#chk117_op5").prop("checked", true);
          $("#chk117_op6").prop("checked", false);
    
          $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores117').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk117_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk117_op2").prop("checked", false);
          $("#chk117_op4").prop("checked", false);
          $("#chk117_op5").prop("checked", false);
          $("#chk117_op6").prop("checked", true);
    
          $("#errores117").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores117').html("");
          }, 2000);
        });
    }





    //118 grupo

    function seleccionar118(){
      $("#chk118_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk118_op1").prop("checked", true);
        $("#chk118_op2").prop("checked", false);
        $("#chk118_op3").prop("checked", false);
        $("#chk118_op5").prop("checked", false);
  
        $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores118').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk118_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk118_op1").prop("checked", false);
          $("#chk118_op2").prop("checked", true);
          $("#chk118_op4").prop("checked", false);
          $("#chk118_op6").prop("checked", false);
    
          $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores118').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk118_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk118_op1").prop("checked", false);
          $("#chk118_op3").prop("checked", true);
          $("#chk118_op4").prop("checked", false);
          $("#chk118_op5").prop("checked", false);
    
          $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores118').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk118_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk118_op2").prop("checked", false);
          $("#chk118_op3").prop("checked", false);
          $("#chk118_op4").prop("checked", true);
          $("#chk118_op6").prop("checked", false);
    
          $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores118').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk118_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk118_op1").prop("checked", false);
          $("#chk118_op3").prop("checked", false);
          $("#chk118_op5").prop("checked", true);
          $("#chk118_op6").prop("checked", false);
    
          $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores118').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk118_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk118_op2").prop("checked", false);
          $("#chk118_op4").prop("checked", false);
          $("#chk118_op5").prop("checked", false);
          $("#chk118_op6").prop("checked", true);
    
          $("#errores118").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores118').html("");
          }, 2000);
        });
    }




    //119 grupo

    function seleccionar119(){
      $("#chk119_op1").on('change', function (ev){
        ev.preventDefault();
  
        $("#chk119_op1").prop("checked", true);
        $("#chk119_op2").prop("checked", false);
        $("#chk119_op3").prop("checked", false);
        $("#chk119_op5").prop("checked", false);
  
        $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
        setTimeout(function(){
          $('#errores119').html("");
        }, 2000);
      });
  
      //segundo Check
  
      $("#chk119_op2").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk119_op1").prop("checked", false);
          $("#chk119_op2").prop("checked", true);
          $("#chk119_op4").prop("checked", false);
          $("#chk119_op6").prop("checked", false);
    
          $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores119').html("");
          }, 2000);
        });
  
      //Tercer Check
  
      $("#chk119_op3").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk119_op1").prop("checked", false);
          $("#chk119_op3").prop("checked", true);
          $("#chk119_op4").prop("checked", false);
          $("#chk119_op5").prop("checked", false);
    
          $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores119').html("");
          }, 2000);
        });
  
      //cuarto Check
  
      $("#chk119_op4").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk119_op2").prop("checked", false);
          $("#chk119_op3").prop("checked", false);
          $("#chk119_op4").prop("checked", true);
          $("#chk119_op6").prop("checked", false);
    
          $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores119').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk119_op5").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk119_op1").prop("checked", false);
          $("#chk119_op3").prop("checked", false);
          $("#chk119_op5").prop("checked", true);
          $("#chk119_op6").prop("checked", false);
    
          $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores119').html("");
          }, 2000);
        });
  
      //Quinta Check
  
      $("#chk119_op6").on('change', function (ev){
          ev.preventDefault();
    
          $("#chk119_op2").prop("checked", false);
          $("#chk119_op4").prop("checked", false);
          $("#chk119_op5").prop("checked", false);
          $("#chk119_op6").prop("checked", true);
    
          $("#errores119").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
          setTimeout(function(){
            $('#errores119').html("");
          }, 2000);
        });
    }



        //120 grupo

        function seleccionar12(){
          $("#chk12_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk12_op1").prop("checked", true);
            $("#chk12_op2").prop("checked", false);
            $("#chk12_op3").prop("checked", false);
            $("#chk12_op5").prop("checked", false);
      
            $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores12').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk12_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk12_op1").prop("checked", false);
              $("#chk12_op2").prop("checked", true);
              $("#chk12_op4").prop("checked", false);
              $("#chk12_op6").prop("checked", false);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk12_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk12_op1").prop("checked", false);
              $("#chk12_op3").prop("checked", true);
              $("#chk12_op4").prop("checked", false);
              $("#chk12_op5").prop("checked", false);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk12_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk12_op2").prop("checked", false);
              $("#chk12_op3").prop("checked", false);
              $("#chk12_op4").prop("checked", true);
              $("#chk12_op6").prop("checked", false);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk12_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk12_op1").prop("checked", false);
              $("#chk12_op3").prop("checked", false);
              $("#chk12_op5").prop("checked", true);
              $("#chk12_op6").prop("checked", false);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk12_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk12_op2").prop("checked", false);
              $("#chk12_op4").prop("checked", false);
              $("#chk12_op5").prop("checked", false);
              $("#chk12_op6").prop("checked", true);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
        }







        //120 grupo

        function seleccionar120(){
          $("#chk120_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk120_op1").prop("checked", true);
            $("#chk120_op2").prop("checked", false);
            $("#chk120_op3").prop("checked", false);
            $("#chk120_op5").prop("checked", false);
      
            $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores120').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk120_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk120_op1").prop("checked", false);
              $("#chk120_op2").prop("checked", true);
              $("#chk120_op4").prop("checked", false);
              $("#chk120_op6").prop("checked", false);
        
              $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores120').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk120_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk120_op1").prop("checked", false);
              $("#chk120_op3").prop("checked", true);
              $("#chk120_op4").prop("checked", false);
              $("#chk120_op5").prop("checked", false);
        
              $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores120').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk120_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk120_op2").prop("checked", false);
              $("#chk120_op3").prop("checked", false);
              $("#chk120_op4").prop("checked", true);
              $("#chk120_op6").prop("checked", false);
        
              $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores120').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk120_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk120_op1").prop("checked", false);
              $("#chk120_op3").prop("checked", false);
              $("#chk120_op5").prop("checked", true);
              $("#chk120_op6").prop("checked", false);
        
              $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores120').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk120_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk120_op2").prop("checked", false);
              $("#chk120_op4").prop("checked", false);
              $("#chk120_op5").prop("checked", false);
              $("#chk120_op6").prop("checked", true);
        
              $("#errores120").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores120').html("");
              }, 2000);
            });
        }






        //121 grupo

        function seleccionar121(){
          $("#chk121_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk121_op1").prop("checked", true);
            $("#chk121_op2").prop("checked", false);
            $("#chk121_op3").prop("checked", false);
            $("#chk121_op5").prop("checked", false);
      
            $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores121').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk121_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk121_op1").prop("checked", false);
              $("#chk121_op2").prop("checked", true);
              $("#chk121_op4").prop("checked", false);
              $("#chk121_op6").prop("checked", false);
        
              $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores121').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk121_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk121_op1").prop("checked", false);
              $("#chk121_op3").prop("checked", true);
              $("#chk121_op4").prop("checked", false);
              $("#chk121_op5").prop("checked", false);
        
              $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores121').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk121_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk121_op2").prop("checked", false);
              $("#chk121_op3").prop("checked", false);
              $("#chk121_op4").prop("checked", true);
              $("#chk121_op6").prop("checked", false);
        
              $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores121').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk121_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk121_op1").prop("checked", false);
              $("#chk121_op3").prop("checked", false);
              $("#chk121_op5").prop("checked", true);
              $("#chk121_op6").prop("checked", false);
        
              $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores121').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk121_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk121_op2").prop("checked", false);
              $("#chk121_op4").prop("checked", false);
              $("#chk121_op5").prop("checked", false);
              $("#chk121_op6").prop("checked", true);
        
              $("#errores121").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores121').html("");
              }, 2000);
            });
        }



        //122 grupo

        function seleccionar122(){
          $("#chk122_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk122_op1").prop("checked", true);
            $("#chk122_op2").prop("checked", false);
            $("#chk122_op3").prop("checked", false);
            $("#chk122_op5").prop("checked", false);
      
            $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores122').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk122_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk122_op1").prop("checked", false);
              $("#chk122_op2").prop("checked", true);
              $("#chk122_op4").prop("checked", false);
              $("#chk122_op6").prop("checked", false);
        
              $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores122').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk122_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk122_op1").prop("checked", false);
              $("#chk122_op3").prop("checked", true);
              $("#chk122_op4").prop("checked", false);
              $("#chk122_op5").prop("checked", false);
        
              $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores122').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk122_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk122_op2").prop("checked", false);
              $("#chk122_op3").prop("checked", false);
              $("#chk122_op4").prop("checked", true);
              $("#chk122_op6").prop("checked", false);
        
              $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores122').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk122_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk122_op1").prop("checked", false);
              $("#chk122_op3").prop("checked", false);
              $("#chk122_op5").prop("checked", true);
              $("#chk122_op6").prop("checked", false);
        
              $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores122').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk122_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk122_op2").prop("checked", false);
              $("#chk122_op4").prop("checked", false);
              $("#chk122_op5").prop("checked", false);
              $("#chk122_op6").prop("checked", true);
        
              $("#errores122").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores122').html("");
              }, 2000);
            });
        }





        //123 grupo

        function seleccionar123(){
          $("#chk123_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk123_op1").prop("checked", true);
            $("#chk123_op2").prop("checked", false);
            $("#chk123_op3").prop("checked", false);
            $("#chk123_op5").prop("checked", false);
      
            $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores123').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk123_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk123_op1").prop("checked", false);
              $("#chk123_op2").prop("checked", true);
              $("#chk123_op4").prop("checked", false);
              $("#chk123_op6").prop("checked", false);
        
              $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores123').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk123_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk123_op1").prop("checked", false);
              $("#chk123_op3").prop("checked", true);
              $("#chk123_op4").prop("checked", false);
              $("#chk123_op5").prop("checked", false);
        
              $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores123').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk123_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk123_op2").prop("checked", false);
              $("#chk123_op3").prop("checked", false);
              $("#chk123_op4").prop("checked", true);
              $("#chk123_op6").prop("checked", false);
        
              $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores123').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk123_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk123_op1").prop("checked", false);
              $("#chk123_op3").prop("checked", false);
              $("#chk123_op5").prop("checked", true);
              $("#chk123_op6").prop("checked", false);
        
              $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores123').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk123_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk123_op2").prop("checked", false);
              $("#chk123_op4").prop("checked", false);
              $("#chk123_op5").prop("checked", false);
              $("#chk123_op6").prop("checked", true);
        
              $("#errores123").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores123').html("");
              }, 2000);
            });
        }






        //120 grupo

        function seleccionar124(){
          $("#chk124_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk124_op1").prop("checked", true);
            $("#chk124_op2").prop("checked", false);
            $("#chk124_op3").prop("checked", false);
            $("#chk124_op5").prop("checked", false);
      
            $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores124').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk124_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk124_op1").prop("checked", false);
              $("#chk124_op2").prop("checked", true);
              $("#chk124_op4").prop("checked", false);
              $("#chk124_op6").prop("checked", false);
        
              $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores124').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk124_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk124_op1").prop("checked", false);
              $("#chk124_op3").prop("checked", true);
              $("#chk124_op4").prop("checked", false);
              $("#chk124_op5").prop("checked", false);
        
              $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores124').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk124_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk124_op2").prop("checked", false);
              $("#chk124_op3").prop("checked", false);
              $("#chk124_op4").prop("checked", true);
              $("#chk124_op6").prop("checked", false);
        
              $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores124').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk124_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk124_op1").prop("checked", false);
              $("#chk124_op3").prop("checked", false);
              $("#chk124_op5").prop("checked", true);
              $("#chk124_op6").prop("checked", false);
        
              $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores124').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk124_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk124_op2").prop("checked", false);
              $("#chk124_op4").prop("checked", false);
              $("#chk124_op5").prop("checked", false);
              $("#chk124_op6").prop("checked", true);
        
              $("#errores124").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores124').html("");
              }, 2000);
            });
        }




        //125 grupo

        function seleccionar125(){
          $("#chk125_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk125_op1").prop("checked", true);
            $("#chk125_op2").prop("checked", false);
            $("#chk125_op3").prop("checked", false);
            $("#chk125_op5").prop("checked", false);
      
            $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores125').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk125_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk125_op1").prop("checked", false);
              $("#chk125_op2").prop("checked", true);
              $("#chk125_op4").prop("checked", false);
              $("#chk125_op6").prop("checked", false);
        
              $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores125').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk125_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk125_op1").prop("checked", false);
              $("#chk125_op3").prop("checked", true);
              $("#chk125_op4").prop("checked", false);
              $("#chk125_op5").prop("checked", false);
        
              $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores125').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk125_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk125_op2").prop("checked", false);
              $("#chk125_op3").prop("checked", false);
              $("#chk125_op4").prop("checked", true);
              $("#chk125_op6").prop("checked", false);
        
              $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores125').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk125_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk125_op1").prop("checked", false);
              $("#chk125_op3").prop("checked", false);
              $("#chk125_op5").prop("checked", true);
              $("#chk125_op6").prop("checked", false);
        
              $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores125').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk125_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk125_op2").prop("checked", false);
              $("#chk125_op4").prop("checked", false);
              $("#chk125_op5").prop("checked", false);
              $("#chk125_op6").prop("checked", true);
        
              $("#errores125").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores125').html("");
              }, 2000);
            });
        }






        //126 grupo

        function seleccionar126(){
          $("#chk126_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk126_op1").prop("checked", true);
            $("#chk126_op2").prop("checked", false);
            $("#chk126_op3").prop("checked", false);
            $("#chk126_op5").prop("checked", false);
      
            $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores126').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk126_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk126_op1").prop("checked", false);
              $("#chk126_op2").prop("checked", true);
              $("#chk126_op4").prop("checked", false);
              $("#chk126_op6").prop("checked", false);
        
              $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores126').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk126_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk126_op1").prop("checked", false);
              $("#chk126_op3").prop("checked", true);
              $("#chk126_op4").prop("checked", false);
              $("#chk126_op5").prop("checked", false);
        
              $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores126').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk126_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk126_op2").prop("checked", false);
              $("#chk126_op3").prop("checked", false);
              $("#chk126_op4").prop("checked", true);
              $("#chk126_op6").prop("checked", false);
        
              $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores126').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk126_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk126_op1").prop("checked", false);
              $("#chk126_op3").prop("checked", false);
              $("#chk126_op5").prop("checked", true);
              $("#chk126_op6").prop("checked", false);
        
              $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores126').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk126_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk126_op2").prop("checked", false);
              $("#chk126_op4").prop("checked", false);
              $("#chk126_op5").prop("checked", false);
              $("#chk126_op6").prop("checked", true);
        
              $("#errores126").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores126').html("");
              }, 2000);
            });
        }







        //127 grupo

        function seleccionar127(){
          $("#chk127_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk127_op1").prop("checked", true);
            $("#chk127_op2").prop("checked", false);
            $("#chk127_op3").prop("checked", false);
            $("#chk127_op5").prop("checked", false);
      
            $("#errores127").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores127').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk127_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk127_op1").prop("checked", false);
              $("#chk127_op2").prop("checked", true);
              $("#chk127_op4").prop("checked", false);
              $("#chk127_op6").prop("checked", false);
        
              $("#errores127").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores127').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk127_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk127_op1").prop("checked", false);
              $("#chk127_op3").prop("checked", true);
              $("#chk127_op4").prop("checked", false);
              $("#chk127_op5").prop("checked", false);
        
              $("#errores127").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores127').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk127_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk127_op2").prop("checked", false);
              $("#chk127_op3").prop("checked", false);
              $("#chk127_op4").prop("checked", true);
              $("#chk127_op6").prop("checked", false);
        
              $("#errores127").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores127').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk127_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk127_op1").prop("checked", false);
              $("#chk127_op3").prop("checked", false);
              $("#chk127_op5").prop("checked", true);
              $("#chk127_op6").prop("checked", false);
        
              $("#errores12").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk127_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk127_op2").prop("checked", false);
              $("#chk127_op4").prop("checked", false);
              $("#chk127_op5").prop("checked", false);
              $("#chk127_op6").prop("checked", true);
        
              $("#errores127").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores127').html("");
              }, 2000);
            });
        }






        //128 grupo

        function seleccionar128(){
          $("#chk128_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk128_op1").prop("checked", true);
            $("#chk128_op2").prop("checked", false);
            $("#chk128_op3").prop("checked", false);
            $("#chk128_op5").prop("checked", false);
      
            $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores128').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk128_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk128_op1").prop("checked", false);
              $("#chk128_op2").prop("checked", true);
              $("#chk128_op4").prop("checked", false);
              $("#chk128_op6").prop("checked", false);
        
              $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores128').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk128_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk128_op1").prop("checked", false);
              $("#chk128_op3").prop("checked", true);
              $("#chk128_op4").prop("checked", false);
              $("#chk128_op5").prop("checked", false);
        
              $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores128').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk128_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk128_op2").prop("checked", false);
              $("#chk128_op3").prop("checked", false);
              $("#chk128_op4").prop("checked", true);
              $("#chk128_op6").prop("checked", false);
        
              $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores128').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk128_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk128_op1").prop("checked", false);
              $("#chk128_op3").prop("checked", false);
              $("#chk128_op5").prop("checked", true);
              $("#chk128_op6").prop("checked", false);
        
              $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores128').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk128_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk128_op2").prop("checked", false);
              $("#chk128_op4").prop("checked", false);
              $("#chk128_op5").prop("checked", false);
              $("#chk128_op6").prop("checked", true);
        
              $("#errores128").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores12').html("");
              }, 2000);
            });
        }





        //129 grupo

        function seleccionar129(){
          $("#chk129_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk129_op1").prop("checked", true);
            $("#chk129_op2").prop("checked", false);
            $("#chk129_op3").prop("checked", false);
            $("#chk129_op5").prop("checked", false);
      
            $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores129').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk129_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk129_op1").prop("checked", false);
              $("#chk129_op2").prop("checked", true);
              $("#chk129_op4").prop("checked", false);
              $("#chk129_op6").prop("checked", false);
        
              $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores129').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk129_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk129_op1").prop("checked", false);
              $("#chk129_op3").prop("checked", true);
              $("#chk129_op4").prop("checked", false);
              $("#chk129_op5").prop("checked", false);
        
              $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores129').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk129_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk129_op2").prop("checked", false);
              $("#chk129_op3").prop("checked", false);
              $("#chk129_op4").prop("checked", true);
              $("#chk129_op6").prop("checked", false);
        
              $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores129').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk129_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk129_op1").prop("checked", false);
              $("#chk129_op3").prop("checked", false);
              $("#chk129_op5").prop("checked", true);
              $("#chk129_op6").prop("checked", false);
        
              $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores129').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk129_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk129_op2").prop("checked", false);
              $("#chk129_op4").prop("checked", false);
              $("#chk129_op5").prop("checked", false);
              $("#chk129_op6").prop("checked", true);
        
              $("#errores129").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores129').html("");
              }, 2000);
            });
        }





        //130 grupo

        function seleccionar130(){
          $("#chk130_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk130_op1").prop("checked", true);
            $("#chk130_op2").prop("checked", false);
            $("#chk130_op3").prop("checked", false);
            $("#chk130_op5").prop("checked", false);
      
            $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores130').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk130_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk130_op1").prop("checked", false);
              $("#chk130_op2").prop("checked", true);
              $("#chk130_op4").prop("checked", false);
              $("#chk130_op6").prop("checked", false);
        
              $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores130').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk130_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk130_op1").prop("checked", false);
              $("#chk130_op3").prop("checked", true);
              $("#chk130_op4").prop("checked", false);
              $("#chk130_op5").prop("checked", false);
        
              $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores130').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk130_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk130_op2").prop("checked", false);
              $("#chk130_op3").prop("checked", false);
              $("#chk130_op4").prop("checked", true);
              $("#chk130_op6").prop("checked", false);
        
              $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores130').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk130_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk130_op1").prop("checked", false);
              $("#chk130_op3").prop("checked", false);
              $("#chk130_op5").prop("checked", true);
              $("#chk130_op6").prop("checked", false);
        
              $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores130').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk130_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk130_op2").prop("checked", false);
              $("#chk130_op4").prop("checked", false);
              $("#chk130_op5").prop("checked", false);
              $("#chk130_op6").prop("checked", true);
        
              $("#errores130").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores130').html("");
              }, 2000);
            });
        }





        //131 grupo

        function seleccionar131(){
          $("#chk131_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk131_op1").prop("checked", true);
            $("#chk131_op2").prop("checked", false);
            $("#chk131_op3").prop("checked", false);
            $("#chk131_op5").prop("checked", false);
      
            $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores131').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk131_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk131_op1").prop("checked", false);
              $("#chk131_op2").prop("checked", true);
              $("#chk131_op4").prop("checked", false);
              $("#chk131_op6").prop("checked", false);
        
              $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores131').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk131_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk131_op1").prop("checked", false);
              $("#chk131_op3").prop("checked", true);
              $("#chk131_op4").prop("checked", false);
              $("#chk131_op5").prop("checked", false);
        
              $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores131').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk131_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk131_op2").prop("checked", false);
              $("#chk131_op3").prop("checked", false);
              $("#chk131_op4").prop("checked", true);
              $("#chk131_op6").prop("checked", false);
        
              $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores131').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk131_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk131_op1").prop("checked", false);
              $("#chk131_op3").prop("checked", false);
              $("#chk131_op5").prop("checked", true);
              $("#chk131_op6").prop("checked", false);
        
              $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores131').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk131_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk131_op2").prop("checked", false);
              $("#chk131_op4").prop("checked", false);
              $("#chk131_op5").prop("checked", false);
              $("#chk131_op6").prop("checked", true);
        
              $("#errores131").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores131').html("");
              }, 2000);
            });
        }






        //132 grupo

        function seleccionar132(){
          $("#chk132_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk132_op1").prop("checked", true);
            $("#chk132_op2").prop("checked", false);
            $("#chk132_op3").prop("checked", false);
            $("#chk132_op5").prop("checked", false);
      
            $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores132').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk132_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk132_op1").prop("checked", false);
              $("#chk132_op2").prop("checked", true);
              $("#chk132_op4").prop("checked", false);
              $("#chk132_op6").prop("checked", false);
        
              $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores132').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk132_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk132_op1").prop("checked", false);
              $("#chk132_op3").prop("checked", true);
              $("#chk132_op4").prop("checked", false);
              $("#chk132_op5").prop("checked", false);
        
              $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores132').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk132_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk132_op2").prop("checked", false);
              $("#chk132_op3").prop("checked", false);
              $("#chk132_op4").prop("checked", true);
              $("#chk132_op6").prop("checked", false);
        
              $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores132').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk132_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk132_op1").prop("checked", false);
              $("#chk132_op3").prop("checked", false);
              $("#chk132_op5").prop("checked", true);
              $("#chk132_op6").prop("checked", false);
        
              $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores132').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk132_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk132_op2").prop("checked", false);
              $("#chk132_op4").prop("checked", false);
              $("#chk132_op5").prop("checked", false);
              $("#chk132_op6").prop("checked", true);
        
              $("#errores132").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores132').html("");
              }, 2000);
            });
        }







        //133 grupo

        function seleccionar133(){
          $("#chk133_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk133_op1").prop("checked", true);
            $("#chk133_op2").prop("checked", false);
            $("#chk133_op3").prop("checked", false);
            $("#chk133_op5").prop("checked", false);
      
            $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores133').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk133_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk133_op1").prop("checked", false);
              $("#chk133_op2").prop("checked", true);
              $("#chk133_op4").prop("checked", false);
              $("#chk133_op6").prop("checked", false);
        
              $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores133').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk133_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk133_op1").prop("checked", false);
              $("#chk133_op3").prop("checked", true);
              $("#chk133_op4").prop("checked", false);
              $("#chk133_op5").prop("checked", false);
        
              $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores133').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk133_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk133_op2").prop("checked", false);
              $("#chk133_op3").prop("checked", false);
              $("#chk133_op4").prop("checked", true);
              $("#chk133_op6").prop("checked", false);
        
              $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores133').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk133_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk133_op1").prop("checked", false);
              $("#chk133_op3").prop("checked", false);
              $("#chk133_op5").prop("checked", true);
              $("#chk133_op6").prop("checked", false);
        
              $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores133').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk133_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk133_op2").prop("checked", false);
              $("#chk133_op4").prop("checked", false);
              $("#chk133_op5").prop("checked", false);
              $("#chk133_op6").prop("checked", true);
        
              $("#errores133").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores133').html("");
              }, 2000);
            });
        }






        //134 grupo

        function seleccionar134(){
          $("#chk134_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk134_op1").prop("checked", true);
            $("#chk134_op2").prop("checked", false);
            $("#chk134_op3").prop("checked", false);
            $("#chk134_op5").prop("checked", false);
      
            $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores134').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk134_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk134_op1").prop("checked", false);
              $("#chk134_op2").prop("checked", true);
              $("#chk134_op4").prop("checked", false);
              $("#chk134_op6").prop("checked", false);
        
              $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores134').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk134_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk134_op1").prop("checked", false);
              $("#chk134_op3").prop("checked", true);
              $("#chk134_op4").prop("checked", false);
              $("#chk134_op5").prop("checked", false);
        
              $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores134').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk134_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk134_op2").prop("checked", false);
              $("#chk134_op3").prop("checked", false);
              $("#chk134_op4").prop("checked", true);
              $("#chk134_op6").prop("checked", false);
        
              $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores134').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk134_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk134_op1").prop("checked", false);
              $("#chk134_op3").prop("checked", false);
              $("#chk134_op5").prop("checked", true);
              $("#chk134_op6").prop("checked", false);
        
              $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores134').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk134_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk134_op2").prop("checked", false);
              $("#chk134_op4").prop("checked", false);
              $("#chk134_op5").prop("checked", false);
              $("#chk134_op6").prop("checked", true);
        
              $("#errores134").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores134').html("");
              }, 2000);
            });
        }







        //135 grupo

        function seleccionar135(){
          $("#chk135_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk135_op1").prop("checked", true);
            $("#chk135_op2").prop("checked", false);
            $("#chk135_op3").prop("checked", false);
            $("#chk135_op5").prop("checked", false);
      
            $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores135').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk135_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk135_op1").prop("checked", false);
              $("#chk135_op2").prop("checked", true);
              $("#chk135_op4").prop("checked", false);
              $("#chk135_op6").prop("checked", false);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores135').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk135_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk135_op1").prop("checked", false);
              $("#chk135_op3").prop("checked", true);
              $("#chk135_op4").prop("checked", false);
              $("#chk135_op5").prop("checked", false);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores135').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk135_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk135_op2").prop("checked", false);
              $("#chk135_op3").prop("checked", false);
              $("#chk135_op4").prop("checked", true);
              $("#chk135_op6").prop("checked", false);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores135').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk135_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk135_op1").prop("checked", false);
              $("#chk135_op3").prop("checked", false);
              $("#chk135_op5").prop("checked", true);
              $("#chk135_op6").prop("checked", false);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores135').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk135_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk135_op2").prop("checked", false);
              $("#chk135_op4").prop("checked", false);
              $("#chk135_op5").prop("checked", false);
              $("#chk135_op6").prop("checked", true);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores135').html("");
              }, 2000);
            });
        }








        //136 grupo

        function seleccionar136(){
          $("#chk136_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk136_op1").prop("checked", true);
            $("#chk136_op2").prop("checked", false);
            $("#chk136_op3").prop("checked", false);
            $("#chk136_op5").prop("checked", false);
      
            $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores136').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk136_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk136_op1").prop("checked", false);
              $("#chk136_op2").prop("checked", true);
              $("#chk136_op4").prop("checked", false);
              $("#chk136_op6").prop("checked", false);
        
              $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores136').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk136_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk136_op1").prop("checked", false);
              $("#chk136_op3").prop("checked", true);
              $("#chk136_op4").prop("checked", false);
              $("#chk136_op5").prop("checked", false);
        
              $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores136').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk136_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk136_op2").prop("checked", false);
              $("#chk136_op3").prop("checked", false);
              $("#chk136_op4").prop("checked", true);
              $("#chk136_op6").prop("checked", false);
        
              $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores136').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk136_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk136_op1").prop("checked", false);
              $("#chk136_op3").prop("checked", false);
              $("#chk136_op5").prop("checked", true);
              $("#chk136_op6").prop("checked", false);
        
              $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores136').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk136_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk136_op2").prop("checked", false);
              $("#chk136_op4").prop("checked", false);
              $("#chk136_op5").prop("checked", false);
              $("#chk136_op6").prop("checked", true);
        
              $("#errores136").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores136').html("");
              }, 2000);
            });
        }






        //137 grupo

        function seleccionar137(){
          $("#chk137_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk137_op1").prop("checked", true);
            $("#chk137_op2").prop("checked", false);
            $("#chk137_op3").prop("checked", false);
            $("#chk137_op5").prop("checked", false);
      
            $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores137').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk137_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk137_op1").prop("checked", false);
              $("#chk137_op2").prop("checked", true);
              $("#chk137_op4").prop("checked", false);
              $("#chk137_op6").prop("checked", false);
        
              $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores137').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk137_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk137_op1").prop("checked", false);
              $("#chk137_op3").prop("checked", true);
              $("#chk137_op4").prop("checked", false);
              $("#chk137_op5").prop("checked", false);
        
              $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores137').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk137_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk137_op2").prop("checked", false);
              $("#chk137_op3").prop("checked", false);
              $("#chk137_op4").prop("checked", true);
              $("#chk137_op6").prop("checked", false);
        
              $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores137').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk137_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk137_op1").prop("checked", false);
              $("#chk137_op3").prop("checked", false);
              $("#chk137_op5").prop("checked", true);
              $("#chk137_op6").prop("checked", false);
        
              $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores137').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk137_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk137_op2").prop("checked", false);
              $("#chk137_op4").prop("checked", false);
              $("#chk137_op5").prop("checked", false);
              $("#chk137_op6").prop("checked", true);
        
              $("#errores137").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores137').html("");
              }, 2000);
            });
        }




        //138 grupo

        function seleccionar138(){
          $("#chk138_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk138_op1").prop("checked", true);
            $("#chk138_op2").prop("checked", false);
            $("#chk138_op3").prop("checked", false);
            $("#chk138_op5").prop("checked", false);
      
            $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores138').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk138_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk138_op1").prop("checked", false);
              $("#chk138_op2").prop("checked", true);
              $("#chk138_op4").prop("checked", false);
              $("#chk138_op6").prop("checked", false);
        
              $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores138').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk138_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk138_op1").prop("checked", false);
              $("#chk138_op3").prop("checked", true);
              $("#chk138_op4").prop("checked", false);
              $("#chk138_op5").prop("checked", false);
        
              $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores138').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk138_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk138_op2").prop("checked", false);
              $("#chk138_op3").prop("checked", false);
              $("#chk138_op4").prop("checked", true);
              $("#chk138_op6").prop("checked", false);
        
              $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores138').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk138_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk138_op1").prop("checked", false);
              $("#chk138_op3").prop("checked", false);
              $("#chk138_op5").prop("checked", true);
              $("#chk138_op6").prop("checked", false);
        
              $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores138').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk138_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk138_op2").prop("checked", false);
              $("#chk138_op4").prop("checked", false);
              $("#chk138_op5").prop("checked", false);
              $("#chk138_op6").prop("checked", true);
        
              $("#errores138").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores138').html("");
              }, 2000);
            });
        }







        //139 grupo

        function seleccionar139(){
          $("#chk139_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk139_op1").prop("checked", true);
            $("#chk139_op2").prop("checked", false);
            $("#chk139_op3").prop("checked", false);
            $("#chk139_op5").prop("checked", false);
      
            $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores139').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk139_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk139_op1").prop("checked", false);
              $("#chk139_op2").prop("checked", true);
              $("#chk139_op4").prop("checked", false);
              $("#chk139_op6").prop("checked", false);
        
              $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores139').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk139_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk139_op1").prop("checked", false);
              $("#chk139_op3").prop("checked", true);
              $("#chk139_op4").prop("checked", false);
              $("#chk139_op5").prop("checked", false);
        
              $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores139').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk139_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk139_op2").prop("checked", false);
              $("#chk139_op3").prop("checked", false);
              $("#chk139_op4").prop("checked", true);
              $("#chk139_op6").prop("checked", false);
        
              $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores139').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk139_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk139_op1").prop("checked", false);
              $("#chk139_op3").prop("checked", false);
              $("#chk139_op5").prop("checked", true);
              $("#chk139_op6").prop("checked", false);
        
              $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores139').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk139_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk139_op2").prop("checked", false);
              $("#chk139_op4").prop("checked", false);
              $("#chk139_op5").prop("checked", false);
              $("#chk139_op6").prop("checked", true);
        
              $("#errores139").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores139').html("");
              }, 2000);
            });
        }



  



        //140 grupo

        function seleccionar140(){
          $("#chk140_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk140_op1").prop("checked", true);
            $("#chk140_op2").prop("checked", false);
            $("#chk140_op3").prop("checked", false);
            $("#chk140_op5").prop("checked", false);
      
            $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores140').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk140_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk140_op1").prop("checked", false);
              $("#chk140_op2").prop("checked", true);
              $("#chk140_op4").prop("checked", false);
              $("#chk140_op6").prop("checked", false);
        
              $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores140').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk140_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk140_op1").prop("checked", false);
              $("#chk140_op3").prop("checked", true);
              $("#chk140_op4").prop("checked", false);
              $("#chk140_op5").prop("checked", false);
        
              $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores140').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk140_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk140_op2").prop("checked", false);
              $("#chk140_op3").prop("checked", false);
              $("#chk140_op4").prop("checked", true);
              $("#chk140_op6").prop("checked", false);
        
              $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores140').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk140_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk140_op1").prop("checked", false);
              $("#chk140_op3").prop("checked", false);
              $("#chk140_op5").prop("checked", true);
              $("#chk140_op6").prop("checked", false);
        
              $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores140').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk140_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk140_op2").prop("checked", false);
              $("#chk140_op4").prop("checked", false);
              $("#chk140_op5").prop("checked", false);
              $("#chk140_op6").prop("checked", true);
        
              $("#errores140").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores140').html("");
              }, 2000);
            });
        }






        //141 grupo

        function seleccionar141(){
          $("#chk141_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk141_op1").prop("checked", true);
            $("#chk141_op2").prop("checked", false);
            $("#chk141_op3").prop("checked", false);
            $("#chk141_op5").prop("checked", false);
      
            $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores141').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk141_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk141_op1").prop("checked", false);
              $("#chk141_op2").prop("checked", true);
              $("#chk141_op4").prop("checked", false);
              $("#chk141_op6").prop("checked", false);
        
              $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores141').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk141_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk141_op1").prop("checked", false);
              $("#chk141_op3").prop("checked", true);
              $("#chk141_op4").prop("checked", false);
              $("#chk141_op5").prop("checked", false);
        
              $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores141').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk141_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk141_op2").prop("checked", false);
              $("#chk141_op3").prop("checked", false);
              $("#chk141_op4").prop("checked", true);
              $("#chk141_op6").prop("checked", false);
        
              $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores141').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk141_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk141_op1").prop("checked", false);
              $("#chk141_op3").prop("checked", false);
              $("#chk141_op5").prop("checked", true);
              $("#chk141_op6").prop("checked", false);
        
              $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores141').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk141_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk141_op2").prop("checked", false);
              $("#chk141_op4").prop("checked", false);
              $("#chk141_op5").prop("checked", false);
              $("#chk141_op6").prop("checked", true);
        
              $("#errores141").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores141').html("");
              }, 2000);
            });
        }







        //142 grupo

        function seleccionar142(){
          $("#chk142_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk142_op1").prop("checked", true);
            $("#chk142_op2").prop("checked", false);
            $("#chk142_op3").prop("checked", false);
            $("#chk142_op5").prop("checked", false);
      
            $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores142').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk142_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk142_op1").prop("checked", false);
              $("#chk142_op2").prop("checked", true);
              $("#chk142_op4").prop("checked", false);
              $("#chk142_op6").prop("checked", false);
        
              $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores142').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk142_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk142_op1").prop("checked", false);
              $("#chk142_op3").prop("checked", true);
              $("#chk142_op4").prop("checked", false);
              $("#chk142_op5").prop("checked", false);
        
              $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores142').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk142_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk142_op2").prop("checked", false);
              $("#chk142_op3").prop("checked", false);
              $("#chk142_op4").prop("checked", true);
              $("#chk142_op6").prop("checked", false);
        
              $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores142').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk142_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk142_op1").prop("checked", false);
              $("#chk142_op3").prop("checked", false);
              $("#chk142_op5").prop("checked", true);
              $("#chk142_op6").prop("checked", false);
        
              $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores142').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk142_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk142_op2").prop("checked", false);
              $("#chk142_op4").prop("checked", false);
              $("#chk142_op5").prop("checked", false);
              $("#chk142_op6").prop("checked", true);
        
              $("#errores142").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores142').html("");
              }, 2000);
            });
        }





        //143 grupo

        function seleccionar143(){
          $("#chk143_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk143_op1").prop("checked", true);
            $("#chk143_op2").prop("checked", false);
            $("#chk143_op3").prop("checked", false);
            $("#chk143_op5").prop("checked", false);
      
            $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores143').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk143_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk143_op1").prop("checked", false);
              $("#chk143_op2").prop("checked", true);
              $("#chk143_op4").prop("checked", false);
              $("#chk143_op6").prop("checked", false);
        
              $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores143').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk143_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk143_op1").prop("checked", false);
              $("#chk143_op3").prop("checked", true);
              $("#chk143_op4").prop("checked", false);
              $("#chk143_op5").prop("checked", false);
        
              $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores143').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk143_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk143_op2").prop("checked", false);
              $("#chk143_op3").prop("checked", false);
              $("#chk143_op4").prop("checked", true);
              $("#chk143_op6").prop("checked", false);
        
              $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores143').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk143_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk143_op1").prop("checked", false);
              $("#chk143_op3").prop("checked", false);
              $("#chk143_op5").prop("checked", true);
              $("#chk143_op6").prop("checked", false);
        
              $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores143').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk143_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk143_op2").prop("checked", false);
              $("#chk143_op4").prop("checked", false);
              $("#chk143_op5").prop("checked", false);
              $("#chk143_op6").prop("checked", true);
        
              $("#errores143").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores143').html("");
              }, 2000);
            });
        }





        //144 grupo

        function seleccionar144(){
          $("#chk144_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk144_op1").prop("checked", true);
            $("#chk144_op2").prop("checked", false);
            $("#chk144_op3").prop("checked", false);
            $("#chk144_op5").prop("checked", false);
      
            $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores144').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk144_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk144_op1").prop("checked", false);
              $("#chk144_op2").prop("checked", true);
              $("#chk144_op4").prop("checked", false);
              $("#chk144_op6").prop("checked", false);
        
              $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores144').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk144_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk144_op1").prop("checked", false);
              $("#chk144_op3").prop("checked", true);
              $("#chk144_op4").prop("checked", false);
              $("#chk144_op5").prop("checked", false);
        
              $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores144').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk144_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk144_op2").prop("checked", false);
              $("#chk144_op3").prop("checked", false);
              $("#chk144_op4").prop("checked", true);
              $("#chk144_op6").prop("checked", false);
        
              $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores144').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk144_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk144_op1").prop("checked", false);
              $("#chk144_op3").prop("checked", false);
              $("#chk144_op5").prop("checked", true);
              $("#chk144_op6").prop("checked", false);
        
              $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores144').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk144_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk144_op2").prop("checked", false);
              $("#chk144_op4").prop("checked", false);
              $("#chk144_op5").prop("checked", false);
              $("#chk144_op6").prop("checked", true);
        
              $("#errores144").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores144').html("");
              }, 2000);
            });
        }




        //145 grupo

        function seleccionar145(){
          $("#chk145_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk145_op1").prop("checked", true);
            $("#chk145_op2").prop("checked", false);
            $("#chk145_op3").prop("checked", false);
            $("#chk145_op5").prop("checked", false);
      
            $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores145').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk145_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk145_op1").prop("checked", false);
              $("#chk145_op2").prop("checked", true);
              $("#chk145_op4").prop("checked", false);
              $("#chk145_op6").prop("checked", false);
        
              $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores145').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk145_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk145_op1").prop("checked", false);
              $("#chk145_op3").prop("checked", true);
              $("#chk145_op4").prop("checked", false);
              $("#chk145_op5").prop("checked", false);
        
              $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores145').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk145_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk145_op2").prop("checked", false);
              $("#chk145_op3").prop("checked", false);
              $("#chk145_op4").prop("checked", true);
              $("#chk145_op6").prop("checked", false);
        
              $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores145').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk145_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk145_op1").prop("checked", false);
              $("#chk145_op3").prop("checked", false);
              $("#chk145_op5").prop("checked", true);
              $("#chk145_op6").prop("checked", false);
        
              $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores145').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk145_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk145_op2").prop("checked", false);
              $("#chk145_op4").prop("checked", false);
              $("#chk145_op5").prop("checked", false);
              $("#chk145_op6").prop("checked", true);
        
              $("#errores145").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores145').html("");
              }, 2000);
            });
        }



  


        //146 grupo

        function seleccionar146(){
          $("#chk146_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk146_op1").prop("checked", true);
            $("#chk146_op2").prop("checked", false);
            $("#chk146_op3").prop("checked", false);
            $("#chk146_op5").prop("checked", false);
      
            $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores146').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk146_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk146_op1").prop("checked", false);
              $("#chk146_op2").prop("checked", true);
              $("#chk146_op4").prop("checked", false);
              $("#chk146_op6").prop("checked", false);
        
              $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores146').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk146_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk146_op1").prop("checked", false);
              $("#chk146_op3").prop("checked", true);
              $("#chk146_op4").prop("checked", false);
              $("#chk146_op5").prop("checked", false);
        
              $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores146').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk146_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk146_op2").prop("checked", false);
              $("#chk146_op3").prop("checked", false);
              $("#chk146_op4").prop("checked", true);
              $("#chk146_op6").prop("checked", false);
        
              $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores146').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk146_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk146_op1").prop("checked", false);
              $("#chk146_op3").prop("checked", false);
              $("#chk146_op5").prop("checked", true);
              $("#chk146_op6").prop("checked", false);
        
              $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores146').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk146_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk146_op2").prop("checked", false);
              $("#chk146_op4").prop("checked", false);
              $("#chk146_op5").prop("checked", false);
              $("#chk146_op6").prop("checked", true);
        
              $("#errores146").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores146').html("");
              }, 2000);
            });
        }






        //147 grupo

        function seleccionar147(){
          $("#chk147_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk147_op1").prop("checked", true);
            $("#chk147_op2").prop("checked", false);
            $("#chk147_op3").prop("checked", false);
            $("#chk147_op5").prop("checked", false);
      
            $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores147').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk147_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk147_op1").prop("checked", false);
              $("#chk147_op2").prop("checked", true);
              $("#chk147_op4").prop("checked", false);
              $("#chk147_op6").prop("checked", false);
        
              $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores147').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk147_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk147_op1").prop("checked", false);
              $("#chk147_op3").prop("checked", true);
              $("#chk147_op4").prop("checked", false);
              $("#chk147_op5").prop("checked", false);
        
              $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores147').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk147_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk147_op2").prop("checked", false);
              $("#chk147_op3").prop("checked", false);
              $("#chk147_op4").prop("checked", true);
              $("#chk147_op6").prop("checked", false);
        
              $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores147').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk147_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk147_op1").prop("checked", false);
              $("#chk147_op3").prop("checked", false);
              $("#chk147_op5").prop("checked", true);
              $("#chk147_op6").prop("checked", false);
        
              $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores147').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk147_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk147_op2").prop("checked", false);
              $("#chk147_op4").prop("checked", false);
              $("#chk147_op5").prop("checked", false);
              $("#chk147_op6").prop("checked", true);
        
              $("#errores147").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores147').html("");
              }, 2000);
            });
        }



  



        //148 grupo

        function seleccionar148(){
          $("#chk148_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk148_op1").prop("checked", true);
            $("#chk148_op2").prop("checked", false);
            $("#chk148_op3").prop("checked", false);
            $("#chk148_op5").prop("checked", false);
      
            $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores148').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk148_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk148_op1").prop("checked", false);
              $("#chk148_op2").prop("checked", true);
              $("#chk148_op4").prop("checked", false);
              $("#chk148_op6").prop("checked", false);
        
              $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores148').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk148_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk148_op1").prop("checked", false);
              $("#chk148_op3").prop("checked", true);
              $("#chk148_op4").prop("checked", false);
              $("#chk148_op5").prop("checked", false);
        
              $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores148').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk148_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk148_op2").prop("checked", false);
              $("#chk148_op3").prop("checked", false);
              $("#chk148_op4").prop("checked", true);
              $("#chk148_op6").prop("checked", false);
        
              $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores1').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk148_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk148_op1").prop("checked", false);
              $("#chk148_op3").prop("checked", false);
              $("#chk148_op5").prop("checked", true);
              $("#chk148_op6").prop("checked", false);
        
              $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores148').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk148_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk148_op2").prop("checked", false);
              $("#chk148_op4").prop("checked", false);
              $("#chk148_op5").prop("checked", false);
              $("#chk148_op6").prop("checked", true);
        
              $("#errores148").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores148').html("");
              }, 2000);
            });
        }





        //149 grupo

        function seleccionar149(){
          $("#chk149_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk149_op1").prop("checked", true);
            $("#chk149_op2").prop("checked", false);
            $("#chk149_op3").prop("checked", false);
            $("#chk149_op5").prop("checked", false);
      
            $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores149').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk149_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk149_op1").prop("checked", false);
              $("#chk149_op2").prop("checked", true);
              $("#chk149_op4").prop("checked", false);
              $("#chk149_op6").prop("checked", false);
        
              $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores149').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk149_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk149_op1").prop("checked", false);
              $("#chk149_op3").prop("checked", true);
              $("#chk149_op4").prop("checked", false);
              $("#chk149_op5").prop("checked", false);
        
              $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores149').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk149_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk149_op2").prop("checked", false);
              $("#chk149_op3").prop("checked", false);
              $("#chk149_op4").prop("checked", true);
              $("#chk149_op6").prop("checked", false);
        
              $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores149').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk149_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk149_op1").prop("checked", false);
              $("#chk149_op3").prop("checked", false);
              $("#chk149_op5").prop("checked", true);
              $("#chk149_op6").prop("checked", false);
        
              $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores149').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk149_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk149_op2").prop("checked", false);
              $("#chk149_op4").prop("checked", false);
              $("#chk149_op5").prop("checked", false);
              $("#chk149_op6").prop("checked", true);
        
              $("#errores149").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores149').html("");
              }, 2000);
            });
        }






        //150 grupo

        function seleccionar150(){
          $("#chk150_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk150_op1").prop("checked", true);
            $("#chk150_op2").prop("checked", false);
            $("#chk150_op3").prop("checked", false);
            $("#chk150_op5").prop("checked", false);
      
            $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores150').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk150_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk150_op1").prop("checked", false);
              $("#chk150_op2").prop("checked", true);
              $("#chk150_op4").prop("checked", false);
              $("#chk150_op6").prop("checked", false);
        
              $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores150').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk150_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk150_op1").prop("checked", false);
              $("#chk150_op3").prop("checked", true);
              $("#chk150_op4").prop("checked", false);
              $("#chk150_op5").prop("checked", false);
        
              $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores150').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk150_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk150_op2").prop("checked", false);
              $("#chk150_op3").prop("checked", false);
              $("#chk150_op4").prop("checked", true);
              $("#chk150_op6").prop("checked", false);
        
              $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores150').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk150_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk150_op1").prop("checked", false);
              $("#chk150_op3").prop("checked", false);
              $("#chk150_op5").prop("checked", true);
              $("#chk150_op6").prop("checked", false);
        
              $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores150').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk150_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk150_op2").prop("checked", false);
              $("#chk150_op4").prop("checked", false);
              $("#chk150_op5").prop("checked", false);
              $("#chk150_op6").prop("checked", true);
        
              $("#errores150").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores150').html("");
              }, 2000);
            });
        }






        //151 grupo

        function seleccionar151(){
          $("#chk151_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk151_op1").prop("checked", true);
            $("#chk151_op2").prop("checked", false);
            $("#chk151_op3").prop("checked", false);
            $("#chk151_op5").prop("checked", false);
      
            $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores151').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk151_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk151_op1").prop("checked", false);
              $("#chk151_op2").prop("checked", true);
              $("#chk151_op4").prop("checked", false);
              $("#chk151_op6").prop("checked", false);
        
              $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores151').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk151_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk151_op1").prop("checked", false);
              $("#chk151_op3").prop("checked", true);
              $("#chk151_op4").prop("checked", false);
              $("#chk151_op5").prop("checked", false);
        
              $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores151').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk151_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk151_op2").prop("checked", false);
              $("#chk151_op3").prop("checked", false);
              $("#chk151_op4").prop("checked", true);
              $("#chk151_op6").prop("checked", false);
        
              $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores151').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk151_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk151_op1").prop("checked", false);
              $("#chk151_op3").prop("checked", false);
              $("#chk151_op5").prop("checked", true);
              $("#chk151_op6").prop("checked", false);
        
              $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores151').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk151_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk151_op2").prop("checked", false);
              $("#chk151_op4").prop("checked", false);
              $("#chk151_op5").prop("checked", false);
              $("#chk151_op6").prop("checked", true);
        
              $("#errores151").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores151').html("");
              }, 2000);
            });
        }






    
        //152 grupo

        function seleccionar152(){
          $("#chk152_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk152_op1").prop("checked", true);
            $("#chk152_op2").prop("checked", false);
            $("#chk152_op3").prop("checked", false);
            $("#chk152_op5").prop("checked", false);
      
            $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores152').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk152_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk152_op1").prop("checked", false);
              $("#chk152_op2").prop("checked", true);
              $("#chk152_op4").prop("checked", false);
              $("#chk152_op6").prop("checked", false);
        
              $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores152').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk152_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk152_op1").prop("checked", false);
              $("#chk152_op3").prop("checked", true);
              $("#chk152_op4").prop("checked", false);
              $("#chk152_op5").prop("checked", false);
        
              $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores152').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk152_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk152_op2").prop("checked", false);
              $("#chk152_op3").prop("checked", false);
              $("#chk152_op4").prop("checked", true);
              $("#chk152_op6").prop("checked", false);
        
              $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores152').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk152_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk152_op1").prop("checked", false);
              $("#chk152_op3").prop("checked", false);
              $("#chk152_op5").prop("checked", true);
              $("#chk152_op6").prop("checked", false);
        
              $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores152').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk152_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk152_op2").prop("checked", false);
              $("#chk152_op4").prop("checked", false);
              $("#chk152_op5").prop("checked", false);
              $("#chk152_op6").prop("checked", true);
        
              $("#errores152").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores152').html("");
              }, 2000);
            });
        }




        //153 grupo

        function seleccionar153(){
          $("#chk153_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk153_op1").prop("checked", true);
            $("#chk153_op2").prop("checked", false);
            $("#chk153_op3").prop("checked", false);
            $("#chk153_op5").prop("checked", false);
      
            $("#errores153").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores153').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk153_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk153_op1").prop("checked", false);
              $("#chk153_op2").prop("checked", true);
              $("#chk153_op4").prop("checked", false);
              $("#chk153_op6").prop("checked", false);
        
              $("#errores135").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores153').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk153_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk153_op1").prop("checked", false);
              $("#chk153_op3").prop("checked", true);
              $("#chk153_op4").prop("checked", false);
              $("#chk153_op5").prop("checked", false);
        
              $("#errores153").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores153').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk153_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk153_op2").prop("checked", false);
              $("#chk153_op3").prop("checked", false);
              $("#chk153_op4").prop("checked", true);
              $("#chk153_op6").prop("checked", false);
        
              $("#errores153").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores153').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk153_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk153_op1").prop("checked", false);
              $("#chk153_op3").prop("checked", false);
              $("#chk153_op5").prop("checked", true);
              $("#chk153_op6").prop("checked", false);
        
              $("#errores153").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores153').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk153_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk153_op2").prop("checked", false);
              $("#chk153_op4").prop("checked", false);
              $("#chk153_op5").prop("checked", false);
              $("#chk153_op6").prop("checked", true);
        
              $("#errores153").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores153').html("");
              }, 2000);
            });
        }





        //154 grupo

        function seleccionar154(){
          $("#chk154_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk154_op1").prop("checked", true);
            $("#chk154_op2").prop("checked", false);
            $("#chk154_op3").prop("checked", false);
            $("#chk154_op5").prop("checked", false);
      
            $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores154').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk154_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk154_op1").prop("checked", false);
              $("#chk154_op2").prop("checked", true);
              $("#chk154_op4").prop("checked", false);
              $("#chk154_op6").prop("checked", false);
        
              $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores154').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk154_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk154_op1").prop("checked", false);
              $("#chk154_op3").prop("checked", true);
              $("#chk154_op4").prop("checked", false);
              $("#chk154_op5").prop("checked", false);
        
              $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores154').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk154_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk154_op2").prop("checked", false);
              $("#chk154_op3").prop("checked", false);
              $("#chk154_op4").prop("checked", true);
              $("#chk154_op6").prop("checked", false);
        
              $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores154').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk154_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk154_op1").prop("checked", false);
              $("#chk154_op3").prop("checked", false);
              $("#chk154_op5").prop("checked", true);
              $("#chk154_op6").prop("checked", false);
        
              $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores154').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk154_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk154_op2").prop("checked", false);
              $("#chk154_op4").prop("checked", false);
              $("#chk154_op5").prop("checked", false);
              $("#chk154_op6").prop("checked", true);
        
              $("#errores154").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores154').html("");
              }, 2000);
            });
        }




  


        //155 grupo

        function seleccionar155(){
          $("#chk155_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk155_op1").prop("checked", true);
            $("#chk155_op2").prop("checked", false);
            $("#chk155_op3").prop("checked", false);
            $("#chk155_op5").prop("checked", false);
      
            $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores155').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk155_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk155_op1").prop("checked", false);
              $("#chk155_op2").prop("checked", true);
              $("#chk155_op4").prop("checked", false);
              $("#chk155_op6").prop("checked", false);
        
              $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores155').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk155_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk155_op1").prop("checked", false);
              $("#chk155_op3").prop("checked", true);
              $("#chk155_op4").prop("checked", false);
              $("#chk155_op5").prop("checked", false);
        
              $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores155').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk155_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk155_op2").prop("checked", false);
              $("#chk155_op3").prop("checked", false);
              $("#chk155_op4").prop("checked", true);
              $("#chk155_op6").prop("checked", false);
        
              $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores155').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk155_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk155_op1").prop("checked", false);
              $("#chk155_op3").prop("checked", false);
              $("#chk155_op5").prop("checked", true);
              $("#chk155_op6").prop("checked", false);
        
              $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores155').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk155_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk155_op2").prop("checked", false);
              $("#chk155_op4").prop("checked", false);
              $("#chk155_op5").prop("checked", false);
              $("#chk155_op6").prop("checked", true);
        
              $("#errores155").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores155').html("");
              }, 2000);
            });
        }





        //156 grupo

        function seleccionar156(){
          $("#chk156_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk156_op1").prop("checked", true);
            $("#chk156_op2").prop("checked", false);
            $("#chk156_op3").prop("checked", false);
            $("#chk156_op5").prop("checked", false);
      
            $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores156').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk156_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk156_op1").prop("checked", false);
              $("#chk156_op2").prop("checked", true);
              $("#chk156_op4").prop("checked", false);
              $("#chk156_op6").prop("checked", false);
        
              $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores156').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk156_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk156_op1").prop("checked", false);
              $("#chk156_op3").prop("checked", true);
              $("#chk156_op4").prop("checked", false);
              $("#chk156_op5").prop("checked", false);
        
              $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores156').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk156_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk156_op2").prop("checked", false);
              $("#chk156_op3").prop("checked", false);
              $("#chk156_op4").prop("checked", true);
              $("#chk156_op6").prop("checked", false);
        
              $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores156').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk156_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk156_op1").prop("checked", false);
              $("#chk156_op3").prop("checked", false);
              $("#chk156_op5").prop("checked", true);
              $("#chk156_op6").prop("checked", false);
        
              $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores156').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk156_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk156_op2").prop("checked", false);
              $("#chk156_op4").prop("checked", false);
              $("#chk156_op5").prop("checked", false);
              $("#chk156_op6").prop("checked", true);
        
              $("#errores156").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores156').html("");
              }, 2000);
            });
        }








        //157 grupo

        function seleccionar157(){
          $("#chk157_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk157_op1").prop("checked", true);
            $("#chk157_op2").prop("checked", false);
            $("#chk157_op3").prop("checked", false);
            $("#chk157_op5").prop("checked", false);
      
            $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores157').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk157_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk157_op1").prop("checked", false);
              $("#chk157_op2").prop("checked", true);
              $("#chk157_op4").prop("checked", false);
              $("#chk157_op6").prop("checked", false);
        
              $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores157').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk157_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk157_op1").prop("checked", false);
              $("#chk157_op3").prop("checked", true);
              $("#chk157_op4").prop("checked", false);
              $("#chk157_op5").prop("checked", false);
        
              $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores157').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk157_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk157_op2").prop("checked", false);
              $("#chk157_op3").prop("checked", false);
              $("#chk157_op4").prop("checked", true);
              $("#chk157_op6").prop("checked", false);
        
              $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores157').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk157_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk157_op1").prop("checked", false);
              $("#chk157_op3").prop("checked", false);
              $("#chk157_op5").prop("checked", true);
              $("#chk157_op6").prop("checked", false);
        
              $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores157').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk157_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk157_op2").prop("checked", false);
              $("#chk157_op4").prop("checked", false);
              $("#chk157_op5").prop("checked", false);
              $("#chk157_op6").prop("checked", true);
        
              $("#errores157").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores157').html("");
              }, 2000);
            });
        }

         





  

        //158 grupo

        function seleccionar158(){
          $("#chk158_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk158_op1").prop("checked", true);
            $("#chk158_op2").prop("checked", false);
            $("#chk158_op3").prop("checked", false);
            $("#chk158_op5").prop("checked", false);
      
            $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores158').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk158_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk158_op1").prop("checked", false);
              $("#chk158_op2").prop("checked", true);
              $("#chk158_op4").prop("checked", false);
              $("#chk158_op6").prop("checked", false);
        
              $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores158').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk158_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk158_op1").prop("checked", false);
              $("#chk158_op3").prop("checked", true);
              $("#chk158_op4").prop("checked", false);
              $("#chk158_op5").prop("checked", false);
        
              $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores158').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk158_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk158_op2").prop("checked", false);
              $("#chk158_op3").prop("checked", false);
              $("#chk158_op4").prop("checked", true);
              $("#chk158_op6").prop("checked", false);
        
              $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores158').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk158_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk158_op1").prop("checked", false);
              $("#chk158_op3").prop("checked", false);
              $("#chk158_op5").prop("checked", true);
              $("#chk158_op6").prop("checked", false);
        
              $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores158').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk158_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk158_op2").prop("checked", false);
              $("#chk158_op4").prop("checked", false);
              $("#chk158_op5").prop("checked", false);
              $("#chk158_op6").prop("checked", true);
        
              $("#errores158").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores158').html("");
              }, 2000);
            });
        }





        //159 grupo

        function seleccionar159(){
          $("#chk159_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk159_op1").prop("checked", true);
            $("#chk159_op2").prop("checked", false);
            $("#chk159_op3").prop("checked", false);
            $("#chk159_op5").prop("checked", false);
      
            $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores159').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk159_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk159_op1").prop("checked", false);
              $("#chk159_op2").prop("checked", true);
              $("#chk159_op4").prop("checked", false);
              $("#chk159_op6").prop("checked", false);
        
              $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores159').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk159_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk159_op1").prop("checked", false);
              $("#chk159_op3").prop("checked", true);
              $("#chk159_op4").prop("checked", false);
              $("#chk159_op5").prop("checked", false);
        
              $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores159').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk159_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk159_op2").prop("checked", false);
              $("#chk159_op3").prop("checked", false);
              $("#chk159_op4").prop("checked", true);
              $("#chk159_op6").prop("checked", false);
        
              $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores159').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk159_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk159_op1").prop("checked", false);
              $("#chk159_op3").prop("checked", false);
              $("#chk159_op5").prop("checked", true);
              $("#chk159_op6").prop("checked", false);
        
              $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores159').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk159_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk159_op2").prop("checked", false);
              $("#chk159_op4").prop("checked", false);
              $("#chk159_op5").prop("checked", false);
              $("#chk159_op6").prop("checked", true);
        
              $("#errores159").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores159').html("");
              }, 2000);
            });
        }




        //160 grupo

        function seleccionar160(){
          $("#chk160_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk160_op1").prop("checked", true);
            $("#chk160_op2").prop("checked", false);
            $("#chk160_op3").prop("checked", false);
            $("#chk160_op5").prop("checked", false);
      
            $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores160').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk160_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk160_op1").prop("checked", false);
              $("#chk160_op2").prop("checked", true);
              $("#chk160_op4").prop("checked", false);
              $("#chk160_op6").prop("checked", false);
        
              $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores160').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk160_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk160_op1").prop("checked", false);
              $("#chk160_op3").prop("checked", true);
              $("#chk160_op4").prop("checked", false);
              $("#chk160_op5").prop("checked", false);
        
              $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores160').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk160_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk160_op2").prop("checked", false);
              $("#chk160_op3").prop("checked", false);
              $("#chk160_op4").prop("checked", true);
              $("#chk160_op6").prop("checked", false);
        
              $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores160').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk160_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk160_op1").prop("checked", false);
              $("#chk160_op3").prop("checked", false);
              $("#chk160_op5").prop("checked", true);
              $("#chk160_op6").prop("checked", false);
        
              $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores160').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk160_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk160_op2").prop("checked", false);
              $("#chk160_op4").prop("checked", false);
              $("#chk160_op5").prop("checked", false);
              $("#chk160_op6").prop("checked", true);
        
              $("#errores160").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores160').html("");
              }, 2000);
            });
        }







        //161 grupo

        function seleccionar161(){
          $("#chk161_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk161_op1").prop("checked", true);
            $("#chk161_op2").prop("checked", false);
            $("#chk161_op3").prop("checked", false);
            $("#chk161_op5").prop("checked", false);
      
            $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores161').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk161_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk161_op1").prop("checked", false);
              $("#chk161_op2").prop("checked", true);
              $("#chk161_op4").prop("checked", false);
              $("#chk161_op6").prop("checked", false);
        
              $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores161').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk161_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk161_op1").prop("checked", false);
              $("#chk161_op3").prop("checked", true);
              $("#chk161_op4").prop("checked", false);
              $("#chk161_op5").prop("checked", false);
        
              $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores161').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk161_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk161_op2").prop("checked", false);
              $("#chk161_op3").prop("checked", false);
              $("#chk161_op4").prop("checked", true);
              $("#chk161_op6").prop("checked", false);
        
              $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores161').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk161_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk161_op1").prop("checked", false);
              $("#chk161_op3").prop("checked", false);
              $("#chk161_op5").prop("checked", true);
              $("#chk161_op6").prop("checked", false);
        
              $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores161').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk161_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk161_op2").prop("checked", false);
              $("#chk161_op4").prop("checked", false);
              $("#chk161_op5").prop("checked", false);
              $("#chk161_op6").prop("checked", true);
        
              $("#errores161").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores161').html("");
              }, 2000);
            });
        }





        //162 grupo

        function seleccionar162(){
          $("#chk162_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk162_op1").prop("checked", true);
            $("#chk162_op2").prop("checked", false);
            $("#chk162_op3").prop("checked", false);
            $("#chk162_op5").prop("checked", false);
      
            $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores162').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk162_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk162_op1").prop("checked", false);
              $("#chk162_op2").prop("checked", true);
              $("#chk162_op4").prop("checked", false);
              $("#chk162_op6").prop("checked", false);
        
              $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores162').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk162_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk162_op1").prop("checked", false);
              $("#chk162_op3").prop("checked", true);
              $("#chk162_op4").prop("checked", false);
              $("#chk162_op5").prop("checked", false);
        
              $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores162').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk162_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk162_op2").prop("checked", false);
              $("#chk162_op3").prop("checked", false);
              $("#chk162_op4").prop("checked", true);
              $("#chk162_op6").prop("checked", false);
        
              $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores162').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk162_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk162_op1").prop("checked", false);
              $("#chk162_op3").prop("checked", false);
              $("#chk162_op5").prop("checked", true);
              $("#chk162_op6").prop("checked", false);
        
              $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores162').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk162_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk162_op2").prop("checked", false);
              $("#chk162_op4").prop("checked", false);
              $("#chk162_op5").prop("checked", false);
              $("#chk162_op6").prop("checked", true);
        
              $("#errores162").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores162').html("");
              }, 2000);
            });
        }






        //163 grupo

        function seleccionar163(){
          $("#chk163_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk163_op1").prop("checked", true);
            $("#chk163_op2").prop("checked", false);
            $("#chk163_op3").prop("checked", false);
            $("#chk163_op5").prop("checked", false);
      
            $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores163').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk163_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk163_op1").prop("checked", false);
              $("#chk163_op2").prop("checked", true);
              $("#chk163_op4").prop("checked", false);
              $("#chk163_op6").prop("checked", false);
        
              $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores163').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk163_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk163_op1").prop("checked", false);
              $("#chk163_op3").prop("checked", true);
              $("#chk163_op4").prop("checked", false);
              $("#chk163_op5").prop("checked", false);
        
              $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores163').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk163_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk163_op2").prop("checked", false);
              $("#chk163_op3").prop("checked", false);
              $("#chk163_op4").prop("checked", true);
              $("#chk163_op6").prop("checked", false);
        
              $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores163').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk163_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk163_op1").prop("checked", false);
              $("#chk163_op3").prop("checked", false);
              $("#chk163_op5").prop("checked", true);
              $("#chk163_op6").prop("checked", false);
        
              $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores163').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk163_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk163_op2").prop("checked", false);
              $("#chk163_op4").prop("checked", false);
              $("#chk163_op5").prop("checked", false);
              $("#chk163_op6").prop("checked", true);
        
              $("#errores163").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores163').html("");
              }, 2000);
            });
        }





        //164 grupo

        function seleccionar164(){
          $("#chk164_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk164_op1").prop("checked", true);
            $("#chk164_op2").prop("checked", false);
            $("#chk164_op3").prop("checked", false);
            $("#chk164_op5").prop("checked", false);
      
            $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores164').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk164_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk164_op1").prop("checked", false);
              $("#chk164_op2").prop("checked", true);
              $("#chk164_op4").prop("checked", false);
              $("#chk164_op6").prop("checked", false);
        
              $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores164').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk164_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk164_op1").prop("checked", false);
              $("#chk164_op3").prop("checked", true);
              $("#chk164_op4").prop("checked", false);
              $("#chk164_op5").prop("checked", false);
        
              $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores164').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk164_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk164_op2").prop("checked", false);
              $("#chk164_op3").prop("checked", false);
              $("#chk164_op4").prop("checked", true);
              $("#chk164_op6").prop("checked", false);
        
              $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores164').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk164_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk164_op1").prop("checked", false);
              $("#chk164_op3").prop("checked", false);
              $("#chk164_op5").prop("checked", true);
              $("#chk164_op6").prop("checked", false);
        
              $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores164').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk164_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk164_op2").prop("checked", false);
              $("#chk164_op4").prop("checked", false);
              $("#chk164_op5").prop("checked", false);
              $("#chk164_op6").prop("checked", true);
        
              $("#errores164").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores164').html("");
              }, 2000);
            });
        }



    




        //165 grupo

        function seleccionar165(){
          $("#chk165_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk165_op1").prop("checked", true);
            $("#chk165_op2").prop("checked", false);
            $("#chk165_op3").prop("checked", false);
            $("#chk165_op5").prop("checked", false);
      
            $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores165').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk165_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk165_op1").prop("checked", false);
              $("#chk165_op2").prop("checked", true);
              $("#chk165_op4").prop("checked", false);
              $("#chk165_op6").prop("checked", false);
        
              $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores165').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk165_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk165_op1").prop("checked", false);
              $("#chk165_op3").prop("checked", true);
              $("#chk165_op4").prop("checked", false);
              $("#chk165_op5").prop("checked", false);
        
              $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores165').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk165_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk165_op2").prop("checked", false);
              $("#chk165_op3").prop("checked", false);
              $("#chk165_op4").prop("checked", true);
              $("#chk165_op6").prop("checked", false);
        
              $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores165').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk165_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk165_op1").prop("checked", false);
              $("#chk165_op3").prop("checked", false);
              $("#chk165_op5").prop("checked", true);
              $("#chk165_op6").prop("checked", false);
        
              $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores165').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk165_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk165_op2").prop("checked", false);
              $("#chk165_op4").prop("checked", false);
              $("#chk165_op5").prop("checked", false);
              $("#chk165_op6").prop("checked", true);
        
              $("#errores165").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores165').html("");
              }, 2000);
            });
        }






        //166 grupo

        function seleccionar166(){
          $("#chk166_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk166_op1").prop("checked", true);
            $("#chk166_op2").prop("checked", false);
            $("#chk166_op3").prop("checked", false);
            $("#chk166_op5").prop("checked", false);
      
            $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores166').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk166_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk166_op1").prop("checked", false);
              $("#chk166_op2").prop("checked", true);
              $("#chk166_op4").prop("checked", false);
              $("#chk166_op6").prop("checked", false);
        
              $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores166').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk166_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk166_op1").prop("checked", false);
              $("#chk166_op3").prop("checked", true);
              $("#chk166_op4").prop("checked", false);
              $("#chk166_op5").prop("checked", false);
        
              $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores166').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk166_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk166_op2").prop("checked", false);
              $("#chk166_op3").prop("checked", false);
              $("#chk166_op4").prop("checked", true);
              $("#chk166_op6").prop("checked", false);
        
              $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores166').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk166_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk166_op1").prop("checked", false);
              $("#chk166_op3").prop("checked", false);
              $("#chk166_op5").prop("checked", true);
              $("#chk166_op6").prop("checked", false);
        
              $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores166').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk166_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk166_op2").prop("checked", false);
              $("#chk166_op4").prop("checked", false);
              $("#chk166_op5").prop("checked", false);
              $("#chk166_op6").prop("checked", true);
        
              $("#errores166").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores166').html("");
              }, 2000);
            });
        }





        //167 grupo

        function seleccionar167(){
          $("#chk167_op1").on('change', function (ev){
            ev.preventDefault();
      
            $("#chk167_op1").prop("checked", true);
            $("#chk167_op2").prop("checked", false);
            $("#chk167_op3").prop("checked", false);
            $("#chk167_op5").prop("checked", false);
      
            $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
            setTimeout(function(){
              $('#errores167').html("");
            }, 2000);
          });
      
          //segundo Check
      
          $("#chk167_op2").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk167_op1").prop("checked", false);
              $("#chk167_op2").prop("checked", true);
              $("#chk167_op4").prop("checked", false);
              $("#chk167_op6").prop("checked", false);
        
              $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores167').html("");
              }, 2000);
            });
      
          //Tercer Check
      
          $("#chk167_op3").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk167_op1").prop("checked", false);
              $("#chk167_op3").prop("checked", true);
              $("#chk167_op4").prop("checked", false);
              $("#chk167_op5").prop("checked", false);
        
              $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores167').html("");
              }, 2000);
            });
      
          //cuarto Check
      
          $("#chk167_op4").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk167_op2").prop("checked", false);
              $("#chk167_op3").prop("checked", false);
              $("#chk167_op4").prop("checked", true);
              $("#chk167_op6").prop("checked", false);
        
              $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores167').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk167_op5").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk167_op1").prop("checked", false);
              $("#chk167_op3").prop("checked", false);
              $("#chk167_op5").prop("checked", true);
              $("#chk167_op6").prop("checked", false);
        
              $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores167').html("");
              }, 2000);
            });
      
          //Quinta Check
      
          $("#chk167_op6").on('change', function (ev){
              ev.preventDefault();
        
              $("#chk167_op2").prop("checked", false);
              $("#chk167_op4").prop("checked", false);
              $("#chk167_op5").prop("checked", false);
              $("#chk167_op6").prop("checked", true);
        
              $("#errores167").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
              setTimeout(function(){
                $('#errores167').html("");
              }, 2000);
            });
        }






                //168 grupo

                function seleccionar168(){
                  $("#chk168_op1").on('change', function (ev){
                    ev.preventDefault();
              
                    $("#chk168_op1").prop("checked", true);
                    $("#chk168_op2").prop("checked", false);
                    $("#chk168_op3").prop("checked", false);
                    $("#chk168_op5").prop("checked", false);
              
                    $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                    setTimeout(function(){
                      $('#errores168').html("");
                    }, 2000);
                  });
              
                  //segundo Check
              
                  $("#chk168_op2").on('change', function (ev){
                      ev.preventDefault();
                
                      $("#chk168_op1").prop("checked", false);
                      $("#chk168_op2").prop("checked", true);
                      $("#chk168_op4").prop("checked", false);
                      $("#chk168_op6").prop("checked", false);
                
                      $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                      setTimeout(function(){
                        $('#errores168').html("");
                      }, 2000);
                    });
              
                  //Tercer Check
              
                  $("#chk168_op3").on('change', function (ev){
                      ev.preventDefault();
                
                      $("#chk168_op1").prop("checked", false);
                      $("#chk168_op3").prop("checked", true);
                      $("#chk168_op4").prop("checked", false);
                      $("#chk168_op5").prop("checked", false);
                
                      $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                      setTimeout(function(){
                        $('#errores168').html("");
                      }, 2000);
                    });
              
                  //cuarto Check
              
                  $("#chk168_op4").on('change', function (ev){
                      ev.preventDefault();
                
                      $("#chk168_op2").prop("checked", false);
                      $("#chk168_op3").prop("checked", false);
                      $("#chk168_op4").prop("checked", true);
                      $("#chk168_op6").prop("checked", false);
                
                      $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                      setTimeout(function(){
                        $('#errores168').html("");
                      }, 2000);
                    });
              
                  //Quinta Check
              
                  $("#chk168_op5").on('change', function (ev){
                      ev.preventDefault();
                
                      $("#chk168_op1").prop("checked", false);
                      $("#chk168_op3").prop("checked", false);
                      $("#chk168_op5").prop("checked", true);
                      $("#chk168_op6").prop("checked", false);
                
                      $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                      setTimeout(function(){
                        $('#errores168').html("");
                      }, 2000);
                    });
              
                  //Quinta Check
              
                  $("#chk168_op6").on('change', function (ev){
                      ev.preventDefault();
                
                      $("#chk168_op2").prop("checked", false);
                      $("#chk168_op4").prop("checked", false);
                      $("#chk168_op5").prop("checked", false);
                      $("#chk168_op6").prop("checked", true);
                
                      $("#errores168").html("Puede seleccionar uno de cada lado (Un Más y un Menos)");
                      setTimeout(function(){
                        $('#errores168').html("");
                      }, 2000);
                    });
                }