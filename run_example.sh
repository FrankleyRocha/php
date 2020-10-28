#!/bin/bash

#cria o container
docker run \
    -p "80:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    -d \
    mattrayner/lamp:latest-1804

#aguarda um minuto para inicializar os serviçes (apache, mysql e etç)
sleep 30

#criação do banco de dados
docker exec php_pdo_example sh -c 'mysql -u root < /app/db.sql'

#abrir a aplicação
echo 'Tudo pronto!'
echo 'Você pode acessar a apliacação em: http://localhost'
