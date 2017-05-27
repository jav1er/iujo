<?php
	class Model
	{
		protected $_db;
		
		public function __construct()
		{
			$this->_db = new DataBase();
		}
		


public function updateP($query,$tabla = false){
			echo var_dump($query);
			echo $tabla;
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






public function insert($query,$tabla = false){
			echo var_dump($query);
			echo $tabla;
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($query)->execute();
				$id =  $this->_db->lastInsertId($tabla);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			//echo "<script>alert('Si hace el INSERT en la tabla ".$tabla."');</script>";
			//echo "<script>alert('El ID que obtuvimos de la tabla ".$tabla." es: ".$id."');</script>";
			return $id;
		}

		public function read($query){
			$auxiliar = $this->_db->query($query);
			try {
			$this->_db->beginTransaction();
			$result = $auxiliar->fetchAll();
			$this->_db->commit();
			}
			catch (Exception $e) {
				
				$this->_db-rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			return $result;
		}
		
		public function Get($tabla = false, $item = FALSE, $valor = false){

			switch ($tabla) {
				case 'referencia':
				
					if ($valor == "is_null") {
						  $query = "Select * from referencia where padre_id is null order by referencia asc";
					}else if($valor == 'Lab-' or $valor == 'A-' or $valor =='B-'){
						 $query = "SELECT ref.id, ref.referencia from referencia  inner join referencia ref on ref.padre_id = referencia.id where referencia.referencia = '".$item."' and ref.referencia like '".$valor."%'";
					}else{
						 $query = "SELECT ref.id, ref.referencia from referencia  inner join referencia ref on ref.padre_id = referencia.id where referencia.referencia = '".$item."'";
					}
				
				break;
				case 'persona':
					 $query = "SELECT id from persona where cedula='".$valor."'";
				break;
				case 'direccion':
					if ($valor == 'false') {
						$query = "SELECT direccion.id, direccion FROM `direccion` inner join referencia on referencia_id = referencia.id where referencia = '".$item."' ";
					}else{
					 	$query = "SELECT direccion.id, direccion FROM `direccion` inner join referencia on referencia_id = referencia.id where referencia = '".$item."'and direccion.padre_id = ".$valor." ";
					}
				break;
				case 'discapacidades':
					if ($valor == 'false') {
						$query = "SELECT * FROM `discapacidades` WHERE padre_id IS NULL ";
					}else{
					 	$query = "SELECT * FROM `discapacidades` where padre_id = ".$valor." ";
					}
				break;

				case 'materia':
					if ($valor == 'false') {
						$query = "SELECT * FROM `materia`";
					}else{
					 	$query = "SELECT * FROM `materia` where nombre = ".$valor." ";
					}
				break;
				
					case 'periodo':
					if ($valor == 'false') {
						$query = "SELECT * FROM `periodo` ";
					}else{
					 	$query = "SELECT * FROM `periodo` where periodo = ".$valor." ";
					}
				break;


				
				case 'periodo':
					if ($item == 'false') {
						 $query = "select Date_format ((select max(fecha_fin) from periodo),'%Y') as 'dia' ";
					}
					else{
						 $query = "select * from periodo order by fecha_fin desc";
					}
					
				break;
				case 'materia1':
						
						  $query = "select idmateria,nombre from view_mate where semestre_id = ".$valor." and carrera = '".Session::get('carrera')."' order by nombre";
				break;
				
				default:
					 $query = "SELECT * FROM ".$tabla." where ".$item." = '".$valor."'";
				break;
			}
			
			$auxiliar = $this->_db->query($query);

			try {
			$this->_db->beginTransaction();
			$result= $auxiliar->fetchAll();
			$this->_db->commit();
			}
			catch (Exception $e) {
				
				$this->_db-rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			return $result;
		}

		public function listing($query){
			$auxiliar = $this->_db->query($query);

				try {
				$this->_db->beginTransaction();
				$result= $auxiliar->fetchAll();
				$this->_db->commit();
				}
				catch (Exception $e){
					
					$this->_db-rollBack();
					echo "Error :: ".$e->getMessage();
					exit();
					
				}
				
				return $result;
			
			
		}
		


		
		
		

		public function update($query, $tabla=FALSE){
		
		
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($query)->execute();
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			
		}
		


		public function delete($query){

				
		
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($query)->execute();
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
			return true;
			
		}
		 


		
	}
?>