<?php 
    namespace RedeSocial\Views;
    
    class Views{
        public static function render($file){
            include($file.".php");
        }
    }
