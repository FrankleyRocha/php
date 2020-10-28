#!/bin/bash

#cria o container
docker run \
    -p "8080:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    -d \
    mattrayner/lamp:latest-1804

function create_php_pdo_example_db {
    sleep 1    
    printf '.'
    
    docker exec php_pdo_example \
        sh -c 'mysql -u root < /app/db.sql' \
        2>/dev/null \
        >/dev/null
}

echo 'aguarde um momento, inicializando.'

#aguarda inicializar o apache
while [ $(docker exec php_pdo_example sh -c 'service apache2 status' | grep 'apache2 is running' -c) -eq 0 ];do
    sleep 1
    printf '.'
done

#criação do banco de dados
create_php_pdo_example_db
    #caso não execute com sucesso,
    #tenta executar até que os serviçes (apache, mysql e etç)
    until [ $? -eq 0 ]; do            
        create_php_pdo_example_db
    done

if [ $? -eq 0 ]
then
    echo 'Tudo pronto!'
    echo 'Você pode acessar a apliacação em: http://localhost:8080'
    echo 'Você pode administrar o banco de dados em: http://localhost:8080/phpmyadmin'
fi