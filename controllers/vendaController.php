<?php 
class vendaController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();


		$this->loadTemplate('venda/venda',$dados);
	}

	
}
