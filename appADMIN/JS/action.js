	
$(document).ready(function () {

	function deleteFind(obj){
		alert();
	}
	
	$("input#consolid").change(function(){
	    //alert("hola");
	});
   function mmorin(){
    alert("hola");
   }
	function modalBed(){
		$("#bgBlack").fadeIn('fast');
		$(".containerForm").fadeIn('fast');
	}

	function modalUser(){
		 event.preventDefault();
		$("div#bgBlack").fadeIn(50);
		$("div.containerForm").fadeIn('fast');
	}

	function closeModal(){
		$("#bgBlack").fadeOut('fast');
		$(".containerForm").fadeOut('fast');
	}

	function closeModal2(){
		$("#bgBlack2").fadeOut('fast');
		$(".modalUpdate").fadeOut('fast');	
	}

	function morin(){
		alert("holaaaaaa");
	}

	$("button#modalPordcutos").click(function(){
		morin();
	});
	$("button#buttonP").click(function(){
		modalUser();
	});
	$("div#bgBlack").click(function(){
		closeModal();
	});
	$("div#bgBlack2").click(function(){
		closeModal2();
	});

	

	var a=0; 
	$("button#addProducto").click(function addP(){
        a+=1;
        stop(a);
        var producto = '<div id="rowP'+a+'" class="row rowp mTop5"><div class="col-lg-1 "><div class="block"><input type="hidden" name="type_form'+a+'" value="productos">';
		producto += '<label for="">Cantidad</label><input type="text" class="inputStyle" name="caant'+a+'" value="0"></div></div><div class="col-lg-5 "><div class="block"><label for="">Producto</label>';
		producto += '<input type="text" name="prod'+a+'" class="inputStyle search_product" autocomplete="off"><ul id="suggesstion-box" class="suggesstion-box"></ul></div></div><div class="col-lg-1 "><div class="block"><label for="">KG</label>';
		producto += '<input type="text" name="kg'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-2 "><div class="block"><label for="">Precio</label>';
		producto += '<input type="text" name="price'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-2 "><div class="block">';
		producto += '<input type="hidden" name="import'+a+'" class="inputStyle" value="0"></div></div><div class="col-lg-1 h60" ><br><br><span id="jolaa" class="delte" ><i class="fa fa-minus-circle" aria-hidden="true"></i></span></div>';
		$("div#contentProd").append(producto);
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




		$("span#jolaa").click(function(){
		   var divP = $(this).parent("div").parent("div").remove();
		   divP.remove();
		   divP.siblings("div.clear").remove();
		});
	});				

	

	



	/**---------**/

	$("span.toggleMenu").click(function (){
       	$("#menu").toggleClass("w0");
       	$("nav.contentMenu").toggleClass("w0");
       	$("div.panelContainer").toggleClass("ml0");
    });


	$('#tableUsers').DataTable();	

	$("span.showInfo").click(function () {
		$(".infoUser").toggleClass("hidden");
		//alert();		// body...
	});
	//REMISIONES

	



});

$("div#example-manipulation").steps({
    headerTag: "h3",
    bodyTag: "section",
    enableAllSteps: true,
    enablePagination: false
});

$("#remision-div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical"
});