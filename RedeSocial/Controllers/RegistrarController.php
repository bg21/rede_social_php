<?php 
    namespace RedeSocial\Controllers;

    class RegistrarController{
        public function index(){
            if(isset($_POST['registrar'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    \RedeSocial\Utilidades::alert("Email inválido!");
                    \RedeSocial\Utilidades::redirect("registrar");
                }else if(strlen($senha) <= 6){
                    \RedeSocial\Utilidades::alert("Senha curta!");
                    \RedeSocial\Utilidades::redirect("registrar");
                }else if(\RedeSocial\Models\UsuarioModel::emailExists($email)){
                    \RedeSocial\Utilidades::alert("Email já existe!");
                    \RedeSocial\Utilidades::redirect("registrar");
                }else{
                    //registrar usuário
                    $senha = \RedeSocial\Bcrypt::hash($senha);
                    $sql = \RedeSocial\MySql::conectar()->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?)");
                    $sql->execute([$nome, $email, $senha]);

                    \RedeSocial\Utilidades::alert("Registrado com sucesso!");
                    \RedeSocial\Utilidades::redirect("login");
                }
            }
            \RedeSocial\Views\Views::render('registrar');

        }
    }