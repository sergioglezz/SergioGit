##### Q1. _¿Cual es el lenguaje de marcado utilizado para escribir los archivos de configuración de Docker es?_

- [x] JSON
- [ ] YAML
- [ ] XML
- [ ] HTML

##### Q2. _¿Cuál de las siguientes opciones no es una alternativa a Docker basada en contenedores?_

- [ ] Kubernetes
- [x] CoreOS' rkt
- [ ] Canonical's LXD
- [ ] Windows Server Containers

##### Q3. _¿Qué ocurre si intentas realizar una construcción de Docker basada en una imagen que no ha sido referenciada previamente en tu máquina?_

- [ ] Docker will return a 408: image not found message.
- [ ] Docker will return a 404: file not found message.
- [ ] Docker will pull the image from GitHub.
- [x] Docker will pull the image from Docker Hub.

##### Q4. _La información sobre cómo construir una imagen Docker está escrita en un archivo llamado_

- [x] Dockerfile
- [ ] Jenkinsfile
- [ ] docker-compose
- [ ] dockerimage

##### Q5. _El logo de Docker es:_

- [ ] un mayordomo
- [ ] un velero
- [ ] un Octocat
- [x] una ballena

##### Q6. _¿Qué lenguaje de programación se utilizó para escribir Docker?_

- [ ] Java
- [ ] C
- [ ] C++
- [x] Go

##### Q7. _Un contenedor Docker se describe a menudo como una mejora sobre qué otra tecnología?_

- [ ] cloud computing
- [ ] DevOps
- [x] virtual machines
- [ ] microservices

##### Q8. _¿La historia de la contenedorización de aplicaciones está íntimamente ligada a qué sistema operativo?_

- [ ] Windows
- [x] Linux
- [ ] MacOS
- [ ] Android

##### Q9. _A nivel del SO, el objetivo de la ejecución independiente de las aplicaciones y el aislamiento de los fallos se consigue mediante el uso de:_

- [x] namespaces
- [ ] control groups
- [ ] Kubernetes
- [ ] security groups

##### Q10. _En la siguiente línea de un Dockerfile: `ENV animal gato`. ¿Cuál es el nombre de la variable?_

- [x] animal
- [ ] gato
- [ ] ENV
- [ ] ninguna de las opciones anteriores

##### Q11. _Considerando la siguiente imagen: `centos`. ¿Cuál es el `tag` que está usando?_

- [ ] ninguno
- [ ] new
- [x] latest
- [ ] old

##### Q12. _Observa estas líneas de un Dockerfile:_

```dockerfile
USER foo
USER bar
RUN echo "Hola, mi nombre es $(whoami)" > /tmp/user.txt
```

_¿Qué nombre estará dentro del archivo `/tmp/user.txt`?_

- [x] bar
- [ ] foo
- [ ] ninguno
- [ ] root

##### Q13. _Existen dos archivos comprimidos en tu directorio actual:_

```dockerfile
zip1 -> 10M
zip2 -> 15M
```

_Considera el contenido de este **.dockerignore*- [ ] :_

```bash
$ cat .dockerignore `zip2`
```

_Si construyes una imagen en el directorio actual, ¿de cuánto será el contexto enviado a Docker?_

- [ ] 25M
- [ ] 15M
- [x] 10M
- [ ] 0M

##### Q14. _Escoge cuál declaración es correcta._

- [x] Puedo generar un Dockerfile usando todos los argumentos, pero no es obligatorio.
- [ ] Puedo generar un Dockerfile usando todos los argumentos, es obligatrio.
- [ ] No puedo generar un Dockerfile con todos los argumentos
- [ ] Si genero un Dockerfile con todos los argumentos, la calidad de la imagen será baja.

##### Q15. _Quieres instalar varios paquetes en una sola capa, ¿cómo lo harías?_

- [ ] `RUN yum -y install && httpd && php`
- [ ] `RUN yum -y install httpd && php`
- [x] `RUN yum -y install httpd php`

16. ¿Cuál de las siguientes afirmaciones es la más correcta?

- [ ] Docker le permite ejecutar (`run`) imágenes y construir (`build`)contenedores.
- [x] Docker le permite ejecutar (`run`) contenedores y construir (`build`)imágenes.
- [ ] Docker le permite ejecutar (`run`) y construir (`build`)contenedores.
- [ ] Docker le permite ejecutar (`run`) y construir (`build`)imágenes.

##### Q17. _¿Cuál es el puerto del contenedor? `docker run -d -p 8080:80 --name jenkins jenkins`_

- [ ] 8080
- [x] 80
- [ ] ninguno
- [ ] 3306

##### Q18. _El comando: `docker ps -l` retorna:_

- [x] El último contenedor creado
- [ ] El primer contenedor creado
- [ ] El contenedor creado con variables de entorno
- [ ] La configuración de docker

##### Q19. _¿Cómo limitarías el uso de RAM de un contenedor creado con la imagen de mysql a 10M?_

- [ ] `docker run -d --set-memory-ram "10mb" -e "MYSQL_ROOT_PASSWORD=1234567" mysql
- [ ] `docker run -d --set-mem-ram "10M" -e "MYSQL_ROOT_PASSWORD=1234567" mysql
- [x] `docker run -d -m "10mb" -e "MYSQL_ROOT_PASSWORD=1234567" mysql
- [ ] `docker run -d --max-ram-allowed "10mb" -e "MYSQL_ROOT_PASSWORD=1234567" mysql   

##### Q20. _Necesitas crear un contenedor de `mongo`, cuyo puerto interno es `27017`, pero en tu host ya tienes ocupado ese puerto, así que, debes utilizar el puerto `27018`. ¿Cómo lo harías?_

- [ ] -p 27017
- [ ] -p 27017:27018
- [x] -p 27018:27017
- [ ] No es posible

##### Q21. _Ingresaste a un contenedor llamado `drupal` de esta manera: `docker exec -ti drupal bash`. Ahora quieres observar el contenido del archivo `/etc/shadow`, `[drupal@12dbs3bdsa] cat /etc/shadow`. Y recibes este error `bash: permission denied`. ¿Cómo lo solucionarías?_

- [ ] Ingresando al contenedor con el usuario root. `docker exec -ti -u root bash`
- [ ] Ingresando al contenedor con el usuario root. `docker exec -ti -u drupal bash`
- [x] Ingresando al contenedor con el usuario root. `docker exec -ti -u root drupal bash`
- [ ] Ingresando al contenedor con el usuario root. `docker exec -ti -u drupal drupal bash` 

##### Q22. _Quieres copiar el archivo `/var/log/postgres/postgres.log` desde tu contenedor llamado `db` hacia `/opt` de tu máquina. ¿Cómo lo harías?_

- [ ] `docker cp /var/log/postgres/postgres.log db:/opt`
- [ ] `docker cp postgres:/var/log/postgres/postgres.log`
- [ ] `docker cp /opt postgres:/var/log/postgres/postgres.log`
- [x] `docker cp db:/var/log/postgres/postgres.log /opt`

##### Q22. _¿Cómo crearías un volumen nombrado cuyo nombre debe ser `volumen1`?_

- [ ] `docker volume add volume1`
- [x] `docker volume create volume1`
- [ ] `docker volume --create volume1`
- [ ] Ninguna de las anteriores

##### Q23. _Sospechas que Docker está usando mucho espacio en disco y la causa puede ser los `danglings` volumes. ¿Cómo listarías esos volúmenes?_

- [x] `docker volume ls -f dangling=true`
- [ ] `docker volume list dangling=true`
- [ ] `docker volume ls dangling=true`
- [ ] `docker volume list -f dangling=true`

##### Q24. _¿Cuál es el formato al mapear un volumen a un contenedor?_

- [ ] `contenedor:host`
- [ ] `contenedor:contenedor:host`
- [x] `host:contenedor`
- [ ] `host:host:contenedor`

##### Q25. _¿Cómo obtienes la carpeta `root` de docker para navegar hacia el directorio de volúmenes?_

- [x] `docker info | grep -i root`
- [ ] `docker info filter root`
- [ ] `docker info | root`
- [ ] `docker info | set -i root`

##### Q26. _¿Cuál es el nombre del driver por defecto para crear redes?_

- [ ] `none`
- [ ] `host`
- [x] `bridge`
- [ ] `docker`

##### Q27. _Si quieres que un contenedor herede absolutamente todas tus configuraciones de red, incluyendo `hostname`, `ip` e `interfaces`, ¿Cómo lo harías?_

- [ ] No es posible
- [x] Agregándolo a la red de `host`
- [ ] Agregándolo a la red `none`
- [ ] creando una red nueva

##### Q28. _Debes eliminar una red que previamnete creaste, pero te lanza el error que dice que aún tienes puntos activos. ¿Cómo lo solucionarías?_

- [ ] Reiniciando la máquina
- [ ] Eliminando las imágenes que estén dentro de esa red
- [x] Eliminando los contenedores que estén dentro de esa red
- [ ] No es posible eliminar redes que hayamos creado

##### Q29. _Creaste un contenedor de Apache llamado "apache" y uno de msql llamado "mysql" en la red por defecto de Docker (`bridge`). ¿Qué sucede si intentas hacer ping al nombre "mysql" desde el contenedor "apache"?_

- [ ] Va a responder, porque en la red por defecto los contenedores se pueden ver por nombres
- [ ] va a responder, porque en la red por defecto los contenedores asimilan Ips públicas
- [ ] No va a responder, porque en la red por defecto los contenedores no tienen Ips
- [x] No va a responder, porque en la red por defecto los contenedores no se pueden ver por sus nombres.

##### Q30. _Quieres crear un contenedor que sólo será para crear un par de archivos, por lo que no quieres unirlo a ninguna red. ¿Cómo lo harías?_

- [x] `docker run -d -ti --network any centos`
- [ ] `docker run -d -ti --network --no-ip-assigned centos`
- [ ] `docker run -d -ti --network none centos`
- [ ] `docker run -d -ti --network empty centos`