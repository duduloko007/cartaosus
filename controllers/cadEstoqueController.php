<?php 
class cadEstoqueController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();
		$this->loadTemplate('',$dados);
	}

	public function beneficiario(){
		$dados = array();
		$this->loadTemplate('cad_estoque/beneficiario/beneficiario',$dados);
	}

	public function fornecedor(){
		$dados = array();
		$this->loadTemplate('cad_estoque/fornecedor/fornecedor',$dados);
	}

	public function remedio(){
		$dados = array();
		$this->loadTemplate('cad_estoque/remedio/remedio',$dados);
	}

	
}
