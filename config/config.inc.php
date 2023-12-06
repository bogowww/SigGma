<?php
/**
 * Configurações de Conexão com o Banco de Dados
 */
define('MYSQL_HOST', 'localhost');   // Host do servidor MySQL
define('MYSQL_USUARIO', 'root');     // Nome de usuário do MySQL
define('MYSQL_SENHA', '');           // Senha do MySQL
define('MYSQL_DB', 'SIGGMA');        // Nome do banco de dados
define('MYSQL_PORT', '3306');        // Porta do servidor MySQL

// DSN (Data Source Name) para a conexão PDO
define('MYSQL_DSN', "mysql:host=" . MYSQL_HOST . ";port=" . MYSQL_PORT . ";dbname=" . MYSQL_DB . ";charset=UTF8");

/**
 * URL Base do Aplicativo
 */
define('URL_BASE', 'http://localhost/SIGGMA/');  // URL base do aplicativo

?>