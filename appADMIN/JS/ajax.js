//BUSCADOR DINAMICO DE PRODUCTOS
$("input.search_product").keyup(function (){
  $(this).parent("ul.suggesstion-box").fadeIn("fast");
    $.ajax({
    type: "POST",
    url: "CLASS/REM/search_product.php",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      //$("#suggesstion-box").css("background","#ccc url(LoaderIcon.gif) no-repeat 165px");
    },
    success: function(data){
      $("ul.suggesstion-box").show();
      $("ul.suggesstion-box").html(data);
      $(".suggesstion-box").css("background","#f9f9f9");
      $("li.list").click(function(){
        var val = $(this).text();
        $(this).parent("ul.suggesstion-box").fadeIn("fast");
        var parentUl = $(this).parent("ul.suggesstion-box");
        parentUl.siblings("input.search_product").val(val);
        $("ul.suggesstion-box").fadeOut("fast");

      });
    }
    });
  });

//BUSCADOR DINAMICO DE CHOFER
$("input#name_driver").keyup(function (){
    $("input#phone_driver").val("");
    $("ul.drivers-box").hide();
    $.ajax({
    type: "POST",
    url: "CLASS/REM/search_driver.php",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      //$("#suggesstion-box").css("background","#ccc url(LoaderIcon.gif) no-repeat 165px");
    },
    success: function(data){

      $("ul.drivers-box").show();
      $("ul.drivers-box").html(data);
      $("li.list").click(function(){
        var val = $(this).text();
       
        var parentUl = $(this).parent("ul.drivers-box");
        parentUl.siblings("input#name_driver").val(val);
        $("ul.drivers-box").fadeOut("fast");
          $.ajax({
            type: "POST",
            url: "CLASS/REM/search_driver.php",
            data:'name='+$("input#name_driver").val(),
            success: function(data){
              $("div.input").html(data);
            }
          });
      });
    }
    });
});

//BUSCADOR DINAMICO DE TRACTOR
$("input#tractor").keyup(function(){
    $.ajax({
    type: "POST",
    url: "CLASS/REM/search_driver.php",
    data:'tractor='+$(this).val(),
    success: function(data){
      $("ul.tractor-box").show();
      $("ul.tractor-box").html(data);
      $("li.list").click(function(){
        var val = $(this).text();
        var parentUl = $(this).parent("ul.tractor-box");
        parentUl.siblings("input#tractor").val(val);
        $("ul.tractor-box").fadeOut("fast");
        $.ajax({
            type: "POST",
            url: "CLASS/REM/search_driver.php",
            data:'brand='+$("input#tractor").val(),
            success: function(data){
              //alert();
              $("div.inputTractor").empty();
              $("div.inputTractor").html(data);
            }
          });
         
      });
    }
    });
});

//BUSCADOR DINAMICO DE CAJA
$("input#caja").keyup(function(){
    $.ajax({
    type: "POST",
    url: "CLASS/REM/search_driver.php",
    data:'brand_box='+$(this).val(),
    success: function(data){
      $("ul.caja-box").show();
      $("ul.caja-box").html(data);
      $("li.list").click(function(){
        var val = $(this).text();
        var parentUl = $(this).parent("ul.caja-box");
        parentUl.siblings("input#caja").val(val);
        $("ul.caja-box").fadeOut("fast");
        $.ajax({
            type: "POST",
            url: "CLASS/REM/search_driver.php",
            data:'brand_box2='+$("input#caja").val(),
            success: function(data){
              //alert();
              $("div.inputCaja").empty();
              $("div.inputCaja").html(data);
            }
          });
         
      });
    }
    });
});

/** AJAX VALIDAR USUARIO **/
function login_validate() {
    event.preventDefault();
    var formData = new FormData($("#formLogin")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
          var data = datos;
          if (data == 1) {
            //swal("Ok!", "Usuario valido", "success");
            window.location.href = 'panel.php';
          }else{
            //swal("Ok!", "Usuario valido", "success");
            $('#formLogin')[0].reset();
            //$("p.erromsg").removeClass("hidden").fadeOut(2000);
          }
        }
    });
}

/** AJAX GUARDAR USUARIO**/
function save_user(){
    event.preventDefault();
    var pass = $("input#pass").val();
    var r_pass = $("input#r_pass").val();

    if (pass == r_pass) {
      var formData = new FormData($("#formUser")[0]);
      var ruta = "CLASS/class.php";
      $.ajax({
          url: ruta,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(datos)
          {
            closeModal(obj);
            swal("El usuario ha sido guardado con exito ", { icon: "success",});
            $("#formUser")[0].reset();
            $("div.containerTable").empty();
            $("div.containerTable").html(datos);
            $('#tableUsers').DataTable();
           
          }
      });
    }else{
      $("input#pass").addClass("passNoValid");
      $("input#r_pass").addClass("passNoValid");
    }
}
 
/** AJAX ELIMINAR USUARIO **/  
function deleteUser(obj) {
    event.preventDefault();
    swal({
      title: "Eliminar usuario",
      text: "Este seguro de eliminar este usuario",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
            var id = $(obj).attr("href");

            $.get(id, function(data, status){
            swal("El usuario ha sido eliminado con éxito ", {
              icon: "success",
            });

            $("div.containerTable").empty();
            $("div.containerTable").html(data);
            $('#tableUsers').DataTable();

        });
        
      } else {
        swal("Operación cancelada");
      }
    });
}

function cleanForm(){
  event.preventDefault();
    swal({
      title: "Eliminar usuario",
      text: "Este seguro de eliminar este usuario",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
            var id = $(obj).attr("href");

            $.get(id, function(data, status){
            swal("El usuario ha sido eliminado con éxito ", {
              icon: "success",
            });

            $("div.containerTable").empty();
            $("div.containerTable").html(data);
            $('#tableUsers').DataTable();

        });
        
      } else {
        swal("Operación cancelada");
      }
    });
}
/** AJAX EDITAR USUARIO FINAL**/
function updateUser(){
    event.preventDefault();
    var formData = new FormData($("#formUpdateUser")[0]);
    var ruta = "CLASS/updateUser.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
          closeModal2(obj);
          swal("El usuario ha sido Actualizado con exito ", {
            icon: "success",
          });
          
          $("#formUpdateUser")[0].reset();
          $("div.containerTable").empty();
          $("div.containerTable").html(datos);
          $('#tableUsers').DataTable();
         
        }
    });
}

/** AJAX EDITAR USUARIO **/
function editUser(obj){
  event.preventDefault();
  var id = $(obj).attr("href");

  $.get(id, function(data, status){
      $("div.formEdit").html(data);
      $("#bgBlack2").fadeIn('fast');

  });
}


function save_driver(){
  event.preventDefault();
  var formData = new FormData($("#formDriver")[0]);
      var ruta = "CLASS/classDriver.php";
      $.ajax({
          url: ruta,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(datos)
          {
           
            swal("El chofer ha sido guardado con exito ", { icon: "success",});
            $("#formDriver")[0].reset();
 
           
          }
      }); 
}


function save_tractor(){
  event.preventDefault();
  
  var formData = new FormData($("#formTractor")[0]);
      var ruta = "CLASS/classDriver.php";
      $.ajax({
          url: ruta,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(datos)
          {
          
            swal("El tractor ha sido guardado con exito ", { icon: "success",});
            $("#formTractor")[0].reset();
          }
      }); 
}

function save_boxF_S(){
  event.preventDefault();
  var full_simple = $('input:radio.holis:checked').val();
  
  if (full_simple == "full")  {
    alert("FULL");
  }else if( full_simple == "simple"){
    save_box();
  }else{
    alert("Espesifique tipo de caja");
  }
  //alert(full_simple);
}

function save_box(){
  event.preventDefault();
  var formData = new FormData($("form#formSencillo")[0]);
  var ruta = "CLASS/classDriver.php";
  $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        closeModal();
        swal("La caja ha sido guardado con exito ", { icon: "success",});
        $("form#formSencillo")[0].reset();
      }
  }); 
}

function save_boxFull(){
  event.preventDefault();
  var formData = new FormData($("form#formDoble")[0]);
  var ruta = "CLASS/classDriver.php";
  $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        closeModal();
        swal("La caja ha sido guardado con exito ", { icon: "success",});
        $("form#formDoble")[0].reset();
      }
  }); 
}

function search_employe(obj){

  var formData = new FormData($(obj).parent('div.col-lg-5').parent('div.row').parent('form.formRemision')[0]);
   var ruta = "CLASS/REM/search_employe.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        $(obj).siblings("div#dataEmploye").empty();
        $(obj).siblings("div#dataEmploye").html(datos);
      
      }
  }); 
}

function search_costumer(obj){
  var formData = new FormData($(obj).parent('div.col-lg-5').parent('div.row').parent('form#formRemision')[0]);

  var ruta = "CLASS/REM/search_costumer.php";
  $.ajax({
    url: ruta,
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos)
    {
      $(obj).siblings("div#dataCostumer").empty();
      $(obj).siblings("div#dataCostumer").html(datos);
    }
  }); 
}


function save_product(){
  event.preventDefault();

  var formData = new FormData($("#formProducts")[0]);
      var ruta = "CLASS/classDriver.php";
      $.ajax({
          url: ruta,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(datos)
          {
            //closeModal();
            swal("El producto ha sido guardado con exito ", { icon: "success",});
            $("#formProducts")[0].reset();
 
           
          }
      }); 
}
