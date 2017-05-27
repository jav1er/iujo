<?php 

	class actualizacionModel extends Model{
	
		protected $query;
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}
	

                
		public function updatepm1 ($Tpersona){
		$this->query = "UPDATE `persona` SET 
		
		`cedula`=:cedula,
		`nombre1`=:nombre1,
		`nombre2`=:nombre2,
		`apellido1`=:apellido1,
		`apellido2`=:apellido2,
		`fecha_nacimiento`=:fecha_nacimiento,
		`correo`=:correo1,
		`sexo_id`=:sexo,
		`tipo_persona_id`=:tipo_persona,
		`municipio_nacimiento_id`=:municipio_nacimiento,
		`estado_civil_id`=:estado_civil,
		`parroquia_casa_id`=:parroquia_casa,
		`direccion_casa`=:direccion_casa  
		WHERE `id`=:id";
		
			
	try {
			// 	echo var_dump($query);
			// echo $tabla;
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute($Tpersona);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			
		}

  	
//     $this-> $query = "UPDATE telefono SET 
			 
// 			 telefono=:telefono,
// 			 codigo_tlf_id=:codigo_area1,
// 			 telefono2=:telefono2,
// 			 telefono3=:telefono3,
// 			 codigo_tlf2_id =:codigo_area1,
// 			 codigo_tlf3_id=:codigo_area1,
// 				WHERE id =:id";

			
// 	try {
// 				$this->_db->beginTransaction();
// 				$this->_db->prepare($this->query)->execute($persona);
// 				$this->_db->commit();
// 			}
// 			catch (Exception $e){
// 				$this->_db->rollBack();
// 				echo "Error :: ".$e->getMessage();
// 				exit();
// 			}
			
// 		}



// $this->$query ="UPDATE persona_has_telefono SET 
// persona_id=,
// telefono_id=3 WHERE 1";
// //$this>_main>update($query);
// 				echo var_dump($query);
// 			echo $tabla;
// 	try {
// 				$this->_db->beginTransaction();
// 				$this->_db->prepare($this->query)->execute($persona);
// 				$this->_db->commit();
// 			}
// 			catch (Exception $e){
// 				$this->_db->rollBack();
// 				echo "Error :: ".$e->getMessage();
// 				exit();
// 			}
			
// 		}



// $this->$query="UPDATE redes_sociales SET 

// cuenta=:red_social1,
// tipo_red_social_id= :tipo_red_social1,
// tipo_red_social2_id= :tipo_red_social2,
// tipo_red_social3_id= :tipo_red_social3,
// cuenta2=:red_social2,
// cuenta3=:red_social3

//  WHERE 1";
// //$this>_main>update($query);
// 				echo var_dump($query);
// 			echo $tabla;
// 	try {
// 				$this->_db->beginTransaction();
// 				$this->_db->prepare($this->query)->execute($persona);
// 				$this->_db->commit();
// 			}
// 			catch (Exception $e){
// 				$this->_db->rollBack();
// 				echo "Error :: ".$e->getMessage();
// 				exit();
// 			}
			
// 		}


// $this->$query="UPDATE persona_has_redes_sociales SET 
// id,
// persona_id,
// redes_sociales_id=3 WHERE 1";
// 				echo var_dump($query);
// 			echo $tabla;
// 	try {
// 				$this->_db->beginTransaction();
// 				$this->_db->prepare($this->query)->execute($persona);
// 				$this->_db->commit();
// 			}
// 			catch (Exception $e){
// 				$this->_db->rollBack();
// 				echo "Error :: ".$e->getMessage();
// 				exit();
// 			}
			
		

}?>