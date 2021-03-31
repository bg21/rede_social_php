<?php
    namespace RedeSocial\Models;

    class UsuarioModel{
        public static function emailExists($email){
            $pdo = \RedeSocial\MySql::conectar();
            $verifica = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
            $verifica->execute([$email]);
            if($verifica->rowCount() == 1){
                return true;
            }else{
                return false;
            }
        }

    }