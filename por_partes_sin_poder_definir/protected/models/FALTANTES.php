//INSERT INTO `seguros`(`id`, `aseguradora`, `pagina_web`) VALUES
			
			$seguro1 = array(
				':nombre_seguro1' => $_POST['nombre_seguro1'],
				':pagina_web_seguro1' => $_POST['pagina_web_seguro1']
			);
			$seguro2 = array(
				':nombre_seguro2' => $_POST['nombre_seguro2'],
				':pagina_web_seguro2' => $_POST['pagina_web_seguro2']
			);
			$seguro3 = array(
				':nombre_seguro3' => $_POST['nombre_seguro3'],
				':pagina_web_seguro3' => $_POST['pagina_web_seguro3']
			);
			$seguro4 = array(
				':nombre_seguro4' => $_POST['nombre_seguro4'],
				':pagina_web_seguro4' => $_POST['pagina_web_seguro4']
			);
			$seguro5 = array(
				':nombre_seguro5' => $_POST['nombre_seguro5'],
				':pagina_web_seguro5' => $_POST['pagina_web_seguro5']
			);
				

//INSERT INTO `persona_has_seguros`(`persona_id`, `seguros_id`, `fecha_inicio`, `fecha_fin`, `numero_poliza`, `tipo_seguro_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$persona_has_seguros1 = array(
				':persona_id' => $idpersona,
				':seguros_id1' => $idseguro1,
				':fecha_inicio_seguro1' => $_POST['fecha_inicio_seguro1'],
				':fecha_fin_seguro1' => $_POST['fecha_fin_seguro1'],				
				':numero_poliza1' => $_POST['numero_poliza1'],
				':tipo_seguro1' => $_POST['tipo_seguro1'],
			);
			$persona_has_seguros2 = array(
				':persona_id' => $idpersona,
				':seguros_id2' => $idseguro2,
				':fecha_inicio_seguro2' => $_POST['fecha_inicio_seguro2'],
				':fecha_fin_seguro2' => $_POST['fecha_fin_seguro2'],				
				':numero_poliza2' => $_POST['numero_poliza2'],
				':tipo_seguro2' => $_POST['tipo_seguro2'],
			);
			$persona_has_seguros3 = array(
				':persona_id' => $idpersona,
				':seguros_id3' => $idseguro3,
				':fecha_inicio_seguro3' => $_POST['fecha_inicio_seguro3'],
				':fecha_fin_seguro3' => $_POST['fecha_fin_seguro3'],				
				':numero_poliza3' => $_POST['numero_poliza3'],
				':tipo_seguro3' => $_POST['tipo_seguro3'],
			);
			$persona_has_seguros4 = array(
				':persona_id' => $idpersona,
				':seguros_id4' => $idseguro4,
				':fecha_inicio_seguro4' => $_POST['fecha_inicio_seguro4'],
				':fecha_fin_seguro4' => $_POST['fecha_fin_seguro4'],				
				':numero_poliza4' => $_POST['numero_poliza4'],
				':tipo_seguro4' => $_POST['tipo_seguro4'],
			);
			$persona_has_seguros5 = array(
				':persona_id' => $idpersona,
				':seguros_id5' => $idseguro5,
				':fecha_inicio_seguro5' => $_POST['fecha_inicio_seguro5'],
				':fecha_fin_seguro5' => $_POST['fecha_fin_seguro5'],				
				':numero_poliza5' => $_POST['numero_poliza5'],
				':tipo_seguro5' => $_POST['tipo_seguro5'],
			);


//INSERT INTO `persona_has_discapacidades`(`persona_id`, `discapacidades_id`) VALUES ([value-1],[value-2])

			$persona_has_discapacidad1 = array(
				':discapacidad1' => $idpersona,
				':tipo_discapacidad1' => $iddiscapacidad1
			);
			$persona_has_discapacidad2 = array(
				':discapacidad2' => $idpersona,
				':tipo_discapacidad2' => $iddiscapacidad2
			);
			$persona_has_discapacidad3 = array(
				':discapacidad3' => $idpersona,
				':tipo_discapacidad3' => $iddiscapacidad3
			);
			$persona_has_discapacidad4 = array(
				':discapacidad4' => $idpersona,
				':tipo_discapacidad4' => $iddiscapacidad4
			);
			$persona_has_discapacidad5 = array(
				':discapacidad5' => $idpersona,
				':tipo_discapacidad5' => $iddiscapacidad5
			);


//INSERT INTO `referencia`(`id`, `referencia`, `padre_id`) VALUES 
				

			$enfermedad1 = array(
				':enfermedad1' => $_POST['enfermedad1'],
				':tipo_referencia1' => $_POST['tipo_enfermedad1']
			);
			$enfermedad2 = array(
				':enfermedad2' => $_POST['enfermedad2'],
				':tipo_referencia2' => $_POST['tipo_enfermedad2']
			);
			$enfermedad3 = array(
				':enfermedad3' => $_POST['enfermedad3'],
				':tipo_referencia3' => $_POST['tipo_enfermedad3']
			);
			$enfermedad4 = array(
				':enfermedad4' => $_POST['enfermedad4'],
				':tipo_referencia4' => $_POST['tipo_enfermedad4']
			);
			$enfermedad5 = array(
				':enfermedad5' => $_POST['enfermedad5'],
				':tipo_referencia5' => $_POST['tipo_enfermedad5']
			);


//INSERT INTO `persona_has_enfermedades`(`persona_id`, `enfermedad_id`, `tratamiento`) VALUES


			$persona_has_enfermedades1 = array(
				':persona_id' => $idpersona,
				':enfermedad1' => $idenfermedad1,
			);
			$persona_has_enfermedades2 = array(
				':persona_id' => $idpersona,
				':enfermedad2' => $idenfermedad2,
			);
			$persona_has_enfermedades3 = array(
				':persona_id' => $idpersona,
				':enfermedad3' => $idenfermedad3,
			);
			$persona_has_enfermedades4 = array(
				':persona_id' => $idpersona,
				':enfermedad4' => $idenfermedad4,
			);
			$persona_has_enfermedades5 = array(
				':persona_id' => $idpersona,
				':enfermedad5' => $idenfermedad5,
			);
				

//INSERT INTO `persona`(`id`, `cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `fecha_nacimiento`, `correo`, `sexo_id`, `tipo_persona_id`, `municipio_nacimiento_id`, `estado_civil_id`, `parroquia_casa_id`, `direccion_casa`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])
				
			$referencia1 = array(
				':cedula_referencia1' => $_POST['cedula_referencia1'],
				':nombre1_referencia1' => $_POST['nombre1_referencia1'],
				':nombre2_referencia1' => $_POST['nombre2_referencia1'],
				':apellido1_referencia1' => $_POST['apellido1_referencia1'],
				':apellido2_referencia1' => $_POST['apellido2_referencia1'],
				':fecha_nacimiento_referencia1' => $_POST['fecha_nacimiento_referencia1'],
				':correo_referencia1' => $_POST['correo_referencia1'],
				':sexo_referencia1' => $_POST['sexo_referencia1'],
				':tipo_persona_referencia' => '', /*ID de la tabla referencia que dice "Referencia Familiar" o "Carga Familiar"*/
				'municipio_nacimiento_referencia1' => $_POST['municipio_nacimiento_referencia1'], /*Agregar Municipio de Nacimiento de la Referencia Personal a la Vista*/
				'estado_civil_referencia1' => 'NULL',
				'parroquia_casa_referencia1' => 'NULL',
				'direccion_casa_referencia1' => 'NULL'
			);
				

				/*Sólo se agrega la cédula sí el niño tiene más de 9 años*/

			$telefono1referencia1 = array(
				':telefono1_referencia1' => $_POST['telefono1_referencia1'],
				':codigo_area1_referencia1' => $_POST['codigo_area1_referencia1']
			);		
			$telefono2referencia1 = array(
				':telefono2_referencia1' => $_POST['telefono2_referencia1'],
				':codigo_area2_referencia1' => $_POST['codigo_area2_referencia1']
			);
			$telefono3referencia1 = array(
				':telefono3_referencia1' => $_POST['telefono3_referencia1'],
				':codigo_area3_referencia1' => $_POST['codigo_area3_referencia1']
			);

			$referencia1_has_telefono1 = array(
				':referencia1_id' => $idreferencia1,
				':telefono_id' => $idtelefono1
			);
			$referencia1_has_telefono2 = array(
				':referencia1_id' => $idreferencia1,
				':telefono_id' => $idtelefono2
			);
			$referencia1_has_telefono3 = array(
				':referencia1_id' => $idreferencia1,
				':telefono_id' => $idtelefono3
			);
			
			$discapacidad1referencia1 = array(
				':discapacidad1_referencia1' => $_POST['discapacidad1_referencia1'],
				':tipo_discapacidad1_referencia1' => $_POST['tipo_discapacidad1_referencia1']
			);
			$discapacidad2referencia1 = array(
				':discapacidad2_referencia1' => $_POST['discapacidad2_referencia1'],
				':tipo_discapacidad2_referencia1' => $_POST['tipo_discapacidad2_referencia1']
			);
			$discapacidad3referencia1 = array(
				':discapacidad3_referencia1' => $_POST['discapacidad3_referencia1'],
				':tipo_discapacidad3_referencia1' => $_POST['tipo_discapacidad3_referencia1']
			);
			$discapacidad4referencia1 = array(
				':discapacidad4_referencia1' => $_POST['discapacidad4_referencia1'],
				':tipo_discapacidad4_referencia1' => $_POST['tipo_discapacidad4_referencia1']
			);
			$discapacidad5referencia1 = array(
				':discapacidad5_referencia1' => $_POST['discapacidad5_referencia1'],
				':tipo_discapacidad5_referencia1' => $_POST['tipo_discapacidad5_referencia1']
			);


//INSERT INTO `persona_has_discapacidades`(`persona_id`, `discapacidades_id`) VALUES ([value-1],[value-2])

			$referencia_has_discapacidad1 = array(
				':discapacidad1' => $idreferencia1,
				':tipo_discapacidad1' => $iddiscapacidad1
			);
			$referencia_has_discapacidad2 = array(
				':discapacidad2' => $idreferencia1,
				':tipo_discapacidad2' => $iddiscapacidad2
			);
			$referencia_has_discapacidad3 = array(
				':discapacidad3' => $idreferencia1,
				':tipo_discapacidad3' => $iddiscapacidad3
			);
			$referencia_has_discapacidad4 = array(
				':discapacidad4' => $idreferencia1,
				':tipo_discapacidad4' => $iddiscapacidad4
			);
			$referencia_has_discapacidad5 = array(
				':discapacidad5' => $idreferencia1,
				':tipo_discapacidad5' => $iddiscapacidad5
			);


//INSERT INTO `persona_has_referencias`(`persona_has_referencia_id`, `persona_id`, `referencia_id`, `nexo_id`) VALUES ([value-1],[value-2],[value-3],[value-4])
				
			$persona_has_referencias = array(
				':persona_id' => $idpersona,
				':referencia_id1' => $idreferencia,
				':nexo1' => $_POST['nexo1']
			);
		
				
//INSERT INTO `formacion`(`id`, `nombre`, `emisor_titulo`, `tipo_formacion_id`) VALUES ([value-1],[value-2],[value-3],[value-4])

			$formacion = array(
				':nombre_titulo' => $_POST['nombre_titulo'],
				':instituto_emisor_titulo' => $_POST['instituto_emisor_titulo'],
				':tipo_formacion' => $_POST['tipo_formacion']
			);


//INSERT INTO `persona_has_formacion`(`persona_id`, `formacion_id`, `fecha_inicio`, `fecha_culminacion`, `status_id`, `fecha_emision_titulo`, `codigo_titulo`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

			$persona_has_formacion = array(
				':persona_id' => $idpersona,
				':formacion_id' => $idformacion, /*El número de la contratación se saca (NO SÉ CÓMO)*/
				':fecha_inicio_formacion' => $_POST['fecha_inicio_formacion'],
				':fecha_culminacion_formacion' => $_POST['fecha_culminacion_formacion'],
				':status_formacion' => $_POST['status_formacion'],
				':fecha_emision_titulo' => $_POST['fecha_emision_titulo']/*,
				':codigo_titulo' => $_POST['codigo_titulo']*/
			);


//INSERT INTO `contratacion`(`id`, `persona_id`, `numero_contratacion`, `fecha_inicio`, `fecha_fin`, `tipo_contratacion_id`, `departamento_id`, `cargo_id`, `status_id`) VALUES
//FALTA ESTO

			$contratacion = array(
				':persona_id' => $idpersona,
				':numero_contratacion' => $_POST['numero_contratacion'],
				':fecha_inicio' => $_POST['fecha_inicio'],
				':fecha_fin' => $_POST['fecha_fin'],
				':tipo_contratacion' => $_POST['tipo_contratacion'],
				':departamento' => $_POST['departamento'],
				':cargo' => $_POST['cargo'],
				':status' => '155'
			);

				
//INSERT INTO `salario`(`id`, `salario`, `fecha_inicio`, `fecha_fin`, `horas_mensuales`, `contratacion_id`) VALUES
//FALTA ESTO				
			$salario = array(
              	':sueldo' => $_POST['sueldo'],
              	':fecha_inicio_contrato' => $_POST['fecha_inicio_contrato'],
              	':fecha_fin_contrato' => $_POST['fecha_fin_contrato'],
				':horas_mensuales_trabajadas' => $_POST['horas_mensuales_trabajadas'],
				':contratacion_id' => $idcontratacion,
			);


//INSERT INTO `docente_has_materias`(`id`, `persona_id`, `materia_id`, `periodo_id`) VALUES ([value-1],[value-2],[value-3],[value-4])

			$docente_has_materias1 = array(
				':persona_id' => $idpersona,
				':materia1' => $_POST['materia1'],
				':periodo1' =>  /*El período académico se sobreentiende según el inicio del contrato*/
			);
			$docente_has_materias2 = array(
				':persona_id' => $idpersona,
				':materia2' => $_POST['materia2'],
				':periodo2' =>  /*El período académico se sobreentiende según el inicio del contrato*/
			);
			$docente_has_materias3 = array(
				':persona_id' => $idpersona,
				':materia3' => $_POST['materia3'],
				':periodo3' =>  /*El período académico se sobreentiende según el inicio del contrato*/
			);
			$docente_has_materias4 = array(
				':persona_id' => $idpersona,
				':materia4' => $_POST['materia4'],
				':periodo4' =>  /*El período académico se sobreentiende según el inicio del contrato*/
			);
			$docente_has_materias5 = array(
				':persona_id' => $idpersona,
				':materia5' => $_POST['materia5'],
				':periodo5' =>  /*El período académico se sobreentiende según el inicio del contrato*/
			);
				
			  




        
  /*$query1 = "INSERT INTO redes_sociales(cuenta,tipo_red_social_id) VALUES
			(:red_social1,:tipo_red_social1)";

          /*  $redes_sociales2 = array(
				':red_social2' => $_POST['red_social2'],
				':tipo_red_social2' => $_POST['tipo_red_social2']
			);		
				 
			$redes_sociales3 = array(	
				':red_social3' => $_POST['red_social3'],
				':tipo_red_social3' => $_POST['tipo_red_social3']
			);	*/

			/*$persona_has_redes_sociales1 = array(
              	':red_social1' => $idpersonall,
              	':tipo_red_social1' => $idredsocial1
             );
			/*$persona_has_redes_sociales2 = array(
              	':red_social2' => $idpersonall,
              	':tipo_red_social2' => $idredsocial2
             );
			$persona_has_redes_sociales3 = array(
              	':red_social3' => $idpersonall,
              	':tipo_red_social3' => $idredsocial3
             );*/
						
			controller::varDump($_POST); 
			//Guardamos en un arreglo  lo que recibimos vía POST de la vista..
		
			/*$idP=$this->_main->insert($query);
			$query="INSERT INTO `telefono`(`id`, `telefono`, `codigo_tlf_id`) VALUES ([value-1],[value-2],[value-3])";
			$idTlf=$this->_main->insert($query);
			$query="INSERT INTO `persona_has_telefono`(`persona_id`, `telefono_id`) VALUES ('".$idP."','".$idTlf."')";
			*/