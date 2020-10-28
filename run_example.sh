#!/bin/bash

#cria o container
docker run \
    -p "8080:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    -d \
    mattrayner/lamp:latest-1804

function create_php_pdo_example_db {
    #criação do banco de dados
    docker exec php_pdo_example \
        sh -c 'mysql -u root < /app/db.sql' \
        2>/dev/null \
        >/dev/null
}

echo 'aguarde um momento, inicializando.'
sleep 1
create_php_pdo_example_db

until [ $? -eq 0 ]; do
    #aguarda um minuto para inicializar os serviçes (apache, mysql e etç)
    sleep 1
    #criação do banco de dados
    printf '.'
    create_php_pdo_example_db
done

echo '';

if [ $? -eq 0 ]
then
    echo 'Tudo pronto!'
    echo 'Você pode acessar a apliacação em: http://localhost:8080'
    echo 'Você pode administrar o banco de dados em: http://localhost:8080/phpmyadmin'
fi
