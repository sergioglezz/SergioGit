## Levantar contenedores

```bash
$ docker-compose up -d
```

## Acceder al contenedor de PHP

```bash
$ docker exec -ti symfony_php bash
```

## Instalar dependencias de PHP dentro del contenedor

```bash
$ docker exec -ti symfony_php bash

# composer install
# php bin/console doctrine:schema:update --force

# npm install
# npm run build
```

Para entrar a ver el proyecto accede a [http://localhost:80](http://localhost:80)
