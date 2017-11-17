
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
            closeModal();
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
            closeModal();
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
  var formData = new FormData($("form#formRemision")[0]);
   var ruta = "CLASS/REM/search_employe.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        $("div#dataEmploye").empty();
        $("div#dataEmploye").html(datos);
      
      }
  }); 
}

function search_costumer(obj){
  var formData = new FormData($("form#formRemision")[0]);
   var ruta = "CLASS/REM/search_costumer.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        $("div#dataCostumer").empty();
        $("div#dataCostumer").html(datos);
      }
  }); 
}

function infoEmploye(){
  event.preventDefault();
  var formData = new FormData($("form#formRemision")[0]);
   var ruta = "gasoline.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
      
      }
  }); 
}
function infoProductos(){
  event.preventDefault();
  var formData = new FormData($("form#formProductos")[0]);
   var ruta = "infoRemision.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function(datos)
      {
      
      }
  }); 
}

function sendRemision(){
  infoProductos();
  infoEmploye();

  alert("emviadp");

}