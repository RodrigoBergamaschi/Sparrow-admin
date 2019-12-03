<?php

require_once realpath(dirname(__FILE__, 2) . '/config/config.php');
require_once realpath(dirname(__FILE__, 3) . '/categorias.php');

class CategoriaModel
{
    public static function listarTodas()
    {
        $conexao = Database::getConection();
        $sql = "SELECT * FROM categorias";

        $resultado = $conexao->query($sql) or die('Erro ao listar todas as categorias') . mysql_error();

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
       
    }

    

    }
}