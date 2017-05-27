function load(tabla,item,valor){
		var select = $('#'+item);
	//alert(select);
	$.ajax({
		url: BASE_URL+'main/get/'+tabla+'/'+item+'/'+valor,
		type: 'post',
		dataType: 'json',
		
		
	})
	.done(function(data) {
		//alert("Funciona en el select estado");
		select.empty();
		select.append('<option selected disabled value="0">Seleccione...</option>');
	for (var i = 0; i < data.length; i++) {

		select.append('<option value="'+data[i]['id']+'">'+data[i][1]+'</option>');

	};
		
	})
	.fail(function() {
		//alert("Error en el select "+item);
	})
	.always(function() {
			
	});

}

function load2(tabla,campo,idSelect,valor){
		var select = $('#'+idSelect);
	//alert(BASE_URL+'main/get/'+tabla+'/'+campo+'/'+valor);
	$.ajax({
		url: BASE_URL+'main/get/'+tabla+'/'+campo+'/'+valor,
		type: 'post',
		dataType: 'json',
		
		
	})
	.done(function(data) {
		//alert(JSON.stringify(data));
		//alert("Funciona en el select estado");
		select.empty();
		select.append('<option selected disabled value="0">Seleccione...</option>');
	for (var i = 0; i < data.length; i++) {
		select.append('<option value="'+data[i]['id']+'">'+data[i][1]+'</option>');

	};
		
	})
	.fail(function() {
		//alert("Error en el select "+idSelect);
	})
	.always(function() {
			
	});

}


function borrarTelefono(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		////alert ('Eliminamos el Teléfono Número '+num);
		contadorp = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorp+",'"+tipopersona+"'";
		$('#codigoarea'+num).remove();
		$('#numerotelefono'+num).remove();
		$('#agregartelefono'+num).remove();
		$('#divagregartelefono').append('<div class="form-group" id="agregartelefono'+contadorp+'"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorp).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
			'</button>');
		}
		$('#agregartelefono'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		////alert ('El contadorse encuentra ahora en '+contadorp);
	}
	else if (tipopersona == 'Referencia1') 
	{
		////alert ('Eliminamos el Teléfono Número '+num);
		contadorr1 = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorr1+",'"+tipopersona+"'";
		$('#codigoarea'+num+'referencia1').remove();
		$('#numerotelefono'+num+'referencia1').remove();
		$('#agregartelefono'+num+'referencia1').remove();
		$('#divagregartelefonoreferencia1').append('<div class="form-group" id="agregartelefono'+contadorr1+'referencia1"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorr1+'referencia1').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr1+
			'</button>');
		}
		$('#agregartelefono'+contadorr1+'referencia1').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		////alert ('El contadorse encuentra ahora en '+contadorr1);
	}
	else if (tipopersona == 'Referencia2') 
	{
		////alert ('Eliminamos el Teléfono Número '+num);
		contadorr2 = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorr2+",'"+tipopersona+"'";
		$('#codigoarea'+num+'referencia2').remove();
		$('#numerotelefono'+num+'referencia2').remove();
		$('#agregartelefono'+num+'referencia2').remove();
		$('#divagregartelefonoreferencia2').append('<div class="form-group" id="agregartelefono'+contadorr2+'referencia2"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorr2+'referencia2').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr2+
			'</button>');
		}
		$('#agregartelefono'+contadorr2+'referencia2').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		////alert ('El contadorse encuentra ahora en '+contadorr2);
	}
	else if (tipopersona == 'Referencia3') 
	{
		//alert ('Eliminamos el Teléfono Número '+num);
		contadorr3 = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorr3+",'"+tipopersona+"'";
		$('#codigoarea'+num+'referencia3').remove();
		$('#numerotelefono'+num+'referencia3').remove();
		$('#agregartelefono'+num+'referencia3').remove();
		$('#divagregartelefonoreferencia3').append('<div class="form-group" id="agregartelefono'+contadorr3+'referencia3"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorr3+'referencia3').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr3+
			'</button>');
		}
		$('#agregartelefono'+contadorr3+'referencia3').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr3);
	}
	else if (tipopersona == 'Referencia4') 
	{
		//alert ('Eliminamos el Teléfono Número '+num);
		contadorr4 = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorr4+",'"+tipopersona+"'";
		$('#codigoarea'+num+'referencia4').remove();
		$('#numerotelefono'+num+'referencia4').remove();
		$('#agregartelefono'+num+'referencia4').remove();
		$('#divagregartelefonoreferencia4').append('<div class="form-group" id="agregartelefono'+contadorr4+'referencia4"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorr4+'referencia4').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr4+
			'</button>');
		}
		$('#agregartelefono'+contadorr4+'referencia4').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr4);
	}
	else if (tipopersona == 'Referencia5') 
	{
		//alert ('Eliminamos el Teléfono Número '+num);
		contadorr5 = parseInt(num)-parseInt(1);
		var parametrostelefono = contadorr5+",'"+tipopersona+"'";
		$('#codigoarea'+num+'referencia5').remove();
		$('#numerotelefono'+num+'referencia5').remove();
		$('#agregartelefono'+num+'referencia5').remove();
		$('#divagregartelefonoreferencia5').append('<div class="form-group" id="agregartelefono'+contadorr5+'referencia5"><br>');
		if (num > 2)
		{
			$('#agregartelefono'+contadorr5+'referencia5').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr5+
			'</button>');
		}
		$('#agregartelefono'+contadorr5+'referencia5').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr5);
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función borrarTelefono de la vista...');
	}
}

function agregarTelefono(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		if (num < 3)
		{
			//alert('Teléfono anterior: '+num);
			var contadorp = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorp+"','"+tipopersona+"'";
			//alert('Crearemos el Teléfono '+contadorp);
			$('#divcodigoarea').append('<div class="form-group" id="codigoarea'+contadorp+'">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorp+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorp+'" id="codigo_tlf'+contadorp+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefono').append('<div class="form-group" id="numerotelefono'+contadorp+'">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorp+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorp+'" id="telefono'+contadorp+'" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefono').append('<div class="form-group" id="agregartelefono'+contadorp+'">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
				'</button>');

			$('#agregartelefono'+num).remove();
			load('referencia','codigo_tlf'+contadorp,false);

			if (num < 2)
			{
				$('#agregartelefono'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorp).append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else if (tipopersona == 'Referencia1') 
	{
		if (num < 3)
		{
			//alert('Teléfono anterior: '+num);
			var contadorr1 = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorr1+"','"+tipopersona+"'";
			//alert('Crearemos el Teléfono '+contadorr1);
			$('#divcodigoareareferencia1').append('<div class="form-group" id="codigoarea'+contadorr1+'referencia1">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorr1+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorr1+'referencia1" id="codigo_tlf1'+contadorr1+'referencia1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefonoreferencia1').append('<div class="form-group" id="numerotelefono'+contadorr1+'referencia1">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorr1+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorr1+'referencia1" id="telefono'+contadorr1+'referencia1" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefonoreferencia1').append('<div class="form-group" id="agregartelefono'+contadorr1+'referencia1">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr1+
				'</button>');

			$('#agregartelefono'+num+'referencia1').remove();
			load2('referencia','codigo_tlf','codigo_tlf1'+contadorr1+'referencia1',false);
	

			if (num < 2)
			{
				$('#agregartelefono'+contadorr1+'referencia1').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorr1+'referencia1').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else if (tipopersona == 'Referencia2') 
	{
		if (num < 3)
		{
			alert('Teléfono anterior: '+num);
			var contadorr2 = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorr2+"','"+tipopersona+"'";
			alert('Crearemos el Teléfono '+contadorr2);
			$('#divcodigoareareferencia2').append('<div class="form-group" id="codigoarea'+contadorr2+'referencia2">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorr2+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorr2+'referencia2" id="codigo_tlf'+contadorr2+'referencia2" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefonoreferencia2').append('<div class="form-group" id="numerotelefono'+contadorr2+'referencia2">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorr2+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorr2+'referencia2" id="telefono'+contadorr2+'referencia2" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefonoreferencia2').append('<div class="form-group" id="agregartelefono'+contadorr2+'referencia2">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr2+
				'</button>');

			$('#agregartelefono'+num+'referencia2').remove();
			load2('referencia','codigo_tlf','codigo_tlf'+contadorr2+'referencia2',false);
			//load('referencia','codigo_tlf'+contadorr2+'referencia2',false);
	
		  //load2('referencia','codigo_tlf','codigo_tlf1'+contadorr1+'referencia1',false);
			if (num < 2)
			{
				$('#agregartelefono'+contadorr2+'referencia2').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorr2+'referencia2').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else if (tipopersona == 'Referencia3') 
	{
		if (num < 3)
		{
			alert('Teléfono anterior: '+num);
			var contadorr3 = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorr3+"','"+tipopersona+"'";
			alert('Crearemos el Teléfono '+contadorr3);
			$('#divcodigoareareferencia3').append('<div class="form-group" id="codigoarea'+contadorr3+'referencia3">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorr3+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorr3+'referencia3" id="codigo_tlf'+contadorr3+'referencia3" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefonoreferencia3').append('<div class="form-group" id="numerotelefono'+contadorr3+'referencia3">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorr3+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorr3+'referencia3" id="telefono'+contadorr3+'referencia3" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefonoreferencia3').append('<div class="form-group" id="agregartelefono'+contadorr3+'referencia3">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr3+
				'</button>');

			$('#agregartelefono'+num+'referencia3').remove();
		
		load2('referencia','codigo_tlf','codigo_tlf'+contadorr3+'referencia3',false);
			
			//load('referencia','codigo_tlf'+contadorr3+'referencia3',false);

			if (num < 2)
			{
				$('#agregartelefono'+contadorr3+'referencia3').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorr3+'referencia3').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else if (tipopersona == 'Referencia4') 
	{
		if (num < 3)
		{
			alert('Teléfono anterior: '+num);
			var contadorr4 = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorr4+"','"+tipopersona+"'";
			alert('Crearemos el Teléfono '+contadorr4);
			$('#divcodigoareareferencia4').append('<div class="form-group" id="codigoarea'+contadorr4+'referencia4">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorr4+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorr4+'referencia4" id="codigo_tlf'+contadorr4+'referencia4" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefonoreferencia4').append('<div class="form-group" id="numerotelefono'+contadorr4+'referencia4">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorr4+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorr4+'referencia4" id="telefono'+contadorr4+'referencia4" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefonoreferencia4').append('<div class="form-group" id="agregartelefono'+contadorr4+'referencia4">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr4+
				'</button>');

			$('#agregartelefono'+num+'referencia4').remove();
			load2('referencia','codigo_tlf','codigo_tlf'+contadorr4+'referencia4',false);
			//load('referencia','codigo_tlf'+contadorr4+'referencia4',false);

			if (num < 2)
			{
				$('#agregartelefono'+contadorr4+'referencia4').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorr4+'referencia4').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else if (tipopersona == 'Referencia5') 
	{
		if (num < 3)
		{
			alert('Teléfono anterior: '+num);
			var contadorr5 = parseInt(num)+parseInt(1), parametrostelefono = "'"+contadorr5+"','"+tipopersona+"'";
			alert('Crearemos el Teléfono '+contadorr5);
			$('#divcodigoareareferencia5').append('<div class="form-group" id="codigoarea'+contadorr5+'referencia5">'+
	            '<label class="control-label">C&oacute;digo de &Aacute;rea Nº '+contadorr5+'</label>'+
	            '<select class="form-control" name="codigo_area'+contadorr5+'referencia5" id="codigo_tlf'+contadorr5+'referencia5" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
	                   
	            '</select>'+
            '</div>');
            $('#divnumerotelefonoreferencia5').append('<div class="form-group" id="numerotelefono'+contadorr5+'referencia5">'+
                '<label class="control-label">N&uacute;mero de Tel&eacute;fono Nº '+contadorr5+'</label>'+
                '<input type="text" class="form-control" name="telefono'+contadorr5+'referencia5" id="telefono'+contadorr5+'referencia5" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
            '</div>');
            $('#divagregartelefonoreferencia5').append('<div class="form-group" id="agregartelefono'+contadorr5+'referencia5">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarTelefono('+parametrostelefono+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr5+
				'</button>');

			$('#agregartelefono'+num+'referencia5').remove();
			load2('referencia','codigo_tlf','codigo_tlf'+contadorr5+'referencia5',false);
		//	load('referencia','codigo_tlf'+contadorr5+'referencia5',false);

			if (num < 2)
			{
				$('#agregartelefono'+contadorr5+'referencia5').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrostelefono+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregartelefono'+contadorr5+'referencia5').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Teléfonos por persona');
		}
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función agregarTelefono de la vista...');
	}
}

function borrarRedsocial(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		////alert ('Eliminamos la Red Social Número '+num);
		contadorp = parseInt(num)-parseInt(1);
		var parametrosredsocial = contadorp+",'"+tipopersona+"'";
		$('#tiporedsocial'+num).remove();
		$('#redsocial'+num).remove();
		$('#agregarredsocial'+num).remove();
		$('#divagregarredsocial').append('<div class="form-group" id="agregarredsocial'+contadorp+'"><br>');
		if (num > 2)
		{
			$('#agregarredsocial'+contadorp).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarRedsocial('+parametrosredsocial+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
			'</button>');
		}
		$('#agregarredsocial'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarRedsocial('+parametrosredsocial+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorp);
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función borrarRedsocial de la vista...');
	}
}

function agregarRedsocial(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		if (num < 3)
		{
			//alert('Red Social anterior: '+num);
			var contadorp = parseInt(num)+parseInt(1), parametrosredsocial = "'"+contadorp+"','"+tipopersona+"'";
			//alert('Crearemos la Red Social Número '+contadorp);
			$('#divtiporedsocial').append('<div class="form-group" id="tiporedsocial'+contadorp+'">'+
	            '<label class="control-label">Red Social Nº '+contadorp+'</label>'+
	            '<select class="form-control" name="tipo_red_social'+contadorp+'" id="tipo_social'+contadorp+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Red Social">'+
	                   
	            '</select>'+
            '</div>');
            $('#divcuentaredsocial').append('<div class="form-group" id="redsocial'+contadorp+'">'+
                '<label class="control-label">Cuenta Nº '+contadorp+'</label>'+
                '<input type="text" class="form-control" name="red_social'+contadorp+'" id="red_social'+contadorp+'" placeholder="cuenta@ejemplo.com" data-toggle="tooltip" data-placement="bottom" title="Ingrese la Cuenta de Red Social">'+
            '</div>');
            $('#divagregarredsocial').append('<div class="form-group" id="agregarredsocial'+contadorp+'">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarRedsocial('+parametrosredsocial+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
				'</button>');

			$('#agregarredsocial'+num).remove();
 			load('referencia','tipo_social'+contadorp,false);
		  //load('referencia','codigo_tlf'+contadorp,false);
			if (num < 2)
			{
				$('#agregarredsocial'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarRedsocial('+parametrosredsocial+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregarredsocial'+contadorp).append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar tres (3) Redes Sociales por persona');
		}
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función agregarRedsocial de la vista...');
	}

}


function borrarEnfermedad(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		//alert ('Eliminamos la Enfermedad Número '+num);
		contadorp = parseInt(num)-parseInt(1);
		var parametrosenfermedad = contadorp+",'"+tipopersona+"'";
		$('#nombreenfermedad'+num).remove();
		$('#tratamientoenfermedad'+num).remove();
		$('#agregarenfermedad'+num).remove();
		$('#divagregarenfermedad').append('<div class="form-group" id="agregarenfermedad'+contadorp+'"><br>');
		if (num > 2)
		{
			$('#agregarenfermedad'+contadorp).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarEnfermedad('+parametrosenfermedad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
			'</button>');
		}
		$('#agregarenfermedad'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarEnfermedad('+parametrosenfermedad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorp);
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función borrarEnfermedad de la vista...');
	}
}

function agregarEnfermedad(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		if (num < 5)
		{
			alert('Enfermedad anterior: '+num);
			var contadorp = parseInt(num)+parseInt(1), parametrosenfermedad = "'"+contadorp+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorp);
			$('#divenfermedad').append('<div class="form-group" id="nombreenfermedad'+contadorp+'"><br>'+
                '<label class="control-label">Enfermedad Nº '+contadorp+'</label>'+
                '<input type="text" class="form-control" name="enfermedad'+contadorp+'" id="enfermedad'+contadorp+'" placeholder="Nombre de la Enfermedad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la Enfermedad que posee">'+
            '</div>');
            $('#divtratamientoenfermedad').append('<div class="form-group" id="tratamientoenfermedad'+contadorp+'">'+
                '<label class="control-label">Tratamiento de la Enfermedad Nº '+contadorp+'</label>'+
                '<textarea class="form-control" name="tratamiento_enfermedad'+contadorp+'" id="tratamiento_enfermedad'+contadorp+'" placeholder="Tratamiento de la Enfermedad" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Tratamiento de la Enfermedad"></textarea>'+
            '</div>');
            $('#divagregarenfermedad').append('<div class="form-group" id="agregarenfermedad'+contadorp+'">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarEnfermedad('+parametrosenfermedad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
				'</button>');

            $('#agregarenfermedad'+num).remove();

			if (num < 4)
			{
				$('#agregarenfermedad'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarEnfermedad('+parametrosenfermedad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregarenfermedad'+contadorp).append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Enfermedades por persona');
		}
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función agregarEnfermedad de la vista...');
	}
}


function borrarDiscapacidad(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorp = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorp+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num).remove();
		$('#nombrediscapacidad'+num).remove();
		$('#agregardiscapacidad'+num).remove();
		$('#divagregardiscapacidad').append('<div class="form-group" id="agregardiscapacidad'+contadorp+'"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidad'+contadorp).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
			'</button>');
		}
		$('#agregardiscapacidad'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorp);
	}
	else if (tipopersona == 'Referencia1') 
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorr1 = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorr1+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num+'referencia1').remove();
		$('#nombrediscapacidad'+num+'referencia1').remove();
		$('#agregardiscapacidadreferencia1').remove();
		$('#divagregardiscapacidadreferencia1').append('<div class="form-group" id="agregardiscapacidadreferencia1"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidadreferencia1').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr1+
			'</button>');
		}
		$('#agregardiscapacidadreferencia1').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr1);
	}
	else if (tipopersona == 'Referencia2') 
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorr2 = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorr2+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num+'referencia2').remove();
		$('#nombrediscapacidad'+num+'referencia2').remove();
		$('#agregardiscapacidadreferencia2').remove();
		$('#divagregardiscapacidadreferencia2').append('<div class="form-group" id="agregardiscapacidadreferencia2"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidadreferencia2').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr2+
			'</button>');
		}
		$('#agregardiscapacidadreferencia2').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr2);
	}
	else if (tipopersona == 'Referencia3') 
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorr3 = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorr3+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num+'referencia3').remove();
		$('#nombrediscapacidad'+num+'referencia3').remove();
		$('#agregardiscapacidadreferencia3').remove();
		$('#divagregardiscapacidadreferencia3').append('<div class="form-group" id="agregardiscapacidadreferencia3"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidadreferencia3').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr3+
			'</button>');
		}
		$('#agregardiscapacidadreferencia3').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr3);
	}
	else if (tipopersona == 'Referencia4') 
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorr4 = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorr4+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num+'referencia4').remove();
		$('#nombrediscapacidad'+num+'referencia4').remove();
		$('#agregardiscapacidadreferencia4').remove();
		$('#divagregardiscapacidadreferencia4').append('<div class="form-group" id="agregardiscapacidadreferencia4"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidadreferencia4').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr4+
			'</button>');
		}
		$('#agregardiscapacidadreferencia4').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr4);
	}
	else if (tipopersona == 'Referencia5') 
	{
		//alert ('Eliminamos la Discapacidad Número '+num);
		contadorr5 = parseInt(num)-parseInt(1);
		var parametrosdiscapacidad = contadorr5+",'"+tipopersona+"'";
		$('#tipodiscapacidad'+num+'referencia5').remove();
		$('#nombrediscapacidad'+num+'referencia5').remove();
		$('#agregardiscapacidadreferencia5').remove();
		$('#divagregardiscapacidadreferencia5').append('<div class="form-group" id="agregardiscapacidadreferencia5"><br>');
		if (num > 2)
		{
			$('#agregardiscapacidadreferencia5').append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr5+
			'</button>');
		}
		$('#agregardiscapacidadreferencia5').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>'+
		'</div>');
		//alert ('El contadorse encuentra ahora en '+contadorr5);
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función borrarDiscapacidad de la vista...');
	}
}

function agregarDiscapacidad(num,tipopersona){
	//alert('Fucking Tipo de Persona: '+tipopersona);
	if (tipopersona == 'Personal')
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorp = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorp+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorp);
			$('#divtipodiscapacidad').append('<div class="form-group" id="tipodiscapacidad'+contadorp+'">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorp+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorp+'" id="tipo_discapacidad'+contadorp+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidad').append('<div class="form-group" id="nombrediscapacidad'+contadorp+'">'+    
                '<label class="control-label">Discapacidad Nº '+contadorp+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorp+'" id="discapacidad'+contadorp+'"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidad').append('<div class="form-group" id="agregardiscapacidad'+contadorp+'">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorp+
				'</button>');

            $('#agregardiscapacidad'+num).remove();
   //bien load('referencia','codigo_tlf'+contadorp,false);
	load('discapacidades','tipo_discapacidad'+contadorp,false);
//load2('discapacidades','discapacidad','tipo_discapacidad'+contadorp,false);
			if (num < 4)
			{
				$('#agregardiscapacidad'+contadorp).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidad'+contadorp).append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else if (tipopersona == 'Referencia1') 
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorr1 = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorr1+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorr1);
			$('#divtipodiscapacidadreferencia1').append('<div class="form-group" id="tipodiscapacidad'+contadorr1+'referencia1">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorr1+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorr1+'referencia1" id="tipo_discapacidad'+contadorr1+'referencia1" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidadreferencia1').append('<div class="form-group" id="nombrediscapacidad'+contadorr1+'referencia1">'+    
                '<label class="control-label">Discapacidad Nº '+contadorr1+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorr1+'referencia1" id="discapacidad'+contadorr1+'referencia1"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidadreferencia1').append('<div class="form-group" id="agregardiscapacidadreferencia1">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr1+
				'</button>');

            $('#agregardiscapacidadreferencia1').remove();
	
	//bienload('discapacidades','tipo_discapacidad'+contadorr1+'referencia',false);
	
	load2('discapacidades','discapacidad','tipo_discapacidad'+contadorr1+'referencia1',false);
			if (num < 4)
			{
				$('#agregardiscapacidadreferencia1').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidadreferencia1').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else if (tipopersona == 'Referencia2') 
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorr2 = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorr2+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorr2);
			$('#divtipodiscapacidadreferencia2').append('<div class="form-group" id="tipodiscapacidad'+contadorr2+'referencia2">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorr2+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorr2+'referencia2" id="tipo_discapacidad'+contadorr2+'referencia2" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidadreferencia2').append('<div class="form-group" id="nombrediscapacidad'+contadorr2+'referencia2">'+    
                '<label class="control-label">Discapacidad Nº '+contadorr2+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorr2+'referencia2" id="discapacidad'+contadorr2+'referencia2"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidadreferencia2').append('<div class="form-group" id="agregardiscapacidadreferencia2">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr2+
				'</button>');

            $('#agregardiscapacidadreferencia2').remove();

		//load('discapacidades','tipo_discapacidad1referencia'+contadorr2,false);
		load2('discapacidades','discapacidad','tipo_discapacidad'+contadorr2+'referencia2',false);	
			

			if (num < 4)
			{
				$('#agregardiscapacidadreferencia2').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidadreferencia2').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else if (tipopersona == 'Referencia3') 
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorr3 = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorr3+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorr3);
			$('#divtipodiscapacidadreferencia3').append('<div class="form-group" id="tipodiscapacidad'+contadorr3+'referencia3">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorr3+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorr3+'referencia3" id="tipo_discapacidad'+contadorr3+'referencia3" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidadreferencia3').append('<div class="form-group" id="nombrediscapacidad'+contadorr3+'referencia3">'+    
                '<label class="control-label">Discapacidad Nº '+contadorr3+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorr3+'referencia3" id="discapacidad'+contadorr3+'referencia3"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidadreferencia3').append('<div class="form-group" id="agregardiscapacidadreferencia3">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr3+
				'</button>');

            $('#agregardiscapacidadreferencia3').remove();
	load2('discapacidades','discapacidad','tipo_discapacidad'+contadorr3+'referencia3',false);
			if (num < 4)
			{
				$('#agregardiscapacidadreferencia3').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidadreferencia3').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else if (tipopersona == 'Referencia4') 
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorr4 = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorr4+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorr4);
			$('#divtipodiscapacidadreferencia4').append('<div class="form-group" id="tipodiscapacidad'+contadorr4+'referencia4">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorr4+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorr4+'referencia4" id="tipo_discapacidad'+contadorr4+'referencia4" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidadreferencia4').append('<div class="form-group" id="nombrediscapacidad'+contadorr4+'referencia4">'+    
                '<label class="control-label">Discapacidad Nº '+contadorr4+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorr4+'referencia4" id="discapacidad'+contadorr4+'referencia4"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidadreferencia4').append('<div class="form-group" id="agregardiscapacidadreferencia4">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr4+
				'</button>');

            $('#agregardiscapacidadreferencia4').remove();
	load2('discapacidades','discapacidad','tipo_discapacidad'+contadorr4+'referencia4',false);
			if (num < 4)
			{
				$('#agregardiscapacidadreferencia4').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidadreferencia4').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else if (tipopersona == 'Referencia5') 
	{
		if (num < 5)
		{
			alert('Discapacidad anterior: '+num);
			var contadorr5 = parseInt(num)+parseInt(1), parametrosdiscapacidad = "'"+contadorr5+"','"+tipopersona+"'";
			alert('Crearemos la Enfermedad Número '+contadorr5);
			$('#divtipodiscapacidadreferencia5').append('<div class="form-group" id="tipodiscapacidad'+contadorr5+'referencia5">'+
	            '<label class="control-label">Tipo de Discapacidad Nº '+contadorr5+'</label><br>'+
	            '<select class="form-control" name="tipo_discapacidad'+contadorr5+'referencia5" id="tipo_discapacidad'+contadorr5+'referencia5" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee">'+
	            
	            '</select>'+
	        '</div>');
            $('#divdiscapacidadreferencia5').append('<div class="form-group" id="nombrediscapacidad'+contadorr5+'referencia5">'+    
                '<label class="control-label">Discapacidad Nº '+contadorr5+'</label>'+
                '<input type="text" class="form-control" name="discapacidad'+contadorr5+'referencia5" id="discapacidad'+contadorr5+'referencia5"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee">'+
            '</div>');
            $('#divagregardiscapacidadreferencia5').append('<div class="form-group" id="agregardiscapacidadreferencia5">'+
            	'<br>'+
				'<button type="button" class="btn btn-danger btn-sm" onclick="borrarDiscapacidad('+parametrosdiscapacidad+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contadorr5+
				'</button>');

            $('#agregardiscapacidadreferencia5').remove();
			load2('discapacidades','discapacidad','tipo_discapacidad'+contadorr5+'referencia5',false);
			if (num < 4)
			{
				$('#agregardiscapacidadreferencia5').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosdiscapacidad+')"><span class="glyphicon glyphicon-plus"></span></button>');
			}
			$('#agregardiscapacidadreferencia5').append('</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Discapacidades por persona');
		}
	}
	else
	{
		alert('Faltó el Tipo de Persona en el "onclick" de la función agregarRedsocial de la vista...');
	}
}


function borrarReferencia(num)
{
	//alert ('Eliminamos la Referencia Número '+num);
	contador = parseInt(num)-parseInt(1);
	$('#divdatos1ref'+num).remove();
	$('#divdatos2ref'+num).remove();
	$('#divdatos3ref'+num).remove();
	$('#divdatos4ref'+num).remove();
	$('#divdatos5ref'+num).remove();
	$('#divagregarreferencia'+num).remove();
	$('#divsiguiente'+num).remove();

	$('#step-4').append('<div class="col-xs-12" id="divagregarreferencia'+contador+'">'+
        '<center id="agregarreferencia'+contador+'">');
	if (num > 2)
	{
		$('#agregarreferencia'+contador).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarReferencia('+contador+')">'+
			'<span class="glyphicon glyphicon-remove"></span> Nº '+contador+
		'</button>');
	}
	$('#agregarreferencia'+contador).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarReferencia('+contador+')">Agregar Otra Referencia</button>'+
		'</center>'+
	'</div>');
	$('#step-4').append('<div class="col-xs-12" id="divsiguiente'+contador+'">'+
	    '<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente</button>'+
	'</div>');
	//alert ('El contadorse encuentra ahora en '+contador);
}

function agregarReferencia(num){
	if (num < 5)
	{
		alert('Referencia anterior: '+num);
		var contador = parseInt(num)+parseInt(1), parametrosonclick = "'1','Referencia"+contador+"'";
		alert('Crearemos la Referencia Número '+contador);
		$('#step-4').append('<div class="col-xs-12" id="divdatos1ref'+contador+'">'+
			'<br><br>'+
	        '<fieldset>'+
	            '<legend><h4><label class="control-label">Referencia Nº '+contador+'</label></h4></legend>'+
	        '</fieldset>'+
	        '<br>'+
	        '<div class="col-md-4 form-group">'+
	            '<label class="control-label">Parentesco</label><br>'+
	            '<select class="form-control" name="nexo'+contador+'" id="nexo'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Parentesco entre el nuevo personal y la referencia a ingresar">'+
	                
	            '</select>'+
	        '</div>'+
	        '<div class="col-md-4 form-group">'+
	            '<label class="control-label">G&eacute;nero</label><br>'+
	            '<select class="form-control" name="sexo_referencia'+contador+'" id="sexo_referencia'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el G&eacute;nero de la referencia">'+
	               
	            '</select>'+
	        '</div>'+
	    '</div>'+
        '<div class="col-xs-12" id="divdatos2ref'+contador+'">'+

	        '<div class="col-md-4">'+
	            '<div class="form-group">'+
	                '<label class="control-label">Fecha de Nacimiento</label>'+
	                '<input type="date" class="form-control" name="fecha_nacimiento_referencia'+contador+'" id="fecha_nacimiento_referencia'+contador+'" max="<?php echo date(Y-m-d,strtotime($fechaactual)); ?>" min="<?php echo date(Y-m-d,$fechanacimientoreferenciamin); ?>" data-toggle="tooltip" data-placement="bottom" title="Seleccione la Fecha de Nacimiento de la referencia">'+
	            '</div>'+
	            '<div class="form-group">'+
	                '<label class="control-label">Primer Nombre</label>'+
	                '<input type="text" class="form-control" name="nombre1_referencia'+contador+'" id="nombre1_referencia'+contador+'" placeholder="Primer Nombre" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Primer Nombre de la referencia">'+
	            '</div>'+
	            '<div class="form-group">'+
	                '<label class="control-label">Primer Apellido</label>'+
	                '<input type="text" class="form-control" name="apellido1_referencia'+contador+'" id="apellido1_referencia'+contador+'" placeholder="Primer Apellido" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Primer Apellido de la referencia">'+
	            '</div>'+

	        '</div>'+
	        '<div class="col-md-4">'+

	            '<div class="form-group">'+
	                '<label class="control-label">C&eacute;dula de Identidad</label>'+
	                '<input type="text" class="form-control" name="cedula_referencia'+contador+'" id="cedula_referencia'+contador+'" min="1" placeholder="C&eacute;dula de Identidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la C&eacute;dula de Identidad de la referencia">'+
	            '</div>'+
	            '<div class="form-group">'+
	                '<label class="control-label">Segundo Nombre</label>'+
	                '<input type="text" class="form-control" name="nombre2_referencia'+contador+'" id="nombre2_referencia'+contador+'" placeholder="Segundo Nombre" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Segundo Nombre de la referencia">'+
	            '</div>'+
	            '<div class="form-group">'+
	                '<label class="control-label">Segundo Apellido</label>'+
	                '<input type="text" class="form-control" name="apellido2_referencia'+contador+'" id="apellido2_referencia'+contador+'" placeholder="Segundo Apellido" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Segundo Apellido de la referencia">'+
	            '</div>'+

	        '</div>'+

        '</div>'+
        '<div class="col-xs-12" id="divdatos3ref'+contador+'">'+
            '<div class="col-md-5 form-group">'+
                '<label class="control-label">Correo Electr&oacute;nico</label>'+
                '<input type="text" class="form-control" name="correoreferencia'+contador+'" id="correoreferencia'+contador+'" placeholder="cuenta@ejemplo.com" data-toggle="tooltip" data-placement="bottom" title="Ingrese el Correo Electr&oacute;nico de la referencia">'+
            '</div>'+
        '</div>'+
        '<div class="col-xs-12" id="divdatos4ref'+contador+'">'+

            '<div class="col-md-4" id="divcodigoareareferencia'+contador+'">'+
                '<div class="form-group" id="codigoarea1referencia'+contador+'">'+
                    '<label class="control-label">C&oacute;digo de &Aacute;rea</label><br>'+
                    '<select class="form-control" name="codigo_area1referencia'+contador+'" id="codigo_tlf1referencia'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el C&oacute;digo de &Aacute;rea">'+
                          
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-4" id="divnumerotelefonoreferencia'+contador+'">'+
                '<div class="form-group" id="numerotelefono1referencia'+contador+'">'+
                    '<label class="control-label">N&uacute;mero de Tel&eacute;fono</label><br>'+
                    '<input type="text" class="form-control" name="telefono1referencia'+contador+'" id="telefono1referencia'+contador+'" placeholder="N&uacute;mero de Tel&eacute;fono" data-toggle="tooltip" data-placement="bottom" title="Ingrese el N&uacute;mero de Tel&eacute;fono">'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-2" id="divagregartelefonoreferencia'+contador+'">'+
                '<div class="form-group" id="agregartelefono1referencia'+contador+'">'+
                    '<br>'+
                    '<button type="button" class="btn btn-info btn-sm" onclick="agregarTelefono('+parametrosonclick+')"><span class="glyphicon glyphicon-plus"></span></button>'+
                '</div>'+
            '</div>'+
            
        '</div>'+
        '<div class="col-xs-12" id="divdatos5ref'+contador+'">'+

            '<div class="col-md-4" id="divtipodiscapacidadreferencia'+contador+'">'+
                '<div class="form-group" id="tipodiscapacidad1referencia'+contador+'">'+
                    '<label class="control-label">Tipo de Discapacidad</label><br>'+
                    '<select class="form-control" name="tipo_discapacidad1referencia'+contador+'" id="discapacidadreferencia'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Tipo de Discapacidad que posee la referencia">'+
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-6" id="divdiscapacidadreferencia'+contador+'">'+
                '<div class="form-group" id="nombrediscapacidad1referencia'+contador+'">'+  
                    '<label class="control-label">Discapacidad</label>'+
                    '<input type="text" class="form-control" name="discapacidad1referencia'+contador+'" id="discapacidad1referencia'+contador+'"  placeholder="Nombre de la Discapacidad" data-toggle="tooltip" data-placement="bottom" title="Ingrese la discapacidad que posee la referencia">'+
                '</div>'+
            '</div>'+
            '<div class="col-md-2" id="divagregardiscapacidadreferencia'+contador+'">'+
                '<div class="form-group" id="agregardiscapacidadreferencia'+contador+'">'+
                    '<br>'+
                    '<button type="button" class="btn btn-info btn-sm" onclick="agregarDiscapacidad('+parametrosonclick+')"><span class="glyphicon glyphicon-plus"></span></button>'+
                '</div>'+
            '</div>'+

        '</div>');

		$('#divsiguiente'+num).remove();
		$('#divagregarreferencia'+num).remove();

load2('referencia' ,'referencia_familiar', 'nexo'+contador,false);		

load2('referencia' ,'sexo', 'sexo_referencia'+contador,false);
load2('referencia' ,'codigo_tlf', 'codigo_tlf1referencia'+contador,false);
load2('discapacidades' ,'discapacidad', 'discapacidadreferencia'+contador,false);

		$('#step-4').append('<div class="col-xs-12" id="divagregarreferencia'+contador+'">'+
            '<center id="agregarreferencia'+contador+'">'+
            	'<button type="button" class="btn btn-danger btn-sm" onclick="borrarReferencia('+contador+')">'+
					'<span class="glyphicon glyphicon-remove"></span> Nº '+contador+
				'</button>');

		if (num < 4)
		{
			$('#agregarreferencia'+contador).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarReferencia('+contador+')">Agregar Otra Referencia</button>'+
                '</center>'+
            '</div>');
		}
		else
		{
			alert('Sólo se permiten ingresar cinco (5) Referencias por personal');
		}

        $('#step-4').append('<div class="col-xs-12" id="divsiguiente'+contador+'">'+
		    '<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente</button>'+
		'</div>');

	}
}


function borrarMateria(num){
	//alert ('Eliminamos la Materia Número '+num);
	contador = parseInt(num)-parseInt(1);
	$('#formperiodoacademico'+num).remove();
	$('#formsemestre'+num).remove();
	$('#formcarrera'+num).remove();
	$('#formmateria'+num).remove();
	$('#agregarmateria'+num).remove();
	$('#divagregarmateria').append('<div class="form-group" id="agregarmateria'+contador+'"><br><br><br><br>');
	if (num > 2)
	{
		$('#agregarmateria'+contador).append('<button type="button" class="btn btn-danger btn-sm" onclick="borrarMateria('+contador+')">'+
			'<span class="glyphicon glyphicon-remove"></span> Nº '+contador+
		'</button>');
	}
	$('#agregarmateria'+contador).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarMateria('+contador+')"><span class="glyphicon glyphicon-plus"></span></button>'+
	'</div>');
	//alert ('El contadorse encuentra ahora en '+contador);
}

function agregarMateria(num){
	if (num < 5)
	{
		alert('Materia anterior: '+num);
		var contador = parseInt(num)+parseInt(1);
		alert('Crearemos la Materia Número '+contador);
		$('#divperiodosemestre').append('<div class="form-group" id="formperiodoacademico'+contador+'"><br>'+
            '<label class="control-label">Per&iacute;odo Acad&eacute;mico ('+contador+')</label><br>'+
            '<select class="form-control" name="periodo_academico'+contador+'" id="periodo_academico'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Per&iacute;odo Acad&eacute;mico de la materia dictada">'+
               
            '</select>'+
        '</div>'+
        '<div class="form-group" id="formsemestre'+contador+'">'+
            '<label class="control-label">Semestre ('+contador+')</label><br>'+
            '<select class="form-control" name="semestre'+contador+'" id="semestre'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione el Semestre de la materia dictada">'+
              
            '</select>'+
        '</div>');
        $('#divcarreramateria').append('<div class="form-group" id="formcarrera'+contador+'"><br>'+
        	'<label class="control-label">Carrera ('+contador+')</label><br>'+
        	'<select class="form-control" name="carrera'+contador+'" id="carrera'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione la Carrera de la materia dictada">'+
        	
        	'</select>'+
        '</div>'+
        '<div class="form-group" id="formmateria'+contador+'">'+
            '<label class="control-label">Materia ('+contador+')</label><br>'+
            '<select class="form-control" name="materia'+contador+'" id="materia'+contador+'" data-toggle="tooltip" data-placement="bottom" title="Seleccione la Materia dictada">'+
                
            '</select>'+
        '</div>');
        $('#divagregarmateria').append('<div class="form-group" id="agregarmateria'+contador+'">'+
        	'<br><br><br><br>'+
			'<button type="button" class="btn btn-danger btn-sm" onclick="borrarMateria('+contador+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Nº '+contador+
			'</button>');

        $('#agregarmateria'+num).remove();

	//load('discapacidades','tipo_discapacidad'+contadorp,false);
      //load2('discapacidades','discapacidad','tipo_discapacidad'+contadorp,false);
		//load2('referencia','carrera','periodo_academico'+contador+,false);
		
		load2('materia','nombre','materia'+contador,false)
    	load2('periodo','periodo','periodo_academico'+contador,false)
		load2('referencia','carrera','carrera'+contador,false);
		load2('referencia','semestre','semestre'+contador ,false);
		if (num < 4)
		{
            $('#agregarmateria'+contador).append('<button type="button" class="btn btn-info btn-sm" onclick="agregarMateria('+contador+')"><span class="glyphicon glyphicon-plus"></span></button>');
		}
		$('#agregarmateria'+contador).append('</div>');
	}
	else
	{
		alert('Sólo se permiten ingresar cinco (5) Materias por persona');
	}
}


/*function borrarFormacion(num){
	//alert ('Eliminamos la formación número '+num);
	var contador = 1;
	contador = parseInt(num)-parseInt(1);
	//$('#campotext'+num).remove();
	//$('#borrarformacionbutton'+num).remove();
	$('#cuadroformacion'+num).remove();
	$('#agregarformacion').empty();
	if (num > 2)
	{
		$('#cuadroformacion'+contador).append('<button type="button" class="btn btn-info btn-sm" onclick="borrarFormacion('+contador+')">'+
			'<span class="glyphicon glyphicon-remove"></span> Borrar Formación número '+contador+
		'</button>');
	}
	$('#agregarformacion').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarFormacion('+contador+')"><span class="glyphicon glyphicon-plus"> Agregar Otra<br>Formaci&oacute;n</span></button>');
	//alert ('El contadorse encuentra ahora en '+contador);
}

function agregarFormacion(num){
	alert('Formacion anterior: '+num);
	var contador = 1;
	contador = parseInt(num)+parseInt(1);
	alert('Crearemos la formación número '+contador);
		$('#camposformacion').append('<div id="cuadroformacion'+contador+'"><hr><br>'+
			'<input type="text" id="campotext'+contador+'">'+
			'<button type="button" class="btn btn-info btn-sm" onclick="borrarFormacion('+contador+')">'+
				'<span class="glyphicon glyphicon-remove"></span> Borrar Formación Número '+contador+
			'</button>'+
		'</div>');
		$('#borrarformacionbutton'+num).remove();
		$('#agregarformacion').empty();
		$('#agregarformacion').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarFormacion('+contador+')"><span class="glyphicon glyphicon-plus"> Agregar Otra<br>Formaci&oacute;n</span></button>');

}
*/


function agregarCampos(num){
	alert(num);
	var contador = 0;
	contador = parseInt(num)+parseInt(1);
	alert(contador);
		$('#campos').append('<div id="cuadro'+contador+'">'+
			'<button type="button" class="btn btn-info btn-sm" id="b'+contador+'" onclick="cancelarF('+contador+')">'+
		'<span class="glyphicon glyphicon-remove"></span>'+
		'</button>'+
		'<input type="text" id="f'+contador+'"></div>'
		);
		$('#boton').empty();
		$('#boton').append('<button type="button" class="btn btn-info btn-sm" onclick="agregarCampos('+contador+')"><span class="glyphicon glyphicon-plus">Agregar Otra<br>Formaci&oacute;n</span></button>');

}

function cancelarF(contador){
	alert(contador);
	$('#f'+contador).remove();
	$('#b'+contador).remove();
	//$('#f'+contador).hide();
}



function comprobarDia(campo,dia){
	$('#'+campo).change(function(event) {
			var valor = $('#'+campo).val();
			//alert(valor);
			$.ajax({
				url: BASE_URL+'/planificacion/ValidarDia/'+valor+'/'+dia,
				type: 'post',
				dataType: 'json',
				
			})
			.done(function(data) {
				var b = data[0];
				if (b == true) {
					
					$('#h'+campo).val('true');

					//$('#btn-Periodo').prop("disabled",false);
				}else{
					
					$('#h'+campo).val('false');
					//$('#btn-Periodo').prop("disabled",true);
				}
			})
			.fail(function() {
				alert("no funciona");
			})
			.always(function() {
				console.log("complete");
			});
			
		});


}



 function confirmar(mensaje){
          return confirm (mensaje);
 }//fin confirm

function alertas(mensaje) {
    return alert(mensaje);
}//fin de alert



    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();  //tooltips 
});

 //funcion para colocar el boton de menu de manera responsiva en pantallas mas pequeñas
	( function( $ ) {
	$( document ).ready(function() {
	$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
		$('#cssmenu #menu-button').on('click', function(){
			var menu = $(this).next('ul');
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			}
			else {
				menu.addClass('open');
			}
		});
	});
	} )( jQuery );//fin funcion boton del menu


