<?php

class dependentes extends model{
	
	

    public function listDependentes($id){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM dependentes where pac_codigo  = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
    }
   

     public function listadependentes(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT dep_codigo,dep_nome FROM dependentes ORDER BY dep_codigo DESC");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
    }
     public function countDependentes(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT count(dep_codigo) as total FROM dependentes");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
   }
    public function listdependetebusca($texto){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT pac_codigo,pac_nome FROM dependentes WHERE dep_nome LIKE   :texto");
        $sql->bindValue(":texto",'%'.$texto.'%');
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
   }

   /* public function InsertDependentes($pac_c){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT max(dep_codigo) as result FROM dependentes WHERE  pac_codigo = 6");
        $sql->execute();


        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $valor = $dados['result'];
            $resultado = $valor + 1;
            $pac = 6 ;
            $data = '1979-05-23';

            $sql = $this->db->prepare('INSERT INTO dependentes SET dep_codigo = :resultado, pac_codigo = :pac,  dep_nascimento = :data');
            $sql->bindValue(':resultado', $resultado);
            $sql->bindValue(':pac', $pac);
            $sql->bindValue(':data', $data);
            $sql->execute();
            
            }
             return $dados;
            
        }*/
}