<?php 
class cartaoController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();
		$this->loadTemplate('cartao/listagem',$dados);
	}
	public function cadastro(){
		$dados = array();
		$this->loadTemplate('cartao/listagem',$dados);
	}


	
}
