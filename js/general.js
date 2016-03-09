$(document).ready(function()){
	$("body").on("click","label#terapeutas",function(){
		$.ajax({
			url:"php/terapeutas.php",
			success:function(rspta){
				$("#tablas").html(rspta);
			}
		});
	});
}
$(document).ready(function()){
	$("body").on("click","label#clientes",function(){
		$.ajax({
			url:"php/clientes.php",
			success:function(rspta){
				$("#tablas").html(rspta);
			}
		});
	});
}
$(document).ready(function()){
	$("body").on("click","label#opciones",function(){
		$.ajax({
			url:"php/login.php",
			success:function(rspta){
				$("#tablas").html(rspta);
			}
		});
	});
}
function openVentana(){	
	$(".modal , .ventana").fadeIn();
}
function closeVentana(){
	$(".ventana , .modal").slideUp("fast");
}
//ocultar el modal al presionar la tecla ESC
$(document).keyup(function(event){
    if(event.which==27)
    {
        $(".ventana , .modal").slideUp();
    }
});