# Exemplo básico de acesso ao banco MySQL com PHP e PDO

## Rodando aplicação com docker

- Se você preferir, pode utilizar o docker para rodar esse exemplo

- A pasta app, apontará para a rota raiz em http://localhost

- Veja mais informações em: [docker-lamp](https://github.com/mattrayner/docker-lamp)

Para inicializar ambiente LAMP, utilizando docker, execute no terminal:

```bash
docker run \
    -p "80:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    -d \
    mattrayner/lamp:latest-1804
```

Para criar a base de dados, logo após a inicialização, execute no terminal:

```bash
docker exec php_pdo_example sh -c 'mysql -u root < /app/db.sql'
```

Para parar a execução do container, execute no terminal:
```bash
docker stop php_pdo_example
```

Para iniciar a execução do container, execute no terminal:
```bash
docker start php_pdo_example
```

Para remover o container, execute no terminal:
```bash
docker rm php_pdo_example --force
```
