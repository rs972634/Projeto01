<?php

Class Usuario {Cuentas Bancarias

	private $pdo;
	public $msgErro = "";

		public function conectar($nome, $host, $usuario, $senha) {

			global $pdo;

			try {

				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
				
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
			}
			
	}

		public function cadastrar($nome, $email, $senha) {

			global $pdo;

			$sql = $pdo->prepare("select id from usuarios where email = :e");

			$sql->bindValue(":e",$email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return false;

			}else{

				$sql = $pdo->prepare("insert into usuarios (nome, email, senha) values (:nome, :email, :senha)");

				$sql->bindValue(":nome",$nome);
				$sql->bindValue(":email",$email);
				$sql->bindValue(":senha",$senha);

				$sql->execute();
				return true;

			}
	}

		public function login($email, $senha) {

			global $pdo;

			$sql = $pdo->prepare("select id, nome from usuarios where email = :email and senha = :senha");

				$sql->bindValue(":email",$email);
				$sql->bindValue(":senha",$senha);

				$sql->execute();

				if ($sql->rowCount() > 0) {
					$dado = $sql->fetch();

					session_start();
					$_SESSION['id'] = $dado['id'];

				
					return true;
					
				} else {

					return false;

				}
	}


}
?>
