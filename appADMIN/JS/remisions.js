	
$(document).ready(function () {

	//MOSTRAR SELECT SI ES FLETE CONSOLIDAD
	$("input#consolid").change(function(){
	
		$("div.selectEmb").toggleClass("hidden");
	});



	//FUNCION PARA ENVIAR EL AJAX DEL NUMERO DE REMISIONES

	$("select#num_emb").change(function(){
		var numTabs = $(this).val();
		$(this).attr('disabled','disabled').addClass("disabled");
	    $.ajax({
	        url: "CLASS/REM/flete.php",
	        type: "POST",
	        data:'name='+$(this).val(),
	        contentType: false,
	        processData: false,
	        success: function(datos){
	          	$("div.tab_content").empty();
	          
	          	$("ul.tabs").empty();
				
				for (i = 0; i < numTabs; i++) {
					var nTab = i+1;
				    //text += cars[i] + "<br>";
				    $("ul#tabs").append('<li><a href="#">Remision '+nTab+'</a></li>');
				    $("div#tab_content").append(datos);
				}
				////////////////////////////////////////////////////
				var a = 0; 
				$("button.addProducto").click(function(){

			        a += 1;
			        var producto = '<div id="rowP'+a+'" class="row rowp mTop5"><div class="col-lg-1 "><div class="block"><input type="hidden" name="type_form'+a+'" value="productos">';
					producto += '<label for="">Cantidad</label><input type="text" class="inputStyle" name="caant'+a+'" value="0"></div></div><div class="col-lg-5 "><div class="block"><label for="">Producto</label>';
					producto += '<input type="text" name="prod'+a+'" class="inputStyle search_product" autocomplete="off"><ul id="suggesstion-box" class="suggesstion-box"></ul></div></div><div class="col-lg-1 "><div class="block"><label for="">KG</label>';
					producto += '<input type="text" name="kg'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-2 "><div class="block"><label for="">Precio</label>';
					producto += '<input type="text" name="price'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-2 "><div class="block">';
					producto += '<input type="hidden" name="import'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-1 h60" ><br><br><span id="jolaa" class="delte" ><i class="fa fa-minus-circle" aria-hidden="true"></i></span></div>';
					$(this).parent("div").parent("div").siblings("div#contentProd").append(producto);
					$("input.search_product").keyup(function (){
						//alert();
						var dIvR = $(this).siblings("ul.suggesstion-box");
						dIvR.show("block");
					    $.ajax({
					    	type: "POST",
					    	url: "CLASS/REM/search_product.php",
					    	data:'keyword='+$(this).val(),
						    beforeSend: function(){
						      //$("#suggesstion-box").css("background","#ccc url(LoaderIcon.gif) no-repeat 165px");
						    },
						    success: function(data){
						      	dIvR.html(data);
						      	dIvR.find("li.list").click(function(){
							        var val = $(this).text();
							       	var parentUl = $(this).parent("ul.suggesstion-box");
							        parentUl.siblings("input.search_product").val(val);
							        dIvR.hide("block");
						      	});
						    }
					    });
			  		});
			  	});
				////////////////////////////////////////////////////
	           // swal("El tractor ha sido guardado con exito ", { icon: "success",});
	           	$("input.buttonSent").click(function() {

	           		var formData = new FormData($(this).parent("div").parent("form").siblings("form.formRemision")[0]);
	           		var formDataProductos = new FormData($(this).parent("div").parent("form").siblings("form.formProductos")[0]);
	           		infoEmploye(formData);
	           		infoProductos(formDataProductos);
  					url = "http://localhost/Proyecto_Albardas/appAdmin/gasoline.php";
 					window.open(url,'_blank');
	           		//FUNCION PARA CAPTURAR LA INFORMACION DE EMPRESAS

				});
	           	//FUNCION PARA QUE FUNCIONEN LOS TABS
	            (function ($) { 
					$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
					$('.tab ul.tabs li a').click(function (g) { 
						var tab = $(this).closest('.tab'), 
						index = $(this).closest('li').index();
						tab.find('ul.tabs > li').removeClass('current');
						$(this).closest('li').addClass('current');
						tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp('<fast></fast>');
						tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown('<fast></fast>');
						g.preventDefault();
					});
				})(jQuery);
			}
	    }); 
	});
});

function sendRemision(obj){
  infoProductos();
  infoEmploye(obj);
  infoMore();
  return false;

  url = "http://localhost/Proyecto_Albardas/appAdmin/gasoline.php";
  window.open(url,'_blank');
 
}
	


function infoEmploye(formData){
	//PENDIENTE AQUI MERO TE QUEDATSE WEEEEE
	event.preventDefault();
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
//FUNCION PARA CAPTURAR LA INFORMACION DE PRODUCTOS
function infoProductos(formDataProductos){
 	event.preventDefault();
   	var ruta = "infoRemision.php";
    $.ajax({
      url: ruta,	
      type: "POST",
      data: formDataProductos,
      contentType: false,
      processData: false,
      success: function(datos)
      {
      
      }
  }); 
}


//FUNCION PARA CAPTURAR LA INFORMACION DE TRASPORTE
function infoMore(){
  event.preventDefault();
  var formData = new FormData($("form#searchDriver")[0]);
   var ruta = "CLASS/REM/infoMore.php";
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

//FUNCION PARA ENVIAR LAS OTRAS FUNCIONES
