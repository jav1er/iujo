<?php 

class actualizacionController extends Controller{
	private $_actualizacion;
		public function __construct()
		{
			parent::__construct();
			//$this->_actualizacion = $this->loadModel('actualizacion');
			$this->_main = $this->loadModel('main');
			$this->_update = $this->loadModel('actualizacion');
		}
 function index()
	{
		$this->_view->render('index', 'actualizacion');
	}


	// function periodo()
	// {
	// 	$this->_view->render('periodo','actulizacion' );
	// }	

function updatepC($id = false){
			//Si le damos al boton modificar.
				//echo("ENTRAMOS AL METODO UPDATEP");

	// function update($id = false){
	// 		//Si le damos al boton modificar.
	// 			if ($_SERVER['REQUEST_METHOD']=='POST') {
	// 	//guardamos en un arreglo los valores enviados desde la vista
	// 			//para luego enviarlos a la funcion UpdatePerson
	// 				$persona = array(
	// 						':id' => $_POST['id'] ,
	// 						':cedula' => $_POST['cedula'] ,
	// 						':nombre' => $_POST['nombre'] ,
	// 						':apellido' => $_POST['apellido'] ,
	// 						':sexo' => $_POST['sexo'] ,
	// 						':fecha_nacimiento' => $_POST['fecha_nacimiento'] ,
	// 						':telefono' => $_POST['telefono'],
	// 						':correo' => $_POST['correo']  
	// 					);
	// 				$this->_person->updatePerson($persona);	
	// 					 // metodo  arreglo
	// 				$this->_view->redirect('persons/update/'.$persona[':id']);
	// 				//OJO redireccionamos a persona update MAS EL ID de la persona, 
	// 				//para que vea los cambios

	// 			}else{//si



				if ($_SERVER['REQUEST_METHOD']=='POST') {
		//guardamos en un arreglo los valores enviados desde la vista
				//para luego enviarlos a la funcion UpdatePerson
					die("SEXO: ".$_POST['sexo']);
					$Tpersona = array(

							':id' 				=> 				$_POST['id'] ,
							':cedula' 			=> 			$_POST['cedula'] ,
							':nombre1' 			=> 			$_POST['nombre1'] ,
							':nombre2' 			=> 			$_POST['nombre2'],
							':apellido1' 		=> 		$_POST['apellido1'] ,
							':apellido2' 		=> 		$_POST['apellido2'],
							':fecha_nacimiento' => 	$_POST['fecha_nacimiento'] ,
							':correo1' 			=> 			$_POST['correo1'] ,  
							':sexo' 			=> 				$_POST['sexo'],        
							':tipo_persona' 	=> 13 , 
							':municipio_nacimiento' =>$_POST['municipio_nacimiento'],                 
							':estado_civil' 	=> 		$_POST['estado_civil'],
							':parroquia_casa' 	=> 	$_POST['parroquia_casa'] ,							
							':direccion_casa' 	=> 	$_POST['direccion_casa']              );   
							



						// 	':estado_nacimiento' => $_POST['estado_nacimiento'], 
							 
						// 	':municipio_casa' => $_POST['municipio_casa'], 
							 
							 


						// 	':codigo_area1' => $_POST['codigo_area1'], 
						// 	':codigo_area2' => $_POST['codigo_area2'], 
						// 	':codigo_area1' => $_POST['codigo_area1'], 
						// 	':codigo_area2' => $_POST['codigo_area2'], 
						// 	':codigo_area3' => $_POST['codigo_area3'], 
						// 	':telefono1' => $_POST['telefono1'], 
						// 	':telefono2' => $_POST['telefono2'], 
						// 	':telefono3' => $_POST['telefono3'], 
						// 	':tipo_red_social1' => $_POST['tipo_red_social1'], 
						// 	':tipo_red_social2' => $_POST['tipo_red_social2'], 
						// 	':tipo_red_social3' => $_POST['tipo_red_social3'],
						// 	':correo1' => $_POST['correo1'], 
						// 	':red_social1' => $_POST['red_social1'], 
						// 	':red_social2' => $_POST['red_social2'],  
						// 	':red_social13' => $_POST['red_social13'], 

						
							
						// 	':red_social3' => $_POST['red_social3'], 
						// 	':estado_casa' => $_POST['estado_casa'], 
							
						// 	//////////////////////////////////////// FIN DEL  UPDATEP1
							

						// 	':enfermedad1' => $_POST['enfermedad1'], 
						// 	':enfermedad2' => $_POST['enfermedad2'], 
						// 	':enfermedad3' => $_POST['enfermedad3'], 
						// 	':tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1'] ,
						// 	':tratamiento_enfermedad2' => $_POST['tratamiento_enfermedad2'] ,
						// 	':tratamiento_enfermedad3' => $_POST['tratamiento_enfermedad3'] ,
							
						// 	':tipo_discapacidad1' => $_POST['tipo_discapacidad1'] ,
						// 	':tipo_discapacidad2' => $_POST['tipo_discapacidad2'],
						// 	':tipo_discapacidad3' => $_POST['tipo_discapacidad3'],
						// 	':discapacidad1' => $_POST['discapacidad1'],
						// 	':discapacidad2' => $_POST['discapacidad2'],
						// 	':discapacidad3' => $_POST['discapacidad3'],
						// 	//////////////////////////////////////// FIN DEL  UPDATEP2


						// 	':tipo_seguro1' => $_POST['tipo_seguro1'],
						// 	':fecha_inicio_seguro1' => $_POST['fecha_inicio_seguro1'],
						// 	':nombre_seguro1' => $_POST['nombre_seguro1'],	
						// 	':fecha_fin_seguro1' => $_POST['fecha_fin_seguro1'],
						// 	':numero_poliza1' => $_POST['numero_poliza1'],
						// 	':pagina_web_seguro1' => $_POST['pagina_web_seguro1'],
						// 	//////////////////////////////////////// FIN DEL  UPDATEP3
							


						// 	':nexo1' => $_POST['nexo1'],
						// 	':sexo_referencia1' => $_POST['sexo_referencia1'],
						// 	':fecha_nacimiento_referencia1' => $_POST['fecha_nacimiento_referencia1'],
						// 	':nombre1_referencia2' => $_POST['nombre1_referencia2'],
						// 	':apellido1_referencia1' => $_POST['apellido1_referencia1'],
						// 	':cedula_referencia1' => $_POST['cedula_referencia1'],
						// 	':nombre2_referencia2' => $_POST['nombre2_referencia2'],
						// 	':apellido2_referencia1' => $_POST['apellido2_referencia1'],
						// 	':correoreferencia1' => $_POST['correoreferencia1'],
						// 	':codigo_area1' => $_POST['codigo_area1'],
						// 	':telefono1' => $_POST['telefono1'],
						// 	':tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1'],
						// 	':tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2'],
						// 	':tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3'],
						// 	':tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4'],
						// 	':discapacidad1referencia1' => $_POST['discapacidad1referencia1'],
						// 	':discapacidad1referencia2' => $_POST['discapacidad1referencia2'] ,
						// 	':discapacidad1referencia3' => $_POST['discapacidad1referencia3'] ,
						// 	':discapacidad1referencia4' => $_POST['discapacidad1referencia4'] , 
						// 	//////////////////////////////////////// FIN DEL  UPDATEP4

      //                        ':tipo_formacion1' => $_POST['tipo_formacion1'],
      //                        ':tipo_formacion1' => $_POST['tipo_formacion1'],
      //                        ':estatus_formacion1' => $_POST['estatus_formacion1'],
      //                         ':periodo_academico1' => $_POST['periodo_academico1'],
                            
                             
      //                       //////////////////////////////////////// FIN DEL  UPDATEP5


						// 	':tipo_personal' => $_POST['tipo_personal'],
      //                        ':tipo_sueldo' => $_POST['tipo_sueldo'],
      //                        ':tipo_contrato' => $_POST['tipo_contrato'],
      //                        ':sueldo' => $_POST['sueldo'],
      //                        ':departamento' => $_POST['departamento'],
      //                        ':cargo' => $_POST['cargo'],
      //                        ':horas_mensuales_trabajadas' => $_POST['horas_mensuales_trabajadas'],
      //                        ':fecha_inicio_contrato' => $_POST['fecha_inicio_contrato'],
      //                     	 ':fecha_fin_contrato' => $_POST['fecha_fin_contrato'],
      //                        ':semestre1' => $_POST['semestre1'],
      //                        ':carrera1' => $_POST['carrera1'],
      //                        ':materia1' => $_POST['materia1'] 
                           


						// );
					
					$this->_update->updatepm1($Tpersona);	
						 					// metodo  arreglo
					


					//$this->_view->redirect('actualizacion/updatep2/'.$Tpersona[':id']);
					//OJO redireccionamos a persona update MAS EL ID de la persona, 
					//para que vea los cambios

				}else{//si no mostramos igual.

echo "ergrggg";
		//llamamos a la funcion getPergetUnicaPersona en el modelo la cual
		// le pasamos el id, Guardamos en la variable $person el resultado 
		//de la funcion getUnicaPersona
		//para luego ser enviada a la vista en el objeto _persona

					

					// $persona = $this->_person->getUnicaPersona($id);
					// $this->_view->_persona = $persona;
					// $this->_view->render('update', 'persons', '',$this->_sidebar_menu);

				}
		}












}

?>