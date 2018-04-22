<?php 
class loginController  extends Controller{


  public function __construct(){
    
  }

  public function index (){
    $dados = array(
    	'vazio' => array()
    	);

    if(!empty($_POST['email']) OR !empty($_POST['senha'])){
     $email = addslashes($_POST['email']);
     $senha = md5($_POST['senha']);
    
      $logar = new user();
     if($logar->logar($email, $senha)){
     	  header("Location:".BASE_URL."");
     }else {
        $dados['vazio'] = "Email ou Senha errado(s)!";
     }
}

  	$this->loadView('login/login', $dados);
}
  public function logout(){

      unset($_SESSION['login']);
      header("Location:".BASE_URL."/login");
  
    
  }

  

}
