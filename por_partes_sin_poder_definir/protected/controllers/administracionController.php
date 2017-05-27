<?php 

class administracionController extends Controller{

private $_administracion;
		
		public function __construct(){
	
			parent::__construct();
			$this->_administracion = $this->loadModel('administracion');

	
		
	}
	
function index(){
			
			$this->_view->render('index', 'administracion');
		}



function usuario(){
				
			$this->_view->render('usuario', 'administracion');
			            
					
				}	




function respaldo(){
				
			$this->_view->render('respaldo','administracion' );
			            
					
				}	



function tablas(){
				
			$this->_view->render('tablas', 'administracion');
			            
					
				}	


}

?>