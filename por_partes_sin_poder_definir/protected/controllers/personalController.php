<?php 

class personalController extends Controller{
	
	private $_personal;
		
	public function __construct(){

		parent::__construct();
	
		$this->_main = $this->loadModel('main');
		//$this->_personal = $this->loadModel('personal');
	}

	function index()
	{			
		$this->_view->render('index', 'personal', '','');
	}






function personaAdministrativo()
	{
		/*if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = isset($_GET["id_persona"]) ? $_GET["id_persona"] : "";

			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}else{
			$query = " SELECT * FROM `dpto_admin_1` WHERE idpersonal = ".$id_persona;
		}*/

		//$query = " SELECT * FROM `dpto_admin_1` WHERE idpersonal = ".$id_persona;
		
		//$this->_view->setJs(array('js/personal/insert'));
		//$query = " SELECT * FROM `dir` WHERE idpersonal = ".$id;
		//$query = " SELECT * FROM `dpto_admin_` WHERE idpersonal = ".$id;
		//$this->_view->setJs(array('js/personal/insert'));
		//$user=$this->_main->listing($query);
		//$this->_view->_usuario = $user;
		$this->_view->render('botonesUpdateAdmin', 'personal');
		//echo "111";
	}

	function getAdminPersonalData(){
			$this->_view->setJs(array('js/main'));
			$this->_view->setJs(array('js/personal/insert'));
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM updateP1 WHERE id = $id_persona";
			//$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

// como enviar dos consultas a una misma vista o ventana 
		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
		include("/protected/views/actualizacion/updateP1.phtml");
	}

	function getAdminEnfermedades(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query= "select * from updateP1 where id =". $id_persona;
			//$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
			include("/protected/views/actualizacion/updateP2.phtml");
		
	}

	function getAdminseguro(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
		include("/protected/views/actualizacion/updateP3.phtml");
	}

	function getAdminReferencias(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
		include("/protected/views/actualizacion/updateP4.phtml");
	}

	function getAdminFormacion(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
include("/protected/views/actualizacion/updateP5.phtml");	}

	function getAdminContratacion(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
		include("/protected/views/actualizacion/updateP6.phtml");
	}


	function getAdminSalarios(){
		if(isset($_GET["dpto_admin_number"])){
			$dpto_admin_number = $_GET["dpto_admin_number"];
			$id_persona = $_GET["id_persona"];
			$query = " SELECT * FROM ".$dpto_admin_number." WHERE idpersonal = ".$id_persona;
		}

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_usuario = $user;
		include("/protected/views/personal/adminSalarios.phtml");
	}


	function delete ($id) {	
			
		$query0 = "DELETE FROM persona WHERE id = $id";
		$this->_main->delete($query0);

		$this->_view->render('expediente', 'personal', '');
			
	}

		
	function up_datospersonales(/*$id = false*/) {
		$this->_view->setJs(array('js/personal/insert'));
		//Sí hay una solicitud vía POST...
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{

/*Update de la tabla persona*/
			$id = $_POST['idpersonal'];
			$cedula = $_POST['cedula'];
			$nombre1 = $_POST['nombre1'];
			$nombre2 = $_POST['nombre2'];
			$apellido1 = $_POST['apellido1'];
            $apellido2 = $_POST['apellido2'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $correo1 = $_POST['correo1'];
			$sexo = $_POST['sexo'];
			$tipo_personal = $_POST['tipo_personal'];
			$municipio_nacimiento = $_POST['municipio_nacimiento'];
			$estado_civil = $_POST['estado_civil'];
			$parroquia_casa = $_POST['parroquia_casa'];
			$direccion_casa = $_POST['direccion_casa'];

			$query = "UPDATE persona SET 
			id = ".$id.", 
			cedula = '".$cedula."',
			nombre1 = '".$nombre1."',
			nombre2 = '".$nombre2."',
			apellido1 = '".$apellido1."',
			apellido2 = '".$apellido2."',
			fecha_nacimiento = '".$fecha_nacimiento."',
			correo = '".$correo1."',
			sexo_id = '".$sexo."',
			tipo_persona_id ='".$tipo_personal."',
			municipio_nacimiento_id = '".$municipio_nacimiento."',	
			estado_civil_id = '".$estado_civil."',
			parroquia_casa_id = '".$parroquia_casa."',
			direccion_casa = '".$direccion_casa."'
			WHERE id = ".$id.";";
			$this->_main->update($query);
/*Update de la tabla persona*/
/*Update de la tabla telefono*/
            if ( (!empty($_POST['idtelpuente1']) && !empty($_POST['idtel1']) && !empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) && ($_POST['telefonou1'] != $_POST['telefono1'] || $_POST['idcodigoareau1'] != $_POST['codigo_area1']) )
            {
				$idtelpuente1 = $_POST['idtelpuente1'];
				$idtel1 = $_POST['idtel1'];
				$telefono1 = $_POST['telefono1'];
				$codigo_area1 = $_POST['codigo_area1'];
				$telefonou1 = $_POST['telefonou1'];
				$idcodigoareau1 = $_POST['idcodigoareau1'];


				$queryconttel1 = "SELECT COUNT(*) FROM persona_has_telefono WHERE telefono_id = $idtel1";
				$contadortel1 = $this->_main->read($queryconttel1);
				if ($contadortel1 > 1)
				{
					$query0 = "DELETE FROM persona_has_telefono WHERE id = $idtelpuente1";
					$this->_main->delete($query0);
				} 

				$queryt1 = "SELECT id FROM telefono WHERE telefono LIKE '".$telefonou1."' AND codigo_tlf_id = $idcodigoareau1";
				$idtelexistente1 = $this->_main->read($queryt1);
				if ( !empty($idtelexistente1) )
				{
					$query1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelexistente1)";
					$this->_main->insert($query1,'persona_has_telefono');
				}
				else
				{
					if ($contadortel1 == 1)
					{
						$query2 = "UPDATE telefono SET id = $idtel1, telefono = '".$telefonou1."', codigo_tlf_id = $idcodigoareau1 WHERE id = $idtel1";
						$this->_main->update($query2,'telefono');
					}
					else if ($contadortel1 > 1)
					{
						$query2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefono1."',$codigo_area1)";
						$idtelefono1 = $this->_main->insert($query2,'telefono');
						$query3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelefono1)";
						$this->_main->insert($query3,'persona_has_telefono');
					}
				}
			}
            if ( (!empty($_POST['idtelpuente2']) && !empty($_POST['idtel2']) && !empty($_POST['telefono2']) && !empty($_POST['codigo_area2']) ) && ($_POST['telefonou2'] != $_POST['telefono2'] || $_POST['idcodigoareau2'] != $_POST['codigo_area2']) )
            {
				$idtelpuente2 = $_POST['idtelpuente2'];
				$idtel2 = $_POST['idtel2'];
				$telefono2 = $_POST['telefono2'];
				$codigo_area2 = $_POST['codigo_area2'];
				$telefonou2 = $_POST['telefonou2'];
				$idcodigoareau2 = $_POST['idcodigoareau2'];

				$queryconttel2 = "SELECT COUNT(*) FROM persona_has_telefono WHERE telefono_id = $idtel2";
				$contadortel2 = $this->_main->read($queryconttel2);
				if ($contadortel2 > 1)
				{
					$query0 = "DELETE FROM persona_has_telefono WHERE id = $idtelpuente2";
					$this->_main->delete($query0);
				} 

				$queryt2 = "SELECT id FROM telefono WHERE telefono LIKE '".$telefonou2."' AND codigo_tlf_id = $idcodigoareau2";
				$idtelexistente2 = $this->_main->read($queryt2);
				if ( !empty($idtelexistente2) )
				{
					$query1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelexistente2)";
					$this->_main->insert($query1,'persona_has_telefono');
				}
				else
				{
					if ($contadortel2 == 1)
					{
						$query2 = "UPDATE telefono SET id = $idtel2, telefono = '".$telefonou2."', codigo_tlf_id = $idcodigoareau2 WHERE id = $idtel2";
						$this->_main->update($query2,'telefono');
					}
					else if ($contadortel2 > 1)
					{
						$query2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefono2."',$codigo_area2)";
						$idtelefono2 = $this->_main->insert($query2,'telefono');
						$query3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelefono2)";
						$this->_main->insert($query3,'persona_has_telefono');
					}
				}
			}
            if ( (!empty($_POST['idtelpuente3']) && !empty($_POST['idtel3']) && !empty($_POST['telefono3']) && !empty($_POST['codigo_area3']) ) && ($_POST['telefonou3'] != $_POST['telefono3'] || $_POST['idcodigoareau3'] != $_POST['codigo_area3']) )
            {
				$idtelpuente3 = $_POST['idtelpuente3'];
				$idtel3 = $_POST['idtel3'];
				$telefono3 = $_POST['telefono3'];
				$codigo_area3 = $_POST['codigo_area3'];
				$telefonou3 = $_POST['telefonou3'];
				$idcodigoareau3 = $_POST['idcodigoareau3'];

				$queryconttel3 = "SELECT COUNT(*) FROM persona_has_telefono WHERE telefono_id = $idtel3";
				$contadortel3 = $this->_main->read($queryconttel3);
				if ($contadortel3 > 1)
				{
					$query0 = "DELETE FROM persona_has_telefono WHERE id = $idtelpuente3";
					$this->_main->delete($query0);
				} 

				$queryt3 = "SELECT id FROM telefono WHERE telefono LIKE '".$telefonou3."' AND codigo_tlf_id = $idcodigoareau3";
				$idtelexistente3 = $this->_main->read($queryt3);
				if ( !empty($idtelexistente3) )
				{
					$query1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelexistente3)";
					$this->_main->insert($query1,'persona_has_telefono');
				}
				else
				{
					if ($contadortel3 == 1)
					{
						$query2 = "UPDATE telefono SET id = $idtel3, telefono = '".$telefonou3."', codigo_tlf_id = $idcodigoareau3 WHERE id = $idtel3";
						$this->_main->update($query2,'telefono');
					}
					else if ($contadortel3 > 1)
					{
						$query2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefono3."',$codigo_area3)";
						$idtelefono3 = $this->_main->insert($query2,'telefono');
						$query3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ($id,$idtelefono3)";
						$this->_main->insert($query3,'persona_has_telefono');
					}
				}
			}
/*Update de la tabla telefono*/
/*Update de la tabla redes_sociales*/
			if ( (!empty($_POST['idredspuente1']) && !empty($_POST['idreds1']) && !empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) && ($_POST['cuentaredsu1'] != $_POST['red_social1'] || $_POST['idtiporedsu1'] != $_POST['tipo_red_social1']) )
			{
				$idredspuente1 = $_POST['idredspuente1'];
				$idreds1 = $_POST['idreds1'];
              	$red_social1 = $_POST['red_social1'];
              	$tipo_red_social1 = $_POST['tipo_red_social1'];
              	$cuentaredsu1 = $_POST['cuentaredsu1'];
              	$idtiporedsu1 = $_POST['idtiporedsu1'];

				$querycontrs1 = "SELECT COUNT(*) FROM persona_has_redes_sociales WHERE redes_sociales_id = $idreds1";
				$contadorreds1 = $this->_main->read($querycontrs1);
				if ($contadorreds1 > 1)
				{
					$query4 = "DELETE FROM persona_has_redes_sociales WHERE id = $idredspuente1";
					$this->_main->delete($query4);
				}

				$queryrs1 = "SELECT id FROM redes_sociales WHERE cuenta LIKE '".$red_social1."' AND tipo_red_social_id = $tipo_red_social1";
				$idredsexistente1 = $this->_main->read($queryrs1);
				if ( !empty($idredsexistente1) )
				{
					$query5 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredsexistente1)";
					$this->_main->insert($query5,'persona_has_redes_sociales');
				}
				else
				{
					if ($contadorreds1 == 1)
					{
						$query6 = "UPDATE redes_sociales SET id = $idreds1, cuenta = '".$cuentaredsu1."', tipo_red_social_id = $idtiporedsu1 WHERE id = $idreds1";
						$this->_main->update($query6,'redes_sociales');
					}
					else if ($contadorreds1 > 1)
					{
						$query6 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$red_social1."',$tipo_red_social1)";
						$idredes_sociales1 = $this->_main->insert($query6,'redes_sociales'); 
						$query7 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredes_sociales1)";
						$this->_main->insert($query7,'persona_has_redes_sociales');
					}
				}
			}
			if ( (!empty($_POST['idredspuente2']) && !empty($_POST['idreds2']) && !empty($_POST['red_social2']) && !empty($_POST['tipo_red_social2']) ) && ($_POST['cuentaredsu2'] != $_POST['red_social2'] || $_POST['idtiporedsu2'] != $_POST['tipo_red_social2']) )
			{
				$idredspuente2 = $_POST['idredspuente2'];
				$idreds2 = $_POST['idreds2'];
              	$red_social2 = $_POST['red_social2'];
              	$tipo_red_social2 = $_POST['tipo_red_social2'];
              	$cuentaredsu2 = $_POST['cuentaredsu2'];
              	$idtiporedsu2 = $_POST['idtiporedsu2'];

				$querycontrs2 = "SELECT COUNT(*) FROM persona_has_redes_sociales WHERE redes_sociales_id = $idreds2";
				$contadorreds2 = $this->_main->read($querycontrs2);
				if ($contadorreds2 > 1)
				{
					$query4 = "DELETE FROM persona_has_redes_sociales WHERE id = $idredspuente2";
					$this->_main->delete($query4);
				}

				$queryrs2 = "SELECT id FROM redes_sociales WHERE cuenta LIKE '".$red_social2."' AND tipo_red_social_id = $tipo_red_social2";
				$idredsexistente2 = $this->_main->read($queryrs2);
				if ( !empty($idredsexistente2) )
				{
					$query5 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredsexistente2)";
					$this->_main->insert($query5,'persona_has_redes_sociales');
				}
				else
				{
					if ($contadorreds2 == 1)
					{
						$query6 = "UPDATE redes_sociales SET id = $idreds2, cuenta = '".$cuentaredsu2."', tipo_red_social_id = $idtiporedsu2 WHERE id = $idreds2";
						$this->_main->update($query6,'redes_sociales');
					}
					else if ($contadorreds2 > 1)
					{
						$query6 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$red_social2."',$tipo_red_social2)";
						$idredes_sociales2 = $this->_main->insert($query6,'redes_sociales'); 
						$query7 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredes_sociales2)";
						$this->_main->insert($query7,'persona_has_redes_sociales');
					}
				}
			}
			if ( (!empty($_POST['idredspuente3']) && !empty($_POST['idreds3']) && !empty($_POST['red_social3']) && !empty($_POST['tipo_red_social3']) ) && ($_POST['cuentaredsu3'] != $_POST['red_social3'] || $_POST['idtiporedsu3'] != $_POST['tipo_red_social3']) )
			{
				$idredspuente3 = $_POST['idredspuente3'];
				$idreds3 = $_POST['idreds3'];
              	$red_social3 = $_POST['red_social3'];
              	$tipo_red_social3 = $_POST['tipo_red_social3'];
              	$cuentaredsu3 = $_POST['cuentaredsu3'];
              	$idtiporedsu3 = $_POST['idtiporedsu3'];

				$querycontrs3 = "SELECT COUNT(*) FROM persona_has_redes_sociales WHERE redes_sociales_id = $idreds3";
				$contadorreds3 = $this->_main->read($querycontrs3);
				if ($contadorreds3 > 1)
				{
					$query4 = "DELETE FROM persona_has_redes_sociales WHERE id = $idredspuente3";
					$this->_main->delete($query4);
				}

				$queryrs3 = "SELECT id FROM redes_sociales WHERE cuenta LIKE '".$red_social3."' AND tipo_red_social_id = $tipo_red_social3";
				$idredsexistente3 = $this->_main->read($queryrs3);
				if ( !empty($idredsexistente3) )
				{
					$query5 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredsexistente3)";
					$this->_main->insert($query5,'persona_has_redes_sociales');
				}
				else
				{
					if ($contadorreds3 == 1)
					{
						$query6 = "UPDATE redes_sociales SET id = $idreds3, cuenta = '".$cuentaredsu3."', tipo_red_social_id = $idtiporedsu3 WHERE id = $idreds3";
						$this->_main->update($query6,'redes_sociales');
					}
					else if ($contadorreds3 > 1)
					{
						$query6 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$red_social3."',$tipo_red_social3)";
						$idredes_sociales3 = $this->_main->insert($query6,'redes_sociales'); 
						$query7 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ($id,$idredes_sociales3)";
						$this->_main->insert($query7,'persona_has_redes_sociales');
					}
				}
			}
/*Update de la tabla redes_sociales*/

			$this->_view->render('expediente', 'personal', '');

		}
		else
		{
			$this->_view->render('expediente', 'personal', '');
		}
	}




	function up_enf_disc() { 

		//Sí hay una solicitud vía POST...
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$idpersonal = $_POST['idpersonal'];

			/*CUIDADO AQUÍ: CAMBIAR LOS NÚMEROS DE LOS QUERY!!!*/
			$enfermedades = array(
				$enfermedad1 = $_POST['enfermedad1'],
				$tratamiento_enfermedad1 = $_POST['tratamiento_enfermedad1'],
				$enfermedad2 = $_POST['enfermedad2'],
				$tratamiento_enfermedad2 = $_POST['tratamiento_enfermedad2'],
				$enfermedad3 = $_POST['enfermedad3'],
				$tratamiento_enfermedad3 = $_POST['tratamiento_enfermedad3'],
				$enfermedad4 = $_POST['enfermedad4'],
				$tratamiento_enfermedad4 = $_POST['tratamiento_enfermedad4'],
				$enfermedad5 = $_POST['enfermedad5'],
				$tratamiento_enfermedad5 = $_POST['tratamiento_enfermedad5']
			);
			$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$discapacidad1."','')";
			/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
			$idenfermedad1 = $this->_main->insert($query10,'referencia');

      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad1."','".$tratamiento_enfermedad1."')";
      		$this->_main->insert($query11,'persona_has_enfermedades');
     		/*CUIDADO AQUÍ: CAMBIAR LOS NÚMEROS DE LOS QUERY!!!*/

		
     		
			/*if( isset($_POST['discapacidad1']) && isset($_POST['tipo_discapacidad1']) )
			{
				$iddiscapacidadpuente1 = $_POST['iddiscapacidadpuente1'];
				$queryd1 = "DELETE FROM persona_has_discapacidades WHERE id = $iddiscapacidadpuente1";
				$this->_main->delete($queryd1);

				$discapacidad1 = $_POST['discapacidad1'];
				$tipo_discapacidad1 = $_POST['tipo_discapacidad1'];
	      		$query1 = "INSERT INTO discapacidades(discapacidad, padre_id) VALUES ('".$discapacidad1."','".$tipo_discapacidad1."')";
	     		$iddiscapacidad1 = $this->_main->insert($query1,'discapacidades');
				$query2 = "INSERT INTO persona_has_discapacidades(persona_id, discapacidades_id) VALUES ('".$idpersonal."','".$iddiscapacidad1."')";
				$this->_main->insert($query2,'persona_has_discapacidades');
			}*/
		
			$query12 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
			VALUES ('".$idpersonal."','".$iddiscapacidad1."')";
			$this->_main->insert($query12,'persona_has_discapacidades');

			$this->_view->render('expediente', 'personal', '');
		}
		else
		{
			$this->_view->render('expediente', 'personal', '');
		}			


	}



	function persona($id)
	{
	
		$this->_view->setJs(array('js/personal/insert'));
		$query = " SELECT * FROM `dir` WHERE idpersonal = ".$id;

		$user=$this->_main->listing($query);
		$this->_view->_usuario = $user;
		$this->_view->render('modi_expediente', 'personal');
	}


	public function listing()
	{		
		$this->_view->render('personal', 'expediente', '');
	}
	
	public function exporta_excel($id = false)
	{		
		$this->_view->setJs(array('js/personal/exportar'));
		
		if ($id != false) {
			$query = "SELECT * FROM `docentes`" ;
		} else {
			$query = "SELECT * FROM `docentes` WHERE idpersonal = $id" ;
		}
		$listado = $this->_main->read($query);
		
		$this->_view->_listado = $listado;
		$this->_view->render('exportar', 'personal', '');
	}
	
		function creator()
	{
		
		
		$hoy = date("d.m.y");  
		header("Content-type: application/vnd.ms-excel; name='excel'");
		header("Content-Disposition: filename=Reporte$hoy.xls");
		header("Pragma: no-cache");
		header("Expires: 0");

		echo $_POST['datos_a_enviar'];
	}	




	function nuevacontratacion()
	{
		
		$this->_view->render('BotonesInsert', 'personal', '','');
	}	

function InsertPersonalData(){
		
		include("/protected/views/personal/InsertDatosP.phtml");
	}


	function expediente()
	{
		$this->_view->setJs(array('js/jquery'));		
		//$query = " SELECT * FROM `dir` " ;

		$query = " SELECT * FROM `expediente` " ;

		$listado = $this->_main->read($query);
	

		$this->_view->_listado = $listado;

		$this->_view->render('expediente', 'personal');
	}

	



	function insertPersonal()
	{
		
	
		$this->_view->setJs(array('js/main'));
		$this->_view->setJs(array('js/validar'));
		//Sí hay una solicitud vía POST...
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			//Guardamos en un arreglo  lo que recibimos vía POST de la vista...



			$personal = array(
				'cedula' => $_POST['cedula'],
				'nombre1' => $_POST['nombre1'],
				'nombre2' => $_POST['nombre2'],
				'apellido1' => $_POST['apellido1'],
	            'apellido2' => $_POST['apellido2'],
	            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
	            'correo1' => $_POST['correo1'],
				'sexo' => $_POST['sexo'],
				'tipo_personal' => $_POST['tipo_personal'],
				'municipio_nacimiento' => $_POST['municipio_nacimiento'],
				'estado_civil' => $_POST['estado_civil'],
				'parroquia_casa' => $_POST['parroquia_casa'],
				'direccion_casa' => $_POST['direccion_casa'],
				'codinstituto_id' => 231,
				'pais_id' => 233,
				'doc_id' => 235,
				'condicion_id' => 237,
				'categoria_id' => 239,
				'cat_inicial_id' => 241,
				'ded_id' => 243,
				'titulo_id' => 256,
				'profecion_id' => 259 );
		    $query1 = "INSERT INTO persona 
			(cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa,
			 `codinstituto_id`, `pais_id`, `doc_id`, `condicion_id`, `categoria_id`, `cat_inicial_id`, `ded_id`, `titulo_id`, `profecion_id`) VALUES 
			('".$personal['cedula']."',
			'".$personal['nombre1']."',
			'".$personal['nombre2']."',
			'".$personal['apellido1']."',
			'".$personal['apellido2']."',
			'".$personal['fecha_nacimiento']."',
			'".$personal['correo1']."',
			'".$personal['sexo']."',
			'".$personal['tipo_personal']."',
			'".$personal['municipio_nacimiento']."',
			'".$personal['estado_civil']."',
			'".$personal['parroquia_casa']."',
			'".$personal['parroquia_casa']."', 
			'".$personal['codinstituto_id']."',
			'".$personal['pais_id']."',
			'".$personal['doc_id']."',
			'".$personal['condicion_id']."',
			'".$personal['categoria_id']."',
			'".$personal['cat_inicial_id']."',
			'".$personal['ded_id']."',
			'".$personal['titulo_id']."',
			'".$personal['profecion_id']."' )" ;
			//Enviamos a la funcion en el modelo de personas el arreglo...
			$idpersonal = $this->_main->insert($query1,'persona'); 
			
			if ( (!empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) || (!empty($_POST['red_social2']) && !empty($_POST['tipo_red_social2']) ) || (!empty($_POST['red_social3']) && !empty($_POST['tipo_red_social3']) ) ) {
				if ( (!empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) && (!empty($_POST['red_social2']) && !empty($_POST['tipo_red_social2']) ) && (!empty($_POST['red_social3']) && !empty($_POST['tipo_red_social3']) ) ) {
					$redes_sociales = array(
		              	'cuenta1' => $_POST['red_social1'], 'tipo_red_social1' => $_POST['tipo_red_social1'],
		              	'cuenta2' => $_POST['red_social2'], 'tipo_red_social2' => $_POST['tipo_red_social2'],
						'cuenta3' => $_POST['red_social3'], 'tipo_red_social3' => $_POST['tipo_red_social3']
		            );
	       		} else if ( (!empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) && (!empty($_POST['red_social2']) && !empty($_POST['tipo_red_social2']) ) && (empty($_POST['red_social3']) || empty($_POST['tipo_red_social3']) ) ) {
					$redes_sociales = array(
		              	'cuenta1' => $_POST['red_social1'], 'tipo_red_social1' => $_POST['tipo_red_social1'],
		              	'cuenta2' => $_POST['red_social2'], 'tipo_red_social2' => $_POST['tipo_red_social2']
		            );
	       		} else if ( (!empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) && (empty($_POST['red_social2']) || empty($_POST['tipo_red_social2']) ) && (empty($_POST['red_social3']) || empty($_POST['tipo_red_social3']) ) ) {
					$redes_sociales = array(
		              	'cuenta1' => $_POST['red_social1'], 'tipo_red_social1' => $_POST['tipo_red_social1']
		            );
	       		}
	            if ( !empty($_POST['red_social1']) && !empty($_POST['tipo_red_social1']) ) {
					$query2 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$redes_sociales['cuenta1']."','".$redes_sociales['tipo_red_social1']."')";
					$idredes_sociales1 = $this->_main->insert($query2,'redes_sociales');
				}
				if ( !empty($_POST['red_social2']) && !empty($_POST['tipo_red_social2']) ) {
					$query2 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$redes_sociales['cuenta2']."','".$redes_sociales['tipo_red_social2']."')";
					$idredes_sociales2 = $this->_main->insert($query2,'redes_sociales');
				}
				if ( !empty($_POST['red_social3']) && !empty($_POST['tipo_red_social3']) ) {
					$query2 = "INSERT INTO redes_sociales(cuenta, tipo_red_social_id) VALUES ('".$redes_sociales['cuenta3']."','".$redes_sociales['tipo_red_social3']."')";
					$idredes_sociales3 = $this->_main->insert($query2,'redes_sociales');
				}
			}

			if ( !empty($idredes_sociales1) || !empty($idredes_sociales2) || !empty($idredes_sociales3) ) {
				if ( !empty($idredes_sociales1) ) {
					$query3 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ('".$idpersonal."','".$idredes_sociales1."')";
					$this->_main->insert($query3,'persona_has_redes_sociales');
				}
				if ( !empty($idredes_sociales2) ) {
					$query3 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ('".$idpersonal."','".$idredes_sociales2."')";
					$this->_main->insert($query3,'persona_has_redes_sociales');
				}
				if ( !empty($idredes_sociales3) ) {
					$query3 = "INSERT INTO persona_has_redes_sociales(persona_id, redes_sociales_id) VALUES ('".$idpersonal."','".$idredes_sociales3."')";
					$this->_main->insert($query3,'persona_has_redes_sociales');
				}
			}

			if ( (!empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) || (!empty($_POST['telefono2']) && !empty($_POST['codigo_area2']) ) || (!empty($_POST['telefono3']) && !empty($_POST['codigo_area3']) ) ) {

				if ( (!empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) && (!empty($_POST['telefono2']) && !empty($_POST['codigo_area2']) ) && (!empty($_POST['telefono3']) && !empty($_POST['codigo_area3']) ) ) {
					$telefonos = array(
		              	'telefono1' => $_POST['telefono1'], 'codigo_area1' => $_POST['codigo_area1'],
						'telefono2' => $_POST['telefono2'], 'codigo_area2' => $_POST['codigo_area2'],
						'telefono3' => $_POST['telefono3'], 'codigo_area3' => $_POST['codigo_area3']
		            );
		        } else if ( (!empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) && (!empty($_POST['telefono2']) && !empty($_POST['codigo_area2']) ) && (empty($_POST['telefono3']) || empty($_POST['codigo_area3']) ) ) {
		        	$telefonos = array(
		              	'telefono1' => $_POST['telefono1'], 'codigo_area1' => $_POST['codigo_area1'],
						'telefono2' => $_POST['telefono2'], 'codigo_area2' => $_POST['codigo_area2']
		            );
		        } else if ( (!empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) && (empty($_POST['telefono2']) || empty($_POST['codigo_area2']) ) && (empty($_POST['telefono3']) || empty($_POST['codigo_area3']) ) ) {
		        	$telefonos = array(
		              	'telefono1' => $_POST['telefono1'], 'codigo_area1' => $_POST['codigo_area1']
		            );
		        }
	            if ( !empty($_POST['telefono1']) && !empty($_POST['codigo_area1']) ) {
					$query4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonos['telefono1']."','".$telefonos['codigo_area1']."')";
					$idtelefono1 = $this->_main->insert($query4,'telefono');
				}
	            if ( !empty($_POST['telefono2']) && !empty($_POST['codigo_area2']) ) {
					$query4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonos['telefono2']."','".$telefonos['codigo_area2']."')";
					$idtelefono2 = $this->_main->insert($query4,'telefono');
				}
	            if ( !empty($_POST['telefono3']) && !empty($_POST['codigo_area3']) ) {
					$query4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonos['telefono3']."','".$telefonos['codigo_area3']."')";
					$idtelefono3 = $this->_main->insert($query4,'telefono');
				}
			}

			if ( !empty($idtelefono1) || !empty($idtelefono2) || !empty($idtelefono3) ) {
				if ( !empty($idtelefono1) ) {
					$query5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1."')";
					$this->_main->insert($query5,'persona_has_telefono');
				}
				if ( !empty($idtelefono2) ) {
					$query5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2."')";
					$this->_main->insert($query5,'persona_has_telefono');
				}
				if ( !empty($idtelefono3) ) {
					$query5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3."')";
					$this->_main->insert($query5,'persona_has_telefono');
				}
			}

			if ( !empty($_POST['nombre_seguro1']) && !empty($_POST['pagina_web_seguro1']) ) {
	            $seguros = array(
					'nombre_seguro1' => $_POST['nombre_seguro1'],
					'pagina_web_seguro1' => $_POST['pagina_web_seguro1']
				);
				if (!empty($_POST['nombre_seguro1']) && !empty($_POST['pagina_web_seguro1']) ) {
					$query6 = "INSERT INTO seguros(aseguradora, pagina_web) VALUES ('".$seguros['nombre_seguro1']."','".$seguros['pagina_web_seguro1']."')";
					$idseguro1 = $this->_main->insert($query6,'seguros');
				}
			}
			if ( (!empty($idseguro1) && !empty($_POST['fecha_inicio_seguro1']) && !empty($_POST['fecha_fin_seguro1']) && !empty($_POST['numero_poliza1']) && !empty($_POST['tipo_seguro1']) ) ) {
				$persona_has_seguros = array(
					'fecha_inicio_seguro1' => $_POST['fecha_inicio_seguro1'],
					'fecha_fin_seguro1' => $_POST['fecha_fin_seguro1'],				
					'numero_poliza1' => $_POST['numero_poliza1'],
					'tipo_seguro1' => $_POST['tipo_seguro1']
	 			);
				$query7 = "INSERT INTO persona_has_seguros(persona_id, seguros_id, fecha_inicio, fecha_fin, numero_poliza, tipo_seguro_id) 
				VALUES ('".$idpersonal."','".$idseguro1."','".$persona_has_seguros['fecha_inicio_seguro1']."','".$persona_has_seguros['fecha_fin_seguro1']."','".$persona_has_seguros['numero_poliza1']."','".$persona_has_seguros['tipo_seguro1']."')";
	 			$this->_main->insert($query7,'persona_has_seguros');
	 		}

	 		if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) || (!empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) || (!empty($_POST['discapacidad3']) && !empty($_POST['tipo_discapacidad3']) ) || (!empty($_POST['discapacidad4']) && !empty($_POST['tipo_discapacidad4']) ) || (!empty($_POST['discapacidad5']) && !empty($_POST['tipo_discapacidad5']) ) ) {
				if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) && (!empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) && (!empty($_POST['discapacidad3']) && !empty($_POST['tipo_discapacidad3']) ) && (!empty($_POST['discapacidad4']) && !empty($_POST['tipo_discapacidad4']) ) && (!empty($_POST['discapacidad5']) && !empty($_POST['tipo_discapacidad5']) ) ) {
					$discapacidades = array(
						'discapacidad1' => $_POST['discapacidad1'], 'tipo_discapacidad1' => $_POST['tipo_discapacidad1'],
						'discapacidad2' => $_POST['discapacidad2'], 'tipo_discapacidad2' => $_POST['tipo_discapacidad2'],
						'discapacidad3' => $_POST['discapacidad3'], 'tipo_discapacidad3' => $_POST['tipo_discapacidad3'],
						'discapacidad4' => $_POST['discapacidad4'], 'tipo_discapacidad4' => $_POST['tipo_discapacidad4'],
						'discapacidad5' => $_POST['discapacidad5'], 'tipo_discapacidad5' => $_POST['tipo_discapacidad5']
					);
				} else if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) && (!empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) && (!empty($_POST['discapacidad3']) && !empty($_POST['tipo_discapacidad3']) ) && (!empty($_POST['discapacidad4']) && !empty($_POST['tipo_discapacidad4']) ) && (empty($_POST['discapacidad5']) || empty($_POST['tipo_discapacidad5']) ) ) {
					$discapacidades = array(
						'discapacidad1' => $_POST['discapacidad1'], 'tipo_discapacidad1' => $_POST['tipo_discapacidad1'],
						'discapacidad2' => $_POST['discapacidad2'], 'tipo_discapacidad2' => $_POST['tipo_discapacidad2'],
						'discapacidad3' => $_POST['discapacidad3'], 'tipo_discapacidad3' => $_POST['tipo_discapacidad3'],
						'discapacidad4' => $_POST['discapacidad4'], 'tipo_discapacidad4' => $_POST['tipo_discapacidad4']
					);
				} else if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) && (!empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) && (!empty($_POST['discapacidad3']) && !empty($_POST['tipo_discapacidad3']) ) && (empty($_POST['discapacidad4']) || empty($_POST['tipo_discapacidad4']) ) && (empty($_POST['discapacidad5']) || empty($_POST['tipo_discapacidad5']) ) ) {
					$discapacidades = array(
						'discapacidad1' => $_POST['discapacidad1'], 'tipo_discapacidad1' => $_POST['tipo_discapacidad1'],
						'discapacidad2' => $_POST['discapacidad2'], 'tipo_discapacidad2' => $_POST['tipo_discapacidad2'],
						'discapacidad3' => $_POST['discapacidad3'], 'tipo_discapacidad3' => $_POST['tipo_discapacidad3']
					);
				} else if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) && (!empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) && (empty($_POST['discapacidad3']) || empty($_POST['tipo_discapacidad3']) ) && (empty($_POST['discapacidad4']) || empty($_POST['tipo_discapacidad4']) ) && (empty($_POST['discapacidad5']) || empty($_POST['tipo_discapacidad5']) ) ) {
					$discapacidades = array(
						'discapacidad1' => $_POST['discapacidad1'], 'tipo_discapacidad1' => $_POST['tipo_discapacidad1'],
						'discapacidad2' => $_POST['discapacidad2'], 'tipo_discapacidad2' => $_POST['tipo_discapacidad2']
					);
				} else if ( (!empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) && (empty($_POST['discapacidad2']) || empty($_POST['tipo_discapacidad2']) ) && (empty($_POST['discapacidad3']) || empty($_POST['tipo_discapacidad3']) ) && (empty($_POST['discapacidad4']) || empty($_POST['tipo_discapacidad4']) ) && (empty($_POST['discapacidad5']) || empty($_POST['tipo_discapacidad5']) ) ) {
					$discapacidades = array(
						'discapacidad1' => $_POST['discapacidad1'], 'tipo_discapacidad1' => $_POST['tipo_discapacidad1']
					);
				}
				if ( !empty($_POST['discapacidad1']) && !empty($_POST['tipo_discapacidad1']) ) {
		      		$query8 = "INSERT INTO discapacidades(discapacidad, padre_id) 
		     		VALUES ('".$discapacidades['discapacidad1']."','".$discapacidades['tipo_discapacidad1']."')";
		     		$iddiscapacidad1 = $this->_main->insert($query8,'discapacidades');
		     	}
				if ( !empty($_POST['discapacidad2']) && !empty($_POST['tipo_discapacidad2']) ) {
		      		$query8 = "INSERT INTO discapacidades(discapacidad, padre_id) 
		     		VALUES ('".$discapacidades['discapacidad2']."','".$discapacidades['tipo_discapacidad2']."')";
		     		$iddiscapacidad2 = $this->_main->insert($query8,'discapacidades');
		     	}
				if ( !empty($_POST['discapacidad3']) && !empty($_POST['tipo_discapacidad3']) ) {
		      		$query8 = "INSERT INTO discapacidades(discapacidad, padre_id) 
		     		VALUES ('".$discapacidades['discapacidad3']."','".$discapacidades['tipo_discapacidad3']."')";
		     		$iddiscapacidad3 = $this->_main->insert($query8,'discapacidades');
		     	}
				if ( !empty($_POST['discapacidad4']) && !empty($_POST['tipo_discapacidad4']) ) {
		      		$query8 = "INSERT INTO discapacidades(discapacidad, padre_id) 
		     		VALUES ('".$discapacidades['discapacidad4']."','".$discapacidades['tipo_discapacidad4']."')";
		     		$iddiscapacidad4 = $this->_main->insert($query8,'discapacidades');
		     	}
				if ( !empty($_POST['discapacidad5']) && !empty($_POST['tipo_discapacidad5']) ) {
		      		$query8 = "INSERT INTO discapacidades(discapacidad, padre_id) 
		     		VALUES ('".$discapacidades['discapacidad5']."','".$discapacidades['tipo_discapacidad5']."')";
		     		$iddiscapacidad5 = $this->_main->insert($query8,'discapacidades');
		     	}
     		}
	     	if ( !empty($iddiscapacidad1) || !empty($iddiscapacidad2) || !empty($iddiscapacidad3) || !empty($iddiscapacidad4) || !empty($iddiscapacidad5) ) {
	     		if ( !empty($iddiscapacidad1) ) {
					$query9 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
					VALUES ('".$idpersonal."','".$iddiscapacidad1."')";
					$this->_main->insert($query9,'persona_has_discapacidades');
				}
				if ( !empty($iddiscapacidad2) ) {
					$query9 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
					VALUES ('".$idpersonal."','".$iddiscapacidad2."')";
					$this->_main->insert($query9,'persona_has_discapacidades');
				}
				if ( !empty($iddiscapacidad3) ) {
					$query9 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
					VALUES ('".$idpersonal."','".$iddiscapacidad3."')";
					$this->_main->insert($query9,'persona_has_discapacidades');
				}
				if ( !empty($iddiscapacidad4) ) {
					$query9 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
					VALUES ('".$idpersonal."','".$iddiscapacidad4."')";
					$this->_main->insert($query9,'persona_has_discapacidades');
				}
				if ( !empty($iddiscapacidad5) ) {
					$query9 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
					VALUES ('".$idpersonal."','".$iddiscapacidad5."')";
					$this->_main->insert($query9,'persona_has_discapacidades');
				}
			}

			/*CUIDADO AQUÍ: CAMBIAR LOS NÚMEROS DE LOS QUERY!!!*/
			if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) || (!empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) || (!empty($_POST['enfermedad3']) && !empty($_POST['tratamiento_enfermedad3']) ) || (!empty($_POST['enfermedad4']) && !empty($_POST['tratamiento_enfermedad4']) ) || (!empty($_POST['enfermedad5']) && !empty($_POST['tratamiento_enfermedad5']) ) ) {
				if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) && (!empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) && (!empty($_POST['enfermedad3']) && !empty($_POST['tratamiento_enfermedad3']) ) && (!empty($_POST['enfermedad4']) && !empty($_POST['tratamiento_enfermedad4']) ) && (!empty($_POST['enfermedad5']) && !empty($_POST['tratamiento_enfermedad5']) ) ) {
					$enfermedades = array(
						'enfermedad1' => $_POST['enfermedad1'], 'tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1'],
						'enfermedad2' => $_POST['enfermedad2'], 'tratamiento_enfermedad2' => $_POST['tratamiento_enfermedad2'],
						'enfermedad3' => $_POST['enfermedad3'], 'tratamiento_enfermedad3' => $_POST['tratamiento_enfermedad3'],
						'enfermedad4' => $_POST['enfermedad4'], 'tratamiento_enfermedad4' => $_POST['tratamiento_enfermedad4'],
						'enfermedad5' => $_POST['enfermedad5'], 'tratamiento_enfermedad5' => $_POST['tratamiento_enfermedad5']
					);
				} else if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) && (!empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) && (!empty($_POST['enfermedad3']) && !empty($_POST['tratamiento_enfermedad3']) ) && (!empty($_POST['enfermedad4']) && !empty($_POST['tratamiento_enfermedad4']) ) && (empty($_POST['enfermedad5']) || empty($_POST['tratamiento_enfermedad5']) ) ) {
					$enfermedades = array(
						'enfermedad1' => $_POST['enfermedad1'], 'tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1'],
						'enfermedad2' => $_POST['enfermedad2'], 'tratamiento_enfermedad2' => $_POST['tratamiento_enfermedad2'],
						'enfermedad3' => $_POST['enfermedad3'], 'tratamiento_enfermedad3' => $_POST['tratamiento_enfermedad3'],
						'enfermedad4' => $_POST['enfermedad4'], 'tratamiento_enfermedad4' => $_POST['tratamiento_enfermedad4']
					);
				} else if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) && (!empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) && (!empty($_POST['enfermedad3']) && !empty($_POST['tratamiento_enfermedad3']) ) && (empty($_POST['enfermedad4']) || empty($_POST['tratamiento_enfermedad4']) ) && (empty($_POST['enfermedad5']) || empty($_POST['tratamiento_enfermedad5']) ) ) {
					$enfermedades = array(
						'enfermedad1' => $_POST['enfermedad1'], 'tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1'],
						'enfermedad2' => $_POST['enfermedad2'], 'tratamiento_enfermedad2' => $_POST['tratamiento_enfermedad2'],
						'enfermedad3' => $_POST['enfermedad3'], 'tratamiento_enfermedad3' => $_POST['tratamiento_enfermedad3']
					);
				} else if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) && (!empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) && (empty($_POST['enfermedad3']) || empty($_POST['tratamiento_enfermedad3']) ) && (empty($_POST['enfermedad4']) || empty($_POST['tratamiento_enfermedad4']) ) && (empty($_POST['enfermedad5']) || empty($_POST['tratamiento_enfermedad5']) ) ) {
					$enfermedades = array(
						'enfermedad1' => $_POST['enfermedad1'], 'tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1'],
						'enfermedad2' => $_POST['enfermedad2'], 'tratamiento_enfermedad2' => $_POST['tratamiento_enfermedad2']
					);
				} else if ( (!empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) && (empty($_POST['enfermedad2']) || empty($_POST['tratamiento_enfermedad2']) ) && (empty($_POST['enfermedad3']) || empty($_POST['tratamiento_enfermedad3']) ) && (empty($_POST['enfermedad4']) || empty($_POST['tratamiento_enfermedad4']) ) && (empty($_POST['enfermedad5']) || empty($_POST['tratamiento_enfermedad5']) ) ) {
					$enfermedades = array(
						'enfermedad1' => $_POST['enfermedad1'], 'tratamiento_enfermedad1' => $_POST['tratamiento_enfermedad1']
					);
				}
				if ( !empty($_POST['enfermedad1']) && !empty($_POST['tratamiento_enfermedad1']) ) {
					$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$enfermedades['enfermedad1']."',230)";
					/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
					$idenfermedad1 = $this->_main->insert($query10,'referencia');
				}
				if ( !empty($_POST['enfermedad2']) && !empty($_POST['tratamiento_enfermedad2']) ) {
					$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$enfermedades['enfermedad2']."',230)";
					/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
					$idenfermedad2 = $this->_main->insert($query10,'referencia');
				}
				if ( !empty($_POST['enfermedad3']) && !empty($_POST['tratamiento_enfermedad3']) ) {
					$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$enfermedades['enfermedad3']."',230)";
					/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
					$idenfermedad3 = $this->_main->insert($query10,'referencia');
				}
				if ( !empty($_POST['enfermedad4']) && !empty($_POST['tratamiento_enfermedad4']) ) {
					$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$enfermedades['enfermedad4']."',230)";
					/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
					$idenfermedad4 = $this->_main->insert($query10,'referencia');
				}
				if ( !empty($_POST['enfermedad5']) && !empty($_POST['tratamiento_enfermedad5']) ) {
					$query10 = "INSERT INTO referencia (referencia, padre_id) VALUES ('".$enfermedades['enfermedad5']."',230)";
					/*CUIDADO AQUÍ: No sé cuál es el ID de las enfermedades en la tabla de REFERENCIAS*/
					$idenfermedad5 = $this->_main->insert($query10,'referencia');
				}
			}
			if ( !empty($idenfermedad1) || !empty($idenfermedad2) || !empty($idenfermedad3) || !empty($idenfermedad3) || !empty($idenfermedad4) || !empty($idenfermedad5) ) {
				if ( !empty($idenfermedad1) ) {
		      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad1."','".$enfermedades['tratamiento_enfermedad1']."')";
		      		$this->_main->insert($query11,'persona_has_enfermedades');
		      	}
				if ( !empty($idenfermedad2) ) {
		      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad2."','".$enfermedades['tratamiento_enfermedad2']."')";
		      		$this->_main->insert($query11,'persona_has_enfermedades');
		      	}
				if ( !empty($idenfermedad3) ) {
		      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad3."','".$enfermedades['tratamiento_enfermedad3']."')";
		      		$this->_main->insert($query11,'persona_has_enfermedades');
		      	}
				if ( !empty($idenfermedad4) ) {
		      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad4."','".$enfermedades['tratamiento_enfermedad4']."')";
		      		$this->_main->insert($query11,'persona_has_enfermedades');
		      	}
				if ( !empty($idenfermedad5) ) {
		      		$query11 = "INSERT INTO persona_has_enfermedades (persona_id, enfermedad_id, tratamiento) VALUES ('".$idpersonal."','".$idenfermedad5."','".$enfermedades['tratamiento_enfermedad5']."')";
		      		$this->_main->insert($query11,'persona_has_enfermedades');
		      	}
	      	}
     		/*CUIDADO AQUÍ: CAMBIAR LOS NÚMEROS DE LOS QUERY!!!*/
						

			/*Referencia Personal*/
			if (!empty($_POST['cedula_referencia1']) && !empty($_POST['nombre1_referencia1']) && !empty($_POST['nombre2_referencia1']) && !empty($_POST['apellido1_referencia1']) && !empty($_POST['apellido2_referencia1']) && !empty($_POST['fecha_nacimiento_referencia1']) && !empty($_POST['correoreferencia1']) && !empty($_POST['sexo_referencia1']) ) {
				$cedula_referencia1 = $_POST['cedula_referencia1'];
				$nombre1_referencia1 = $_POST['nombre1_referencia1'];
				$nombre2_referencia1 = $_POST['nombre2_referencia1'];
				$apellido1_referencia1 = $_POST['apellido1_referencia1'];
	            $apellido2_referencia1 = $_POST['apellido2_referencia1'];
	            $fecha_nacimiento_referencia1 = $_POST['fecha_nacimiento_referencia1'];
	            $correoreferencia1 = $_POST['correoreferencia1'];
				$sexo_referencia1 = $_POST['sexo_referencia1'];
				$tipo_personalreferencia1 = 0; 
				$municipio_nacimientoreferencia1 = 0;
				$estado_civilreferencia1 = 0;
				$parroquia_casareferencia1 = 0;
				$direccion_casareferencia1 = 0;
			    $queryref1 = "INSERT INTO persona (cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa) VALUES 
				('".$cedula_referencia1."',
				'".$nombre1_referencia1."',
				'".$nombre2_referencia1."',
				'".$apellido1_referencia1."',
				'".$apellido2_referencia1."',
				'".$fecha_nacimiento_referencia1."',
				'".$correoreferencia1."',
				'".$sexo_referencia1."',
				'".$tipo_personalreferencia1."',
				'".$municipio_nacimientoreferencia1."',
				'".$estado_civilreferencia1."',
				'".$parroquia_casareferencia1."',
				'".$direccion_casareferencia1."')";
				//Enviamos a la funcion en el modelo de personas el arreglo...
				$idreferencia1 = $this->_main->insert($queryref1,'persona'); 
				/*Referencia Personal*/
				if (!empty($idreferencia1)) {
					if ( !empty($_POST['nexo1']) ) {
						$nexo1 = $_POST['nexo1'];
						$querynexo1 = "INSERT INTO persona_has_referencias(persona_id, referencia_id, nexo_id) VALUES 
						('".$personal['cedula']."','".$idreferencia1."','".$nexo1."')";
					}
					if ( (!empty($_POST['telefono1referencia1']) && !empty($_POST['codigo_area1referencia1']) ) || (!empty($_POST['telefono2referencia1']) && !empty($_POST['codigo_area2referencia1']) ) || (!empty($_POST['telefono3referencia1']) && !empty($_POST['codigo_area3referencia1']) ) ) {

						if ( (!empty($_POST['telefono1referencia1']) && !empty($_POST['codigo_area1referencia1']) ) && (!empty($_POST['telefono2referencia1']) && !empty($_POST['codigo_area2referencia1']) ) && (!empty($_POST['telefono3referencia1']) && !empty($_POST['codigo_area3referencia1']) ) ) {
							$telefonosref1 = array(
				              	'telefono1referencia1' => $_POST['telefono1referencia1'], 'codigo_area1referencia1' => $_POST['codigo_area1referencia1'],
								'telefono2referencia1' => $_POST['telefono2referencia1'], 'codigo_area2referencia1' => $_POST['codigo_area2referencia1'],
								'telefono3referencia1' => $_POST['telefono3referencia1'], 'codigo_area3referencia1' => $_POST['codigo_area3referencia1']
				            );
				        } else if ( (!empty($_POST['telefono1referencia1']) && !empty($_POST['codigo_area1referencia1']) ) && (!empty($_POST['telefono2referencia1']) && !empty($_POST['codigo_area2referencia1']) ) && (empty($_POST['telefono3referencia1']) || empty($_POST['codigo_area3referencia1']) ) ) {
				        	$telefonosref1 = array(
				              	'telefono1referencia1' => $_POST['telefono1referencia1'], 'codigo_area1referencia1' => $_POST['codigo_area1referencia1'],
								'telefono2referencia1' => $_POST['telefono2referencia1'], 'codigo_area2referencia1' => $_POST['codigo_area2referencia1']
				            );
				        } else if ( (!empty($_POST['telefono1referencia1']) && !empty($_POST['codigo_area1referencia1']) ) && (empty($_POST['telefono2referencia1']) || empty($_POST['codigo_area2referencia1']) ) && (empty($_POST['telefono3referencia1']) || empty($_POST['codigo_area3referencia1']) ) ) {
				        	$telefonosref1 = array(
				              	'telefono1referencia1' => $_POST['telefono1referencia1'], 'codigo_area1referencia1' => $_POST['codigo_area1referencia1']
				            );
				        }
			            if ( !empty($_POST['telefono1referencia1']) && !empty($_POST['codigo_area1referencia1']) ) {
							$query4tel1ref1 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref1['telefono1referencia1']."','".$telefonosref1['codigo_area1referencia1']."')";
							$idtelefono1ref1 = $this->_main->insert($query4tel1ref1,'telefono');
						}
			            if ( !empty($_POST['telefono2referencia1']) && !empty($_POST['codigo_area2referencia1']) ) {
							$query4tel2ref1 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref1['telefono2referencia1']."','".$telefonosref1['codigo_area2referencia1']."')";
							$idtelefono2ref1 = $this->_main->insert($query4tel2ref1,'telefono');
						}
			            if ( !empty($_POST['telefono3referencia1']) && !empty($_POST['codigo_area3referencia1']) ) {
							$query4tel3ref1 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref1['telefono3referencia1']."','".$telefonosref1['codigo_area3referencia1']."')";
							$idtelefono3ref1 = $this->_main->insert($query4tel3ref1,'telefono');
						}
					}

					if ( !empty($idtelefono1ref1) || !empty($idtelefono2ref1) || !empty($idtelefono3ref1) ) {
						if ( !empty($idtelefono1ref1) ) {
							$query5tel1ref1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1ref1."')";
							$this->_main->insert($query5tel1ref1,'persona_has_telefono');
						}
						if ( !empty($idtelefono2ref1) ) {
							$query5tel2ref1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2ref1."')";
							$this->_main->insert($query5tel2ref1,'persona_has_telefono');
						}
						if ( !empty($idtelefono3ref1) ) {
							$query5tel3ref1 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3ref1."')";
							$this->_main->insert($query5tel3ref1,'persona_has_telefono');
						}
					}


					if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) || (!empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) || (!empty($_POST['discapacidad3referencia1']) && !empty($_POST['tipo_discapacidad3referencia1']) ) || (!empty($_POST['discapacidad4referencia1']) && !empty($_POST['tipo_discapacidad4referencia1']) ) || (!empty($_POST['discapacidad5referencia1']) && !empty($_POST['tipo_discapacidad5referencia1']) ) ) {
						if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) && (!empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) && (!empty($_POST['discapacidad3referencia1']) && !empty($_POST['tipo_discapacidad3referencia1']) ) && (!empty($_POST['discapacidad4referencia1']) && !empty($_POST['tipo_discapacidad4referencia1']) ) && (!empty($_POST['discapacidad5referencia1']) && !empty($_POST['tipo_discapacidad5referencia1']) ) ) {
							$discapacidadesref1 = array(
								'discapacidad1referencia1' => $_POST['discapacidad1referencia1'], 'tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1'],
								'discapacidad2referencia1' => $_POST['discapacidad2referencia1'], 'tipo_discapacidad2referencia1' => $_POST['tipo_discapacidad2referencia1'],
								'discapacidad3referencia1' => $_POST['discapacidad3referencia1'], 'tipo_discapacidad3referencia1' => $_POST['tipo_discapacidad3referencia1'],
								'discapacidad4referencia1' => $_POST['discapacidad4referencia1'], 'tipo_discapacidad4referencia1' => $_POST['tipo_discapacidad4referencia1'],
								'discapacidad5referencia1' => $_POST['discapacidad5referencia1'], 'tipo_discapacidad5referencia1' => $_POST['tipo_discapacidad5referencia1']
							);
						} else if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) && (!empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) && (!empty($_POST['discapacidad3referencia1']) && !empty($_POST['tipo_discapacidad3referencia1']) ) && (!empty($_POST['discapacidad4referencia1']) && !empty($_POST['tipo_discapacidad4referencia1']) ) && (empty($_POST['discapacidad5referencia1']) || empty($_POST['tipo_discapacidad5referencia1']) ) ) {
							$discapacidadesref1 = array(
								'discapacidad1referencia1' => $_POST['discapacidad1referencia1'], 'tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1'],
								'discapacidad2referencia1' => $_POST['discapacidad2referencia1'], 'tipo_discapacidad2referencia1' => $_POST['tipo_discapacidad2referencia1'],
								'discapacidad3referencia1' => $_POST['discapacidad3referencia1'], 'tipo_discapacidad3referencia1' => $_POST['tipo_discapacidad3referencia1'],
								'discapacidad4referencia1' => $_POST['discapacidad4referencia1'], 'tipo_discapacidad4referencia1' => $_POST['tipo_discapacidad4referencia1']
							);
						} else if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) && (!empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) && (!empty($_POST['discapacidad3referencia1']) && !empty($_POST['tipo_discapacidad3referencia1']) ) && (empty($_POST['discapacidad4referencia1']) || empty($_POST['tipo_discapacidad4referencia1']) ) && (empty($_POST['discapacidad5referencia1']) || empty($_POST['tipo_discapacidad5referencia1']) ) ) {
							$discapacidadesref1 = array(
								'discapacidad1referencia1' => $_POST['discapacidad1referencia1'], 'tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1'],
								'discapacidad2referencia1' => $_POST['discapacidad2referencia1'], 'tipo_discapacidad2referencia1' => $_POST['tipo_discapacidad2referencia1'],
								'discapacidad3referencia1' => $_POST['discapacidad3referencia1'], 'tipo_discapacidad3referencia1' => $_POST['tipo_discapacidad3referencia1']
							);
						} else if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) && (!empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) && (empty($_POST['discapacidad3referencia1']) || empty($_POST['tipo_discapacidad3referencia1']) ) && (empty($_POST['discapacidad4referencia1']) || empty($_POST['tipo_discapacidad4referencia1']) ) && (empty($_POST['discapacidad5referencia1']) || empty($_POST['tipo_discapacidad5referencia1']) ) ) {
							$discapacidadesref1 = array(
								'discapacidad1referencia1' => $_POST['discapacidad1referencia1'], 'tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1'],
								'discapacidad2referencia1' => $_POST['discapacidad2referencia1'], 'tipo_discapacidad2referencia1' => $_POST['tipo_discapacidad2referencia1']
							);
						} else if ( (!empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) && (empty($_POST['discapacidad2referencia1']) || empty($_POST['tipo_discapacidad2referencia1']) ) && (empty($_POST['discapacidad3referencia1']) || empty($_POST['tipo_discapacidad3referencia1']) ) && (empty($_POST['discapacidad4referencia1']) || empty($_POST['tipo_discapacidad4referencia1']) ) && (empty($_POST['discapacidad5referencia1']) || empty($_POST['tipo_discapacidad5referencia1']) ) ) {
							$discapacidadesref1 = array(
								'discapacidad1referencia1' => $_POST['discapacidad1referencia1'], 'tipo_discapacidad1referencia1' => $_POST['tipo_discapacidad1referencia1']
							);
						}
						if ( !empty($_POST['discapacidad1referencia1']) && !empty($_POST['tipo_discapacidad1referencia1']) ) {
				      		$query8ref1 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref1['discapacidad1referencia1']."','".$discapacidadesref1['tipo_discapacidad1referencia1']."')";
				     		$iddiscapacidad1ref1 = $this->_main->insert($query8ref1,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad2referencia1']) && !empty($_POST['tipo_discapacidad2referencia1']) ) {
				      		$query8ref1 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref1['discapacidad2referencia1']."','".$discapacidadesref1['tipo_discapacidad2referencia1']."')";
				     		$iddiscapacidad2ref1 = $this->_main->insert($query8ref1,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad3referencia1']) && !empty($_POST['tipo_discapacidad3referencia1']) ) {
				      		$query8ref1 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref1['discapacidad3referencia1']."','".$discapacidadesref1['tipo_discapacidad3referencia1']."')";
				     		$iddiscapacidad3ref1 = $this->_main->insert($query8ref1,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad4referencia1']) && !empty($_POST['tipo_discapacidad4referencia1']) ) {
				      		$query8ref1 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref1['discapacidad4referencia1']."','".$discapacidadesref1['tipo_discapacidad4referencia1']."')";
				     		$iddiscapacidad4ref1 = $this->_main->insert($query8ref1,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad5referencia1']) && !empty($_POST['tipo_discapacidad5referencia1']) ) {
				      		$query8ref1 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref1['discapacidad5referencia1']."','".$discapacidadesref1['tipo_discapacidad5referencia1']."')";
				     		$iddiscapacidad5ref1 = $this->_main->insert($query8ref1,'discapacidades');
				     	}
		     		}
			     	if ( !empty($iddiscapacidad1ref1) || !empty($iddiscapacidad2ref1) || !empty($iddiscapacidad3ref1) || !empty($iddiscapacidad4ref1) || !empty($iddiscapacidad5ref1) ) {
			     		if ( !empty($iddiscapacidad1ref1) ) {
							$query9ref1 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad1ref1."')";
							$this->_main->insert($query9ref1,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad2ref1) ) {
							$query9ref1 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad2ref1."')";
							$this->_main->insert($query9ref1,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad3ref1) ) {
							$query9ref1 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad3ref1."')";
							$this->_main->insert($query9ref1,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad4ref1) ) {
							$query9ref1 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad4ref1."')";
							$this->_main->insert($query9ref1,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad5ref1) ) {
							$query9ref1 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad5ref1."')";
							$this->_main->insert($query9ref1,'persona_has_discapacidades');
						}
					}
				}
			}

			if (!empty($_POST['cedula_referencia2']) && !empty($_POST['nombre1_referencia2']) && !empty($_POST['nombre2_referencia2']) && !empty($_POST['apellido1_referencia2']) && !empty($_POST['apellido2_referencia2']) && !empty($_POST['fecha_nacimiento_referencia2']) && !empty($_POST['correoreferencia2']) && !empty($_POST['sexo_referencia2']) ) {
				$cedula_referencia2 = $_POST['cedula_referencia2'];
				$nombre1_referencia2 = $_POST['nombre1_referencia2'];
				$nombre2_referencia2 = $_POST['nombre2_referencia2'];
				$apellido1_referencia2 = $_POST['apellido1_referencia2'];
	            $apellido2_referencia2 = $_POST['apellido2_referencia2'];
	            $fecha_nacimiento_referencia2 = $_POST['fecha_nacimiento_referencia2'];
	            $correoreferencia2 = $_POST['correoreferencia2'];
				$sexo_referencia2 = $_POST['sexo_referencia2'];
				$tipo_personalreferencia2 = 0;
				$municipio_nacimientoreferencia2 = 0;
				$estado_civilreferencia2 = 0;
				$parroquia_casareferencia2 = 0;
				$direccion_casareferencia2 = 0;
			    $queryref2 = "INSERT INTO persona (cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa) VALUES 
				('".$cedula_referencia2."',
				'".$nombre1_referencia2."',
				'".$nombre2_referencia2."',
				'".$apellido1_referencia2."',
				'".$apellido2_referencia2."',
				'".$fecha_nacimiento_referencia2."',
				'".$correoreferencia2."',
				'".$sexo_referencia2."',
				'".$tipo_personalreferencia2."',
				'".$municipio_nacimientoreferencia2."',
				'".$estado_civilreferencia2."',
				'".$parroquia_casareferencia2."',
				'".$direccion_casareferencia2."')";
				//Enviamos a la funcion en el modelo de personas el arreglo...
				$idreferencia2 = $this->_main->insert($queryref2,'persona'); 
				/*Referencia Personal*/
				if (!empty($idreferencia2)) {
					if ( !empty($_POST['nexo2']) ) {
						$nexo2 = $_POST['nexo2'];
						$querynexo2 = "INSERT INTO persona_has_referencias(persona_id, referencia_id, nexo_id) VALUES 
						('".$personal['cedula']."','".$idreferencia2."','".$nexo2."')";
					}
					if ( (!empty($_POST['telefono1referencia2']) && !empty($_POST['codigo_area1referencia2']) ) || (!empty($_POST['telefono2referencia2']) && !empty($_POST['codigo_area2referencia2']) ) || (!empty($_POST['telefono3referencia2']) && !empty($_POST['codigo_area3referencia2']) ) ) {

						if ( (!empty($_POST['telefono1referencia2']) && !empty($_POST['codigo_area1referencia2']) ) && (!empty($_POST['telefono2referencia2']) && !empty($_POST['codigo_area2referencia2']) ) && (!empty($_POST['telefono3referencia2']) && !empty($_POST['codigo_area3referencia2']) ) ) {
							$telefonosref2 = array(
				              	'telefono1referencia2' => $_POST['telefono1referencia2'], 'codigo_area1referencia2' => $_POST['codigo_area1referencia2'],
								'telefono2referencia2' => $_POST['telefono2referencia2'], 'codigo_area2referencia2' => $_POST['codigo_area2referencia2'],
								'telefono3referencia2' => $_POST['telefono3referencia2'], 'codigo_area3referencia2' => $_POST['codigo_area3referencia2']
				            );
				        } else if ( (!empty($_POST['telefono1referencia2']) && !empty($_POST['codigo_area1referencia2']) ) && (!empty($_POST['telefono2referencia2']) && !empty($_POST['codigo_area2referencia2']) ) && (empty($_POST['telefono3referencia2']) || empty($_POST['codigo_area3referencia2']) ) ) {
				        	$telefonosref2 = array(
				              	'telefono1referencia2' => $_POST['telefono1referencia2'], 'codigo_area1referencia2' => $_POST['codigo_area1referencia2'],
								'telefono2referencia2' => $_POST['telefono2referencia2'], 'codigo_area2referencia2' => $_POST['codigo_area2referencia2']
				            );
				        } else if ( (!empty($_POST['telefono1referencia2']) && !empty($_POST['codigo_area1referencia2']) ) && (empty($_POST['telefono2referencia2']) || empty($_POST['codigo_area2referencia2']) ) && (empty($_POST['telefono3referencia2']) || empty($_POST['codigo_area3referencia2']) ) ) {
				        	$telefonosref2 = array(
				              	'telefono1referencia2' => $_POST['telefono1referencia2'], 'codigo_area1referencia2' => $_POST['codigo_area1referencia2']
				            );
				        }
			            if ( !empty($_POST['telefono1referencia2']) && !empty($_POST['codigo_area1referencia2']) ) {
							$query4tel1ref2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref2['telefono1referencia2']."','".$telefonosref2['codigo_area1referencia2']."')";
							$idtelefono1ref2 = $this->_main->insert($query4tel1ref2,'telefono');
						}
			            if ( !empty($_POST['telefono2referencia2']) && !empty($_POST['codigo_area2referencia2']) ) {
							$query4tel2ref2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref2['telefono2referencia2']."','".$telefonosref2['codigo_area2referencia2']."')";
							$idtelefono2ref2 = $this->_main->insert($query4tel2ref2,'telefono');
						}
			            if ( !empty($_POST['telefono3referencia2']) && !empty($_POST['codigo_area3referencia2']) ) {
							$query4tel3ref2 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref2['telefono3referencia2']."','".$telefonosref2['codigo_area3referencia2']."')";
							$idtelefono3ref2 = $this->_main->insert($query4tel3ref2,'telefono');
						}
					}

					if ( !empty($idtelefono1ref2) || !empty($idtelefono2ref2) || !empty($idtelefono3ref2) ) {
						if ( !empty($idtelefono1ref2) ) {
							$query5tel1ref2 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1ref2."')";
							$this->_main->insert($query5tel1ref2,'persona_has_telefono');
						}
						if ( !empty($idtelefono2ref2) ) {
							$query5tel2ref2 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2ref2."')";
							$this->_main->insert($query5tel2ref2,'persona_has_telefono');
						}
						if ( !empty($idtelefono3ref2) ) {
							$query5tel3ref2 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3ref2."')";
							$this->_main->insert($query5tel3ref2,'persona_has_telefono');
						}
					}

					if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) || (!empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) || (!empty($_POST['discapacidad3referencia2']) && !empty($_POST['tipo_discapacidad3referencia2']) ) || (!empty($_POST['discapacidad4referencia2']) && !empty($_POST['tipo_discapacidad4referencia2']) ) || (!empty($_POST['discapacidad5referencia2']) && !empty($_POST['tipo_discapacidad5referencia2']) ) ) {
						if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) && (!empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) && (!empty($_POST['discapacidad3referencia2']) && !empty($_POST['tipo_discapacidad3referencia2']) ) && (!empty($_POST['discapacidad4referencia2']) && !empty($_POST['tipo_discapacidad4referencia2']) ) && (!empty($_POST['discapacidad5referencia2']) && !empty($_POST['tipo_discapacidad5referencia2']) ) ) {
							$discapacidadesref2 = array(
								'discapacidad1referencia2' => $_POST['discapacidad1referencia2'], 'tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2'],
								'discapacidad2referencia2' => $_POST['discapacidad2referencia2'], 'tipo_discapacidad2referencia2' => $_POST['tipo_discapacidad2referencia2'],
								'discapacidad3referencia2' => $_POST['discapacidad3referencia2'], 'tipo_discapacidad3referencia2' => $_POST['tipo_discapacidad3referencia2'],
								'discapacidad4referencia2' => $_POST['discapacidad4referencia2'], 'tipo_discapacidad4referencia2' => $_POST['tipo_discapacidad4referencia2'],
								'discapacidad5referencia2' => $_POST['discapacidad5referencia2'], 'tipo_discapacidad5referencia2' => $_POST['tipo_discapacidad5referencia2']
							);
						} else if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) && (!empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) && (!empty($_POST['discapacidad3referencia2']) && !empty($_POST['tipo_discapacidad3referencia2']) ) && (!empty($_POST['discapacidad4referencia2']) && !empty($_POST['tipo_discapacidad4referencia2']) ) && (empty($_POST['discapacidad5referencia2']) || empty($_POST['tipo_discapacidad5referencia2']) ) ) {
							$discapacidadesref2 = array(
								'discapacidad1referencia2' => $_POST['discapacidad1referencia2'], 'tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2'],
								'discapacidad2referencia2' => $_POST['discapacidad2referencia2'], 'tipo_discapacidad2referencia2' => $_POST['tipo_discapacidad2referencia2'],
								'discapacidad3referencia2' => $_POST['discapacidad3referencia2'], 'tipo_discapacidad3referencia2' => $_POST['tipo_discapacidad3referencia2'],
								'discapacidad4referencia2' => $_POST['discapacidad4referencia2'], 'tipo_discapacidad4referencia2' => $_POST['tipo_discapacidad4referencia2']
							);
						} else if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) && (!empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) && (!empty($_POST['discapacidad3referencia2']) && !empty($_POST['tipo_discapacidad3referencia2']) ) && (empty($_POST['discapacidad4referencia2']) || empty($_POST['tipo_discapacidad4referencia2']) ) && (empty($_POST['discapacidad5referencia2']) || empty($_POST['tipo_discapacidad5referencia2']) ) ) {
							$discapacidadesref2 = array(
								'discapacidad1referencia2' => $_POST['discapacidad1referencia2'], 'tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2'],
								'discapacidad2referencia2' => $_POST['discapacidad2referencia2'], 'tipo_discapacidad2referencia2' => $_POST['tipo_discapacidad2referencia2'],
								'discapacidad3referencia2' => $_POST['discapacidad3referencia2'], 'tipo_discapacidad3referencia2' => $_POST['tipo_discapacidad3referencia2']
							);
						} else if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) && (!empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) && (empty($_POST['discapacidad3referencia2']) || empty($_POST['tipo_discapacidad3referencia2']) ) && (empty($_POST['discapacidad4referencia2']) || empty($_POST['tipo_discapacidad4referencia2']) ) && (empty($_POST['discapacidad5referencia2']) || empty($_POST['tipo_discapacidad5referencia2']) ) ) {
							$discapacidadesref2 = array(
								'discapacidad1referencia2' => $_POST['discapacidad1referencia2'], 'tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2'],
								'discapacidad2referencia2' => $_POST['discapacidad2referencia2'], 'tipo_discapacidad2referencia2' => $_POST['tipo_discapacidad2referencia2']
							);
						} else if ( (!empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) && (empty($_POST['discapacidad2referencia2']) || empty($_POST['tipo_discapacidad2referencia2']) ) && (empty($_POST['discapacidad3referencia2']) || empty($_POST['tipo_discapacidad3referencia2']) ) && (empty($_POST['discapacidad4referencia2']) || empty($_POST['tipo_discapacidad4referencia2']) ) && (empty($_POST['discapacidad5referencia2']) || empty($_POST['tipo_discapacidad5referencia2']) ) ) {
							$discapacidadesref2 = array(
								'discapacidad1referencia2' => $_POST['discapacidad1referencia2'], 'tipo_discapacidad1referencia2' => $_POST['tipo_discapacidad1referencia2']
							);
						}
						if ( !empty($_POST['discapacidad1referencia2']) && !empty($_POST['tipo_discapacidad1referencia2']) ) {
				      		$query8ref2 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref2['discapacidad1referencia2']."','".$discapacidadesref2['tipo_discapacidad1referencia2']."')";
				     		$iddiscapacidad1ref2 = $this->_main->insert($query8ref2,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad2referencia2']) && !empty($_POST['tipo_discapacidad2referencia2']) ) {
				      		$query8ref2 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref2['discapacidad2referencia2']."','".$discapacidadesref2['tipo_discapacidad2referencia2']."')";
				     		$iddiscapacidad2ref2 = $this->_main->insert($query8ref2,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad3referencia2']) && !empty($_POST['tipo_discapacidad3referencia2']) ) {
				      		$query8ref2 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref2['discapacidad3referencia2']."','".$discapacidadesref2['tipo_discapacidad3referencia2']."')";
				     		$iddiscapacidad3ref2 = $this->_main->insert($query8ref2,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad4referencia2']) && !empty($_POST['tipo_discapacidad4referencia2']) ) {
				      		$query8ref2 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref2['discapacidad4referencia2']."','".$discapacidadesref2['tipo_discapacidad4referencia2']."')";
				     		$iddiscapacidad4ref2 = $this->_main->insert($query8ref2,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad5referencia2']) && !empty($_POST['tipo_discapacidad5referencia2']) ) {
				      		$query8ref2 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref2['discapacidad5referencia2']."','".$discapacidadesref2['tipo_discapacidad5referencia2']."')";
				     		$iddiscapacidad5ref2 = $this->_main->insert($query8ref2,'discapacidades');
				     	}
		     		}
			     	if ( !empty($iddiscapacidad1ref2) || !empty($iddiscapacidad2ref2) || !empty($iddiscapacidad3ref2) || !empty($iddiscapacidad4ref2) || !empty($iddiscapacidad5ref2) ) {
			     		if ( !empty($iddiscapacidad1ref2) ) {
							$query9ref2 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad1ref2."')";
							$this->_main->insert($query9ref2,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad2ref2) ) {
							$query9ref2 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad2ref2."')";
							$this->_main->insert($query9ref2,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad3ref2) ) {
							$query9ref2 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad3ref2."')";
							$this->_main->insert($query9ref2,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad4ref2) ) {
							$query9ref2 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad4ref2."')";
							$this->_main->insert($query9ref2,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad5ref2) ) {
							$query9ref2 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad5ref2."')";
							$this->_main->insert($query9ref2,'persona_has_discapacidades');
						}
					}
				}
			}

			if (!empty($_POST['cedula_referencia3']) && !empty($_POST['nombre1_referencia3']) && !empty($_POST['nombre2_referencia3']) && !empty($_POST['apellido1_referencia3']) && !empty($_POST['apellido2_referencia3']) && !empty($_POST['fecha_nacimiento_referencia3']) && !empty($_POST['correoreferencia3']) && !empty($_POST['sexo_referencia3']) ) {
				$cedula_referencia3 = $_POST['cedula_referencia3'];
				$nombre1_referencia3 = $_POST['nombre1_referencia3'];
				$nombre2_referencia3 = $_POST['nombre2_referencia3'];
				$apellido1_referencia3 = $_POST['apellido1_referencia3'];
	            $apellido2_referencia3 = $_POST['apellido2_referencia3'];
	            $fecha_nacimiento_referencia3 = $_POST['fecha_nacimiento_referencia3'];
	            $correoreferencia3 = $_POST['correoreferencia3'];
				$sexo_referencia3 = $_POST['sexo_referencia3'];
				$tipo_personalreferencia3 = 0;
				$municipio_nacimientoreferencia3 = 0;
				$estado_civilreferencia3 = 0;
				$parroquia_casareferencia3 = 0;
				$direccion_casareferencia3 = 0;
			    $queryref3 = "INSERT INTO persona (cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa) VALUES 
				('".$cedula_referencia3."',
				'".$nombre1_referencia3."',
				'".$nombre2_referencia3."',
				'".$apellido1_referencia3."',
				'".$apellido2_referencia3."',
				'".$fecha_nacimiento_referencia3."',
				'".$correoreferencia3."',
				'".$sexo_referencia3."',
				'".$tipo_personalreferencia3."',
				'".$municipio_nacimientoreferencia3."',
				'".$estado_civilreferencia3."',
				'".$parroquia_casareferencia3."',
				'".$direccion_casareferencia3."')";
				//Enviamos a la funcion en el modelo de personas el arreglo...
				$idreferencia3 = $this->_main->insert($queryref3,'persona'); 
				/*Referencia Personal*/
				if (!empty($idreferencia3)) {
					if ( !empty($_POST['nexo3']) ) {
						$nexo3 = $_POST['nexo3'];
						$querynexo3 = "INSERT INTO persona_has_referencias(persona_id, referencia_id, nexo_id) VALUES 
						('".$personal['cedula']."','".$idreferencia3."','".$nexo3."')";
					}
					if ( (!empty($_POST['telefono1referencia3']) && !empty($_POST['codigo_area1referencia3']) ) || (!empty($_POST['telefono2referencia3']) && !empty($_POST['codigo_area2referencia3']) ) || (!empty($_POST['telefono3referencia3']) && !empty($_POST['codigo_area3referencia3']) ) ) {

						if ( (!empty($_POST['telefono1referencia3']) && !empty($_POST['codigo_area1referencia3']) ) && (!empty($_POST['telefono2referencia3']) && !empty($_POST['codigo_area2referencia3']) ) && (!empty($_POST['telefono3referencia3']) && !empty($_POST['codigo_area3referencia3']) ) ) {
							$telefonosref3 = array(
				              	'telefono1referencia3' => $_POST['telefono1referencia3'], 'codigo_area1referencia3' => $_POST['codigo_area1referencia3'],
								'telefono2referencia3' => $_POST['telefono2referencia3'], 'codigo_area2referencia3' => $_POST['codigo_area2referencia3'],
								'telefono3referencia3' => $_POST['telefono3referencia3'], 'codigo_area3referencia3' => $_POST['codigo_area3referencia3']
				            );
				        } else if ( (!empty($_POST['telefono1referencia3']) && !empty($_POST['codigo_area1referencia3']) ) && (!empty($_POST['telefono2referencia3']) && !empty($_POST['codigo_area2referencia3']) ) && (empty($_POST['telefono3referencia3']) || empty($_POST['codigo_area3referencia3']) ) ) {
				        	$telefonosref3 = array(
				              	'telefono1referencia3' => $_POST['telefono1referencia3'], 'codigo_area1referencia3' => $_POST['codigo_area1referencia3'],
								'telefono2referencia3' => $_POST['telefono2referencia3'], 'codigo_area2referencia3' => $_POST['codigo_area2referencia3']
				            );
				        } else if ( (!empty($_POST['telefono1referencia3']) && !empty($_POST['codigo_area1referencia3']) ) && (empty($_POST['telefono2referencia3']) || empty($_POST['codigo_area2referencia3']) ) && (empty($_POST['telefono3referencia3']) || empty($_POST['codigo_area3referencia3']) ) ) {
				        	$telefonosref3 = array(
				              	'telefono1referencia3' => $_POST['telefono1referencia3'], 'codigo_area1referencia3' => $_POST['codigo_area1referencia3']
				            );
				        }
			            if ( !empty($_POST['telefono1referencia3']) && !empty($_POST['codigo_area1referencia3']) ) {
							$query4tel1ref3 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref3['telefono1referencia3']."','".$telefonosref3['codigo_area1referencia3']."')";
							$idtelefono1ref3 = $this->_main->insert($query4tel1ref3,'telefono');
						}
			            if ( !empty($_POST['telefono2referencia3']) && !empty($_POST['codigo_area2referencia3']) ) {
							$query4tel2ref3 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref3['telefono2referencia3']."','".$telefonosref3['codigo_area2referencia3']."')";
							$idtelefono2ref3 = $this->_main->insert($query4tel2ref3,'telefono');
						}
			            if ( !empty($_POST['telefono3referencia3']) && !empty($_POST['codigo_area3referencia3']) ) {
							$query4tel3ref3 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref3['telefono3referencia3']."','".$telefonosref3['codigo_area3referencia3']."')";
							$idtelefono3ref3 = $this->_main->insert($query4tel3ref3,'telefono');
						}
					}

					if ( !empty($idtelefono1ref3) || !empty($idtelefono2ref3) || !empty($idtelefono3ref3) ) {
						if ( !empty($idtelefono1ref3) ) {
							$query5tel1ref3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1ref3."')";
							$this->_main->insert($query5tel1ref3,'persona_has_telefono');
						}
						if ( !empty($idtelefono2ref3) ) {
							$query5tel2ref3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2ref3."')";
							$this->_main->insert($query5tel2ref3,'persona_has_telefono');
						}
						if ( !empty($idtelefono3ref3) ) {
							$query5tel3ref3 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3ref3."')";
							$this->_main->insert($query5tel3ref3,'persona_has_telefono');
						}
					}

					if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) || (!empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) || (!empty($_POST['discapacidad3referencia3']) && !empty($_POST['tipo_discapacidad3referencia3']) ) || (!empty($_POST['discapacidad4referencia3']) && !empty($_POST['tipo_discapacidad4referencia3']) ) || (!empty($_POST['discapacidad5referencia3']) && !empty($_POST['tipo_discapacidad5referencia3']) ) ) {
						if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) && (!empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) && (!empty($_POST['discapacidad3referencia3']) && !empty($_POST['tipo_discapacidad3referencia3']) ) && (!empty($_POST['discapacidad4referencia3']) && !empty($_POST['tipo_discapacidad4referencia3']) ) && (!empty($_POST['discapacidad5referencia3']) && !empty($_POST['tipo_discapacidad5referencia3']) ) ) {
							$discapacidadesref3 = array(
								'discapacidad1referencia3' => $_POST['discapacidad1referencia3'], 'tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3'],
								'discapacidad2referencia3' => $_POST['discapacidad2referencia3'], 'tipo_discapacidad2referencia3' => $_POST['tipo_discapacidad2referencia3'],
								'discapacidad3referencia3' => $_POST['discapacidad3referencia3'], 'tipo_discapacidad3referencia3' => $_POST['tipo_discapacidad3referencia3'],
								'discapacidad4referencia3' => $_POST['discapacidad4referencia3'], 'tipo_discapacidad4referencia3' => $_POST['tipo_discapacidad4referencia3'],
								'discapacidad5referencia3' => $_POST['discapacidad5referencia3'], 'tipo_discapacidad5referencia3' => $_POST['tipo_discapacidad5referencia3']
							);
						} else if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) && (!empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) && (!empty($_POST['discapacidad3referencia3']) && !empty($_POST['tipo_discapacidad3referencia3']) ) && (!empty($_POST['discapacidad4referencia3']) && !empty($_POST['tipo_discapacidad4referencia3']) ) && (empty($_POST['discapacidad5referencia3']) || empty($_POST['tipo_discapacidad5referencia3']) ) ) {
							$discapacidadesref3 = array(
								'discapacidad1referencia3' => $_POST['discapacidad1referencia3'], 'tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3'],
								'discapacidad2referencia3' => $_POST['discapacidad2referencia3'], 'tipo_discapacidad2referencia3' => $_POST['tipo_discapacidad2referencia3'],
								'discapacidad3referencia3' => $_POST['discapacidad3referencia3'], 'tipo_discapacidad3referencia3' => $_POST['tipo_discapacidad3referencia3'],
								'discapacidad4referencia3' => $_POST['discapacidad4referencia3'], 'tipo_discapacidad4referencia3' => $_POST['tipo_discapacidad4referencia3']
							);
						} else if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) && (!empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) && (!empty($_POST['discapacidad3referencia3']) && !empty($_POST['tipo_discapacidad3referencia3']) ) && (empty($_POST['discapacidad4referencia3']) || empty($_POST['tipo_discapacidad4referencia3']) ) && (empty($_POST['discapacidad5referencia3']) || empty($_POST['tipo_discapacidad5referencia3']) ) ) {
							$discapacidadesref3 = array(
								'discapacidad1referencia3' => $_POST['discapacidad1referencia3'], 'tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3'],
								'discapacidad2referencia3' => $_POST['discapacidad2referencia3'], 'tipo_discapacidad2referencia3' => $_POST['tipo_discapacidad2referencia3'],
								'discapacidad3referencia3' => $_POST['discapacidad3referencia3'], 'tipo_discapacidad3referencia3' => $_POST['tipo_discapacidad3referencia3']
							);
						} else if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) && (!empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) && (empty($_POST['discapacidad3referencia3']) || empty($_POST['tipo_discapacidad3referencia3']) ) && (empty($_POST['discapacidad4referencia3']) || empty($_POST['tipo_discapacidad4referencia3']) ) && (empty($_POST['discapacidad5referencia3']) || empty($_POST['tipo_discapacidad5referencia3']) ) ) {
							$discapacidadesref3 = array(
								'discapacidad1referencia3' => $_POST['discapacidad1referencia3'], 'tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3'],
								'discapacidad2referencia3' => $_POST['discapacidad2referencia3'], 'tipo_discapacidad2referencia3' => $_POST['tipo_discapacidad2referencia3']
							);
						} else if ( (!empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) && (empty($_POST['discapacidad2referencia3']) || empty($_POST['tipo_discapacidad2referencia3']) ) && (empty($_POST['discapacidad3referencia3']) || empty($_POST['tipo_discapacidad3referencia3']) ) && (empty($_POST['discapacidad4referencia3']) || empty($_POST['tipo_discapacidad4referencia3']) ) && (empty($_POST['discapacidad5referencia3']) || empty($_POST['tipo_discapacidad5referencia3']) ) ) {
							$discapacidadesref3 = array(
								'discapacidad1referencia3' => $_POST['discapacidad1referencia3'], 'tipo_discapacidad1referencia3' => $_POST['tipo_discapacidad1referencia3']
							);
						}
						if ( !empty($_POST['discapacidad1referencia3']) && !empty($_POST['tipo_discapacidad1referencia3']) ) {
				      		$query8ref3 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref3['discapacidad1referencia3']."','".$discapacidadesref3['tipo_discapacidad1referencia3']."')";
				     		$iddiscapacidad1ref3 = $this->_main->insert($query8ref3,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad2referencia3']) && !empty($_POST['tipo_discapacidad2referencia3']) ) {
				      		$query8ref3 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref3['discapacidad2referencia3']."','".$discapacidadesref3['tipo_discapacidad2referencia3']."')";
				     		$iddiscapacidad2ref3 = $this->_main->insert($query8ref3,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad3referencia3']) && !empty($_POST['tipo_discapacidad3referencia3']) ) {
				      		$query8ref3 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref3['discapacidad3referencia3']."','".$discapacidadesref3['tipo_discapacidad3referencia3']."')";
				     		$iddiscapacidad3ref3 = $this->_main->insert($query8ref3,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad4referencia3']) && !empty($_POST['tipo_discapacidad4referencia3']) ) {
				      		$query8ref3 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref3['discapacidad4referencia3']."','".$discapacidadesref3['tipo_discapacidad4referencia3']."')";
				     		$iddiscapacidad4ref3 = $this->_main->insert($query8ref3,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad5referencia3']) && !empty($_POST['tipo_discapacidad5referencia3']) ) {
				      		$query8ref3 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref3['discapacidad5referencia3']."','".$discapacidadesref3['tipo_discapacidad5referencia3']."')";
				     		$iddiscapacidad5ref3 = $this->_main->insert($query8ref3,'discapacidades');
				     	}
		     		}
			     	if ( !empty($iddiscapacidad1ref3) || !empty($iddiscapacidad2ref3) || !empty($iddiscapacidad3ref3) || !empty($iddiscapacidad4ref3) || !empty($iddiscapacidad5ref3) ) {
			     		if ( !empty($iddiscapacidad1ref3) ) {
							$query9ref3 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad1ref3."')";
							$this->_main->insert($query9ref3,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad2ref3) ) {
							$query9ref3 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad2ref3."')";
							$this->_main->insert($query9ref3,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad3ref3) ) {
							$query9ref3 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad3ref3."')";
							$this->_main->insert($query9ref3,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad4ref3) ) {
							$query9ref3 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad4ref3."')";
							$this->_main->insert($query9ref3,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad5ref3) ) {
							$query9ref3 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad5ref3."')";
							$this->_main->insert($query9ref3,'persona_has_discapacidades');
						}
					}
				}
			}

			if (!empty($_POST['cedula_referencia4']) && !empty($_POST['nombre1_referencia4']) && !empty($_POST['nombre2_referencia4']) && !empty($_POST['apellido1_referencia4']) && !empty($_POST['apellido2_referencia4']) && !empty($_POST['fecha_nacimiento_referencia4']) && !empty($_POST['correoreferencia4']) && !empty($_POST['sexo_referencia4']) ) {
				$cedula_referencia4 = $_POST['cedula_referencia4'];
				$nombre1_referencia4 = $_POST['nombre1_referencia4'];
				$nombre2_referencia4 = $_POST['nombre2_referencia4'];
				$apellido1_referencia4 = $_POST['apellido1_referencia4'];
	            $apellido2_referencia4 = $_POST['apellido2_referencia4'];
	            $fecha_nacimiento_referencia4 = $_POST['fecha_nacimiento_referencia4'];
	            $correoreferencia4 = $_POST['correoreferencia4'];
				$sexo_referencia4 = $_POST['sexo_referencia4'];
				$tipo_personalreferencia4 = 0;
				$municipio_nacimientoreferencia4 = 0;
				$estado_civilreferencia4 = 0;
				$parroquia_casareferencia4 = 0;
				$direccion_casareferencia4 = 0;
			    $queryref4 = "INSERT INTO persona (cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa) VALUES 
				('".$cedula_referencia4."',
				'".$nombre1_referencia4."',
				'".$nombre2_referencia4."',
				'".$apellido1_referencia4."',
				'".$apellido2_referencia4."',
				'".$fecha_nacimiento_referencia4."',
				'".$correoreferencia4."',
				'".$sexo_referencia4."',
				'".$tipo_personalreferencia4."',
				'".$municipio_nacimientoreferencia4."',
				'".$estado_civilreferencia4."',
				'".$parroquia_casareferencia4."',
				'".$direccion_casareferencia4."')";
				//Enviamos a la funcion en el modelo de personas el arreglo...
				$idreferencia4 = $this->_main->insert($queryref4,'persona'); 
				/*Referencia Personal*/
				if (!empty($idreferencia4)) {
					if ( !empty($_POST['nexo4']) ) {
						$nexo4 = $_POST['nexo4'];
						$querynexo4 = "INSERT INTO persona_has_referencias(persona_id, referencia_id, nexo_id) VALUES 
						('".$personal['cedula']."','".$idreferencia4."','".$nexo4."')";
					}
					if ( (!empty($_POST['telefono1referencia4']) && !empty($_POST['codigo_area1referencia4']) ) || (!empty($_POST['telefono2referencia4']) && !empty($_POST['codigo_area2referencia4']) ) || (!empty($_POST['telefono3referencia4']) && !empty($_POST['codigo_area3referencia4']) ) ) {

						if ( (!empty($_POST['telefono1referencia4']) && !empty($_POST['codigo_area1referencia4']) ) && (!empty($_POST['telefono2referencia4']) && !empty($_POST['codigo_area2referencia4']) ) && (!empty($_POST['telefono3referencia4']) && !empty($_POST['codigo_area3referencia4']) ) ) {
							$telefonosref4 = array(
				              	'telefono1referencia4' => $_POST['telefono1referencia4'], 'codigo_area1referencia4' => $_POST['codigo_area1referencia4'],
								'telefono2referencia4' => $_POST['telefono2referencia4'], 'codigo_area2referencia4' => $_POST['codigo_area2referencia4'],
								'telefono3referencia4' => $_POST['telefono3referencia4'], 'codigo_area3referencia4' => $_POST['codigo_area3referencia4']
				            );
				        } else if ( (!empty($_POST['telefono1referencia4']) && !empty($_POST['codigo_area1referencia4']) ) && (!empty($_POST['telefono2referencia4']) && !empty($_POST['codigo_area2referencia4']) ) && (empty($_POST['telefono3referencia4']) || empty($_POST['codigo_area3referencia4']) ) ) {
				        	$telefonosref4 = array(
				              	'telefono1referencia4' => $_POST['telefono1referencia4'], 'codigo_area1referencia4' => $_POST['codigo_area1referencia4'],
								'telefono2referencia4' => $_POST['telefono2referencia4'], 'codigo_area2referencia4' => $_POST['codigo_area2referencia4']
				            );
				        } else if ( (!empty($_POST['telefono1referencia4']) && !empty($_POST['codigo_area1referencia4']) ) && (empty($_POST['telefono2referencia4']) || empty($_POST['codigo_area2referencia4']) ) && (empty($_POST['telefono3referencia4']) || empty($_POST['codigo_area3referencia4']) ) ) {
				        	$telefonosref4 = array(
				              	'telefono1referencia4' => $_POST['telefono1referencia4'], 'codigo_area1referencia4' => $_POST['codigo_area1referencia4']
				            );
				        }
			            if ( !empty($_POST['telefono1referencia4']) && !empty($_POST['codigo_area1referencia4']) ) {
							$query4tel1ref4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref4['telefono1referencia4']."','".$telefonosref4['codigo_area1referencia4']."')";
							$idtelefono1ref4 = $this->_main->insert($query4tel1ref4,'telefono');
						}
			            if ( !empty($_POST['telefono2referencia4']) && !empty($_POST['codigo_area2referencia4']) ) {
							$query4tel2ref4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref4['telefono2referencia4']."','".$telefonosref4['codigo_area2referencia4']."')";
							$idtelefono2ref4 = $this->_main->insert($query4tel2ref4,'telefono');
						}
			            if ( !empty($_POST['telefono3referencia4']) && !empty($_POST['codigo_area3referencia4']) ) {
							$query4tel3ref4 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref4['telefono3referencia4']."','".$telefonosref4['codigo_area3referencia4']."')";
							$idtelefono3ref4 = $this->_main->insert($query4tel3ref4,'telefono');
						}
					}

					if ( !empty($idtelefono1ref4) || !empty($idtelefono2ref4) || !empty($idtelefono3ref4) ) {
						if ( !empty($idtelefono1ref4) ) {
							$query5tel1ref4 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1ref4."')";
							$this->_main->insert($query5tel1ref4,'persona_has_telefono');
						}
						if ( !empty($idtelefono2ref4) ) {
							$query5tel2ref4 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2ref4."')";
							$this->_main->insert($query5tel2ref4,'persona_has_telefono');
						}
						if ( !empty($idtelefono3ref4) ) {
							$query5tel3ref4 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3ref4."')";
							$this->_main->insert($query5tel3ref4,'persona_has_telefono');
						}
					}

					if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) || (!empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) || (!empty($_POST['discapacidad3referencia4']) && !empty($_POST['tipo_discapacidad3referencia4']) ) || (!empty($_POST['discapacidad4referencia4']) && !empty($_POST['tipo_discapacidad4referencia4']) ) || (!empty($_POST['discapacidad5referencia4']) && !empty($_POST['tipo_discapacidad5referencia4']) ) ) {
						if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) && (!empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) && (!empty($_POST['discapacidad3referencia4']) && !empty($_POST['tipo_discapacidad3referencia4']) ) && (!empty($_POST['discapacidad4referencia4']) && !empty($_POST['tipo_discapacidad4referencia4']) ) && (!empty($_POST['discapacidad5referencia4']) && !empty($_POST['tipo_discapacidad5referencia4']) ) ) {
							$discapacidadesref4 = array(
								'discapacidad1referencia4' => $_POST['discapacidad1referencia4'], 'tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4'],
								'discapacidad2referencia4' => $_POST['discapacidad2referencia4'], 'tipo_discapacidad2referencia4' => $_POST['tipo_discapacidad2referencia4'],
								'discapacidad3referencia4' => $_POST['discapacidad3referencia4'], 'tipo_discapacidad3referencia4' => $_POST['tipo_discapacidad3referencia4'],
								'discapacidad4referencia4' => $_POST['discapacidad4referencia4'], 'tipo_discapacidad4referencia4' => $_POST['tipo_discapacidad4referencia4'],
								'discapacidad5referencia4' => $_POST['discapacidad5referencia4'], 'tipo_discapacidad5referencia4' => $_POST['tipo_discapacidad5referencia4']
							);
						} else if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) && (!empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) && (!empty($_POST['discapacidad3referencia4']) && !empty($_POST['tipo_discapacidad3referencia4']) ) && (!empty($_POST['discapacidad4referencia4']) && !empty($_POST['tipo_discapacidad4referencia4']) ) && (empty($_POST['discapacidad5referencia4']) || empty($_POST['tipo_discapacidad5referencia4']) ) ) {
							$discapacidadesref4 = array(
								'discapacidad1referencia4' => $_POST['discapacidad1referencia4'], 'tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4'],
								'discapacidad2referencia4' => $_POST['discapacidad2referencia4'], 'tipo_discapacidad2referencia4' => $_POST['tipo_discapacidad2referencia4'],
								'discapacidad3referencia4' => $_POST['discapacidad3referencia4'], 'tipo_discapacidad3referencia4' => $_POST['tipo_discapacidad3referencia4'],
								'discapacidad4referencia4' => $_POST['discapacidad4referencia4'], 'tipo_discapacidad4referencia4' => $_POST['tipo_discapacidad4referencia4']
							);
						} else if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) && (!empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) && (!empty($_POST['discapacidad3referencia4']) && !empty($_POST['tipo_discapacidad3referencia4']) ) && (empty($_POST['discapacidad4referencia4']) || empty($_POST['tipo_discapacidad4referencia4']) ) && (empty($_POST['discapacidad5referencia4']) || empty($_POST['tipo_discapacidad5referencia4']) ) ) {
							$discapacidadesref4 = array(
								'discapacidad1referencia4' => $_POST['discapacidad1referencia4'], 'tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4'],
								'discapacidad2referencia4' => $_POST['discapacidad2referencia4'], 'tipo_discapacidad2referencia4' => $_POST['tipo_discapacidad2referencia4'],
								'discapacidad3referencia4' => $_POST['discapacidad3referencia4'], 'tipo_discapacidad3referencia4' => $_POST['tipo_discapacidad3referencia4']
							);
						} else if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) && (!empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) && (empty($_POST['discapacidad3referencia4']) || empty($_POST['tipo_discapacidad3referencia4']) ) && (empty($_POST['discapacidad4referencia4']) || empty($_POST['tipo_discapacidad4referencia4']) ) && (empty($_POST['discapacidad5referencia4']) || empty($_POST['tipo_discapacidad5referencia4']) ) ) {
							$discapacidadesref4 = array(
								'discapacidad1referencia4' => $_POST['discapacidad1referencia4'], 'tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4'],
								'discapacidad2referencia4' => $_POST['discapacidad2referencia4'], 'tipo_discapacidad2referencia4' => $_POST['tipo_discapacidad2referencia4']
							);
						} else if ( (!empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) && (empty($_POST['discapacidad2referencia4']) || empty($_POST['tipo_discapacidad2referencia4']) ) && (empty($_POST['discapacidad3referencia4']) || empty($_POST['tipo_discapacidad3referencia4']) ) && (empty($_POST['discapacidad4referencia4']) || empty($_POST['tipo_discapacidad4referencia4']) ) && (empty($_POST['discapacidad5referencia4']) || empty($_POST['tipo_discapacidad5referencia4']) ) ) {
							$discapacidadesref4 = array(
								'discapacidad1referencia4' => $_POST['discapacidad1referencia4'], 'tipo_discapacidad1referencia4' => $_POST['tipo_discapacidad1referencia4']
							);
						}
						if ( !empty($_POST['discapacidad1referencia4']) && !empty($_POST['tipo_discapacidad1referencia4']) ) {
				      		$query8ref4 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref4['discapacidad1referencia4']."','".$discapacidadesref4['tipo_discapacidad1referencia4']."')";
				     		$iddiscapacidad1ref4 = $this->_main->insert($query8ref4,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad2referencia4']) && !empty($_POST['tipo_discapacidad2referencia4']) ) {
				      		$query8ref4 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref4['discapacidad2referencia4']."','".$discapacidadesref4['tipo_discapacidad2referencia4']."')";
				     		$iddiscapacidad2ref4 = $this->_main->insert($query8ref4,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad3referencia4']) && !empty($_POST['tipo_discapacidad3referencia4']) ) {
				      		$query8ref4 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref4['discapacidad3referencia4']."','".$discapacidadesref4['tipo_discapacidad3referencia4']."')";
				     		$iddiscapacidad3ref4 = $this->_main->insert($query8ref4,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad4referencia4']) && !empty($_POST['tipo_discapacidad4referencia4']) ) {
				      		$query8ref4 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref4['discapacidad4referencia4']."','".$discapacidadesref4['tipo_discapacidad4referencia4']."')";
				     		$iddiscapacidad4ref4 = $this->_main->insert($query8ref4,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad5referencia4']) && !empty($_POST['tipo_discapacidad5referencia4']) ) {
				      		$query8ref4 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref4['discapacidad5referencia4']."','".$discapacidadesref4['tipo_discapacidad5referencia4']."')";
				     		$iddiscapacidad5ref4 = $this->_main->insert($query8ref4,'discapacidades');
				     	}
		     		}
			     	if ( !empty($iddiscapacidad1ref4) || !empty($iddiscapacidad2ref4) || !empty($iddiscapacidad3ref4) || !empty($iddiscapacidad4ref4) || !empty($iddiscapacidad5ref4) ) {
			     		if ( !empty($iddiscapacidad1ref4) ) {
							$query9ref4 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad1ref4."')";
							$this->_main->insert($query9ref4,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad2ref4) ) {
							$query9ref4 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad2ref4."')";
							$this->_main->insert($query9ref4,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad3ref4) ) {
							$query9ref4 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad3ref4."')";
							$this->_main->insert($query9ref4,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad4ref4) ) {
							$query9ref4 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad4ref4."')";
							$this->_main->insert($query9ref4,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad5ref4) ) {
							$query9ref4 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad5ref4."')";
							$this->_main->insert($query9ref4,'persona_has_discapacidades');
						}
					}
				}
			}


			if (!empty($_POST['cedula_referencia5']) && !empty($_POST['nombre1_referencia5']) && !empty($_POST['nombre2_referencia5']) && !empty($_POST['apellido1_referencia5']) && !empty($_POST['apellido2_referencia5']) && !empty($_POST['fecha_nacimiento_referencia5']) && !empty($_POST['correoreferencia5']) && !empty($_POST['sexo_referencia5']) ) {
				$cedula_referencia5 = $_POST['cedula_referencia5'];
				$nombre1_referencia5 = $_POST['nombre1_referencia5'];
				$nombre2_referencia5 = $_POST['nombre2_referencia5'];
				$apellido1_referencia5 = $_POST['apellido1_referencia5'];
	            $apellido2_referencia5 = $_POST['apellido2_referencia5'];
	            $fecha_nacimiento_referencia5 = $_POST['fecha_nacimiento_referencia5'];
	            $correoreferencia5 = $_POST['correoreferencia5'];
				$sexo_referencia5 = $_POST['sexo_referencia5'];
				$tipo_personalreferencia5 = 0;
				$municipio_nacimientoreferencia5 = 0;
				$estado_civilreferencia5 = 0;
				$parroquia_casareferencia5 = 0;
				$direccion_casareferencia5 = 0;
			    $queryref5 = "INSERT INTO persona (cedula,nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,correo,sexo_id,tipo_persona_id,municipio_nacimiento_id,estado_civil_id,parroquia_casa_id,direccion_casa) VALUES 
				('".$cedula_referencia5."',
				'".$nombre1_referencia5."',
				'".$nombre2_referencia5."',
				'".$apellido1_referencia5."',
				'".$apellido2_referencia5."',
				'".$fecha_nacimiento_referencia5."',
				'".$correoreferencia5."',
				'".$sexo_referencia5."',
				'".$tipo_personalreferencia5."',
				'".$municipio_nacimientoreferencia5."',
				'".$estado_civilreferencia5."',
				'".$parroquia_casareferencia5."',
				'".$direccion_casareferencia5."')";
				//Enviamos a la funcion en el modelo de personas el arreglo...
				$idreferencia5 = $this->_main->insert($queryref5,'persona'); 
				/*Referencia Personal*/
				if (!empty($idreferencia5)) {
					if ( !empty($_POST['nexo5']) ) {
						$nexo5 = $_POST['nexo5'];
						$querynexo5 = "INSERT INTO persona_has_referencias(persona_id, referencia_id, nexo_id) VALUES 
						('".$personal['cedula']."','".$idreferencia5."','".$nexo5."')";
					}
					if ( (!empty($_POST['telefono1referencia5']) && !empty($_POST['codigo_area1referencia5']) ) || (!empty($_POST['telefono2referencia5']) && !empty($_POST['codigo_area2referencia5']) ) || (!empty($_POST['telefono3referencia5']) && !empty($_POST['codigo_area3referencia5']) ) ) {

						if ( (!empty($_POST['telefono1referencia5']) && !empty($_POST['codigo_area1referencia5']) ) && (!empty($_POST['telefono2referencia5']) && !empty($_POST['codigo_area2referencia5']) ) && (!empty($_POST['telefono3referencia5']) && !empty($_POST['codigo_area3referencia5']) ) ) {
							$telefonosref5 = array(
				              	'telefono1referencia5' => $_POST['telefono1referencia5'], 'codigo_area1referencia5' => $_POST['codigo_area1referencia5'],
								'telefono2referencia5' => $_POST['telefono2referencia5'], 'codigo_area2referencia5' => $_POST['codigo_area2referencia5'],
								'telefono3referencia5' => $_POST['telefono3referencia5'], 'codigo_area3referencia5' => $_POST['codigo_area3referencia5']
				            );
				        } else if ( (!empty($_POST['telefono1referencia5']) && !empty($_POST['codigo_area1referencia5']) ) && (!empty($_POST['telefono2referencia5']) && !empty($_POST['codigo_area2referencia5']) ) && (empty($_POST['telefono3referencia5']) || empty($_POST['codigo_area3referencia5']) ) ) {
				        	$telefonosref5 = array(
				              	'telefono1referencia5' => $_POST['telefono1referencia5'], 'codigo_area1referencia5' => $_POST['codigo_area1referencia5'],
								'telefono2referencia5' => $_POST['telefono2referencia5'], 'codigo_area2referencia5' => $_POST['codigo_area2referencia5']
				            );
				        } else if ( (!empty($_POST['telefono1referencia5']) && !empty($_POST['codigo_area1referencia5']) ) && (empty($_POST['telefono2referencia5']) || empty($_POST['codigo_area2referencia5']) ) && (empty($_POST['telefono3referencia5']) || empty($_POST['codigo_area3referencia5']) ) ) {
				        	$telefonosref5 = array(
				              	'telefono1referencia5' => $_POST['telefono1referencia5'], 'codigo_area1referencia5' => $_POST['codigo_area1referencia5']
				            );
				        }
			            if ( !empty($_POST['telefono1referencia5']) && !empty($_POST['codigo_area1referencia5']) ) {
							$query4tel1ref5 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref5['telefono1referencia5']."','".$telefonosref5['codigo_area1referencia5']."')";
							$idtelefono1ref5 = $this->_main->insert($query4tel1ref5,'telefono');
						}
			            if ( !empty($_POST['telefono2referencia5']) && !empty($_POST['codigo_area2referencia5']) ) {
							$query4tel2ref5 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref5['telefono2referencia5']."','".$telefonosref5['codigo_area2referencia5']."')";
							$idtelefono2ref5 = $this->_main->insert($query4tel2ref5,'telefono');
						}
			            if ( !empty($_POST['telefono3referencia5']) && !empty($_POST['codigo_area3referencia5']) ) {
							$query4tel3ref5 = "INSERT INTO telefono(telefono, codigo_tlf_id) VALUES ('".$telefonosref5['telefono3referencia5']."','".$telefonosref5['codigo_area3referencia5']."')";
							$idtelefono3ref5 = $this->_main->insert($query4tel3ref5,'telefono');
						}
					}

					if ( !empty($idtelefono1ref5) || !empty($idtelefono2ref5) || !empty($idtelefono3ref5) ) {
						if ( !empty($idtelefono1ref5) ) {
							$query5tel1ref5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono1ref5."')";
							$this->_main->insert($query5tel1ref5,'persona_has_telefono');
						}
						if ( !empty($idtelefono2ref5) ) {
							$query5tel2ref5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono2ref5."')";
							$this->_main->insert($query5tel2ref5,'persona_has_telefono');
						}
						if ( !empty($idtelefono3ref5) ) {
							$query5tel3ref5 = "INSERT INTO persona_has_telefono(persona_id, telefono_id) VALUES ('".$idpersonal."','".$idtelefono3ref5."')";
							$this->_main->insert($query5tel3ref5,'persona_has_telefono');
						}
					}

					if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) || (!empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) || (!empty($_POST['discapacidad3referencia5']) && !empty($_POST['tipo_discapacidad3referencia5']) ) || (!empty($_POST['discapacidad4referencia5']) && !empty($_POST['tipo_discapacidad4referencia5']) ) || (!empty($_POST['discapacidad5referencia5']) && !empty($_POST['tipo_discapacidad5referencia5']) ) ) {
						if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) && (!empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) && (!empty($_POST['discapacidad3referencia5']) && !empty($_POST['tipo_discapacidad3referencia5']) ) && (!empty($_POST['discapacidad4referencia5']) && !empty($_POST['tipo_discapacidad4referencia5']) ) && (!empty($_POST['discapacidad5referencia5']) && !empty($_POST['tipo_discapacidad5referencia5']) ) ) {
							$discapacidadesref5 = array(
								'discapacidad1referencia5' => $_POST['discapacidad1referencia5'], 'tipo_discapacidad1referencia5' => $_POST['tipo_discapacidad1referencia5'],
								'discapacidad2referencia5' => $_POST['discapacidad2referencia5'], 'tipo_discapacidad2referencia5' => $_POST['tipo_discapacidad2referencia5'],
								'discapacidad3referencia5' => $_POST['discapacidad3referencia5'], 'tipo_discapacidad3referencia5' => $_POST['tipo_discapacidad3referencia5'],
								'discapacidad4referencia5' => $_POST['discapacidad4referencia5'], 'tipo_discapacidad4referencia5' => $_POST['tipo_discapacidad4referencia5'],
								'discapacidad5referencia5' => $_POST['discapacidad5referencia5'], 'tipo_discapacidad5referencia5' => $_POST['tipo_discapacidad5referencia5']
							);
						} else if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) && (!empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) && (!empty($_POST['discapacidad3referencia5']) && !empty($_POST['tipo_discapacidad3referencia5']) ) && (!empty($_POST['discapacidad4referencia5']) && !empty($_POST['tipo_discapacidad4referencia5']) ) && (empty($_POST['discapacidad5referencia5']) || empty($_POST['tipo_discapacidad5referencia5']) ) ) {
							$discapacidadesref5 = array(
								'discapacidad1referencia5' => $_POST['discapacidad1referencia5'], 'tipo_discapacidad1referencia5' => $_POST['tipo_discapacidad1referencia5'],
								'discapacidad2referencia5' => $_POST['discapacidad2referencia5'], 'tipo_discapacidad2referencia5' => $_POST['tipo_discapacidad2referencia5'],
								'discapacidad3referencia5' => $_POST['discapacidad3referencia5'], 'tipo_discapacidad3referencia5' => $_POST['tipo_discapacidad3referencia5'],
								'discapacidad4referencia5' => $_POST['discapacidad4referencia5'], 'tipo_discapacidad4referencia5' => $_POST['tipo_discapacidad4referencia5']
							);
						} else if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) && (!empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) && (!empty($_POST['discapacidad3referencia5']) && !empty($_POST['tipo_discapacidad3referencia5']) ) && (empty($_POST['discapacidad4referencia5']) || empty($_POST['tipo_discapacidad4referencia5']) ) && (empty($_POST['discapacidad5referencia5']) || empty($_POST['tipo_discapacidad5referencia5']) ) ) {
							$discapacidadesref5 = array(
								'discapacidad1referencia5' => $_POST['discapacidad1referencia5'], 'tipo_discapacidad1referencia5' => $_POST['tipo_discapacidad1referencia5'],
								'discapacidad2referencia5' => $_POST['discapacidad2referencia5'], 'tipo_discapacidad2referencia5' => $_POST['tipo_discapacidad2referencia5'],
								'discapacidad3referencia5' => $_POST['discapacidad3referencia5'], 'tipo_discapacidad3referencia5' => $_POST['tipo_discapacidad3referencia5']
							);
						} else if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) && (!empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) && (empty($_POST['discapacidad3referencia5']) || empty($_POST['tipo_discapacidad3referencia5']) ) && (empty($_POST['discapacidad4referencia5']) || empty($_POST['tipo_discapacidad4referencia5']) ) && (empty($_POST['discapacidad5referencia5']) || empty($_POST['tipo_discapacidad5referencia5']) ) ) {
							$discapacidadesref5 = array(
								'discapacidad1referencia5' => $_POST['discapacidad1referencia5'], 'tipo_discapacidad1referencia5' => $_POST['tipo_discapacidad1referencia5'],
								'discapacidad2referencia5' => $_POST['discapacidad2referencia5'], 'tipo_discapacidad2referencia5' => $_POST['tipo_discapacidad2referencia5']
							);
						} else if ( (!empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) && (empty($_POST['discapacidad2referencia5']) || empty($_POST['tipo_discapacidad2referencia5']) ) && (empty($_POST['discapacidad3referencia5']) || empty($_POST['tipo_discapacidad3referencia5']) ) && (empty($_POST['discapacidad4referencia5']) || empty($_POST['tipo_discapacidad4referencia5']) ) && (empty($_POST['discapacidad5referencia5']) || empty($_POST['tipo_discapacidad5referencia5']) ) ) {
							$discapacidadesref5 = array(
								'discapacidad1referencia5' => $_POST['discapacidad1referencia5'], 'tipo_discapacidad1referencia5' => $_POST['tipo_discapacidad1referencia5']
							);
						}
						if ( !empty($_POST['discapacidad1referencia5']) && !empty($_POST['tipo_discapacidad1referencia5']) ) {
				      		$query8ref5 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref5['discapacidad1referencia5']."','".$discapacidadesref5['tipo_discapacidad1referencia5']."')";
				     		$iddiscapacidad1ref5 = $this->_main->insert($query8ref5,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad2referencia5']) && !empty($_POST['tipo_discapacidad2referencia5']) ) {
				      		$query8ref5 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref5['discapacidad2referencia5']."','".$discapacidadesref5['tipo_discapacidad2referencia5']."')";
				     		$iddiscapacidad2ref5 = $this->_main->insert($query8ref5,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad3referencia5']) && !empty($_POST['tipo_discapacidad3referencia5']) ) {
				      		$query8ref5 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref5['discapacidad3referencia5']."','".$discapacidadesref5['tipo_discapacidad3referencia5']."')";
				     		$iddiscapacidad3ref5 = $this->_main->insert($query8ref5,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad4referencia5']) && !empty($_POST['tipo_discapacidad4referencia5']) ) {
				      		$query8ref5 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref5['discapacidad4referencia5']."','".$discapacidadesref5['tipo_discapacidad4referencia5']."')";
				     		$iddiscapacidad4ref5 = $this->_main->insert($query8ref5,'discapacidades');
				     	}
						if ( !empty($_POST['discapacidad5referencia5']) && !empty($_POST['tipo_discapacidad5referencia5']) ) {
				      		$query8ref5 = "INSERT INTO discapacidades(discapacidad, padre_id) 
				     		VALUES ('".$discapacidadesref5['discapacidad5referencia5']."','".$discapacidadesref5['tipo_discapacidad5referencia5']."')";
				     		$iddiscapacidad5ref5 = $this->_main->insert($query8ref5,'discapacidades');
				     	}
		     		}
			     	if ( !empty($iddiscapacidad1ref5) || !empty($iddiscapacidad2ref5) || !empty($iddiscapacidad3ref5) || !empty($iddiscapacidad4ref5) || !empty($iddiscapacidad5ref5) ) {
			     		if ( !empty($iddiscapacidad1ref5) ) {
							$query9ref5 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad1ref5."')";
							$this->_main->insert($query9ref5,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad2ref5) ) {
							$query9ref5 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad2ref5."')";
							$this->_main->insert($query9ref5,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad3ref5) ) {
							$query9ref5 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad3ref5."')";
							$this->_main->insert($query9ref5,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad4ref5) ) {
							$query9ref5 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad4ref5."')";
							$this->_main->insert($query9ref5,'persona_has_discapacidades');
						}
						if ( !empty($iddiscapacidad5ref5) ) {
							$query9ref5 = "INSERT INTO persona_has_discapacidades( persona_id, discapacidades_id) 
							VALUES ('".$idpersonal."','".$iddiscapacidad5ref5."')";
							$this->_main->insert($query9ref5,'persona_has_discapacidades');
						}
					}
				}
			}

			$contratacion = array(
				$persona_id = $idpersonal,
				$numero_contratacion = 0,
				$fecha_inicio_contrato = $_POST['fecha_inicio_contrato'],
				$fecha_fin_contrato = $_POST['fecha_fin_contrato'],
				$tipo_contratacion = $_POST['tipo_contrato'],
				$departamento = $_POST['departamento'],
				$cargo = $_POST['cargo'],
				$status_contratacion = '155',
				$Unidad_Adscripcion = $_POST['Unidad_Adscripcion']);
			$query13 = "INSERT INTO `contratacion`(`persona_id`, `numero_contratacion`, `fecha_inicio`, `fecha_fin`, `tipo_contratacion_id`, `departamento_id`, `cargo_id`, `status_id`, `Unidad_Adscripcion`)
			VALUES ('".$idpersonal."',
				'".$numero_contratacion."',
				'".$fecha_inicio_contrato."',
				'".$fecha_fin_contrato."',
				'".$tipo_contratacion."',
				'".$departamento."',
				'".$cargo."',
				'".$status_contratacion."',
				'".$Unidad_Adscripcion."')";
			$idcontratacion = $this->_main->insert($query13,'contratacion');


			$salario = array(
				$sueldo = $_POST['sueldo'],
				$fecha_inicio_contrato = $_POST['fecha_inicio_contrato'],
				$fecha_fin_contrato = $_POST['fecha_fin_contrato'],
				$horas_mensuales_trabajadas = $_POST['horas_mensuales_trabajadas']
			);
			$query14 = "INSERT INTO salario(salario, fecha_inicio, fecha_fin, horas_mensuales, contratacion_id) VALUES ('".$sueldo."','".$fecha_inicio_contrato."','".$fecha_fin_contrato."','".$horas_mensuales_trabajadas."','".$idcontratacion."')";
			$this->_main->insert($query14,'salario');


			$formacion1 = array(
				$nombre_titulo1 =           $_POST['nombre_titulo1'],
				$instituto_emisor_titulo1 = $_POST['instituto_emisor_titulo1'],
				$tipo_formacion1 =          $_POST['tipo_formacion1']
			);
			$query15 = "INSERT INTO formacion(nombre, emisor_titulo, tipo_formacion_id) 
			VALUES ('".$nombre_titulo1."','".$instituto_emisor_titulo1."','".$tipo_formacion1."')";
			$idformacion=$this->_main->insert($query15,'formacion');


       		$persona_has_formacion1 = array(					 
				$fecha_inicio_formacion1 		= $_POST['fecha_inicio_formacion1'],
				$fecha_culminacion_formacion1 	= $_POST['fecha_culminacion_formacion1'],
				$status_formacion1 				= $_POST['estatus_formacion1'],
				$fecha_emision_titulo1 			= $_POST['fecha_emision_titulo1'],
				$codigo_titulo1                  = $_POST['codigo_titulo1']
			);
       		$query16 = "INSERT INTO persona_has_formacion
       		(persona_id, formacion_id, fecha_inicio, fecha_culminacion, status_id, fecha_emision_titulo, codigo_titulo) 
       		VALUES ('".$idpersonal."','".$idformacion."','".$fecha_inicio_formacion1."','".$fecha_culminacion_formacion1."','".$status_formacion1."','".$fecha_emision_titulo1."','".$codigo_titulo1."' )";
 			$this->_main->insert($query16,'persona_has_formacion');
			


			   ///////////////////////////BIEN///////////////////

 			$this->_view->redirect('personal/expediente');
		}
		else
		{ 
			//Se muestra la ventana sí no es via post...
			//$this->_view->render('expediente', 'personal', '',$this->_sidebar_menu);
		}
	}//cierre de insertar personal

}?>