<?php 
session_start();


class Login { 
	private $name = 'vestibular'; 
	private $password = 'fatec'; 
	 
	public function verificar_credenciais( $name, $password ) { 
        if ( $name == $this->name ) {
            if ( $password == $this->password ) {
                $_SESSION["logged_in"] = TRUE;
                return TRUE;
            }
        }
        return FALSE;
	} 

    public function verificar_logado() { 
        if ( $_SESSION["logged_in"]) {
            return TRUE;
        }
        $this->logout();
	} 

    public function logout() { 
        session_destroy();
        header("Location: index.php");
        exit();
	} 
} 


// CLASSE RESPONSÁVEL PELO GERENCIAMENTO DO CADASTRO (INSERT)
class Cadastro
{
    public $nome;
    public $curso;
    public $conexao;
    private $host = "localhost";
    private $nome_banco = "vestibular";
    private $user = "root";
    private $senha = "";

    public function __construct($nome, $curso)
    {
        try
        {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->nome_banco;",$this->user,$this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // CÓDIGO PARA VALIDAR OS CAMPOS DO CADASTRO
            if(isset($_POST['nome']) && isset($_POST['curso'])) 
            {
                if($curso == 1 || $curso == 2){
                    // CODIGO PARA PEGAR O ULTIMO ID DA TABELA
                    $sql_id = "SELECT id FROM candidatos ORDER BY id DESC LIMIT 1";
                    $id_encontrado = $this->conexao->query($sql_id);
                    $result_id = $id_encontrado->fetch(PDO::FETCH_ASSOC);

                    if ($result_id) {
                        // Se houver um resultado, obtenha o ID e incremente-o
                        $id = $result_id['id'] + 1;
                    } else {
                        // Se não houver resultados, comece com o ID 1
                        $id = 1;
                    }
                    // CÓDIGO PARA INSERIR OS DADOS NO BANCO
                    $nome = $_POST['nome'];
                    $curso = $_POST['curso'];
                    $sql = "INSERT INTO candidatos (nome, curso) 
                    VALUES ('$nome', '$curso')";
                    $this->conexao->exec($sql);
                    $id_encontrado->fetchAll();
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

        $this->conexao = null;
    }
}

?>