$(document).ready(function () {
	//swal("Hello world!");

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
});
function modalBed(){
	$("#bgBlack").fadeIn('fast');
	$(".containerForm").fadeIn('fast');
}
function closeModal(){
	$("#bgBlack").fadeOut('fast');
	$(".containerForm").fadeOut('fast');
}
function modalUser(){
	$("#bgBlack").fadeIn('fast');
	$(".containerForm").fadeIn('fast');
}
