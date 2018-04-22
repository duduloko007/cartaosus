<?php 
class erroController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();
		$this->loadView('404',$dados);
	}

	
}
