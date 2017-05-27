<?php 

	class personalModel extends Model{
		
		protected $query;
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

		public function insertPerson($persona){

			$this->query = "INSERT INTO personas
			(cedula  , nombre ,  apellido , sexo ,  fecha_nacimiento ,  telefono ,  correo)  VALUES 
			(:cedula , :nombre, :apellido, :sexo , :fecha_nacimiento , :telefono , :correo)   ";
		
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute($persona);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			
		}
		
		
	public function updatePersonal($persona){
		$this->query = "UPDATE PERSONA SET 
					cedula 		= :cedula,
					nombre 		= :nombre,
					apellido 	= :apellido,
					sexo 		= :sexo,
					fecha_nacimiento = :fecha_nacimiento,
					telefono 		= :telefono,
					correo 		= :correo
					where id = :id";

				
		
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute($persona);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			
		}
		

		








}?>