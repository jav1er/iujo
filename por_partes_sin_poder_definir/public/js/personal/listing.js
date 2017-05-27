jQuery(document).ready(function($) {
	$('#tlf').modal();
});

function consulta(id,tabla) {
	//alert(id);
	$.ajax({
		url: BASE_URL+'main/consulta/'+tabla+'/'+id,
		type: 'post',
		dataType: 'json',
		
		
	})
	.done(function(data) {
		if (tabla == 'telefono') {
			$('#valores').empty();

			for (var i = 0; i < data.length; i++) {
					
				$('#valores').append('<p>Telefono: '+data[0][2]+'-'+data[0][3]+'.</p>');
				
			}
		}else{
			$('#valores').empty();
			$('#valores').append('<p>Correo: '+data[0][1]+'.</p>');
			for (var i = 0; i < data.length; i++) {
					
				$('#valores').append('<p>Red social: '+data[0][5]+'. Cuenta: '+data[0][4]+'</p>');
				
			}
		}
	})
	
}

function datosPersonales(id){
	$.ajax({
		url: BASE_URL+'main/consulta/'+tabla+'/'+id,
		type: 'post',
		dataType: 'json',
		
		
	})
	.done(function(data) {
		$('#paso1').empty();
		$('#paso1').append(
			'<fieldset>'+
                '<legend><h3><label class="control-label">Datos Personales</label></h3></legend>'+
            '</fieldset>'+
            '<br>'+

            '<div class="col-md-4">'+
                
                '<div class="form-group" class="cssToolTip">'+
                    '<label class="control-label">C&eacute;dula de Identidad</label>'+
                    '<input type="text" class="form-control" name="cedula" id="cedula" min="1" placeholder="C&eacute;dula de Identidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la C&eacute;dula de Identidad">'+
                '</div>'+
                '<div class="form-group">'+
                    '<label class="control-label">Primer Nombre</label>'+
                    '<input type="text" class="form-control" name="nombre1" id="nombre1" maxlength="100" placeholder="Primer Nombre" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Primer Nombre">'+
                '</div>'
                '<div class="form-group">'+
                    '<label class="control-label">Primer Apellido</label>'+
                    '<input type="text" class="form-control" name="apellido1" id="apellido1" maxlength="100" placeholder="Primer Apellido" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Primer Apellido">'+
                '</div>'+
                '<div class="form-group">'+
                    '<label class="control-label">Fecha de Nacimiento</label>'+
                    '<input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" maxlength="100" placeholder="Fecha de Nacimiento" value="<?php echo date('Y-m-d',$fechanacimientomax); ?>" max="<?php echo date('Y-m-d',$fechanacimientomax); ?>" min="<?php echo date('Y-m-d',$fechanacimientomin); ?>" data-toggle="tooltip" data-placement="bottom" title="Seleccione la Fecha de Nacimiento">'+
                '</div>'+
               
            '</div>'+
            '<div class="col-md-4">'+
                
                '<div class="form-group">'+
                    '<label class="control-label">Estado Civ&iacute;l</label><br>'+
                    '<select class="form-control" name="estado_civil" id="estado_civil" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Estado Civ&iacute;l">'+

                    '</select>'+
                '</div>'+
                '<div class="form-group">'+
                    '<label class="control-label">Segundo Nombre</label>'+
                    '<input type="text" class="form-control" name="nombre2" id="nombre2" maxlength="100" placeholder="Segundo Nombre" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Segundo Nombre">'+
                '</div>'+
                '<div class="form-group">'+
                    '<label class="control-label">Segundo Apellido</label>'+
                    '<input type="text" class="form-control" name="apellido2" id="apellido2" maxlength="100" placeholder="Segundo Apellido" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Primer Apellido">'+
                '</div>'+
                 '<div class="form-group">'+
                    '<label class="control-label">G&eacute;nero</label><br>'+
                    '<select class="form-control" name="sexo" id="sexo" data-toggle="tooltip" data-placement="bottom" title="Seleccione el G&eacute;nero">'+
                       
                    '</select>'+
                '</div>'+

            '</div>'+

        '</div>'+
        '<div class="col-xs-12">'+
            '<div class="col-md-5 form-group">'+
                '<label class="control-label">Correo Electr&oacute;nico</label>'+
                '<input type="text" class="form-control" name="correo1" id="correo1" placeholder="cuenta@ejemplo.com" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Correo Electr&oacute;nico">'+
            '</div>'+
        '</div>'+
        '<div class="col-xs-12">'+

            '<div class="col-md-4" id="divcodigoarea">'+
                '<div class="form-group" id="codigoarea1">'+
                    '<label class="control-label">C&oacute;digo de &Aacute;rea</label><br>'+
                    '<select class="form-control" name="codigo_area1" id="codigo_tlf1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
                          
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-4" id="divnumerotelefono">'+
                '<div class="form-group" id="numerotelefono1">'+
                    '<label class="control-label">N&uacute;mero de Tel&eacute;fono</label><br>'+
                    '<input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
                '</div>'+
            '</div>'+
            
        '</div>'+
        '<div class="col-xs-12">'+

            '<div class="col-md-4" id="divtiporedsocial">'+
                '<div class="form-group" id="tiporedsocial1">'+
                    '<label class="control-label">Red Social</label>'+
                    '<select class="form-control" name="tipo_red_social1" id="tipo_social1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Red Social">'+
                           
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-4" id="divcuentaredsocial">'+
                '<div class="form-group" id="cuentaredsocial1">'+
                    '<label class="control-label">Cuenta</label>'+
                    '<input type="text" class="form-control" name="red_social1" id="red_social1" placeholder="cuenta@ejemplo.com" data-toggle="tooltip" data-placement="bottom" title="Ingrese la Cuenta de Red Social">'+
                '</div>'+
            '</div>'+

        '</div>'+
        '<div class="col-xs-12">'+
            '<div class="col-md-12">'+
                '<br><br>'+
                '<fieldset>'+
                    '<legend><h4><label class="control-label">Lugar de Nacimiento</label></h4></legend>'+
                '</fieldset>'+
            '</div>'+
        '</div>'+

        '<div class="col-xs-12">'+

            '<div class="col-md-4 form-group">'+
                '<label class="control-label">Estado</label>'+
                '<select class="form-control" name="estado_nacimiento" id="estado" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Estado de Nacimiento">'+
            
                '</select>'+
            '</div>'+
            '<div class="col-md-4 form-group">'+
                '<label class="control-label">Municipio</label>'+
                '<select class="form-control" name="municipio_nacimiento" id="municipio" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Municipio de Nacimiento">'+

                '</select>'+
            '</div>'+
            
        '</div>'+
        '<div class="col-xs-12">'+
            '<div class="col-md-12">'
                '<br><br>'+
                '<fieldset>'+
                    '<legend><h4><label  class="control-label">Direcci&oacute;n de Casa/Departamento</label></h4></legend>'+
                '</fieldset>'+
            '</div>'+
        '</div>'+
        '<div class="col-xs-12">'+

            '<div class="col-md-4 form-group">'+
                '<label class="control-label">Estado</label><br>'+
                '<select class="form-control" name="estado_casa" id="estado1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Estado donde reside">'+
                   
                '</select>'+
            '</div>'+
            '<div class="col-md-4 form-group">'+
                '<label class="control-label">Municipio</label><br>'+
                '<select class="form-control" name="municipio_casa" id="municipio1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Municipio donde reside">'+
                    
                '</select>'+
            '</div>'+
            '<div class="col-md-4 form-group">'+
                '<label class="control-label">Parroquia</label><br>'+
                '<select class="form-control" name="parroquia_casa" id="parroquia1" data-toggle="tooltip" data-placement="bottom" title="Seleccione la Parroquia donde reside">'+
                    
                '</select>'+
            '</div>'+

        '</div>'+
        '<div class="col-xs-12">'+
            '<div class="col-md-12 form-group">'+
                '<label class="control-label">Direcci&oacute;n Exacta Donde Reside</label><br>'+
                '<textarea class="form-control" name="direccion_casa" id="direccion_casa" data-toggle="tooltip" data-placement="bottom" title="Ingrese la Direcci&oacute;n Exacta donde reside"></textarea>'+
            '</div>'+
        '</div>')
	})
}