<?php
    require_once './db_config.php';

    function openConn(){
        try {
            $conn = new PDO(
                'mysql:host='.DB_HOST.';'.
                'dbname='.DB_NAME.';'.
                'charset=utf8',
                DB_USER,
                DB_PASSWORD,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            return $conn;
        } catch(PDOException $e) {
            throw new Exception('Erro ao criar conexão com bando de dados: '.$e->getMessage());
        }
    }

    function query($sql,$arr=array()){
        
        $conn = openConn();     

        try {
            $stm = $conn->prepare($sql);        
            $stm->execute($arr);
            if( preg_match("/\s*select.*from.*/i",$sql) ):        
                $data = $stm->fetchAll(PDO::FETCH_OBJ);        
                return $data;
            else:
                return $stm->rowCount();
            endif;
        } catch(PDOException $e) {
            throw new Exception("Erro ao executar query '$sql': ".$e->getMessage());
        }
    }
?>