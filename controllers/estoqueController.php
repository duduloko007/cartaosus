<?php 
class historicoController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();


		$this->loadTemplate('estoque/estoque',$dados);
	}
	

	
}
