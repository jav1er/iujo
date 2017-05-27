<?php 

class estructurainstitucionalController extends Controller{
		
	private $_estructurainstitucional;
			
	public function __construct(){
		parent::__construct();
		$this->_estructurainstitucional = $this->loadModel('estructurainstitucional');
	}
 
	
	function index(){
		$this->_view->render('index', 'estructurainstitucional');
	}


	function carrera(){			
		$this->_view->render('carrera','estructurainstitucional' );   
	}	



	function departamento(){
				$this->_view->render('departamento', 'estructurainstitucional');
	}	
}

?>