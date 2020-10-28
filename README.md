# comando docker para preparar ambiente LAMP veja [docker-lamp](https://github.com/mattrayner/docker-lamp)

```bash
docker run -it --rm \
    -p "80:80" \
    -v ${PWD}/app:/app \
    -v ${PWD}/mysql:/var/lib/mysql \
    mattrayner/lamp:latest-1804
```

## a pasta app apontará para a pasta raiz de http://localhost
## a pasta mysql conterá os dados do banco mysql

### pdo - exemplo básico de CRUD com PDO e mysql
