<?php 

namespace RedeSocial;

class Utilidades{

    public static function redirect($url){
        echo '<script>window.location.href = "'.$url.'"</script>';
        die();
    }

    public static function alert($mensagem){
        echo '<script> alert("'.$mensagem.'"); </script>';
    }

}