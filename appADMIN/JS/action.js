$(document).ready(function () {
	function deleteFind(obj){
		alert();
	}

	function modalBed(){
		$("#bgBlack").fadeIn('fast');
		$(".containerForm").fadeIn('fast');
	}

	function modalUser(obj){
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





	var a=0; 
	$("button#addProducto").click(function (){
        a+=1;
        stop(a);
        var producto = '<div id="rowP'+a+'" class="row rowp mTop5"><div class="col-lg-1 "><div class="block"><input type="hidden" name="type_form'+a+'" value="productos">';
		producto += '<label for="">Cantidad</label><input type="text" class="inputStyle" name="caant'+a+'"></div></div><div class="col-lg-5 "><div class="block"><label for="">Producto</label>';
		producto += '<input type="text" name="prod'+a+'" class="inputStyle"></div></div><div class="col-lg-1 "><div class="block"><label for="">KG</label>';
		producto += '<input type="text" name="kg'+a+'" class="inputStyle"></div></div><div class="col-lg-2 "><div class="block"><label for="">Precio</label>';
		producto += '<input type="text" name="price'+a+'" class="inputStyle"></div></div><div class="col-lg-2 "><div class="block"><label for="">Importe</label>';
		producto += '<input type="text" name="import'+a+'" class="inputStyle"></div></div><div class="col-lg-1 h60" ><br><br><span id="jolaa" class="delte" ><i class="fa fa-minus-circle" aria-hidden="true"></i></span></div>';
		$("div#contentProd").append(producto);

		$("span#jolaa").click(function(){
		   var divP = $(this).parent("div").parent("div").remove();
		   divP.remove();
		   divP.siblings("div.clear").remove();
		   //('li#sub1').parents('ul');
		});
	});				

	

	

	$("#example-manipulation").steps({
	    headerTag: "h3",
	    bodyTag: "section",
	    enableAllSteps: true,
	    enablePagination: false
	});

	$("input.holis").change(function(){
            var val = $(this).val();

            if (val == "full") {
            	$("div#formFull").removeClass("hidden");
            }else{
            	$("div#formFull").addClass("hidden");
            }
        });
	//swal("Hello world!");
/**SCRIPTS PARA LOS TABS DE LOS FORMULARIOS**/

	$(".tab_content").hide();
    $(".tab_content:first").show();

  	/* if in tab mode */
    $("ul.tabs li").click(function() {
      	$(".tab_content").hide();
      	var activeTab = $(this).attr("rel"); 
      	$("#"+activeTab).fadeIn();		
		
      	$("ul.tabs li").removeClass("active");
      	$(this).addClass("active");

	  	$(".tab_drawer_heading").removeClass("d_active");
	  	$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
    });

	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      	$(".tab_content").hide();
      	var d_activeTab = $(this).attr("rel"); 
      	$("#"+d_activeTab).fadeIn();
	  
	  	$(".tab_drawer_heading").removeClass("d_active");
      	$(this).addClass("d_active");
	  
	  	$("ul.tabs li").removeClass("active");
	  	$("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");

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

	$(".displaySubmenu").click(function () {
		//alert();
		   //event.preventDefault();
		$(this).find("ul.submenu").toggleClass("haAuto");
	});

	$("a.noEvent").click(function (){
		//alert();
		event.preventDefault();
	});

	var form = $("#example-form");
	form.validate({
	    errorPlacement: function errorPlacement(error, element) { element.before(error); },
	    rules: {
	        confirm: {
	            equalTo: "#password"
	        }
	    }
	});

	form.children("div").steps({
	    headerTag: "h3",
	    bodyTag: "section",
	    transitionEffect: "slideLeft",
	    onStepChanging: function (event, currentIndex, newIndex)
	    {
	        form.validate().settings.ignore = ":disabled,:hidden";
	        return form.valid();
	    },
	    onFinishing: function (event, currentIndex)
	    {
	        form.validate().settings.ignore = ":disabled";
	        return form.valid();

	    },
	    onFinished: function (event, currentIndex)
	    {
	    	$("input#formDriver").trigger("click");
	        alert("Submitted!");

	    }
	});
});

