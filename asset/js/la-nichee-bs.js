$(function(){

	//tooltip
	$('[data-toggle="tooltip"]').tooltip();

	//CAROUSEL
	$('.carousel').carousel({ interval: 2200 });

	//GALERIE -- Plugin lightGallery
	$("#lightGallery").lightGallery();

	//Activer modal bootstrap

	$("body").on("hidden.bs.modal", ".modal", function () {
  		$(this).removeData("bs.modal");
	});

	$("#plan-01").click(function() {
		$("#modal-plans").modal({ remote: "view/plan/modal-plan-rdc-01.php" } ,"show");
	});

	$("#plan-02").click(function() {
		$("#modal-plans").modal({ remote: "view/plan/modal-plan-rdc-02.php" }, "show");
	});

	$("#plan-03").click(function() {
		$("#modal-plans").modal({ remote: "view/plan/modal-plan-etage.php" }, "show");
	});
});