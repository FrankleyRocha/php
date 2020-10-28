# Exemplos utilizando linguagem PHP

### app/pdo - exemplo básico de operações SQL CRUD com PDO e mysql

# preparando ambiente com docker

Comando docker para preparar ambiente LAMP veja [docker-lamp](https://github.com/mattrayner/docker-lamp)

```bash
docker run -it --rm \
    -p "80:80" \
    -v ${PWD}/app:/app \
    -v ${PWD}/mysql:/var/lib/mysql \
    mattrayner/lamp:latest-1804
```

- A pasta app, apontará para a pasta raiz de http://localhost
- A pasta mysql, conterá os dados do banco mysql
