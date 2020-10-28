# Exemplo básico de acesso ao banco MySQL com PHP e PDO

## Rodando aplicação com docker

- Se preferir você pode utilizar o docker para rodar esse exemplo

- A pasta app, apontará para a rota raiz em http://localhost

Comando docker para preparar ambiente LAMP:
- Veja mais informações em: [docker-lamp](https://github.com/mattrayner/docker-lamp)

```bash
docker run -it --rm \
    -p "80:80" \
    -v ${PWD}/app:/app \
    --name php_pdo_example \
    mattrayner/lamp:latest-1804
```

Logo após a inicialização:
```bash
docker exec php_pdo_example sh -c 'mysql -u root < /app/db.sql'
```
