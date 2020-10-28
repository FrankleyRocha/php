<?php
    require_once './config.php';
    require_once './db/db.php';
    
    try{      
        
        //DELETE id:1
        query(
            'delete from pessoa where id = :id',
            [
                id => 1
            ]
        );

        //DELETE ALL
        query(
            'delete from pessoa'
        );

        //INSERT
        query(
            'insert into pessoa (id,nome,telefone) values (:id,:nome,:telefone)',
            [
                nome => 'teste',
                id => 1,
                telefone => '99999'
            ]
        );

        //MULTI INSERTS
        foreach([
            'João',
            'Maria',
            'Gabriel'
        ] as $nome ){
            query(
                'insert into pessoa (nome,telefone) values (:nome,:telefone)',
                [
                    nome => $nome,
                    telefone => '99999'
                ]
            );
        };

        //UPDATE
        query(
            'update pessoa set nome = :nome where id = :id',
            [
                nome => 'teste x',
                id => 1
            ]
        );
    
        //LIST OR READ
        echo json_encode(
            query(
                'select * from pessoa'
            )
        );

    }catch(Exception $e){
        echo $e;
    }
?>