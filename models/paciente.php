<?php
class paciente extends model{

	 public function listPaciente(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM pacientes ");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
    }

    public function listPacientesDependentes($id){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM pacientes where pac_codigo  = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
	}

    public function add($nome,$data_nascimento,$identidade,$cpf,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$estado,$residencia,$sexo,$estado_civil,$nome_mae,$nome_pai){
        $sql = $this->db->prepare('INSERT INTO  pacientes SET pac_nome = :nome, pac_datanascimento = :data_nascimento, pac_ci = :identidade, pac_cpf = :cpf, pac_email = :email,pac_fone = :telefone,pac_celular = :celular,pac_cep = :cep, pac_endereco = :endereco, pac_numero = :numero,pac_complemento = :complemento,pac_bairro = :bairro,   pac_cidade = :cidade,pac_estado = :estado,pac_tiporesidencia = :residencia,pac_sexo = :sexo,pac_estadocivil = :estado_civil,pac_mae = :nome_mae,pac_pai = :nome_pai');
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':identidade', $identidade);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':residencia', $residencia);
        $sql->bindValue(':sexo', $sexo);
        $sql->bindValue(':estado_civil', $estado_civil);
        $sql->bindValue(':nome_mae', $nome_mae);
        $sql->bindValue(':nome_pai', $nome_pai);
        $sql->execute();
    }
      public function delete($id){
        $sql = $this->db->prepare('DELETE FROM pacientes WHERE pac_codigo = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();
   }
   public function listpacientebusca($texto){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT pac_codigo,pac_nome FROM pacientes WHERE pac_nome LIKE   :texto");
        $sql->bindValue(":texto",'%'.$texto.'%');
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
   }

   public function listPacienteEdit($id){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM pacientes WHERE pac_codigo = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
   }

   public function edit($nome,$data_nascimento,$identidade,$cpf,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$estado,$residencia,$sexo,$estado_civil,$nome_mae,$nome_pai,$id){
        $sql = $this->db->prepare('UPDATE  pacientes SET pac_nome = :nome, pac_datanascimento = :data_nascimento, pac_ci = :identidade, pac_cpf = :cpf, pac_email = :email,pac_fone = :telefone,pac_celular = :celular,pac_cep = :cep, pac_endereco = :endereco, pac_numero = :numero,pac_complemento = :complemento,pac_bairro = :bairro,   pac_cidade = :cidade,pac_estado = :estado,pac_tiporesidencia = :residencia,pac_sexo = :sexo,pac_estadocivil = :estado_civil,pac_mae = :nome_mae,pac_pai = :nome_pai WHERE pac_codigo = :id');
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':identidade', $identidade);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':residencia', $residencia);
        $sql->bindValue(':sexo', $sexo);
        $sql->bindValue(':estado_civil', $estado_civil);
        $sql->bindValue(':nome_mae', $nome_mae);
        $sql->bindValue(':nome_pai', $nome_pai);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function countPaciente(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT count(pac_codigo) as total FROM pacientes");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
   }
   public function nomelist($nome){
         $dados = array();
        
        $sql = $this->db->prepare("SELECT pac_codigo FROM pacientes WHERE pac_nome = :nome LIMIT 1");
        $sql->bindValue(':nome',$nome);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
   }
}