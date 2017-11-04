function login_validate() {
    event.preventDefault()
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

function editUser(obj){
    event.preventDefault();
    var id = $(obj).attr("href");
  
    $.get(id, function(data, status){
        $("div.formEdit").html(data);
        $("#bgBlack2").fadeIn('fast');

    });
}
$("a.add").click(function(){
    event.preventDefault();
    var rute = $(this).attr('href');
    $.get(rute, function(data, status){
        $("div.response").html(data);
    });
});

$("button.view").click(function(){
    event.preventDefault();
    var rute = 'CLASS/cotizar.php';
    $.get(rute, function(data, status){
        $("div.response").html(data);
    });
});
function save_user(){
    event.preventDefault();
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
          swal("El usuario ha sido guardado con exito ", {
                  icon: "success",
                });
          $("#formUser")[0].reset();
          $("div.containerTable").empty();
          $("div.containerTable").html(datos);
           $('#tableUsers').DataTable();
         
        }
    });
}
   
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

function updateUser(){
    event.preventDefault(); 
    alert("update user");
}

/**$("a.delete").click(function(){
    event.preventDefault();

   var id = $(this).attr('href');
   alert(id);
   
  
    $.get(id, function(data, status){
        alert(status);
       alert("Usuario eliminado");

        $("div.containerTable").empty();
        $("div.containerTable").html(data);
        $('#tableUsers').DataTable();

    });
});
function ajaxPdf(){
    var formData = new FormData($("#formGPfg")[0]);
    var ruta = "CLASS/pdfC.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
            alert("listo");
        }
    });    
}**/