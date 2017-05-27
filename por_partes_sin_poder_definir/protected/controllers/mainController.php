<?php
	class mainController extends Controller {
		
		private $_main;
		public function __construct() {
			parent::__construct();
			$this->_main = $this->loadModel('main');
			//parent::__construct();
			//$this->_administracion = $this->loadModel('administracion');
			
			
		}
		
		public function index() {
			
		}


		function get($tabla,$item,$valor){
			switch ($item) {
				case 'tipo_discapacidad1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;


	            case 'tipo_discapacidad3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;


					case 'tipo_discapacidad4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;


				case 'estado_civil':
					$item = 'estado_civil';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'sexo':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'codigo_tlf1':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'codigo_tlf2':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'codigo_tlf3':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'codigo_tlf1referencia1':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf2referencia1':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf3referencia1':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf1referencia2':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf2referencia2':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf3referencia2':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf1referencia3':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf2referencia3':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf3referencia3':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf1referencia4':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf2referencia4':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf3referencia4':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 
				
				case 'codigo_tlf1referencia5':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf2referencia5':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 

				case 'codigo_tlf3referencia5':
					$item = 'codigo_tlf';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break; 


				case 'tipo_social1':
					$item = 'tipo_social';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_social2':
					$item = 'tipo_social';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_social3':
					$item = 'tipo_social';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				

				case 'sexo_referencia1':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'sexo_referencia2':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'sexo_referencia3':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'sexo_referencia4':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'sexo_referencia5':
					$item = 'sexo';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				
				case 'tipo_seguro1':
					$item = 'tipo_seguro';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad1referencia1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad2referencia1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad3referencia1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad4referencia1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad5referencia1':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad1referencia2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad2referencia2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad3referencia2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad4referencia2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad5referencia2':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad1referencia3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad2referencia3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad3referencia3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad4referencia3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad5referencia3':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad1referencia4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad2referencia4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad3referencia4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad4referencia4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad5referencia4':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;

				case 'tipo_discapacidad1referencia5':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad2referencia5':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad3referencia5':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad4referencia5':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				case 'tipo_discapacidad5referencia5':
					$item = 'discapacidad';
					$data = $this->_main->Get($tabla,$item,$valor);
			        echo json_encode($data);
				break;
				default:
					$data = $this->_main->Get($tabla,$item,$valor);
					echo json_encode($data);
				break;
			}
	
			

		}

		function materia($tabla,$item,$valor,$valor2){
	
			$data = $this->_administracion->materia($tabla,$item,$valor,$valor2);
			//$data = array();
			echo json_encode($data);

		}

		function referencia($valor){
			//echo $valor;
			$data = $this->_administracion->referencia($valor);
			
			echo json_encode($data);

		}

		
		function remote($tabla,$item){
			
		
		$result =	$this->_main->Get($tabla, $item, $_POST['cedula']);

		
		if (isset($result) && !empty($result)) {
			$isAvailable = false; 
		}else{
			$isAvailable = true; 
		

		}
			echo json_encode(array('valid' => $isAvailable));

		}

		function usuario($tabla,$item){
			
		
		$result =	$this->_main->Get($tabla, $item, $_POST['usuario']);

		
		if (isset($result) && !empty($result)) {
			$isAvailable = false; 
		}else{
			$isAvailable = true; 
		

		}
			echo json_encode(array('valid' => $isAvailable));

		}

			function usuarioCI($tabla,$item){
			
		
		$result = $this->_main->Get($tabla, $item, $_POST['cedula']);

		
		if (isset($result) && !empty($result)) {
			$isAvailable = true; 
		}else{
			$isAvailable = false; 
		

		}
			echo json_encode(array('valid' => $isAvailable));

		}
	

		function clave($clave,$Rclave){
			
		//$v = $clave;
		//$r = $Rclave;
		$v = $_POST['clave'];
		$r = $_POST['Rclave'];
		echo $v;
		
		if ($v == $r) {
			$isAvailable = false; 
		}else{
			$isAvailable = true; 
		

		}
			echo json_encode(array('valid' => $isAvailable));

		}

		function fecha(){
			$dia= $_POST['fecha_inicio'];
			date_default_timezone_set('America/Caracas');
			$hoy = date("Y,m,j");
			//print_r($hoy);
			

			if ($dia <= $hoy) {

				$condicion = false;
			}else{
				$condicion = true;
			}

			
			
			echo json_encode(array('valid' => $condicion));

		}

		public function hora(){
			date_default_timezone_set('America/Caracas');
			$h = date("g:i a");
			$hora= $this->_ho->control($h); 

		}

		public function consulta($tabla, $id){
			switch ($tabla) {
				case 'redes_sociales':
					$query="SELECT persona.id, persona.correo, persona_has_redes_sociales.redes_sociales_id, redes_sociales.id, redes_sociales.cuenta, referencia.referencia, redes_sociales.tipo_red_social_id FROM `persona` inner join persona_has_redes_sociales on persona_id = persona.id inner join redes_sociales on redes_sociales.id = redes_sociales_id inner join referencia on referencia.id = tipo_red_social_id WHERE persona.id = ".$id."";

					$data = $this->_main->listing($query);
					echo json_encode($data);
					break;
				
				default:
					$query = "SELECT persona.id, telefono.id, referencia.referencia, telefono.telefono FROM `persona` inner join persona_has_telefono on persona_id = persona.id inner join telefono on telefono.id = telefono_id inner join referencia on referencia.id = codigo_tlf_id WHERE persona.id = ".$id."";
					$data = $this->_main->listing($query);
					echo json_encode($data);
					break;
			}
		}


		
		

		
		
		
		
}?>