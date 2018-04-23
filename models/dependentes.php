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

     public function listDependentesVisualizar($dependentes, $paciente){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM dependentes where dep_codigo  = :dependentes AND pac_codigo = :paciente");
        $sql->bindValue(":dependentes",$dependentes);
        $sql->bindValue(":paciente",$paciente);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
    }
    public function delete($id){
        $sql = $this->db->prepare('DELETE FROM dependentes WHERE pac_codigo = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();
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

    public function add($nomepaciente,$num_paciente,$nome_Dependetes,$data_nasc,$estudante,$parentesco,$sexo,$cart_indentidade,$ocupacao,$sanguineo){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT max(dep_codigo) as result FROM dependentes WHERE  pac_codigo = :num_paciente");
        $sql->bindValue(":num_paciente",$num_paciente);
        $sql->execute();


        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $valor = $dados['result'];
            $resultado = $valor + 1;

            $sql = $this->db->prepare('INSERT INTO dependentes SET dep_codigo = :resultado, pac_codigo = :num_paciente,pac_nome = :nomepaciente, dep_nascimento = :data_nasc, dep_nome = :nome_Dependetes, dep_estudante = :estudante,dep_grauparentesco = :parentesco, dep_sexo = :sexo,dep_ci = :cart_indentidade, dep_ocupacao = :ocupacao, dep_tiposanguineo = :sanguineo');
            $sql->bindValue(':resultado', $resultado);
            $sql->bindValue(':num_paciente', $num_paciente);
            $sql->bindValue(':nomepaciente', $nomepaciente);
            $sql->bindValue(':data_nasc', $data_nasc);
            $sql->bindValue(':nome_Dependetes', $nome_Dependetes);
            $sql->bindValue(':estudante', $estudante);
            $sql->bindValue(':parentesco', $parentesco);
            $sql->bindValue(':sexo', $sexo);
            $sql->bindValue(':cart_indentidade', $cart_indentidade);
            $sql->bindValue(':ocupacao', $ocupacao);
            $sql->bindValue(':sanguineo', $sanguineo);
            $sql->execute();
            
            }
             return $dados;
        }
}