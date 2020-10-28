#!/bin/bash

#cria o container
docker run \
    -p "80:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    -d \
    mattrayner/lamp:latest-1804

#aguarda um minuto para inicializar os serviçes (apache, mysql e etç)
sleep 60

#criação do banco de dados
docker exec php_pdo_example sh -c 'mysql -u root < /app/db.sql'
