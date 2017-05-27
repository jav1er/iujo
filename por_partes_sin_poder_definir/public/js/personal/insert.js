$(document).ready(function() {  
     setTimeout(function(){
alert("dfgc")

    load('referencia','estado_civil',false);
	load('referencia','sexo',false);
    load('referencia','codigo_tlf1',false);
     load('referencia','codigo_tlf2',false);
    load('referencia','codigo_tlf3',false);
  
    load('referencia','tipo_social1',false); 
    load('referencia','tipo_social2',false);
    load('referencia','tipo_social3',false);
   
    /*Sólo estaba "estado"*/
    load('direccion','estado',false);
    load('direccion','municipio',false);
    /*Sólo estaba "estado"*/
    /*No aparecía ni estado1, ni municipio1 ni parroquia1*/
    load('direccion','estado1',false);
    load('direccion','municipio1',false);
    load('direccion','parroquia1',false);
    //     tabla        campo    select    valor
    load2('direccion','estado','estado1',false);
    //load2('discapacidades','discapacidad','tipo_discapacidad1',false);
    load2('referencia','seguro','tipo_seguro1',false);
    load2('referencia','sexo','sexo_referencia1',false);
    load2('referencia','referencia_familiar','nexo1',false);
     load2('referencia','carrera','carrera1',false);
    
    load2('referencia','codigo_tlf','codigo_tlf1referencia1',false);
  
   load('referencia','codigo_tlf1referencia1',false);
   load('referencia','codigo_tlf1referencia2',false);
   load('referencia','codigo_tlf1referencia3',false);



    load2('referencia','formacion_academica','formacion_academica1',false);
    load2('referencia','status_formacion','status_formacion1',false);
    load2('referencia','semestre','semestre1',false);

    load2('materia','nombre','materia1',false)
    load2('periodo','periodo','periodo_academico1',false)

 
 load2('discapacidades' ,'discapacidad', 'tipo_discapacidad1referencia1',false);
    
    load('discapacidades','tipo_discapacidad1referencia1',false);
    load('discapacidades','tipo_discapacidad1referencia2',false);
    load('discapacidades','tipo_discapacidad1referencia3',false);
    /*No aparecía ni estado1, ni municipio1 ni parroquia1*/
    load('discapacidades','tipo_discapacidad1',false);
    load('referencia','tipo_seguro',false);
	load('referencia','status_formacion',false);
	load('referencia','referencia_familiar',false);
	load('referencia','referencia_personal',false);
    load('referencia','tipo_contratacion',false); 
    load('referencia','departamento',false);
    load('referencia','tipo_empleado',false); 
	load('referencia','salarios',false); 
	load('referencia','carrera',false);
	load('referencia','semestre',false);
	load('referencia','cargo',false);
    load('referencia','formacion_academica',false);

	},100);

	/*load('referencia','tipo_persona',false);s
	load('referencia','codigo_tlf',false);*/


	$('#estado').change(function(event) {
		var valor = $('#estado').val();
		$('#parroquia').empty();
		
		load('direccion','municipio',valor);
		$('#parroquia').append('<option selected disabled>Seleccione..</option>');
	});


	$('#municipio').change(function(event) {
		var valor = $('#municipio').val();
		load('direccion','parroquia',valor);
		
	});

 $('#estado1').change(function(event) {
		var valor = $('#estado1').val();
		$('#parroquia1').empty();
		
		load2('direccion','municipio','municipio1',valor);
		$('#parroquia1').append('<option selected disabled>Seleccione..</option>');
	});


	$('#municipio1').change(function(event) {
		var valor = $('#municipio1').val();
		//alert(valor);
		load2('direccion','parroquia','parroquia1',valor);
		$('#parroquia1').append('<option selected disabled>Seleccione..</option>');
	});

		$('#parroquia1').change(function(event) {
		var valor = $('#parroquia1').val();		
	});


 
	$('#status_formacion1').change(function(event) 

    {
		var status = $('#status_formacion1').val();
		$('#campos').empty();
        

        switch(status){


            case '186':

            $('#campos').append(
                 '<div class="col-md-4"> <br>'+
                    '<div class="form-group">'+
                        '<label class="control-label">Nombre de la Formaci&oacute;n Acad&eacute;mica</label>'+
                        '<input type="text" class="form-control" name="nombre_titulo" id="nombre_titulo">'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Inicio de la Formaci&oacute;n Acad&eacute;mica</label>'+
                        '<input type="date" class="form-control" name="fecha_inicio_formacion" id="fecha_inicio_formacion">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-4">'+
                    '<div class="form-group">'+
                        '<label class="control-label">Instituto Emisor del T&iacute;tulo/Certificado</label>'+
                        '<input type="text" class="form-control" name="instituto_emisor_titulo" id="instituto_emisor_titulo">'+
                    '</div>'+

                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Fin de la Formaci&oacute;n Acad&eacute;mica</label>'+
                       '<input type="date" class="form-control" name="fecha_culminacion_formacion" id="fecha_culminacion_formacion">'+
                    '</div>'+
                '</div>'+
                    '<br>'+
                '<div class="col-md-4">'+
                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Emisi&oacute;n del T&iacute;tulo/Certificado</label>'+
                        '<input type="date" class="form-control" name="fecha_emision_titulo" id="fecha_emision_titulo">'+
                    '</div>'+
                     '<div class="form-group">'+
                                                    '<label class="control-label">profecion</label><br>'+
                                                    '<select class="form-control" name="tipo_formacion1" id="formacion_academica11" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Formaci&oacute;n">'+
                                                       
                                                    '</select>'+
                                                '</div>'+

                '</div>'
            );

            break;

            default:

            $('#campos').append(
                 '<div class="col-md-4"> <br>'+
                    '<div class="form-group">'+
                        '<label class="control-label">Nombre de la Formaci&oacute;n Acad&eacute;mica</label>'+
                        '<input type="text" class="form-control" name="nombre_titulo" id="nombre_titulo">'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Inicio de la Formaci&oacute;n Acad&eacute;mica</label>'+
                        '<input type="date" class="form-control" name="fecha_inicio_formacion" id="fecha_inicio_formacion">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-4">'+
                    '<div class="form-group">'+
                        '<label class="control-label">Instituto Emisor del T&iacute;tulo/Certificado</label>'+
                        '<input type="text" class="form-control" name="instituto_emisor_titulo" id="instituto_emisor_titulo">'+
                    '</div>'+

                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Fin de la Formaci&oacute;n Acad&eacute;mica</label>'+
                       '<input type="date" class="form-control" name="fecha_culminacion_formacion" id="fecha_culminacion_formacion" disabled>'+
                    '</div>'+
                '</div>'+
                    '<br>'+
                '<div class="col-md-4">'+
                    '<div class="form-group">'+
                        '<label class="control-label">&Uacute;ltimo Nivel/Per&iacute;odo Cursado</label>'+
                        '<input type="text" class="form-control" name="ultimo_nivel_formacion" id="ultimo_nivel_formacion">'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<label class="control-label">Fecha de Emisi&oacute;n del T&iacute;tulo/Certificado</label>'+
                        '<input type="date" class="form-control" name="fecha_emision_titulo" id="fecha_emision_titulo" disabled>'+
                    '</div>'+
                '</div>'
            );

            break;
        }
	});


});// fin del ready
