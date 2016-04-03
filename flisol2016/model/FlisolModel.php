<?php

class FlisolModel{

	private $db;
	private $categoria_id;
	private $nome;
	private $email;
	private $telefone;
	private $cidade;
	private $endereco;
	private $instituicao;
	private $semestre;

	public function __construct(){
		$pdo = new PDO('mysql:host=localhost;dbname=flisol2016', "root", "");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db = $pdo ;
	}

	public function getCategoriaId(){
        return $this->categoria_id;
    }

	public function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
        return $this;
    }
      
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
      
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
      
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }
      
    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getInstituicao(){
        return $this->instituicao;
    }

    public function setInstituicao($instituicao){
        $this->instituicao = $instituicao;
        return $this;
    }

    public function getSemestre(){
        return $this->semestre;
    }

    public function setSemestre($semestre){
        $this->semestre = $semestre;
        return $this;
    }

    public function getLink(){
        return $this->link;
    }

    public function setLink($link){
        $this->link = $link;
        return $this;
    }

    public function getResumo(){
        return $this->resumo;
    }

    public function setResumo($resumo){
        $this->resumo = $resumo;
        return $this;
    }

// Metodos

    public function adicionarInscrito(){

    	//if (!$this->existeInscritoEmail()){
    		try {
				$params = array(
					':cidade' => $this->getCidade(),
	                ':categoria_id' => $this->getCategoriaId(),
	                ':nome' => $this->getNome(),
	                ':email' => $this->getEmail(),
	                ':endereco' => $this->getEndereco(),
	                ':telefone'=> $this->getTelefone(),
	                ':instituicao'=> $this->getInstituicao(),
	                ':semestre' => $this->getSemestre(),
	                ':link'=> $this->getLink(),
	                ':resumo' => $this->getResumo()
	            );

				$query = 'INSERT INTO inscritos (categoria_id, nome, email, endereco, telefone, cidade, instituicao, semestre, link, resumo) VALUES(:categoria_id, :nome, :email, :endereco, :telefone, :cidade, :instituicao, :semestre, :link, :resumo)';
				$this->db->prepare($query)->execute($params);

    			return '<p style="color:#333" > Inscrição realizada com sucesso! <br/> <br/> Palestrantes - aguardem, pois em breve divulgaremos no facebook/site os palestrantes confirmados.</p>';

		    } catch(PDOException $e) {
	    	return '<p style="color:red" >Erro ao realizar inscrição. Desculpe, tente novamente mais tarde.</p>';
			}
    	//}else{
    	//	return $this->atualizarInscrito();
    	//}
		


	}

	public function existeInscritoEmail(){
		$query = "SELECT count(*) as total FROM inscritos WHERE email like :email";
		$params = array(':email' => $this->getEmail());

		$sth = $this->db->prepare($query);
		$sth->execute($params);
		$resultObj = $sth->fetch(PDO::FETCH_OBJ);

		return ($resultObj->total > 0);
	}

	public function atualizarInscrito(){

		try {
				
				$params = array(
	                ':cidade' => $this->getCidade(),
	                ':categoria_id' => $this->getCategoriaId(),
	                ':nome' => $this->getNome(),
	                ':email' => $this->getEmail(),
	                ':endereco' => $this->getEndereco(),
	                ':telefone'=> $this->getTelefone(),
	                ':instituicao'=> $this->getInstituicao(),
	                ':semestre' => $this->getSemestre(),
	                ':link'=> $this->getLink(),
	                ':resumo' => $this->getResumo()
	            );

				$query = 'UPDATE inscritos SET categoria_id = :categoria_id, nome =:nome, email = :email, endereco = :endereco, telefone = :telefone, cidade = :cidade, instituicao = :instituicao, semestre = :semestre, link = :link, resumo = :resumo WHERE email = :email';
				$sth = $this->db->prepare($query);
				$sth->execute($params);

    			return '<p style="color:#333" > Inscrição já realizada com sucesso! <br/> <br/> Palestrantes - aguardem, pois em breve divulgaremos no facebook/site os palestrantes confirmados.</p>';

	    } catch(PDOException $e) {
	    	return '<p style="color:red" >Erro ao realizar inscrição. Desculpe, tente novamente mais tarde.</p>';
		}
	}

    public function listarInscritos($cidade = NULL){

        if ($cidade == null || $cidade == '*') {
            $query ='SELECT nome, email, endereco, telefone, cidade, link, resumo, instituicao, semestre 
                     FROM inscritos
                     ORDER BY cidade, nome';
            $res = $this->db->prepare($query);
            $res->execute();
            $result = $res->fetchAll();
        } else {
            $params = array( ':cidade' => $cidade);
            $query ='SELECT nome, email, endereco, telefone, cidade, link, resumo, instituicao, semestre 
                     FROM inscritos
                     WHERE cidade = :cidade
                     ORDER BY cidade, nome';
            $res = $this->db->prepare($query);
            $res->execute($params);
            $result = $res->fetchAll();
        }

        return $result;
        
    }

    public function login($usuario, $senha){

        return ($usuario == 'admin@flisolce.org' && $senha == 'flisol@2016@admin');
    }

}