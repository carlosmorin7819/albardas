$(document).ready(function () {
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
	})



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
function modalBed(){
	$("#bgBlack").fadeIn('fast');
	$(".containerForm").fadeIn('fast');
}

function modalUser(){
	$("#bgBlack").fadeIn(50);
	$(".containerForm").fadeIn('fast');
}


function closeModal2(){
	
	$("#bgBlack2").fadeOut('fast');
	$(".modalUpdate").fadeOut('fast');
}
function closeModal(){

	$("#bgBlack").fadeOut('fast');
	$(".containerForm ").fadeOut('fast');
}
