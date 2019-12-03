<?php
//configurações de data e hora padrão para o sistema

date_default_timezone_set('America/Sao_Paulo'); //https://www.php.net/manual/pt_BR/function.date-default-timezone-set.php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

require_once realpath(dirname(__FILE__) . '/database.php');

define('MODEL_PATH', realpath(dirname(__FILE__, 2) . '/models'));