<?php 
	date_default_timezone_set('America/El_Salvador'); 
	
	function fechaC(){
		$mes = array("","Enero", 
					  "Febrero", 
					  "Marzo", 
					  "Abril", 
					  "Mayo", 
					  "Junio", 
					  "Julio", 
					  "Agosto", 
					  "Septiembre", 
					  "Octubre", 
					  "Noviembre", 
					  "Diciembre");
		$dia = array ("Domingo",
						"Lunes",
						"Martes",
						"Miercoles",
						"Jueves",
						"Viernes",
						"sabado");
		
		return $dia[date('w')].", ". date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}
	
	

 ?>