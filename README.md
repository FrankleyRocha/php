# Exemplos básico de acesso ao banco MySQL com PHP e PDO

# Se preferir você pode utilizar o docker para rodar esse exemplo

- A pasta app, apontará para a pasta raiz de http://localhost
- A pasta mysql, conterá os dados do banco mysql

Comando docker para preparar ambiente LAMP:
- Veja mais informações em: [docker-lamp](https://github.com/mattrayner/docker-lamp)

```bash
docker run -it --rm \
    -p "80:80" \
    -v ${PWD}/app:/app \
    -v ${PWD}/mysql:/var/lib/mysql \
    mattrayner/lamp:latest-1804
```


