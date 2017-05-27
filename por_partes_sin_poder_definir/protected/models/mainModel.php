<?php 

	class mainModel extends Model


	{
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

		

	


	

		public function insert_persona($p){
			
			

			$query="call pro_persona (".$p['codigo_tlf'].",'".$p['telefono']."','".$p['cedula']."','".$p['nombre1']."','".$p['nombre2']."','".$p['apellido1']."','".$p['apellido2']."','".$p['fecha_nacimiento']."','".$p['correo']."',".$p['sexo_id'].",".$p['tipo_persona_id'].",".$p['parroquia_id'].")";

			$this->insert_m($query);
			$query = "SELECT max(id) from profesor";
			$id = $this->get_m($query);
 			 
 			
			return $id[0][0];
		
		}

		public function insert_horario($h){
			
			

			 $query="call pro_horario (".$h['periodo_id'].",'".$h['aula_id']."','".$h['tiempoInicio_id']."','".$h['profesor_has_materia_id']."','".$h['tiempoFin_id']."','".$h['seccion_id']."','".$h['dia_id']."')";
			
			$this->insert_m($query);
		
		}
		public function delete_horario($id){
			
			

			$query="delete from horario where horario.id = $id";
			
			$this->insert_m($query);
			return true;
		
		}

		public function get_id_asistencia($query){

			$result = $this->get_m($query);
			return $result;
		}


		public function insert_fecha(){

			$fecha = date ( 'Y-m-d');
			   $query3 = "SELECT * FROM view_horario 
						left join horario_has_asistencia on view_horario.id = horario_id
						left join asistencia on asistencia_id = asistencia.id
						WHERE  dia ='".Controller::getDia()."'
						and carrera = 'informatica'
						and periodo = '".Session::get('periodo')."'
						and fecha = '".$fecha."'";

			$result3 = $this->get_m($query3);
			
			if ($result3) {
				//echo "Ya estan registradas las asistencias";
			}else{
				$query = "SELECT * FROM `view_horario` WHERE dia = '".Controller::getDia()."' and carrera = 'informatica' and periodo = '".Session::get('periodo')."'";
				$result = $this->get_m($query);
				for ($i=0; $i < count($result) ; $i++) { 

					  $query2 = "INSERT INTO `asistencia`(`fecha`) VALUES ('".$fecha."')";
					 $lastAsistencia = $this->insert_m($query2,'asistencia');
				 
 $query4 = "INSERT INTO `horario_has_asistencia`(`horario_id`,`asistencia_id`) VALUES ('".$result[$i]['id']."','".$lastAsistencia."')";
					$this->insert_m($query4);

				}
				
				//echo '<br>';
				//echo "se debe registrar";
			}
			
			
			//insert into puente ();
		}






} ?>
