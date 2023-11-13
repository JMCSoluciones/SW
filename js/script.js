
function limpiarNotificacion(caja){
	var notificacion = document.querySelector('#'+caja);
	$('#'+caja).removeClass("notificacion-exito");
	$('#'+caja).removeClass("notificacion-error");
	notificacion.innerHTML="";
	console.log(notificacion);
}
function confirmacion(){
    var decision = confirm("¿Son correctos los datos?");    
    if(decision==true){
        return true;
    }else{ 
       return false; 
    }
}

