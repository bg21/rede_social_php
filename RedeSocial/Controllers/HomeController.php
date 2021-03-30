<?php 
    namespace RedeSocial\Controllers;

    class HomeController{
        public function index(){
            if(isset($_SESSION['login'])){
                \RedeSocial\Views\Views::render('Perfil/home');
            }else{
                \RedeSocial\Views\Views::render('registrar');
            }
        }
    }