<?php

class Banco extends model{

  private $numRows;
  private $array;

  public function query ($sql){ // aceita qualquer query
    $query = $this->db->query($sql);
    $this->numRows = $query->rowCount(); // conta os numero de linha
    $this->array = $query->fetchAll();

  }

  public function result (){
    return $this->array;
  }

  public function numRows(){  // pega quantidade de registro
    return $this->numRows;
  }

  public function select($table){
    $dados = array();

    $sql = $this->db->prepare("SELECT * FROM {$table}");
    $sql->execute();

    if($sql->rowCount() > 0){
      $dados = $sql->fetchAll();
    }
    return $dados;
  }

  public function actualize($table, $chave,$id){
    $dados = array();

    $sql = $this->db->prepare("SELECT * FROM {$table} WHERE {$chave} = {$id}");
    $sql->execute();

    if($sql->rowCount() > 0){
      $dados = $sql->fetch();
    }
    return $dados;
  }

	public function insert($tabela, $data){
		
    if(!empty($tabela) && (is_array($data)  && count($data) >0)){
      $sql  = "INSERT INTO {$tabela} SET ";
      $dados = array();
      foreach($data as $chave => $valor){
      $dados[] = $chave." = '".addslashes($valor)."'";
      }
      $sql .=  implode(", ", $dados);
             
      $this->db->query($sql);

    	}
    }

    public function delete($table, $where,$where_cond = "AND"){
    	if(!empty($table) && ( is_array($where) && count($where) > 0 )){
    		$sql = "DELETE FROM ".$table;
    		if (count($where) > 0){
    			$dados = array();

    		foreach ($where as $chave => $valor) {
    			$dados[] = $chave." = '".addslashes($valor)."'";
    			}
    		$sql = $sql." WHERE ".implode(" ".$where_cond." ",$dados);
    		}
    		$this->db->query($sql);

   		 }
    }

    public function update($table, $data, $where = array(),$where_cond = "AND"){

    	if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)){
    		$sql = "UPDATE " . $table . " SET ";
    		 $dados = array();
      		foreach($data as $chave => $valor){
     		 $dados[] = $chave ." = '".addslashes($valor)."'";
      }
     		 $sql .=  implode(" , ", $dados);
             
      		if(count($where) > 0){
      			 $dados = array();
      		foreach($where as $chave => $valor){
     		 $dados[] = $chave." = '".addslashes($valor)."'";
      }
     		 $sql = $sql. " WHERE ".implode(" ". $where_cond ." ", $dados);
      		}

      			$this->db->query($sql);
    	}
    }

}
?>