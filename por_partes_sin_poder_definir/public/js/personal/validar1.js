$(document).ready(function() {
	

	$('#nuevacontratacion').bootstrapValidator({
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
     fields: {   
        
         cedula: { // campo cedula
              
              remote: {
                    url: BASE_URL +'main/remote/persona/cedula',
                    message: 'La cedula ya existe',
                    type: 'POST'
                    },
             validators: {
                 notEmpty: { // No puede ser vacio
                     message: 'La Cedula es requerida'
                 },
                 regexp: { // Solo estos caracteres pueden ser usados
                     regexp: /^[1234567890]+$/,
                     message: 'El Formato de la cedula es incorrecto'
                 },             
                 between: { //rango entre 1 y 40 millones
                               min: 5000000,
                               max: 80000000,
                     message: 'El Rango de la Cedula es de 5 a 80 Millones'
                        
                 }
                 ,stringLength: {
                        min: 7,
                        max: 8,
                        message: 'La Cedula debe contener de 7 a 8 caracteres'
                    }
             } 
         },
         nombre1: {
             validators: {
                 notEmpty: {
                     message: 'El primer nombre es requerido'
                 },
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El primer nombre solo puede contener letras'
                 }
             }
         },
          nombre2: {
             validators: {               
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El segundo nombre solo puede contener letras'
                 }
             }
         },
    apellido1: {
             validators: {
                 notEmpty: {
                     message: 'El primer apellido es requerido'
                 },
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El primer apellido solo puede contener letras'
                 }
             }
         },

    apellido2: {
             validators: {
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El segundo apellido solo puede contener letras'
                 }
             }
         },

      
           
            

         

       fecha_nacimiento: {
                validators: {
                    notEmpty: {
                        message: 'La Fecha de nacimiento es requerida'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        min: '1940-12-01',
                        max: '1999-12-01',
                        message: 'Su edad no es valida'
                    }
                }
            },


        
       
          telefono1: {
             validators: {
                 notEmpty: {
                     message: 'El teléfono es requerido'
                 },stringLength: {
                        min: 7,
                        max: 7,
                        message: 'El teléfono introducido no es valido'
                    }
             }
         },
         


         red_social1 : {
             validators: {
                 notEmpty: {
                     message: 'la cuenta es requerida'
                 },
                 emailAddress: {//valida que sea tipo correo
                     message: 'La cuenta no es valida'
                 }
             }
         },
          


         correo1: {
             validators: {
                 notEmpty: {
                     message: 'El Correo es requerido'
                 },
                 emailAddress: {//valida que sea tipo correo
                     message: 'El correo electronico no es valido'
                 }
             }
         },
           
           casa: {
             validators: {
                 notEmpty: {
                     message: 'El Correo es requerido'
                 },
                 emailAddress: {//valida que sea tipo correo
                     message: 'El correo electronico no es valido'
                 }
             }
         },
          
          
           enfermedad1: {
              
             validators: {
                notEmpty: {
                     message: 'Indique la Enfermedad'
                 },
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El nombre de la enfermedad solo puede contener letras'
                 }
             }
         },



          tratamiento_enfermedad1: {
              
             validators: {
                notEmpty: {
                     message: 'El tratamiento  es requerido'
                 },
                 regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ]+$/,
                     message: 'El  tratamiento solo puede contener letras'
                 }
             }
         },


         
 
     }
});


$('#usuario').bootstrapValidator({
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
     fields: {  
        usuario: {
                validators: {
                  notEmpty: {
                     message: 'Usuario requerido'
                 
                    },regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789]+$/,
                     message: 'Uno o varios caracteres no son validos'
                 }

                }
            },
           clave: {
                validators: {
                  notEmpty: {
                     message: 'introduzca contraseña'
                 
                    },regexp: {
                     regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789]+$/,
                     message: 'Uno o varios caracteres no son validos'
                 }

                }
            }

      }
});

});

