$(function(){
	// Lista de Continentes
	$.post( 'continentes.php' ).done( function(respuesta){
		$( '#continentes' ).html( respuesta );
	});

	// lista de Paises	
	$('#continentes').change(function(){
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( 'paises.php', { continente: el_continente} ).done( function( respuesta ){
			$( '#paises' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	$( '#paises' ).change( function(){
		var pais = $(this).children('option:selected').html();
		/*alert( 'SELECCIONO EL CCT :' + pais );*/
	});

})
