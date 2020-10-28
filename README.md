# Exemplo básico de acesso ao banco MySQL com PHP e PDO

## Rodando aplicação com docker

- Se você preferir, pode utilizar o docker para rodar a aplicação

- A pasta app, apontará para a rota raiz em http://localhost

- Veja mais informações em: [docker-lamp](https://github.com/mattrayner/docker-lamp)

- Para inicializar ambiente LAMP, utilizando docker, faça no terminal:

1) Clone o repositório:
```bash
git clone --depth 1 https://github.com/FrankleyRocha/php_pdo_example
```
2) Acesse a pasta da aplicação:
```bash
cd php_pdo_example
```

3) Rode o script:
```bash
./run_example.sh
```

## Para parar a execução do container, execute no terminal:
```bash
docker stop php_pdo_example
```

## Para iniciar a execução do container, execute no terminal:
```bash
docker start php_pdo_example
```

## Para parar e remover o container, execute no terminal:
```bash
docker rm php_pdo_example --force
```
