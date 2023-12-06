<?php
    /**
 * Classe Database
 *
 * Esta classe fornece métodos para conectar ao banco de dados MySQL, executar consultas SQL
 * e recuperar resultados. Utiliza a extensão PDO para interagir com o banco de dados.
 */
class Database {

    /**
     * Método para conectar ao banco de dados MySQL.
     *
     * @return PDO|false Retorna uma instância de PDO se a conexão for bem-sucedida, ou false em caso de falha.
     */
    public static function conectar(){
        try {
            // Inclui o arquivo de configuração com os parâmetros de conexão.
            require_once(__DIR__ . '../config/config.inc.php');
            
            // Cria uma instância PDO para a conexão com o banco de dados.
            $conexao = new PDO(MYSQL_DSN, MYSQL_USUARIO, MYSQL_SENHA);
            
            return $conexao;
        } catch (PDOException $e) {
            // Em caso de erro, exibe uma mensagem e retorna false.
            echo "Erro ao conectar com o banco de dados. Verifique os parâmetros de configuração.";
            return false;
        }
    }

    /**
     * Método para executar uma consulta SQL no banco de dados.
     *
     * @param string $sql A consulta SQL a ser executada.
     * @param array $params Parâmetros a serem vinculados à consulta.
     * @return bool Retorna true se a execução for bem-sucedida, ou false em caso de falha.
     */
    public static function executar($sql, $params = array()){
        // Obtém uma instância de PDO para a conexão.
        $conexao = self::conectar();
        
        // Prepara a consulta SQL e vincula os parâmetros.
        $comando = self::preparar($conexao, $sql, $params);
        
        // Executa a consulta e retorna o resultado.
        return $comando->execute();
    }
    
    /**
     * Método para listar os resultados de uma consulta SQL no banco de dados.
     *
     * @param string $sql A consulta SQL a ser executada.
     * @param array $params Parâmetros a serem vinculados à consulta.
     * @return array|false Retorna um array associativo com os resultados se a execução for bem-sucedida,
     *                    ou false em caso de falha.
     */
    public static function listar($sql, $params){
        // Obtém uma instância de PDO para a conexão.
        $conexao = self::conectar();
        
        // Prepara a consulta SQL e vincula os parâmetros.
        $comando = self::preparar($conexao, $sql, $params);
        
        // Executa a consulta e retorna os resultados.
        if ($comando->execute())
            return $comando->fetchAll();
        
        return false;
    }

    /**
     * Método para preparar uma consulta SQL e vincular os parâmetros.
     *
     * @param PDO $conexao Instância de PDO para a conexão com o banco de dados.
     * @param string $sql A consulta SQL a ser preparada.
     * @param array $params Parâmetros a serem vinculados à consulta.
     * @return PDOStatement Retorna uma instância de PDOStatement para a execução da consulta.
     */
    public static function preparar($conexao, $sql, $params = array()){
        // Cria uma instância de PDOStatement para a consulta preparada.
        $comando = $conexao->prepare($sql);
        
        // Vincula os parâmetros à consulta.
        foreach($params as $chave=>$valor){
            $comando->bindValue($chave, $valor);
        }
        
        return $comando;
    }
}

?>
