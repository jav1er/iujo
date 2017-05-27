$(document).ready(function () {


    //var navListItems = $('div.setup-panel div a'),
            var allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    $("#btnPersonalAdmin").on("click",function(e){
        alert("ENVIANDO A EXPEDIENTE")
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            //navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    $(".btnStepByUpdate").on("click",function(){
       // alert("otro ")
        var dataView = $(this).attr('data-view');
        var dataMethod = $(this).attr('data-method');
        console.log(dataView)
        var url = ""+document.location;
        console.log(url)
        var vector = url.split("/"), len = vector.length, id = vector[len-1];
    
    
        console.log(id)

        $.ajax({
            url: BASE_URL+'personal/'+dataMethod+'/',
            type: 'get',
            data: {id_persona:id,dpto_admin_number:dataView},
        }).done(function(resp){
            //alert(resp);
            $("#respuesta").html(resp);
        });

        setTimeout(function(){
            switch(dataMethod){
                case "getAdminEnfermedades":
                    
                    load('discapacidades','tipo_discapacidad1',false);
                    load2('discapacidades','discapacidad','tipo_discapacidad2',false);
                    load2('discapacidades','discapacidad','tipo_discapacidad3',false);
                    

                break;

                case "getAdminSeguro":
                   // load2('discapacidades','discapacidad','tipo_discapacidad2',false);
                    load2('referencia','seguro','tipo_seguro1',false);

                break;
                 case "getAdminContratacion":
                      load('referencia','referencia_familiar',false);
                        load('referencia','referencia_personal',false);
                        load('referencia','tipo_contratacion',false); 
                        load('referencia','departamento',false);
                        load('referencia','tipo_empleado',false); 
                        load('referencia','salarios',false); 
                        load2('referencia','carrera','carrera1',false);
                        load('referencia','semestre',false);
                        load('referencia','cargo',false);
                        load('referencia','formacion_academica',false);
                        load2('referencia','formacion_academica','formacion_academica1',false);
    load2('referencia','status_formacion','status_formacion1',false);
    load2('referencia','semestre','semestre1',false);

    load2('materia','nombre','materia1',false)
    load2('periodo','periodo','periodo_academico1',false)
                    break;




                 case "getAdminFormacion":

                    load2('referencia','formacion_academica','formacion_academica1',false);
                    load2('referencia','status_formacion','status_formacion1',false);
                    load2('referencia','semestre','semestre1',false);
                    load2('materia','nombre','materia1',false)
                    load2('periodo','periodo','periodo_academico1',false)

    





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
        } // FIN DEL switch(status)
    });
                break;

                case "getAdminReferencias":
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
   load('discapacidades','tipo_discapacidad1referencia1',false);
   load('discapacidades','tipo_discapacidad1referencia2',false);
   load('discapacidades','tipo_discapacidad1referencia3',false);


                break;

                case "InsertPersonalData":
                                      

                     load('referencia','estado_civil',false);
                    load('referencia','sexo',false);
                    load('referencia','codigo_tlf1',false);
                    load('referencia','tipo_social1',false); 
                    load('referencia','tipo_social2',false);
                break;

                
                case "getAdminPersonalData": //ES DECIR, SE CLICKO EL BOTON 1
                    //LOS SELECTS A LLENAR SON
                   
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


                break;
            }
        },500);

    });

    /*navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

                alert("asf")

        /*var dataView = $(this).attr('data-view');
        var url = document.location;
        var vector = url.split("/");
        var len = vector.length;
        var id = vector[len-1];
        alert(id)
        //alert(document.location)

// medina.profesional@gmail.com

//0414-3913475
        /*$.ajax({
            url: BASE_URL+'personal/personaAdministrativo/'+id,
            type: 'get',
            data: {id_persona:id,viewDB:dataView},
        }).done(function(resp){
            alert(resp);
        });

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });*/

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});