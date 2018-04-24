<?php 
class compraController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();


		$this->loadTemplate('compra/compra',$dados);
	}

	
}
